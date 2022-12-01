@extends('Backend/master')

@section('title','Edit Sub Category')
@section('')
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
                      <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Edit Sub Category</h4>
                      <ol class="breadcrumb float-right">
                          <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Sub Cat</a>
                          </li>
                          <li class="breadcrumb-item"><a href="#">Add</a></li>
                      </ol>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <div class="row row-sm mg-t-20">
              <div class="col-lg-12 mg-t-20 m-auto">
                <h6 class="card-body-title">Complete Your Form</h6>
                <div style="padding: 50px;" class="card pd-20 pd-sm-40 form-layout form-layout-4">
                  <form action="{{ route('update_subcategory') }}" method="POST">
                    @csrf        
                    <div class="row">
                      <label for="subcategory_name" class="col-sm-4 form-control-label">Sub Category name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" name="subcategory_name" value="{{ $sub_Cat->name }}" class="form-control" placeholder="Enter Category name">
                        <input type="hidden" name="subcategory_id" value="{{ $sub_Cat->id }}">
                      </div>
                    </div><!-- row -->


                    <div style="margin-top: 30px;" class="form-layout-footer mg-t-30 text-center">
                      <button class="btn btn-info mg-r-5">Save</button>
                    </div><!-- form-layout-footer -->
                  </form>
                </div><!-- card -->
              </div><!-- col-6 -->
          </div>

@endsection



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){




              
      @if(session('s_insert'))
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('s_insert') }}'
        })
        @endif

      @if(session('s_s_insert'))
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 1000
        })
        @endif




    })
</script>