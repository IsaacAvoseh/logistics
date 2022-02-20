@extends('web.file')
@section('content')
<style>
    #table td {
        text-align: right;
    }
</style>


<div class="cart-cards checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="margin: 0 auto;">

                <div class="card">
                    <div class="card-header">
                        <h5>Cart Totals</h5>
                    </div>
                    <div class="card-body">
                        <form class="coupon-form mt-4" action="/new" method="post">

                            <div class="tab-pane fade specifications show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                <div>
                                    <h3>Would you like to place this order?</h3>
                                </div>

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
                                <input hidden type="text" name="amount" value="{{$order->amount}}">
                                <table class="table table-striped table-bordered">
                                    <tbody id='table'>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td name='name' style="text-align:right;">{{$order->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Freight</th>
                                            <td>{{$order->carrier}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Number</th>
                                            <td>{{$order->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight (kg)</th>
                                            <td>{{$order->weight}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Distance (KM)</th>
                                            <td>{{$order->distance}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pick up Address</th>
                                            <td>{{$order->pick_address}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Drop Off Address</th>
                                            <td>{{$order->drop_address}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <h4>Total Amount<h4>
                                            </th>
                                            <td>
                                                <h4>{{$order->amount}}
                                                    <h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row" style='justify-content:space-around'>
                                <div class="col-lg-4">
                                    <div class="form-element mb-0">
                                        <a href="/quote"><button type="button">Cancel</button></a>
                                    </div>
                                </div>

                                <!-- <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Place Order
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <option value="onDelivery">On Delivery</option>
                                        <option value="payNow">Pay Now</option>
                                    </div>
                                </div> -->


                                <div class="col-lg-4">
                                    <div class="form-element mb-0">
                                        <button type="submit"><span>Place Order</span></button>
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

@endsection