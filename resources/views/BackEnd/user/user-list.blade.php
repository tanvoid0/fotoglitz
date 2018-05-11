@extends('BackEnd.layouts.master')

@section('title', 'User List')

@section('extra-stylesheet')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.4.1/css/colReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
  <style media="screen">
    .btn-add{
      margin-bottom: 10px;
    }
    .modal .modal-content .modal-header{
      padding-top: 0 !important;
      color: #fff;
    }
  </style>
@endsection

@section('main-content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="well">
          <a href="#" class="btn btn-success btn-lg btn-add" data-toggle="modal" data-target="#registrationModal">Add New User</a>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table id="example" class="display nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Name</th>
                  <th>Email Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php($i=1)
              @foreach($users as $user)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete Profile</a>
                  </td>
                </tr>
                @php($i++)
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- User registration modal start --}}
  <div class="modal fade" id="registrationModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="text-center">Register new user...</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-10">
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- User registration modal end --}}

  {{-- Edit Profile modal start --}}
  <div class="modal fade" id="editProfileModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="text-center">Edit Profile...</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="row justify-content-md-center">
            <div class="col-12">
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
      </div>
    </div>
  </div>
  {{-- Edit Profile modal start end --}}
@endsection

@section('extra-script')
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.4.1/js/dataTables.colReorder.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var table = $('#example').dataTable( {
          colReorder: true,
          responsive: true,
          columnDefs: [ {
              targets: 2,
              responsivePriority: 10001
          } ]
      } );
    } );
  </script>
@endsection
