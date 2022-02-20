<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order Details</title>
   <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- fontawesome css -->
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <!-- fontawesome css -->
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
   <!-- owl carousel css -->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <!-- owl carousel theme css -->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!-- slicknav css -->
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <!-- animate css -->
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <!-- main css -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!-- responsive css -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- jquery js -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
</head>

<body>


   <div class="cart-cards checkout">
      <style>
         .cart-cards {
            width: 55%;
            padding: 50px 0px 120px;
            margin: 0 auto;
         }
      </style>
      <div class="container">
         <div class="row">
            <h1 class="placed">
               <style>
                  .placed {
                     text-align: center;
                     margin: 0px auto;
                     margin-bottom: 5rem;
                  }
               </style>
               Your Order has been placed
            </h1>

            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h5 style="text-align: center;">Order Details</h5>
                  </div>
                  <div class="card-body">
                     <div class="calculations">
                        <div class="single-calc">
                           <strong>Tracking Number</strong>
                           <span style="color: blue;">{{ $order['tracking_id']}}</span>


                        </div>
                        <div class="single-calc">
                           <strong>Name</strong>
                           <span>{{ $order['name']}}</span>
                        </div>

                        <div class="single-calc">
                           <strong>Email</strong>
                           <span>{{ $order['email']}}</span>
                        </div>
                        <div class="single-calc">
                           <strong>Email</strong>
                           <span>{{ $order['amount']}}</span>
                        </div>
                        <div style="color: red;" class="single">

                           Your order will be delivered in 3days. Keep your tracking ID safe.

                           Also check your email for more details.
                        </div>








                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                           <div class="row" style="margin-bottom:40px;">
                              <div class="col-md-8 col-md-offset-2">

                                 <input type="hidden" name="email" value="isaactraintest@gmail.com"> {{-- required --}}
                                 <input type="hidden" name="orderID" value="{{ $order['tracking_id'] }}">
                                 <input type="hidden" name="amount" value="{{ $order['amount'] }}00"> {{-- required in kobo --}}
                                 <input type="hidden" name="quantity" value="1">
                                 <input type="hidden" name="currency" value="NGN">
                                 <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                 <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}


                                 {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                 <div style="margin-left: 150px;">
                                
                                    <p>
                                    <div style="display: flex;">
                                    Pay Now and Enjoy Discount
                                    </div>
                                    </p>
<hr>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                       <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                    </p>
                                    <hr>
                                    <p>
                                       <a href="/quote" style="background:#1F415F" class="btn btn-primary btn-lg btn-block" value="Back to Quote">
                                          <i class="fa fa-caret-left fa-lg"></i> Back to Quote
                                       </a>
                                    </p>

                                 </div>

                              </div>
                           </div>
                        </form>







                     </div>
                  </div>
               </div>








            </div>
         </div>
      </div>
   </div>


</body>

</html>