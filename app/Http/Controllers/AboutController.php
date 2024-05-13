<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Title;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::first();
        return view('admin.About.list', compact('data'));
    }
    public function edit($id)
    {
        $data = About::find($id);
        return view('admin.About.list', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

   



    public function update(Request $request, $id)
    {
        $data = About::find($id);
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
         
        $data->save();

        $data->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('About.index')->with('success', 'About updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
       
}