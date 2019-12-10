@extends('layouts.default')

@section('content')

<div class="container">
     <div class="col-md-12">
          <a href="{{ route('customers.index') }}" class="btn-success btn pull-right">Return to Customers Index Page</a>
     </div>
     <br>

<div class="col-md-12 container">

     <form method="POST" action="{{ route('customers.update', $customer->id) }}">

          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <div class="form-group row">

               <div class="col-md-3">
                    <label for="id">Id</label>
                    <input type="text" readonly value="{{ $customer->id }}" id="id" name="id" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="date">Date</label>
                    <input value="{{ $customer->date }}" name="date" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="sale">Sale</label>
                    <input value="{{ $customer->sale }}" name="sale" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="rank">Rank</label>
                    <input value="{{ $customer->rank }}" name="rank" class="form-control">
               </div>
          </div>

          <div class="form-group">
               <label for="lead">Lead</label>
               <textarea class="form-control" name="lead" rows="3">{{ $customer->lead }}</textarea>
          </div>

          <div class="form-group row">
               <div class="col-md-6">
                    <label for="company">Company</label>
                    <input value="{{ $customer->company }}" name="company" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="tel">Tel</label>
                    <input value="{{ $customer->tel }}" name="tel" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="fax">Fax</label>
                    <input value="{{ $customer->fax }}" name="fax" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-6">
                    <label for="address">Address</label>
                    <input value="{{ $customer->address }}" name="address" class="form-control">
               </div>
               <div class="col-md-6">
                    <label for="website">Website</label>
                    <input value="{{ $customer->website }}" name="website" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-4">
                    <label for="person">Person</label>
                    <input value="{{ $customer->person }}" name="person" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="position">Position</label>
                    <input value="{{ $customer->position }}" name="position" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="country">Country</label>
                    <input value="{{ $customer->country }}" name="country" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-4">
                    <label for="email">Email</label>
                    <input value="{{ $customer->email }}" name="email" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="mobile">Mobile</label>
                    <input value="{{ $customer->mobile }}" name="mobile" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="whatsapp">Whatsapp</label>
                    <input value="{{ $customer->whatsapp }}" name="whatsapp" class="form-control">
               </div>
          </div>


          <div class="form-group row">
               <div class="col-md-4">
                    <label for="qq">QQ</label>
                    <input value="{{ $customer->qq }}" name="qq" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="wechat">Wechat</label>
                    <input value="{{ $customer->wechat }}" name="wechat" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="skype">Skype</label>
               <input value="{{ $customer->skype}}" name="skype" class="form-control">
               </div>

          </div>

          <div class="form-group">
               <label for="memo">Memo</label>
               <textarea class="form-control" name="memo" rows="4">{{ $customer->memo }}</textarea>
          </div>

          <button class="btn btn-success" type="submit">Update Customer {{ $customer->id }}'s Profile</button>
          <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-default pull-right">Cancel</a>
     </form>
</div>
</div>



