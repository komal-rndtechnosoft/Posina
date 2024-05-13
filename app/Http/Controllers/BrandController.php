<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Brand::all();
        return view('admin.Brand.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Brand::all();
        return view('admin.Brand.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Brand();
        $data->fill($request->all());
        $destinationPath = public_path('/Backend/images/brands');
        if ($request->hasfile('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/Backend/images/brands'), $filename);
                $data->image = $filename;
        }
    
        $data->save();
       return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Brand::find($id);
        return view('admin.Brand.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Brand::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/brands/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/brands/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Brand-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationpath, $filename);
        }
        
      
        $data->save();

        $data->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Brand::find($id);
        $data->delete();
        return redirect()->route('brands.index',compact('data'));
    }
   
    
}
