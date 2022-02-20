@extends('web.file')
@section('content')

<body>



   <div class="cart-cards checkout">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">

                  <!-- <form method="post"> -->
                  @csrf

                  <!-- <div hidden class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="name">Name</label>

                              <input type="text" class="form-control" id="name" name="name" value="{{$order->carrier}}">
                           </div>
                        </div>
                        <div hidden class="col-lg-6">
                           <div hidden class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" value="$order->carrier">
                           </div>
                        </div>
                        <div hidden class="col-lg-6">
                           <div class="form-group">
                              <label for="phone">Phone</label>
                              <input type="text" class="form-control" id="phone" name="phone" value="$order->carrier">
                           </div>
                        </div>
                        <div hidden class="col-lg-6">
                           <div class="form-group">
                              <label for="pick_address">Pickup Address</label>
                              <input type="text" class="form-control" id="pick_address" name="pick_address" value="{{$order->carrier}}">
                           </div>

                        </div>
                        <div hidden class="col-lg-6">
                           <div class="form-group">
                              <label for="drop_address">Drop Address</label>
                              <input type="text" class="form-control" id="drop_address" name="drop_address" value="$order->carrier">
                           </div>
                        </div>
                        <div hidden class="col-lg-6">
                           <div class="form-group">
                              <label for="distance">Distance</label>
                              <input type="text" class="form-control" id="distance" name="distance" value="$order->carrier">
                           </div>
                        </div>
                        <div hidden class="col-lg-6">
                           <div class="form-group">
                              <label for="weight">Weight</label>
                              <input type="text" class="form-control" id="weight" name="weight" value="$order->carrier">
                           </div>
                        </div>
</form> -->



                  <div class="card-header">
                     <h5>Quote Estimate</h5>
                  </div>
                  <div class="card-body">
                     <div class="calculations">
                        <div class="single-calc">
                           <strong>Freight</strong>
                           <span>{{$order->carrier}}</span>
                        </div>
                        <div class="single-calc">
                           <strong>Distance (km)</strong>
                           <span>{{ $order->distance}}</span>
                        </div>
                        <div class="single-calc">
                           <strong>Weight (kg)</strong>
                           <span>{{$order->weight}}</span>
                        </div>
                        <div class="single-calc total">
                           <strong>Total</strong>
                           <span>{{$order->amount}}</span>
                        </div>
                     </div>

                     <!-- <form class="coupon-form mt-4" action=""> -->
                     <form action="/new" method="post">
                        @csrf
                        <input hidden type="text" name="name" value="{{$order->name}}">
                        <input hidden type="text" name="email" value="{{$order->email}}">
                        <input hidden type="text" name="phone" value="{{$order->phone}}">
                        <input hidden type="text" name="pick_address" value="{{$order->pick_address}}">
                        <input hidden type="text" name="drop_address" value="{{$order->drop_address}}">
                        <input hidden type="text" name="distance" value="{{$order->distance}}">
                        <input hidden type="text" name="weight" value="{{$order->weight}}">
                        <input hidden type="text" name="carrier" value="{{$order->carrier}}">
                        <input hidden type="text" name="tracking_id" value="{{$order->tracking_id}}">
                        <input hidden type="text" name="status" value="{{$order->status}}">
                        <input hidden type="text" name="type" value="{{$order->type}}">



                     








                        <button type="submit" name="submit"><span>Place Order</span></button>
                        <a href="/quote">
                           <style>
                              .coupon-input a {
                                 color: #1f415f;
                                 text-decoration: none;
                                 background-color: transparent;
                                 font-weight: 600;
                                 border: 2px solid #1f415f;
                                 padding: 7px 20px;
                                 border-radius: 2px;
                              }
                           </style>
                           Cancel Order
                        </a></button>
                     </form>

                     <div class="row">
                        <div class="col-lg-5">
                           <div class="coupon-input">
                              <a href="/quote">
                                 <style>
                                    .coupon-input a {
                                       color: #1f415f;
                                       text-decoration: none;
                                       background-color: transparent;
                                       font-weight: 600;
                                       border: 2px solid #1f415f;
                                       padding: 7px 20px;
                                       border-radius: 2px;
                                    }
                                 </style>
                                 Cancel Order
                              </a></button>
                           </div>
                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-3">
                           <div class="form-element mb-0">

                           </div>
                        </div>
                     </div>



                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>

@endsection