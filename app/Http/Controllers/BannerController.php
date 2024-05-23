<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $banners = Banner::all();
        return view('admin.Banner.list', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banners = Banner::all();
        return view('admin.Banner.create', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();

        $banner->fill($request->all());
        if ($request->hasfile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/banners'), $filename);
            $banner->banner_image = $filename;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');

    }

    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('admin.Banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $destination = public_path('/Backend/images/banners');
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            // Remove old image
            $oldImagePath = public_path("/Backend/images/banners/{$banner->banner_image}");
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        // Upload Image
            $filename = "banner-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $banner->banner_image = $filename;
        }

        // Update other fields excluding the 'banner_image'
        $banner->update($request->except('banner_image'));

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
    }

    public function destroy(banner $banner)
    {
        $banner->delete();
        return redirect()->route('banner.index', compact('banner'));
    }
}
