@extends('Backend/master')

@section('title','Spouse/Guest Dinner Ticket Price')



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
                            <h4 class="page-title float-left">Spouse/Guest Dinner Ticket Price</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Add Price</a></li>
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
                                <form action="{{ route('update_price') }}" method="POST">
                                    @csrf
                                     @foreach ($price as $data)
                                        <div class="row justify-content-md-center">
                                            <input type="hidden" name="price_id" value="{{ $data->id }}">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="price_normal">Enter Payable price</label>
                                                    <input type="text" name="amount" value="{{ $data->amount }}" class="form-control" placeholder="Enter Your Normal price" id="price_normal" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="price_before_date">Add Your Normal price</label>
                                                    <input type="text" name="price_before_date" value="{{ $data->price_before_date }}" class="form-control" placeholder="Enter Your Normal price" id="price_before_date" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="hidden" name="price_after_date" value="{{ $data->price_after_date }}" class="form-control" placeholder="Enter Price After Specifice Date "  id="price_after_date" required="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="price_text">Enter Your Text for Price</label>
                                                    <textarea type="text" name="price_text" value="{{ $data->price_text }}" class="form-control" id="price_text" required="">{{ $data->price_text }}</textarea>
                                                </div>
                                            </div>
                                         </div> 
                                     @endforeach
                                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div style="margin-top: 30px;float:right;" class="">
                                             <button class="btn btn-primary btn-lg"style="cursor:pointer;">Update Price</button>
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

