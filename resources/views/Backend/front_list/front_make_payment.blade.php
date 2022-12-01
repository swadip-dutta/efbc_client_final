  <!-- Payment Method -->
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('css/yit-theme.css') }}" rel="stylesheet" type="text/css" />



  <div class="yit-cotact-form common-form mt-40 input-style-1">
            <div class="text-center">
                <h1 class="font-weight-bold">Make Payment</h1>
                <hr class="style-three  mt-0 mb-4">
            </div>
            <form action="{{ route('front_auth_payment') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8 offset-2">
                        <div class="row justify-content-end">

                        <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                  </div>

                                  <div class="input-group-append" >
                                    <span class="input-group-text"></span>
                                  </div>
                                </div>

                        <div class="col-12">
                                <div class="form-group control-group">
                                <input name="register_id" id="register_id" placeholder="Please Enter Your Register ID" class="form-control" type="text" required="required">
                                </div>

                                
                                <div class="form-group control-group">
                                    <input name="amount" id="amount" class="form-control" placeholder="Please Enter Amount" type="number" required="required">
                                </div>


                            <div class="col-12">
                                <div class="form-group control-group">
                                    <input name="cardNumber" id="cardNumber" placeholder="Card Number" class="form-control" type="text" required="">
                                </div>
                                <input class="form-check-input" type="hidden" id="paymentMethod_cc" value="CC" checked="checked" name="paymentMethod">
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input id="cardExpiry" name="cardExpiry" placeholder="2021-12" class="form-control" type="text" maxlength="7" required="">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input id="cardCVV" name="cardCVV" placeholder="Card Code(CVV)" class="form-control" type="password" required="">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-radius btn-block control-group" value="Pay Now" type="submit">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


