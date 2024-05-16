<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.list', compact('footer'));
    }


    
    public function show( Footer $Blog_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $footer =  Footer::find($id);
        return view('admin.footer.list', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/blogs/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/blogs/$footer->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "footer-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $footer->image = $filename;
            $files->move($destinationpath, $filename);
        }
        $footer->save();

        $footer->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('footer.index')->with('success', 'Footer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    
}