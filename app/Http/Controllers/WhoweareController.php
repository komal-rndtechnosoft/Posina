<?php

namespace App\Http\Controllers;

use App\Models\Whoweare;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhoweareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Whoweare::first();
        return view('admin.whoweare.list', compact('data'));
    }
    public function edit($id)
    {
        $data = Whoweare::find($id);
        return view('admin.whoweare.list', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

   



    public function update(Request $request, $id)
    {
        $data = Whoweare::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/about/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/about/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationpath, $filename);
        }
        if ($request->hasFile('image1')) {
            $files = $request->file('image1');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/about/$data->image1"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image1 = $filename;
            $files->move($destinationpath, $filename);
        }
        if ($request->hasFile('video')) {
            $files = $request->file('video');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/about/$data->video"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->video = $filename;
            $files->move($destinationpath, $filename);
        }
         
        $data->save();
         $data->update($request->except('image','image1','video')); // Exclude the 'image' field from the update

        return redirect()->route('whoweare.index')->with('success', 'About updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
       
}