@extends('BackEnd.layouts.master')

@section('title', 'Request List')

@section('extra-stylesheet')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.4.1/css/colReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
  <style media="screen">
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
        <h4>Visitor request for trail</h4>
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
                  <th>Instruction</th>
                  <th>Files</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @php($i=1)
                <tr>
                  <td>{{ $i }}</td>
                  <td>Uchchhas</td>
                  <td>msruchchhas@gmail.com</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
                  <td>
                    dfkd;fj
                  </td>
                  <td>
                    <a href="#" class="btn btn-success btn-add" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                  </td>
                </tr>
              @php($i++)
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="text-center">Request Details</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Uchchhas</li>
              <li class="list-group-item">Email Address</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- User registration modal end --}}

  {{-- User registration modal start --}}
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="text-center">Update information...</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Uchchhas</li>
              <li class="list-group-item">Email Address</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- User registration modal end --}}
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
