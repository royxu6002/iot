<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use Validator;
use App\Models\Staff;
use Hash;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Validation\ValidationException;

class ApiController extends Controller
{
    // 使用 ThrottlesLogins 来限制访问频率
    use ThrottlesLogins;

    public function __construct()
    {
        $this->middleware('auth:api')->except('login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if($this->hasTooManyLoginAttempts($request)) {
            // 这里返回的信息 没有拿到, 但是不影响程序使用;
            return $this->sendLockoutResponse($request);
        }

        return $this->attemptLogin($request);
    }

    public function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $this->incrementLoginAttempts($request);

        $user = Staff::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendFailedLoginResponse($request);
        }
        $api_token = Str::random(80);
        $user->update(['api_token' => hash('sha256',$api_token)]);

        $this->clearLoginAttempts($request);

        return \Response::make([
            'cle_api_token' => $api_token,
            'msg' => 'you have logged in',
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function logout()
    {
        Auth::guard('api')->user()->update([
            'api_token' => null
        ]);

        return response()->json([
            'msg' => 'you have logout',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return [
            'msg' => 'user, password does not match',
        ];
    }
}
