@extends('layouts.default')

@section('content')
<div class="container">
<div class="col-md-12">
      <div class="pull-right">
           <a href="{{ route('customers.index') }}" class="btn btn-success">Return to Customers Index Page</a>
      </div>
     <table class="table table-bordered table-striped">

          <tr>
               <td class="col-md-2">Id</td>
               <td class="col-md-10">{{ $customer->id }}</td>
          </tr>
          <tr>
               <td>Date</td>
               <td>{{ $customer->date }}</td>
          </tr>
          <tr>
               <td>Sale</td>
               <td>{{ $customer->sale }}</td>
          </tr>
          <tr>
               <td>Rank</td>
               <td>{{ $customer->rank }}</td>
          </tr>
          <tr>
               <td>Lead</td>
               <td>{{ $customer->lead }}</td>
          </tr>
          <tr>
               <td>Company</td>
               <td>{{ $customer->company }}</td>
          </tr>
          <tr>
               <td>Address</td>
               <td>{{ $customer->address }}</td>
          </tr>
          <tr>
               <td>Tel</td>
               <td>{{ $customer->tel }}</td>
          </tr>
          <tr>
               <td>Fax</td>
               <td>{{ $customer->fax }}</td>
          </tr>
          <tr>
               <td>Website</td>
               <td>{{ $customer->website }}</td>
          </tr>
          <tr>
               <td>Person</td>
               <td>{{ $customer->person }}</td>
          </tr>
          <tr>
               <td>Position</td>
               <td>{{ $customer->position }}</td>
          </tr>
          <tr>
               <td>Email</td>
               <td>{{ $customer->email }}</td>
          </tr>
          <tr>
               <td>Mobile</td>
               <td>{{ $customer->mobile }}</td>
          </tr>
          <tr>
               <td>Country</td>
               <td>{{ $customer->country }}</td>
          </tr>
          <tr>
               <td>QQ</td>
               <td>{{ $customer->qq }}</td>
          </tr>
          <tr>
               <td>Wechat</td>
               <td>{{ $customer->wechat }}</td>
          </tr>
          <tr>
               <td>Whatsapp</td>
               <td>{{ $customer->whatsapp }}</td>
          </tr>
          <tr>
               <td>Skype</td>
               <td>{{ $customer->skype }}</td>
          </tr>
          <tr>
               <td>Memo</td>
               <td>{{ $customer->memo }}</td>
          </tr>

     </table>
          <div class="pull-left">
               <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit Customer {{ $customer->id }}'s Profile</a>
          </div>
          <div class="pull-right">
               <form method="POST" action="{{ route('customers.destroy', $customer->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" onclick="return del()">Delete Customer {{ $customer->id }}'s Profile</button>
               </form>
          </div>

</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
     function del(){
          if(!confirm("确认要删除？")){
               window.event.returnValue = false;
           }
     }
     </script>
@endsection


