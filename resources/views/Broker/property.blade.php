@extends('layouts.app')

@section('property')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card mt-3 p-3">
        <form class="form-gruop p-2" method="post" action="/property/store" enctype="multipart/form-data">
          @csrf
          <div class="form-group p-2">
            <label>Property Owner Name </label>
            <input type="text" name="name" id="input" class="form-control">
          </div>
         
          <div class="form-group p-2">
            <label> Mobile </label>
            <input type="number" name="mobile" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> Email </label>
            <input type="email" name="email" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> Address </label>
            <input type="text" name="address" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> city </label>
            <input type="text" name="city" id="input" class="from-control">
          </div>
          <div class="form-group p-2">
            <label> Zip Code </label>
            <input type="number" name="zipcode" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> Kind of Property </label>
            <input type="text" name="koproperty" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> Area </label>
            <input type="text" name="area" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
            <label> Total valuation </label>
            <input type="number" name="valution" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
          <label for="status">Broker Status:</label>
           <select name="status" id="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
           </select>
          </div>
          <div class="form-group p-2">
          <button type="submit" class="btn btn-dark btn-sm">submit</button>
          </div>
          <div class="form-group p-2">
            <a href="/home" class="btn btn-dark btn-sm"> BACK </a>
          </div>
        </form>
        </div>
      </div>

    </div>
  </div>
 
@endsection