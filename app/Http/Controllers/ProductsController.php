<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Helpers\ImageUploadHandler;
use App\Http\Requests\ProductRequest;
use Str;
use Img;
use DB;



class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with('images')->paginate(16);

        return view('products.index', compact('products'));
    }

    public function create(Product $product)
    {
        $category = Category::all();
        return view('products.create_and_edit', compact('product', 'category'));
    }

    public function store(ProductRequest $request, Product $product)
    {
        $data = $request->except('imgs');
        $product->fill($data);
        $product->product_slug = Str::slug($product->product_name);
        $product->save();

        $images = collect($request->imgs)->transform(function ($image) use ($product) {
            $extention = strtolower($image->getClientOriginalExtension()) ?:'png';
            $fileName = $product->id.'_'.time().Str::random(10).'.'.$extention;
            $image->storeAs('images', $fileName);
            $productImage['product_id'] = $product->id;
            $productImage['product_image'] = config('app.url').'/'.'images/'.$fileName;
            return new ProductImage($productImage);
        });

        $product->images()->saveMany($images);
        session()->flash('success', 'Nice, one product has been created successfully~');

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $relatedProducts = Product::inRandomOrder()->take(4)->get();
        return view('products.show', compact('product', 'relatedProducts'));
    }

    public function edit()
    {
        return view('products.create_and_edit');
    }

    public function uploadImage(Request $request, ImageUploadHandler $upload)
    {
        $data = [
            'success' => false,
            'msg' => 'Uploaded failed',
            'file_path' => ''
        ];

        if ($file = $request->upload_file) {
            $extension = strtolower($file->getClientOriginalExtension()) ?:'png';

            $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];

            if (! in_array($extension, $allowed_ext)) {
                return false;
            }

            $fileName = time().'_'.Str::random(11).'.'.$extension;
            $path = $file->storeAs('images', $fileName);


            if ($path) {
                $data['file_path'] = config('app.url').'/'.'images'.$fileName;
                $data['msg'] = 'uploaded successfully';
                $data['success'] = true;
            }
        }

        return $data;
    }


    public function update()
    {

    }

    public function destroy(Product $product)
    {
        DB::table('product_images')->where('product_id', $product->id)->delete();
        $product->delete();
        session()->flash('success', 'products has been deleted');
        return redirect()->route('products.index');
    }

}
