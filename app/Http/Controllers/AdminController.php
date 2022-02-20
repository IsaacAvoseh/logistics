<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = array();

        if (Session::has('loginId')) {

            $data = User::where('id', '=', Session::get('loginId'))->first();

            return view('admin.dashboard', compact('data'));
        }
    }



    //update quote table values
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd($request->all());

            $quotesUpdate = DB::table('quotes')
                ->where('id', 1)->update([
                    'kg' => $request->kg,
                    'km' => $request->km,
                    'kg_price' => $request->kg_price,
                    'km_price' => $request->km_price,
                    'land' => $request->land,
                    'ocean' => $request->ocean,
                    'air' => $request->air,
                ]);

            return redirect()->route('calculator')->with('success', 'Values updated successfully');
        }


        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

        $quotes = DB::table('quotes')->first();
        // dd($quotes);


        return view('admin.calculator', compact('quotes', 'data'));

        }
    }


    public function AdminContact()
    {

        $contacts = \App\Models\Contact::paginate(5);
        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

            $data = User::where('id', '=', Session::get('loginId'))->first();

            return view('admin.contact', compact('contacts', 'data'));
        }
    }

    public function viewContact($id)
    {

        $contact = \App\Models\Contact::find($id);
        // dd($contact);

        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();



            return view('admin.viewcontact', compact('contact', 'data'));
        }
    }

    public function deleteContact($id)
    {

        $contact = \App\Models\Contact::find($id);

        $contact->delete();

        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }


    // public function AdminBlog()
    // {

    //     return view('admin.blog2');
    //  }
    public function AdminOrders()
    {

        $orders = \App\Models\Order::paginate(5);
        // dd($orders);



        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

            return view('admin.orders', compact('orders', 'data'));
        }
    }

    public function Details($id)
    {
 
        $orders = \App\Models\Order::find($id);
        // dd($order);


        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

            return view('admin.status', compact('orders', 'data'));

          
        }

    }







    public function orderStatus(Request $request)
    {

        if ($request->isMethod('post')) {
            //update order status
// dd($request);
            $orderUpdate = DB::table('orders')
            ->where('id', $request->id)->update([
                'status' => $request->status,
            ]);
            // dd($orderUpdate);

            return redirect()->back()->with('success', 'Status Updated Successfully');


        }
        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

        return view('admin.status', compact('data'));
        
        }

    }


    //UPDATE ABOUT US   

    public function updateAboutUs(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd($request->all());

            $aboutUsUpdate = DB::table('abouts')
                ->where('id', 1)->update([
                    'about' => $request->about,
                ]);
                
            return redirect()->back()->with('success', 'About Us updated successfully');

        }

        $aboutUs = DB::table('abouts')->first();
        // dd($aboutUs);


        if (Session::has('loginId')) {
            
            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();


            return view('admin.settings', compact('aboutUs', 'data'));
        }
    }

    public function AdminRegister(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6'

            ]);

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $saved = $user->save();

            if ($saved) {
                return redirect('/login')->with(['success' => 'Great !!!, You have Successfully registered, Kindly Login to Continue']);
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return view('admin.register');
        }
    }

    public function AdminLogin(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|'
            ]);

            $user = User::where('email', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {

                    Auth::login($user);

                    $request->Session()->put('loginId', $user->name);

                    return redirect('dashboard')->with('success', 'Welcome Back, You have all Controls here, Please be carefull and know what you are doing, ...You cant reverse any action ');
                } else {
                    return back()->with('error', 'Pasword does not match');
                }
            } else {
                return back()->with('error', 'Gerara here, your email is not registered');
            }
        } else {
            return view('admin.login');
        }
    }


    //logout

    public function logOut()
    {

        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login')->with('success', 'You have successfully logged out');
        }
    }

    
    public function AdminBlog(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd($request->all());

            $blogCreate = new Blog([
                'title' => $request->title,
                'desc' => $request->desc,
                'author' => $request->author,
                'content' => $request->content,
                'type' => $request->type,
            ]);
            // save image path to database
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $blogCreate['image'] = $imageName;
            // dd($blogCreate);
            $blogCreate->save();

            return redirect()->back()->with('success', 'Blog created successfully');
        }


        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();


            $posts = Blog::paginate(5);


            return view('admin.blog2', compact('posts', 'data'));
        }
    }

    //edit blog post
    // public function AdminEditBlog($id)
    // {


    //     if (Session::has('loginId')) {

    //         //pass two variables to view
    //         $data = User::where('id', '=', Session::get('loginId'))->first();

    //         $post = Blog::find($id);

    //         return view('admin.editblog', compact('post', 'data'));
    //     }
    // }

    //delete blog post
    public function AdminDeleteBlog($id)
    {
        $post = Blog::find($id);
        $post->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully');
    }

    //update blog post
    public function AdminUpdateBlog(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            // dd($request->all());

            $blogUpdate = DB::table('blogs')
                ->where('id', $id)->update([
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'author' => $request->author,
                    'content' => $request->content,
                    'type' => $request->type,

                ]);
            // $image = $request->file('image');
        

            return redirect()->back()->with('success', 'Blog updated successfully');
        }

        if (Session::has('loginId')) {

            //pass two variables to view
            $data = User::where('id', '=', Session::get('loginId'))->first();

            $post = Blog::find($id);

            return view('admin.editblog', compact('post', 'data'));
        }
    }
}
