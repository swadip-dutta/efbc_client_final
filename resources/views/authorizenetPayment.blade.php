<div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-3 text-center">Authorize.Net Credit card payment</h1>
                     
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
 
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                     
                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="error-list">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                 
                    <form method="post" action="{{ url('test-process-authorize-card-payment') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cardMemberName" class="control-label">Payment Amount</label>
                                 
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="number" class="form-control" value="100" name="amount">
                                  <div class="input-group-append" >
                                    <span class="input-group-text">.00</span>
                                  </div>
                                </div>
                                 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="paymentMethod" class="control-label">Payment Method</label>
                                <div class="col-sm-12">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="paymentMethod_cc" value="CC" checked="checked" name="paymentMethod">
                                      <label class="form-check-label" for="paymentMethod_cc">Credit Card</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="paymentMethod_cod" value="COD" disabled="disabled" name="paymentMethod">
                                      <label class="form-check-label" for="paymentMethod_cod">Cash on delivery</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="cardNumber" class="control-label">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="" maxlength="20">
                                 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cardExpiry" class="control-label">Card Expiry (YYYY-MM)</label>
                                <input type="text" class="form-control" id="cardExpiry" name="cardExpiry" placeholder="2021-12" maxlength="7">
                                 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cardCVV" class="control-label">Card CVV</label>
                                <input type="password" class="form-control" id="cardCVV" name="cardCVV" placeholder="" maxlength="6">
                                 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Pay Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <section>
            
        </section>