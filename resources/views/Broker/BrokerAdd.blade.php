@extends('layouts.app')

@section('broker')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-3 p-3">
        <form class="form-gruop" method="post" action="/broker/store" enctype="multipart/form-data">
          @csrf
          <div class="form-group p-3">
            <label>Broker Name </label>
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
            <label> Borker Expercience </label>
            <input type="number" name="experience" min="1900" max="2099" step="1" value="2016" class="from-control" />
          </div>
          <div class="form-group p-2">
            <label for="selected_item">Select an Property :</label>
            <select name="property" id="selected_item">
              @foreach($Property as $item)
              <option value="{{ $item->name }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group p-2">
            <label> Commision </label>
            <input type="number" name="commision" id="input" class="form-control">
          </div>
          <div class="form-group p-2">
          <label for="status">Broker Status:</label>
           <select name="status" id="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
           </select>
          </div>
          <div class="form-group  p-2">
            <button type="submit" class="btn btn-dark btn-sm"> SUBMIT </button>
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