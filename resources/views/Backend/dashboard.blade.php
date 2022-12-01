
@extends('Backend.master')

@section('title', 'Dashboard')

@section('dashboard')
  active
 @endsection

@section ('content')


            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">EFBC</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Register</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">{{ App\Models\Register::count() }}</span></h2>
                                        <p class="m-0">{{ today() }}</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Attendee</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">{{ App\Models\Register::where('Attend_status', 2)->count() }}</span></h2>
                                        <p class="m-0">{{ today() }}</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <!-- <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-crown widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Number of Transactions</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">563698</span></h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="mdi mdi-auto-fix widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Conversation Rate</p>
                                        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup">2.07</span>%</h2>
                                        <p class="m-0">Jan - Apr 2017</p>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <!-- end row -->

                        <!--- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    <a href="https://softtech-it.com">Developed By SoftTech IT</a> 
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->


@endsection





