@extends('Backend/master')

@section('title','Company Settings')



@section('content')


<div id="wrapper">
    <!-- Start right Content here -->
    <div class="content-page">
                    <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Company Settings</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                <li class="breadcrumb-item"><a href="#">Update</a></li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <!-- Hover rows -->
                        <div class="card">
                            <div class="card-body  p-2">
                                <form action="{{ route('settings.update') }}" method="POST">
                                    @csrf
                                     @foreach ($update_Setting as $data)
                                        <div class="row justify-content-md-center">
                                            <input type="hidden" name="hidden_id" value="{{ $data->id }}">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                    <input type="text" name="company_name" value="{{ $data->company_name }}" class="form-control" placeholder="Enter Comapany Name" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                    <input type="text" name="phone" value="{{ $data->phone }}" class="form-control" placeholder="Enter Comapany Name" required="">
                                                </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="email" value="{{ $data->email }}" class="form-control" placeholder="Enter Email Address" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text" name="facebook" value="{{ $data->facebook }}" class="form-control" placeholder="Enter Facebook Address" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text" name="twitter" value="{{ $data->twitter }}" class="form-control" placeholder="Enter Twitter Address" required="">
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                    <input type="text" name="instragram" value="{{ $data->instragram }}" class="form-control" placeholder="Enter Instagram Address" required="">
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                    <input type="text" name="linkedin" value="{{ $data->linkedin }}" class="form-control" placeholder="Enter Linkedin Address">
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                    <input type="text" name="pinterest" value="{{ $data->pinterest }}" class="form-control" placeholder="Enter Pinterest Address" required="">
                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text" name="factory" value="{{ $data->factory }}" class="form-control" placeholder="Enter Factory Name" required="">
                                                   
                                                </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea name="address" rows="10" cols="8" class="form-control" placeholder="Enter address here">{{ $data->address }}</textarea>
                                                </div>
                                            </div> 
                                    </div> 
                                     @endforeach
                                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div style="margin-top: 30px;float:right;" class="">
                                             <button class="btn btn-primary btn-lg"style="cursor:pointer;">Update</button>
                                            </div>
                                        </div> 
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <!-- /hover rows -->
                    </div>
                </div>
             </div> <!-- container -->
        </div> <!-- content -->
            <footer class="footer text-right">
                        2022 © EFBC .- efbc-name@info.com
            </footer>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){

      @if(session('success'))
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 1500
        });
        @endif
    });
</script>



@endsection




