@extends('Backend/master')

@section('title','User Settings')



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
                            <h4 class="page-title float-left">User Settings</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                <li class="breadcrumb-item"><a href="#">Update</a></li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-10 offset-1">
                        <!-- Hover rows -->
                        <div class="card">
                            <div class="card-body  p-2">
                                <form action="{{ route('user.update') }}" method="POST">
                                    @csrf
                                     @foreach ($update_user_data as $row)
                                        <div class="row justify-content-md-center">

                                            <input type="hidden" name="user_hidden_id" value="{{ $row->id }}">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" id="name" name="name" value="{{ $row->name }}" class="form-control" placeholder="Update Your  Name" required="">
                                                </div>
                                            </div>

                                             <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" name="email" value="{{ $row->email }}" class="form-control" placeholder="Update Your Email Address" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                     <label for="address">Your Password (8 characters minimum)</label>
                                                    <input type="address" name="password" value="{{ $row->password }}" class="form-control" placeholder="Enter Password" required="">
                                                    
                                                </div>
                                            </div>

                                             <div class="col-md-8">
                                                <div class="form-group">
                                                     <label for="phone">Your Phone</label>
                                                    <input type="phone" name="phone" value="{{ $row->phone }}" class="form-control" placeholder="Enter Phone number" required="">
                                                    
                                                </div>
                                            </div>

                                             <div class="col-md-8">
                                                <div class="form-group">
                                                     <label for="address">Your Address</label>
                                                    <input type="address" name="address" value="{{ $row->address }}" class="form-control" placeholder="Enter Address" required="">
                                                    
                                                </div>
                                            </div>

                                            
                                        </div> 
                                     @endforeach
                                                
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div style="margin-top: 30px;float:right" class="">
                                             <button class="btn btn-primary btn-lg" style="cursor:pointer">Update</button>
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




