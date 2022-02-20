<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function blog(){

        $blogs = Blog::all();

        return response()->json($blogs);
    }

    public function blogSingle($id){

        $blog = Blog::find($id);

        return response()->json($blog);
    }


    public function AdminBlog(Request $request)
    {
        if ($request->isMethod('POST')) {
            // dd($request->all());

            $blogCreate = new Blog([
                'title' => $request->title,
                'desc' => $request->desc,
                'author' => $request->author,
                'content' => $request->content,
                // 'type' => $request->type,
            ]);

            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $blogCreate->image = $imageName;
            }
            // save image path to database
            // $image = $request->file('image');
            // $imageName = $image->getClientOriginalName();
            // $image->move(public_path('image'), $imageName);
            // $blogCreate['image'] = $imageName;
            // dd($blogCreate);
            $blogCreate->save();

            return response()->json(['msg' => 'Saved Successfully', 'result' => $blogCreate]);

            // return redirect()->back()->with('success', 'Blog created successfully');
        }


            // $posts = Blog::paginate(5);


            // return view('admin.blog2', compact('posts'));
        
    }

    public function users(){
        $user = DB::table('blogs')->get();

        return response()->json($user);
    }




    public function AdminUpdateBlog(Request $request, $id)
    {
        if ($request->isMethod('PUT')) {
            // dd($request->all());

            $blogUpdate = DB::table('blogs')
            ->where('id', $id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'author' => $request->author,
                'content' => $request->content,

            ]);
            // $image = $request->file('image');


            return response()->json(['msg' => 'Updated Successfully', 'result' => $blogUpdate]);
        }

        

            // $post = Blog::find($id);

            // return view('admin.editblog', compact('post', 'data'));
        }



    public function AdminDeleteBlog($id)
    {
        $post = Blog::find($id);
        $post->delete();

        return response()->json(['msg' => 'Deleted Successfully', 'result' => $post]);
    }
    


}
