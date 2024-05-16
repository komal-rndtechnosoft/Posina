<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::first();
        return view('admin.header.list', compact('header'));
    }


   
    public function edit($id)
    {


        $header =  Header::find($id);
        return view('admin.header.list', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $header = Header::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/header/');
        $destinationPath = public_path('/Backend/images/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/blogs/$header->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $header->image = $filename;
            $files->move($destinationpath, $filename);
        }

        if ($request->hasFile('image1')) {
            $files = $request->file('image1');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/$header->icon"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $header->image1 = $filename;
            $files->move($destinationPath, $filename);
        }
        $header->save();

        $header->update($request->except('image','image1')); // Exclude the 'image' field from the update

        return redirect()->route('header.index')->with('success', 'Header updated successfully');
    }

    
}