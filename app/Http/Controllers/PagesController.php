<?php

namespace App\Http\Controllers;

use App\Mail\Order as MailOrder;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Order;

use App\Models\Quote;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

class PagesController extends Controller
{   

  
 


    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $about = DB::table('abouts')->first();
        
        return view('web.about', compact('about'));
    }

    public function quote()
    {

        return view('web.quote');
    }

    public function blog()
    {

        $blog = DB::table('blogs')->where('type', '=', 'regular')->paginate(5);
        $blogs = DB::table('blogs')->where('type', '=', 'popular')->paginate(3);
// dd($blog, $blogs);

        return view('web.blog', compact('blogs', 'blog'));
    }

    //display only popular blog post from database

    



    public function AdminViewBlog($id)
    {
        $post = Blog::find($id);
        $blogs = DB::table('blogs')->where('type', '=', 'popular')->paginate(3);
        return view('web.viewblog', compact('post', 'blogs'));
    }


    public function track()
    {

        return view('web.track');
    }

    public function contact()
    {

        return view('web.contact');
    }

    public function table()
    {

        return view('table');
    }


    public function newOne(Request $request)
    {

        // dd($request);
        if ($request->isMethod('post')) {

            $order = new Order();

            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->pick_address = $request->pick_address;
            $order->drop_address = $request->drop_address;
            $order->distance = $request->distance;
            $order->weight = $request->weight;
            $order->carrier = $request->carrier;
            $order->amount = $request->amount;
            $order->status = 'PENDING';
            $order->tracking_id = strtoupper(uniqid());
            // dd($order);

            $saved =  $order->save();

            if($saved){
                //send confirmation email
                Mail::to($order->email)->send(new MailOrder($order));

                // Mail::to($request->email)->send(new Order($order));
                 //subtract 10% from the amount
                // $amount = $order->amount;
                // $newAmount = $amount - ($amount * 0.1);
                // $order->amount = $newAmount;
                // $order->save();

                return view('placed', compact('order'));

            }


        }
        return view('web.quote');
    }


    //I can place a shipping order on the website by filling the shipping order form
    public function showQuote(Request $request)
    {
        if ($request->isMethod('post')) {
            if (!$request->has('amount')) {

                            $request->validate([
                                'name' => 'required',
                                'email' => 'required',
                                'phone' => 'required',
                                'pick_address' => 'required',
                                'drop_address' => 'required',
                                'distance' => 'required',
                                'weight' => 'required',
                                'carrier' => 'required',
                 ]);


                $order = new Order();

                $order->name = $request->name;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->pick_address = $request->pick_address;
                $order->drop_address = $request->drop_address;
                $order->distance = $request->distance;
                $order->weight = $request->weight;
                $order->carrier = $request->carrier;
                $order->amount = 0;
                $order->status = 'pending';
                $order->tracking_id = strtoupper(uniqid());



                //get quote estimate before saving the order
                // N1000 for every 1KG of weight
                // N1000 for every 1KM of distance

                // N50,000 for Air Freight
                // N20,000 for Ocean Freight
                // N10,000 for Road Freight


                $km_price = DB::table('quotes')->pluck('km_price');
                $kg_price = DB::table('quotes')->pluck('kg_price');
                $km = DB::table('quotes')->pluck('land');
                $kg = DB::table('quotes')->pluck('ocean');
                $air = DB::table('quotes')->pluck('air');


                if ($request->carrier == 'Air Freight') {
                    $amount = $request->weight * $kg_price[0] + $request->distance * $km_price[0] + $km[0];
                } elseif ($request->carrier == 'Ocean Freight') {
                    $amount = $request->weight * $kg_price[0] + $request->distance * $km_price[0] + $kg[0];
                } elseif ($request->carrier == 'Road Freight') {
                    $amount = $request->weight * $kg_price[0] + $request->distance * $km_price[0] + $air[0];
                }

                $order->amount = $amount;
                // dd($order);

                return view('table', compact('order'));

                // return redirect()->route('new', ['amount' => $order]);

            } else {
                dd('no amount');
            }
        } else {
            return view('web.quote');
        }
    }



    public function trackOrder(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'tracking_id' => 'required',
            ]);

            $tracking_id = $request->tracking_id;
            $order = Order::where('tracking_id', $tracking_id)->first();

            if ($order) {
                // return view('web.track', compact('order'));



                $order['message'] = $order->message;


                if ($order->status == 'PENDING') {
                    // $order['status'] = $order->status;
                    $message = 'Your order is still pending, it will be shipped soon';

                } elseif ($order->status == 'TRANSIT') {

                    $message = 'Your order has been shipped, it will get to you soon ';
                // dd( $message);

                } elseif ($order->status == 'DELIVERED') {

                    $message = 'Your order has been delivered, Thank You for using our service';
                } elseif ($order->status == 'CANCELLED') {

                    $message = ' Sorry, Your order has been cancelled';
                } else {
                    $message = 'Bellow are your order details';
                }

                $order->message = $message;


                // dd($orders->name);
                return view('web.track', compact('order'));
            } else {
                return redirect()->back()->with('error', ' Sorry, Order not found or Invalid Tracking ID');
            }
        }
        
       

        return view('web.track');
    }


    public function contactUs(Request $request)
    {
        // dd($request);
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'comment' => 'required',
            ]);
            // dd($request->all());
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->comment = $request->comment;

            // dd($contact);

            $saved = $contact->save();
            // dd($saved);

            if ($saved) {
                return back()->with('success', 'Your message has been sent successfully');
            } else {
                return back()->with('error', 'Your message could not be sent');
            }
        }

        return view('web.contact');
    }
}
