<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\USP;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class USPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = USP::all();
        return view('admin.usp.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = USP::all();
        return view('admin.usp.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new USP();
        $data->fill($request->all());
        $destinationPath = public_path('/Backend/images/usp');
        if ($request->hasfile('icon')) {
                $file = $request->file('icon');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/Backend/images/usp'), $filename);
                $data->icon = $filename;
        }
    
        $data->save();
       return redirect()->route('usp.index')->with('success', 'USP created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = USP::find($id);
        return view('admin.usp.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = USP::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/usp/');
        if ($request->hasFile('icon')) {
            $files = $request->file('icon');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/usp/$data"); // get previous image from folder
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

        return redirect()->route('usp.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=USP::find($id);
        $data->delete();
        return redirect()->route('usp.index',compact('data'));
    }

    public function show1()
    {
        $data = DB::table('titles')->select('*')->where('id', 1)->first();
        return view('admin.usp.show', compact('data'));
    }
    public function update1(Request $request)
    {
        $data = Title::find(1);
        $data->update($request->all());
        $data->save();
        return redirect()->route('usp.index')->with('success', 'Successfully Update.');
    } 

   
    
}
