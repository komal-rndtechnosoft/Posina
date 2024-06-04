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
         $destinationPath = public_path('/Backend/images/about/');
         
         if ($request->hasFile('image')) {
             $files = $request->file('image');
             
             // Remove Old Image
             $oldImage = $data->image;
             if ($oldImage) {
                 $oldImagePath = public_path("/Backend/images/about/$oldImage");
                 if (File::exists($oldImagePath)) {
                     File::delete($oldImagePath);
                 }
             }
     
             // Upload New Image
             $filename = "header-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
             $data->image = $filename;
             $files->move($destinationPath, $filename);
         }
     
         // Update other fields excluding the 'image' field
         $data->update($request->except('image'));
     
         return redirect()->route('About.index')->with('success', 'About updated successfully');
     }
     
    /**
     * Remove the specified resource from storage.
     */
       
}