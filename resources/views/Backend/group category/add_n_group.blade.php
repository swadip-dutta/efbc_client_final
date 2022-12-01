@extends('Backend/master')
@section('title','Networking Group')
@section('content')

<div class="content-page">
  <!-- Start content -->
  <div class="content">
      <div class="container-fluid">
        <!-- Start content -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Networking Group</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{ url('/networking_view') }}"><i class="mdi mdi-account-plus mr-2"></i>Networking List</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ url('/networking_view') }}">Back</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row row-sm mg-t-20">
            <div class="col-lg-10 offset-1">
              <div class="card pd-20 pd-sm-40 form-layout form-layout-4" style="padding: x;">
                <center><h5 class="">Add Networking Group</h5></center>
                  <form action="{{ route('post_group') }}" method="POST">
                    @csrf
                    <div class="row mg-t-20" style="margin: 1pt auto;">
                      <label class="col-sm-4 form-control-label">Sub Category Name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="subcategory_id" id="subcategory_id" class="form-control" required="required">
                        @foreach ($grp_category as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="category_id" id="category_id" class="form-control">
                        @foreach ($grp_g_category as $category)
                          <option value="{{ $category->get_category_n->id }}">{{ $category->get_category_n->category_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- row -->
                      <!-- row -->
                      <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="subcategory_id" class="col-sm-4 form-control-label">Participate 1: <span class="text-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_1" id="participate_1" class="form-control" required>
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!-- Attend Status -->
                      <input type="hidden" name="Attend_status" value="1">
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="subcategory_id" class="col-sm-4 form-control-label">Participate 2: <span class="text-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_2" id="participate_2" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_3" class="col-sm-4 form-control-label">Participate 3: <span class="text-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_3" id="participate_3" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_4" class="col-sm-4 form-control-label">Participate 4: <span class="text-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_4" id="participate_4" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_5" class="col-sm-4 form-control-label">Participate 5: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_5" id="participate_5" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_6" class="col-sm-4 form-control-label">Participate 6: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_6" id="participate_6" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_7" class="col-sm-4 form-control-label">Participate 7: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_7" id="participate_7" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_8" class="col-sm-4 form-control-label">Participate 8: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_8" id="participate_8" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($grp_g_fr_category as $registr_part)
                          <option value="{{ $registr_part->id }}">{{ $registr_part->first_name }} {{ $registr_part->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-layout-footer mg-t-30 text-center">
                      <button class="btn btn-info mg-r-5">Save</button>
                    </div><!-- form-layout-footer -->
                  </form>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
      </div><!-- row -->
    </div><!-- row -->
</div><!-- row -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){
      @if(session('G_insert'))
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session('G_insert') }}',
          showConfirmButton: false,
          timer: 1500
        })
        @endif
    })
</script>
@endsection




