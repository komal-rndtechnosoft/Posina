<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Title;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blogs.list', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Blog::all();

        return view('admin.blogs.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Blog();
        $data->fill($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/blogs'), $filename);
            $data->image = $filename;
        }
        if ($request->hasfile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/blogs'), $filename);
            $data->banner_image = $filename;
        }

        $data->save();
        return redirect()->route('Blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show4()
    {
        $data = DB::table('titles')->select('*')->where('id', 4)->first();
        return view('admin.blogs.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Blog::find($id);
        return view('admin.blogs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Blog::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/blogs/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/blogs/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationpath, $filename);
        }

        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/blogs/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename;
            $files->move($destinationpath, $filename);
        }

        $data->save();

        $data->update($request->except('image', 'banner_image')); // Exclude the 'image' field from the update

        return redirect()->route('Blog.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('Blog.index', compact('data'));
    }
    public function update4(Request $request)
    {
        $data = Title::find(4);
        $data->update($request->all());
        $data->save();
        return redirect()->route('Blog.index')->with('success', 'Successfully Update.');
    }
}
