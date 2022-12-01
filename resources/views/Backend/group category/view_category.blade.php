@extends('Backend/master')

@section('title','Group List')
@section('content')

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
        <!-- Start content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Group Category</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Group Category</a>
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box table-responsive">
                                <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="category" style="margin: 0px 15px 18px;">

                                        <a class="text-right btn btn-purple" href="{{ route('add-subcategory') }}">Add SubCategory</a>
                                    </div>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>ID</th>
                                                <th>Cat Name</th>
                                                <th>Sub Cat Name</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($group_item as $key => $item)
                                        <tr role="row" class="odd">
                                            <td>{{ $loop->index + 1  }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->main_category->category_name ?? 0}}</td>
                                            <td>{{ $item->name ?? 0}}</td>
                                            <td>{{ $item->updated_at ?? 0}}</td>
                                            <td><a href="{{ route('edit-subcategory', $item->id) }}" class="btn btn-primary">Edit</a></td>
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

         <script type="text/javascript">
        </script>
@endsection
