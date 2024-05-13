<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\WCS;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WCSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WCS::all();
        return view('admin.wcs.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = WCS::all();
        return view('admin.wcs.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new WCS();
        $data->fill($request->all());
        $destinationPath = public_path('/Backend/images/wcs');
        if ($request->hasfile('icon')) {
                $file = $request->file('icon');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/Backend/images/wcs'), $filename);
                $data->icon = $filename;
        }
    
        $data->save();
       return redirect()->route('wcs.index')->with('success', 'USP created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = WCS::find($id);
        return view('admin.wcs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = WCS::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/wcs/');
        if ($request->hasFile('icon')) {
            $files = $request->file('icon');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/wcs/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Brand-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->icon = $filename;
            $files->move($destinationpath, $filename);
        }
        
      
        $data->save();

        $data->update($request->except('icon')); // Exclude the 'image' field from the update

        return redirect()->route('wcs.index')->with('success', 'WCS updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=WCS::find($id);
        $data->delete();
        return redirect()->route('wcs.index',compact('data'));
    }

    public function show2()
    {
        $data = DB::table('titles')->select('*')->where('id', 2)->first();
        return view('admin.wcs.show', compact('data'));
    }
    public function update2(Request $request)
    {
        $data = Title::find(2);
        $data->update($request->all());
        $data->save();
        return redirect()->route('wcs.index')->with('success', 'Successfully Update.');
    } 

   
    
}
