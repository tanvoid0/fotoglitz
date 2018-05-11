@extends('BackEnd.layouts.master')

@section('title', 'User List')

@section('extra-stylesheet')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.4.1/css/colReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
@endsection

@section('main-content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <table id="example" class="display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th>Email Address</th>
              <th>Photo</th>
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
                <img src="{{ asset('file/user/img/'.$user->image) }}" class="img-thumbnail" width="50" alt="">
              </td>
              <td>
                <a href="{{ url('/user-details') }}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a>
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
