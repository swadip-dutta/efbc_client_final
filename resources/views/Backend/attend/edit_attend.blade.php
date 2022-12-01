@extends('Backend/master')

@section('title','Edit Attendee')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
<!-- Start content -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left"><i class="fa fa-arrow-circle-o-left mr-3"></i>Edit Registered Attendee</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-account-plus mr-2"></i>Edit Registration Attendee</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('attendee.list') }}">Back</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Hover rows -->
            <div class="card-body  p-2">
              <!-- Start content -->
                <form action="{{ route('attend_update') }}" enctype="multipart/form-data" method="post">
                @csrf
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">

                        <!-- Hover rows -->
                            <div class="card" style="padding: 30px;">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">First Name <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="first_name" value="{{ $edit_att->first_name }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Last Name <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="last_name" value="{{ $edit_att->last_name }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="badge_name" value="{{ $edit_att->badge_name }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Email <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="email" value="{{ $edit_att->email }}" class="form-control" type="email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Secondary Email</label>
                                        <div class="col-md-6">
                                            <input name="second_email" value="{{ $edit_att->second_email }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Organization <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="org_name" value="{{ $edit_att->org_name }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Job Title <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="job_title" value="{{ $edit_att->job_title }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Address <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group control-group">
                                                        <input name="addr_line1" value="{{ $edit_att->addr_line1 }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group control-group">
                                                        <input name="addr_line2" value="{{ $edit_att->addr_line2 }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group control-group">
                                                        <input name="city" value="{{ $edit_att->city }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group control-group">
                                                        <input name="state" value="{{ $edit_att->state }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group control-group">
                                                        <input name="country" value="{{ $edit_att->country }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group control-group">
                                                        <input name="zip" value="{{ $edit_att->zip }}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Mobile <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="mobile" value="{{ $edit_att->mobile }}" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Mobile 2 <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="office_phone" value="{{ $edit_att->office_phone }}" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Is this your first time attending the conference? <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" selected style="margin-left: 0px !important" name="attendingConf" id="attendingConf" value="1">
                                                    <label class="form-check-label" for="is_conf_first">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" style="margin-left: 0px !important" name="attendingConf" id="attendingConf" value="2" checked="">
                                                    <label class="form-check-label" for="is_conf_first">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Company Type <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input name="company_type" value="{{ $edit_att->company_type }}" placeholder="" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">if “other” selected, please specify</label>
                                        <div class="col-md-6">
                                            <input name="if_other" value="{{ $edit_att->if_other }}" placeholder="" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Emergency Contact Name</label>
                                        <div class="col-md-6">
                                            <input name="emerg_cont_name" value="{{ $edit_att->emerg_cont_name }}" placeholder="(201) 555-0123" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Emergency Contact Phone</label>
                                        <div class="col-md-6">
                                            <input name="emerg_cont_phone" value="{{ $edit_att->emerg_cont_phone }}" placeholder="(201) 555-0123" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Group</label>
                                        <div class="col-md-6">
                                            <select name="group_Cat_Id" id="group_Cat_Id" class="form-control">
                                                @foreach ($grp_category as $category)
                                                <option @if ($edit_att->group_Cat_Id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="padding: 30px;">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Please indicate which Wednesday activity you will be attending(Select ONE)* (Please note that all have limited space and is on a 1st come, 1st confirmed basis. We apologize in advance if your 1st choice is not available) <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                                <input name="Attend_status" value="{{ $edit_att->Attend_status }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <h4>If You Chose Golf</h4>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Your handicap</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <input name="golfHandicup" value="{{ $edit_att->golfHandicup }}" placeholder="(A number from 0 to 36)" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Rental clubs are available on-site for a fee and must be reserved in advance to ensure availability. Let us know your club preference.</label>
                                        <div class="col-md-6">
                                                <input name="rentalClubs" value="{{ $edit_att->rentalClubs }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <h4>If you Chose Massage</h4>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Select your preferred time slot; We will get back to you confirming your appointment time.</label>
                                        <div class="col-md-6">
                                           <input name="messagePreferredTime" value="{{ $edit_att->messagePreferredTime }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="padding: 30px;">
                                <div class="card-body">
                                    <h4>Conference Meals</h4>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Wednesday Welcome Reception <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="wedWelReception" class="yit-nice-select width-full form-control" required="">
                                                    <option value="">Select an option</option>
                                                    <option value="I will attend" selected="">I will attend</option>
                                                    <option value="I will NOT attend">I will NOT attend</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Thursday Breakfast <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="thursdayBreakfast" class="yit-nice-select width-full form-control" required="">
                                                    <option value="">Select an option</option>
                                                    <option value="I will attend" selected="">I will attend</option>
                                                    <option value="I will NOT attend">I will NOT attend</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Thursday Luncheon <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="thursdayLuncheon" class="yit-nice-select width-full form-control" required="">
                                                    <option value="">Select an option</option>
                                                    <option value="I will attend" selected="">I will attend</option>
                                                    <option value="I will NOT attend">I will NOT attend</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Thursday Dinner <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="thursdayDinner" class="yit-nice-select width-full form-control" required="">
                                                    <option value="">Select an option</option>
                                                    <option value="I will attend" selected="">I will attend</option>
                                                    <option value="I will NOT attend">I will NOT attend</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Spouse/Guest Dinner Ticket $90 prepaid (by August 16, 2021) or $200 on-site.</h4>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6"> Check Box to purchase Spouse/Guest Dinner Ticket. ($ 90)</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input spouseDnrTckt" type="radio" style="margin-left: 0px !important" name="spouseDinnerTicket" id="spouseDinnerTicket1" value="Yes">
                                                    <label class="form-check-label" for="spouseDinnerTicket1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input spouseDnrTckt" type="radio" style="margin-left: 0px !important" name="spouseDinnerTicket" id="spouseDinnerTicket2" value="No" checked="">
                                                    <label class="form-check-label" for="spouseDinnerTicket2">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Spouse/Guest's First Name</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <input name="spouseFirstName" value="{{ $edit_att->emerg_cont_phone }}" placeholder="" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Spouse/Guest's Last Name</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <input name="spouseLastName" value="{{ $edit_att->emerg_cont_phone }}" placeholder="" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Friday Breakfast <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="fridayBreakfast" class="yit-nice-select width-full form-control">
                                                    <option value="">Select an option</option>
                                                    <option value="I will attend" selected="">I will attend</option>
                                                    <option value="I will NOT attend">I will NOT attend</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Dietary Restrictions/Special Requests</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <input name="dietaryRestrictions" placeholder="If Applicable" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="padding: 30px;">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Payment Method <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="payment_method" class="yit-nice-select width-full form-control" required="">
                                                    <option value="online">Online</option>
                                                    <option value="offline">Offline</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Payment Status <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <select name="payment_status" class="yit-nice-select width-full form-control" required="">
                                                    <option value="1">Paid</option>
                                                    <option value="2">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-6">Amount to be Paid</label>
                                        <div class="col-md-6">
                                            <div class="form-group control-group">
                                                <input name="payment_amount" value="{{ $edit_att->payment_amount }}" class="form-control" type="number" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <!-- <input type="hidden" name="payment_status" id="payment_status" value="offline">
                                        <input type="hidden" name="payment_method" id="payment_status" value="offline"> -->
                                        <input type="hidden" name="edit_id" id="edit_id" value="{{ $edit_att->id }}">
                                        <button type="submit" class="btn btn-primary">Update <i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        <!-- /hover rows -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
