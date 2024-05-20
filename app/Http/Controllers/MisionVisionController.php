<?php

namespace App\Http\Controllers;

use App\Models\MissionVision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MisionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MissionVision::first();
        return view('admin.Mission_Vision.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
  
    public function edit($id)
    {


        $data = MissionVision::find($id);
        return view('admin.Mission_Vision.list', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

   



    public function update(Request $request, $id)
    {
        $data = MissionVision::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/miss/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/miss/$data->image"); // get previous image from folder
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
            $usersImage = public_path("/Backend/images/miss/$data->image1"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "image1-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image1 = $filename;
            $files->move($destinationpath, $filename);
        }

        $data->save();

        $data->update($request->except('image','image1')); // Exclude the 'image' field from the update

        return redirect()->route('MissionVision.index')->with('success', 'MissionVision updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
  
}