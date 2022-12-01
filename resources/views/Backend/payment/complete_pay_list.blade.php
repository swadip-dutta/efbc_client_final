@extends('Backend/master')

@section('title','Payment List')

@section('content')

                    
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
        <!-- Start content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Complete Payment List</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Payment List</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('payment_list') }}">Payment List</a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-2" style="margin-top: 10px;">
                            <h5><center>All Payment List</center></h5>
                            <div class="card-box table-responsive">
                                <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Reg ID</th>
                                                <th>Name</th>
                                                <th>Transaction ID</th>
                                                <th>Pay Date</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($pay_list as $list)
                                            <tr>
                                                <td>{{ $list->register_id }}</td>
                                                <td>{{ $list->regis_id->first_name ?? "N/A" }}</td>
                                                <td>{{ $list->transaction_id }}</td>
                                                <td>{{ $list->created_at }}</td>
                                                <td>{{ $list->price_id }}</td>
                                                <td>
                                                <a href="{{ route('edit-attendee', $list->register_id) }}" class="btn btn-purple">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection