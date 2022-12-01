@extends('Backend/master')

@section('title','Golf')


@section('content')

    <div class="content-page">
      <!-- Start content -->
      <div class="content">
          <div class="container-fluid">
          <!-- Start content -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box">
                      <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>
                        @foreach ($category as $cat)
                          @if($cat->id == '1') Update Golf @elseif($cat->id == '2') Update Fishing @elseif($cat->id == '3') Update Networking @elseif($cat->id == '4') Update Messaging  @endif
                       @endforeach
                      </h4>
                      
                          <!-- <li class="breadcrumb-item"><a href="{{ route('golf_view') }}">Back</a></li> -->
                          @foreach ($category as $cat)
                             @if($cat->id == '1') <li class="breadcrumb-item"><a href="{{ route('golf_view') }}">Back</a></li>
                               @elseif($cat->id == '2') <li class="breadcrumb-item"><a href="{{ route('fishing_view') }}">Back</a></li>
                               @elseif($cat->id == '3') <li class="breadcrumb-item"><a href="{{ route('networking_view') }}">Back</a></li>
                               @elseif($cat->id == '4') <li class="breadcrumb-item"><a href="{{ route('messaging_view') }}">Back</a></li>
                               @endif
                            @endforeach

                      </ol>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
            <div class="row row-sm mg-t-20">
              <div class="col-lg-12 m-auto" style="">

                <div class="card pd-20 pd-sm-40 form-layout form-layout-4" style="padding: 0px 30px;">
                  <h6>
                    <center>
                      @foreach ($category as $cat)
                          @if($cat->id == '1') Update Golf Category @elseif($cat->id == '2') Update Fishing Category @elseif($cat->id == '3') Update Networking Category @elseif($cat->id == '4') Update Messaging Category @endif
                      @endforeach
                  </center>
                </h6>
                  <form action="{{ route('grp_update') }}" method="POST">
                    @csrf
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label class="col-sm-4 form-control-label">Sub Category Name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="subcategory_id" id="subcategory_id" class="form-control" required="required">
                        @foreach ($scategory as $cat)
                          <option @if($edit_grp->subcategory_id == $cat->id) selected @endif value="{{ $cat->id }}">{{ $cat->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <input type="hidden" name="grp_id" value="{{ $edit_grp->id }}" class="form-control">

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="category_id" id="category_id" class="form-control">
                        @foreach ($category as $cat)
                          <option @if($edit_grp->category_id == $cat->id) selected @endif value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- row -->
                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="subcategory_id" class="col-sm-4 form-control-label">Participate 1: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_1" id="participate_1" class="form-control" required>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_1 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!-- row -->
                    <!-- Attend Status -->
                    <input type="hidden" name="Attend_status" value="1">

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="subcategory_id" class="col-sm-4 form-control-label">Participate 2: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_2" id="participate_2" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_2 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_3" class="col-sm-4 form-control-label">Participate 3: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_3" id="participate_3" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_3 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_4" class="col-sm-4 form-control-label">Participate 4: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_4" id="participate_4" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_4 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>



                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_5" class="col-sm-4 form-control-label">Participate 5: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_5" id="participate_5" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_5 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>



                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_6" class="col-sm-4 form-control-label">Participate 6: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_6" id="participate_6" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_6 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>


                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_7" class="col-sm-4 form-control-label">Participate 7: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_7" id="participate_7" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_7 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                          @endforeach

                        </select>
                      </div>
                    </div>


                    <!-- row -->

                    <div class="row mg-t-20" style="margin: 10px auto;">
                      <label for="participate_8" class="col-sm-4 form-control-label">Participate 8: <span class="tx-danger"></span></label>
                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="participate_8" id="participate_8" class="form-control">
                        <option value=""> -- Select One --</option>
                        @foreach ($registr as $reg)
                          <option @if($edit_grp->participate_8 == $reg->id) selected @endif value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
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



      @if(session('success'))
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 1500
        })
        @endif









    })
</script>



@endsection
