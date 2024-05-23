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
        $destinationPath = public_path('/Backend/images/blogs/');
    
        // Update blog image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Remove old blog image
            $oldBlogImagePath = public_path("/Backend/images/blogs/{$data->image}");
            if (File::exists($oldBlogImagePath)) {
                unlink($oldBlogImagePath);
            }
            // Upload new blog image
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
    
        // Update banner image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            // Remove old banner image
            $oldBannerImagePath = public_path("/Backend/images/blogs/{$data->banner_image}");
            if (File::exists($oldBannerImagePath)) {
                unlink($oldBannerImagePath);
            }
            // Upload new banner image
            $bannerFilename = "Banner-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $bannerFilename);
            $data->banner_image = $bannerFilename;
        }
    
        // Update other fields excluding the 'image' and 'banner_image'
        $data->update($request->except('image', 'banner_image'));
    
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
