@extends('Backend/master')

@section('title','Golf List')
@section('')
active
@endsection

@section('content')

      <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                <!-- Start content -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Golf List</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Golf List</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Back</a></li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">

                        <h5><center>All Golf List</center></h5>
                        <div class="card-box table-responsive">
                            <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <div class="category" style="margin: 0px 15px 18px;">
                                        <a class="text-left btn btn-purple" href="{{ route('add-g-group') }}">Add Golf Group</a>
                                        <a class="text-right btn btn-purple" href="{{ route('GroupExcelDownloadGolf') }}">Excel Download</a>
                                    </div>

                        <div class="wrapper">
                          <div class="container">
                            @foreach ($golf_all as $golf)
                            <table style="float: inline-start;margin-right: 20px;">
                                <thead>

                                    <tr>
                                        <th>{{ $golf->grp_s_category->name}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td style="display: table-caption;">
                                              {{ $golf->grp_p1_register->first_name ?? " " }}
                                              {{ $golf->grp_p2_register->first_name ?? " " }}
                                              {{ $golf->grp_p3_register->first_name ?? " " }}
                                              {{ $golf->grp_p4_register->first_name ?? " " }}
                                              {{ $golf->grp_p5_register->first_name ?? " " }}
                                              {{ $golf->grp_p6_register->first_name ?? " " }}
                                              {{ $golf->grp_p7_register->first_name ?? " " }}
                                              {{ $golf->grp_p8_register->first_name ?? " " }}
                                        </td>
                                    </tr>
                                    <td style="text-align: center;"><a href="{{ route('golf_edit', $golf->id) }}" class="btn btn-primary">Edit</a></td>

                                </tbody>
                            </table>
                            @endforeach
                            <style>
                              .wrapper {
                              display: grid;
                              grid-template-columns: repeat(4, 1fr);
                            }
                            html,


                      body {
                        margin: 0;
                        font-family: sans-serif;
                        font-weight: 100;
                      }
                      .container {
                          margin: 20px;
                      }


                      table {
                        width: 250px;
                        border-collapse: collapse;
                        overflow: hidden;
                        box-shadow: 0 0 20px rgba(0,0,0,0.1);
                      }
                      tr:nth-child(even) {
                          background: #F8F8F8;
                      }
                      th,
                      td {
                        padding: 15px;
                        background-color: rgba(255,255,255,0.2);
                        color: rgb(0, 0, 0);
                      }

                      th {
                        text-align: center;
                      }


                       thead,th {
                          background-color: #233e91;
                              color: #ffff;
                        }

                      tbody tr:hover {
                          background-color: #233e9114;
                          }

                      </style>
                    </div>
</div>





                            </div>
                        </div>
                    </div>

            </div><!-- row -->
        </div><!-- row -->
    </div><!-- row -->

@endsection
