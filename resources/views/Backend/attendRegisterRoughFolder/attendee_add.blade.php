@extends('Backend/master')

@section('attend')
active
@endsection

@section('content')


<!-- Start content -->
<div class="content offset-2" style="margin-top: 110px;">

<form action="" enctype="multipart/form-data" method="post">
@csrf 
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <!-- Hover rows -->
                <div class="card" style="padding: 30px;">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">First Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="first_name" placeholder="Enter Your First Name" class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Last Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="last_name" placeholder="Enter Your last Name" class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="badge_name" placeholder="Enter 1st name..." class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Email <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="email" placeholder="Enter your email address" class="form-control" type="email" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Secondary Email</label>
                            <div class="col-md-8">
                                <input name="second_email" placeholder="Enter your secondary email address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Organization <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="org_name" placeholder="Enter Your Organization" class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Job Title <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="job_title" placeholder="Enter Your Job Title" class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Address <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addr_line1" placeholder="Address Line 1" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addr_line2" placeholder="Address Line 2" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="city" placeholder="City" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="state" placeholder="State or Region" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="country" placeholder="Country" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="zip" placeholder="Zip" class="form-control" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Mobile <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="mobile" placeholder="(201) 555-0123" class="form-control" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Office Mobile</label>
                            <div class="col-md-8">
                                <input name="office_phone" placeholder="(201) 555-0123" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Is this your first time attending the conference? <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" style="margin-left: 0px !important" name="is_conf_first" id="attendingConf1" value="Yes">
                                        <label class="form-check-label" for="attendingConf1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" style="margin-left: 0px !important" name="is_conf_first" id="attendingConf2" value="No">
                                        <label class="form-check-label" for="attendingConf2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Company Type <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="company_type" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="Utility Company">Utility Company</option>
                                        <option value="Media">Media</option>
                                        <option value="Other">Other</option>
                                        <option value="Supplier: Coal Mine/Coal Producer">Supplier: Coal Mine/Coal Producer</option>
                                        <option value="Supplier: Consultant">Supplier: Consultant</option>
                                        <option value="Supplier: Gas">Supplier: Gas</option>
                                        <option value="Supplier: Laboratory">Supplier: Laboratory</option>
                                        <option value="Supplier: Lime/Cement">Supplier: Lime/Cement</option>
                                        <option value="Supplier: Petcoke">Supplier: Petcoke</option>
                                        <option value="Supplier: Solar">Supplier: Solar</option>
                                        <option value="Supplier: Trader / Broker">Supplier: Trader / Broker</option>
                                        <option value="Supplier: Transportation/Rail/Shipping/Terminal">Supplier: Transportation/Rail/Shipping/Terminal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">if “other” selected, please specify</label>
                            <div class="col-md-8">
                                <input name="if_other" placeholder="" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Name</label>
                            <div class="col-md-8">
                                <input name="emerg_cont_name" placeholder="" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Phone</label>
                            <div class="col-md-8">
                                <input name="emerg_cont_phone" placeholder="(201) 555-0123" class="form-control" type="text">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-form-label col-md-4">Group</label>
                            <div class="col-md-8">
                         {{--    <select name="group_Cat_Id" id="group_Cat_Id" class="form-control">
                                @foreach ($grp_category as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select> --}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card" style="padding: 30px;">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Please indicate which Wednesday activity you will be attending(Select ONE)* (Please note that all have limited space and is on a 1st come, 1st confirmed basis. We apologize in advance if your 1st choice is not available) <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    
                                    <select name="Attend_status" id="Attend_status" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="Golf">Golf Tournament (8:30 AM start)</option>
                                        <option value="Fishing">Fishing (7:00 AM)</option>
                                        <option value="Massage">Massage (limited space)</option>
                                        <option value="Networking">Networking 1:30 PM – 3:30 PM (limited space)</option>
                                        <option value="None">None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>If You Chose Golf</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your handicap</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="golfHandicup" placeholder="(A number from 0 to 36)" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Rental clubs are available on-site for a fee and must be reserved in advance to ensure availability. Let us know your club preference.</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="rentalClubs" id="rentalClubs" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="I will bring my own">I will bring my own</option>
                                        <option value="Right-handed mens">Right-handed mens</option>
                                        <option value="Left-handed mens">Left-handed mens</option>
                                        <option value="Right-handed ladies">Right-handed ladies</option>
                                        <option value="Left-handed ladies">Left-handed ladies</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>If you Chose Massage</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Select your preferred time slot; We will get back to you confirming your appointment time.</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="messagePreferredTime" id="messagePreferredTime" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="8:00 AM- 10:00 AM">8:00 AM- 10:00 AM</option>
                                        <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                        <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                                        <option value="2:00 PM - 4:00 PM">2:00 PM - 4:00 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card" style="padding: 30px;">
                    <div class="card-body">
                        <h4>Conference Meals</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Wednesday Welcome Reception <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="wedWelReception" id="wedWelReception" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="1" selected="">I will attend</option>
                                        <option value="2">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Breakfast <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayBreakfast" id="thursdayBreakfast" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="1" selected="">I will attend</option>
                                        <option value="2">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Luncheon <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayLuncheon" id="thursdayLuncheon" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="1" selected="">I will attend</option>
                                        <option value="2">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Dinner <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayDinner" class="yit-nice-select width-full form-control" required="">
                                        <option value="">Select an option</option>
                                        <option value="1" selected="">I will attend</option>
                                        <option value="2">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>Spouse/Guest Dinner Ticket $90 prepaid (by August 16, 2021) or $200 on-site.</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4"> Check Box to purchase Spouse/Guest Dinner Ticket. ($ 90)</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" style="margin-left: 0px !important" name="spouseDinnerTicket" id="spouseDinnerTicket" value="1">
                                        <label class="form-check-label" for="spouseDinnerTicket1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" style="margin-left: 0px !important" name="spouseDinnerTicket" id="spouseDinnerTicket" value="2" checked="">
                                        <label class="form-check-label" for="spouseDinnerTicket2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's First Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseFirstName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's Last Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseLastName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Friday Breakfast <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="fridayBreakfast" id="fridayBreakfast" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="1" selected="">I will attend</option>
                                        <option value="2">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Dietary Restrictions/Special Requests</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="dietaryRestrictions" placeholder="If Applicable" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Select a payment method<span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input style="margin-left: 0px !important" class="form-check-input" type="radio" name="payment_method" id="payment_method" value="offline" checked="">
                                        <label class="form-check-label" for="paymentMethod1">Pay By Check</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input style="margin-left: 0px !important" class="form-check-input" type="radio" name="payment_method" id="payment_method" value="online">
                                        <label class="form-check-label" for="paymentMethod2">Pay by card</label>
                                    </div>
                                </div>
                            </div>
                        </div>



                <div class="card" style="padding: 30px;">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Amount to be Paid</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="payment_amount" class="form-control" type="number" required="">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <!-- <input type="hidden" name="payment_status" id="payment_status" value="offline"> -->
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>

                </div>
                <!-- /hover rows -->

                
            </div>
        </div>
    </form>
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
        })
        @endif









    })
</script>


@endsection





