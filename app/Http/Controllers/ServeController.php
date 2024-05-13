<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Serve;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Serve::all();
        return view('admin.serve.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Serve::all();
        return view('admin.serve.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Serve();
        $data->fill($request->all());
        $destinationPath = public_path('/Backend/images/serve');
        if ($request->hasfile('icon')) {
                $file = $request->file('icon');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/Backend/images/serve'), $filename);
             
                $data->icon = $filename;
        }
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/serve'), $filename);
         
            $data->image = $filename;
    }

    
        $data->save();
       return redirect()->route('serve.index')->with('success', 'USP created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Serve::find($id);
        return view('admin.serve.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Serve::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/serve/');
        if ($request->hasFile('icon')) {
            $files = $request->file('icon');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/serve/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Brand-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->icon = $filename;
            $files->move($destinationpath, $filename);
        }
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/serve/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Brand-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationpath, $filename);
        }
        
      
        $data->save();

        $data->update($request->except('icon','image')); // Exclude the 'image' field from the update

        return redirect()->route('serve.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Serve::find($id);
        $data->delete();
        return redirect()->route('serve.index',compact('data'));
    }

    public function show3()
    {
        $data = DB::table('titles')->select('*')->where('id', 3)->first();
        return view('admin.serve.show', compact('data'));
    }
    public function update3(Request $request)
    {
        $data = Title::find(3);
        $data->update($request->all());
        $data->save();
        return redirect()->route('serve.index')->with('success', 'Successfully Update.');
    } 

   
    
}
