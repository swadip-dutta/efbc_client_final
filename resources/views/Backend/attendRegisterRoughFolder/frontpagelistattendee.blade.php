

@extends('Backend/master')
@section('title', 'Attendees List')
@section('attend')
active
@endsection

@section('content')

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left"><i class="fi-arrow-left pr-2"></i>Attendees - List</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#"><i class="fi-clock pr-1"></i>Attendees</a></li>
                                        <li class="breadcrumb-item"><a href="#">List</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        </div> <!-- end row -->

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    {{-- <h4 class="m-t-0 header-title"><b>All Attendees List</b></h4> --}}
                                   {{--  <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%"> --}}
                                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>   
                                            <tr>
                                                <th><input type="checkbox" id="CheakAll"></th>
                                                <th>Ser.No</th>
                                                <th>Reg.At</th>
                                                <th>Event</th> 
                                                <th>Reg.ID</th>
                                                <th>Registerd Name</th>
                                                <th>Organization</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                     <tbody>

                                    @php $i = 1; @endphp
                                 

                                    @foreach($attend_list as $data)

                                         <tr>
                                            <td><input type="checkbox" id="CheakAll"></td>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>{{ $data->Attend_status}}</td>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->first_name ." ".$data->last_name }}</td>
                                            <td>{{ $data->org_name }}</td>
                                            <td>
                                            <a href="" class="btn btn-primary">Edit</a> ||
                                                <a href="" class="btn btn-danger">Delete</a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                        <tr class="text-center">
                                             <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button>
                                             </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->

                @section('footer')
                    <footer class="footer text-right">
                        2022 © EFBC - All right Reserved
                    </footer>
                 @stop
                    
            </div>
                    <!-- ============================================================== -->
                    <!-- End Right content here -->
@endsection


