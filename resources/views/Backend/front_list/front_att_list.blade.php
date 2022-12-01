<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
            <div class="col">
                <div class="yit-table style-1 mt-40 table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table table-hover table-bordered table-striped data-table text-left dataTable no-footer" id="DataTables_Table_0" role="grid">

                    <table class="table table-hover table-bordered table-striped text-left no-footer" role="grid">
                        <thead class="custom-color-bg-blue text-white">
                        <tr role="row" style="color: #fff;background-color: #1acee1;"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 173px;" aria-label="Attendee: activate to sort column ascending">Attendee</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;" aria-label="Company: activate to sort column ascending">Company</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166px;" aria-label="City: activate to sort column ascending">City</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 169px;" aria-label="State/Province: activate to sort column ascending">State/Province</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($attend_list as $data)
                              <tr>
                                 <td>{{ $data->first_name }}</td>
                                 <td>{{ $data->org_name}}</td>
                                 <td>{{ $data->city }}</td>
                                 <td>{{ $data->state }}</td>
                             </tr>
                         @endforeach
                           </tbody>
                    </table>
                </div>
            </div>
        </div>
            <script src="{{asset('admin/js/bootstrap.min.js') }}"></script>

    </body>
</html>