@extends('web.file')
@section('content')


<!--   contact section start    -->
<div class="contact-section">
    <div class="container">
        <!--  contact infos start  -->
        <!--  contact infos end  -->
        <!--  contact form and map start  -->
        <div class="contact-form-section">
            <div class="row">

                <div class="col-lg-6">
                    <span class="title">Quote</span>
                    <h2 class="subtitle">TRACK AN ORDER</h2>


                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif

                    <form method="POST">
                        @csrf
                        <div class="row">


                            <div class="col-lg-6">
                                <div class="form-element"><input type="text" required name="tracking_id" placeholder="Enter Your tracking ID"></div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-element">
                                    <button type="submit"><span>TRACK</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">

                    <div class="map-wrapper">
                        @if(isset($order))


                        <div id="map">
                            <div class="tab-pane fade specifications show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                <table class="table table-striped table-bordered">



                                    <h4>{{$order['message']}}</h4>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>{{$order->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>{{$order->status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Amount Paid</th>
                                            <td>{{$order->amount}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tracking ID</th>
                                            <td>{{$order->tracking_id}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Order Date</th>
                                            <td>{{$order->created_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  contact form and map end  -->
    </div>
</div>
<!--   contact section end    -->


@endsection