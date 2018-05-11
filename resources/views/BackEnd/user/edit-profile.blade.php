@extends('BackEnd.layouts.master')

@section('title', 'Welcome to Admin Panel')

@section('main-content')
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form class="" action="" method="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter new name...">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter new mail...">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password...">
              </div>
              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password...">
              </div>
              <button type="submit" class="btn btn-primary">Update Information</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
