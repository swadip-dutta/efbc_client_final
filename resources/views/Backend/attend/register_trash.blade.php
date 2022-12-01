
@extends('Backend/master')


@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
<!-- Start content -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Deleted Registered List</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Deleted  Attendee</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('regAttendeeList') }}">Back</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
             <!-- start row -->
            <div class="row" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="padding-right:5px;"><input type="checkbox" id="CheakAll"></th>
                                        <th>SL</th>
                                        <th>Action</th>
                                        <th>Reg.ID</th>
                                        <th>First name</th>
                                        <th>Last Name</th>
                                        <th>badge</th>
                                        <th>Email</th>
                                        <th>Email(Secondary)</th>
                                        <th>Organization</th>
                                        <th>JobTitle</th>
                                        <th style="width:130px;">Address(1)</th>
                                        <th style="width:130px;">Address(2)</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Zip</th>
                                        <th>Phone</th>
                                        <th>Phone(Office)</th>
                                        <th>AttendConference</th>
                                        <th>CompanyType</th>
                                        <th>EmmerContName</th>
                                        <th>EmmerPhone</th>
                                        <th>Group</th>
                                        <th>Attend_status</th>
                                        <th>HandiCap</th>
                                        <th>RentalClubs</th>
                                        <th>MsgPrefferedTime</th>
                                        <th>WedWelcomeRecep</th>
                                        <th>ThursBfast</th>
                                        <th>ThursLunch</th>
                                        <th>ThursDinner</th>
                                        <th>SpouseDnrTkt</th>
                                        <th>SpouseFirstName</th>
                                        <th>FriDay Breakfast </th>
                                        <th>PayMethod</th>
                                        <th>Amount</th>
                                        <th>PayStatus</th>
                                        <th>Reg.At</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <form action="{{ route('SelectedRegisterDelete') }}" method="post">
                                        @csrf
                                        @foreach ($register_attend as $key => $attend)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="reg_id[]" value="{{ $attend->id }}">
                                            </td>
                                            <td>{{ $loop->index + 1  }}</td>
                                            <td>

                                            <a href="{{ route('permanant_reg_destroy', $attend->id) }}" class="btn btn-danger btn-sm"  style="width: 80px;">Del</a>
                                            <a href="{{ route('permanant_reg_restore', $attend->id) }}" style="width: 80px;margin-top: 15px;" class="btn btn-success btn-sm"  style="width: 80px;">Restore</a>


                                            </td>                 
                                            <td>{{ $attend->id }}</td>
                                            <td>{{ $attend->first_name }}</td>
                                            <td>{{ $attend->last_name }}</td>
                                            <td>{{ $attend->badge_name }}</td>
                                            <td>{{ $attend->email }}</td>
                                            <td>{{ $attend->second_email }}</td>
                                            <td>{{ $attend->org_name }}</td>
                                            <td>{{ $attend->job_title }}</td>
                                            <td>{{ $attend->addr_line1 }}</td>
                                            <td>{{ $attend->addr_line2 }}</td>
                                            <td>{{ $attend->city }}</td>
                                            <td>{{ $attend->state }}</td>
                                            <td>{{ $attend->country }}</td>
                                            <td>{{ $attend->zip }}</td>
                                            <td>{{ $attend->mobile }}</td>
                                            <td>{{ $attend->office_phone }}</td>
                                            <td>{{ ($attend->is_conf_first=="1") ? "Yes" : "No"}}</td>
                                            <td>{{ $attend->company_type }}</td>
                                            <td>{{ $attend->emerg_cont_name }}</td>
                                            <td>{{ $attend->emerg_cont_phone }}</td>
                                            <td>{{ $attend->get_category_n->category_name }}</td>


                                            <td>{{ ($attend->Attend_status == 2) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $attend->golfHandicup }}</td>
                                            <td>{{ $attend->rentalClubs }}</td>
                                            <td>{{ $attend->messagePreferredTime }}</td>
                                            <td>{{ ($attend->wedWelReception == 1) ? "I Will Attend" : "I Will Not Attend" }}</td>
                                            <td>{{ ($attend->thursdayBreakfast == 1) ? "I Will Attend" : "I Will Not Attend" }}</td>
                                            <td>{{ ($attend->thursdayLuncheon == 1) ? "I Will Attend" : "I Will Not Attend" }}</td>
                                            <td>{{ ($attend->thursdayDinner == 1) ? "I Will Attend" : "I Will Not Attend" }}</td>
                                            <td>{{ ($attend->spouseDinnerTicket == 1) ? "Yes" : "No" }}</td>
                                            <td>{{ $attend->spouseFirstName }}</td>
                                            <td>{{ ($attend->fridayBreakfast == 1) ? "Attend" : "Not Attend" }}</td>
                                            <td>{{ $attend->payment_method }}</td>
                                            <td>{{ $attend->payment_amount }}</td>
                                            <td>{{ ($attend->payment_status == 1) ? "Paid" : "Pending" }}</td>
                                            <td>{{ $attend->created_at }}</td>
                                            
                                            
                                        </tr>
                                        @endforeach 
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

$(document).ready(function(){

    $('#CheakAll').click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    $('#datatable').DataTable();

    @if(session('success'))
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 1500
        })
        @endif
});
</script>  
@endsection