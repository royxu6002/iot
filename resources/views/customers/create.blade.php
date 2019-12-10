@extends('layouts.default')

@section('content')

<div class="container">
<a href="{{ route('customers.index') }}" class="btn-success btn pull-right">Return to Customers Index Page</a>
<div class="col-md-12 container">

     <form method="POST" action="{{ route('customers.store') }}">

          {{ csrf_field() }}

          <div class="form-group row">
               <div class="col-md-3">
                    <label for="id">Id</label>
                    <input type="text" readonly value="{{ old('id') }}" id="id" name="id" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="date">Date</label>
                    <input type="date" value="{{ old('date') }}" name="date" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="sale">Sale</label>
                    <input value="{{ old('sale') }}" name="sale" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="rank">Rank</label>
                    <input value="{{ old('rank') }}" name="rank" class="form-control">
               </div>
          </div>

          <div class="form-group">
               <label for="lead">Lead</label>
               <textarea class="form-control" name="lead" rows="3">{{ old('lead') }}</textarea>
          </div>

          <div class="form-group row">
               <div class="col-md-6">
                    <label for="company">Company</label>
                    <input value="{{ old('company') }}" name="company" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="tel">Tel</label>
                    <input value="{{ old('tel') }}" name="tel" class="form-control">
               </div>
               <div class="col-md-3">
                    <label for="fax">Fax</label>
                    <input value="{{ old('fax') }}" name="fax" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-6">
                    <label for="address">Address</label>
                    <input value="{{ old('address') }}" name="address" class="form-control">
               </div>
               <div class="col-md-6">
                    <label for="website">Website</label>
                    <input value="{{ old('website') }}" name="website" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-4">
                    <label for="person">Person</label>
                    <input value="{{ old('person') }}" name="person" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="position">Position</label>
                    <input value="{{ old('position') }}" name="position" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="country">Country</label>
                    <input value="{{ old('country') }}" name="country" class="form-control">
               </div>
          </div>

          <div class="form-group row">
               <div class="col-md-4">
                    <label for="email">Email</label>
                    <input value="{{ old('email') }}" name="email" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="mobile">Mobile</label>
                    <input value="{{ old('mobile') }}" name="mobile" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="whatsapp">Whatsapp</label>
                    <input value="{{ old('whatsapp') }}" name="whatsapp" class="form-control">
               </div>
          </div>


          <div class="form-group row">
               <div class="col-md-4">
                    <label for="qq">QQ</label>
                    <input value="{{ old('qq') }}" name="qq" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="wechat">Wechat</label>
                    <input value="{{ old('wechat') }}" name="wechat" class="form-control">
               </div>
               <div class="col-md-4">
                    <label for="skype">Skype</label>
               <input value="{{ old('skype') }}" name="skype" class="form-control">
               </div>

          </div>

          <div class="form-group">
               <label for="memo">Memo</label>
               <textarea class="form-control" name="memo" rows="4">{{ old('memo') }}</textarea>
          </div>

          <button class="btn btn-success" type="submit">Add Profile</button>

     </form>
</div>
</div>



