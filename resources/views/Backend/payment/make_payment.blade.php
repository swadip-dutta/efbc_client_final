@extends("Backend/master")

@section('')
@endsection




@section('content')




<div class="yit-cotact-form common-form mt-40 input-style-1">
    <div class="text-center">
        <h1 class="font-weight-bold">Make Payment</h1>
        <hr class="style-three  mt-0 mb-4">
    </div>
    <form action="{{ url('authorize_make_payment') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8 offset-2">
                <div class="row justify-content-end">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>




                        <div class="input-group-append">
                            <span class="input-group-text"></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group control-group">
                            <select name="register_id" id="register_id" class="form-control" required="required">
                                @foreach ($reg_id as $reg)
                                <option value="{{ $reg->id }}">{{ $reg->first_name }} {{ $reg->id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <div class="form-group control-group">
                                <input name="cardNumber" id="cardNumber" placeholder="Card Number" class="form-control"
                                    type="text" required="">
                            </div>
                            <input class="form-check-input" type="hidden" id="paymentMethod_cc" value="CC"
                                checked="checked" name="paymentMethod">

                            <div class="form-group control-group">
                                <input name="amount" id="amount" placeholder="Enter Your Amount" class="form-control"
                                    type="number" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group control-group">
                                <input id="cardExpiry" name="cardExpiry" placeholder="2021-12" class="form-control"
                                    type="text" maxlength="7" required="">
                            </div>


                        </div>

                        <div class="col-md-4">
                            <div class="form-group control-group">
                                <input id="cardCVV" name="cardCVV" placeholder="Card Code(CVV)" class="form-control"
                                    type="password" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row  justify-content-first">
                                <div class="col-md-6">
                                    <div
                                        class="portfolio-about style-1 white-color-bg img-shadow-dark pad-20-all border-top-only pink-color-border border-width-5 mb-20">
                                        <ul class="yit-listing-block">
                                            <li class="d-flex">
                                                <i class="ti-list mt-1"></i>
                                                <span class="ml-2"> Amount to be Paid </span>
                                                @foreach ($price as $pri)
                                                <span type="number" value="{{ $pri->amount }}"
                                                    class="mx-auto">{{ $pri->amount }}.00 USD</span>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                            <div class="form-group">
                                <input name="btn-submit" style="cursor: pointer;" class="btn btn-radius btn-block control-group" value="Pay Now"
                                    type="submit">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>






<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function () {





        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('
            error ') }}'
        })
        @endif



        @if(session('success'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('
            success ') }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif









    })

</script>


@endsection
