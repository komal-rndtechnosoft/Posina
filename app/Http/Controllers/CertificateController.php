<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Title;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Certificate::all();
        return view('admin.Certificate.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Certificate::all();
        return view('admin.Certificate.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Certificate();
        $data->fill($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/certificate'), $filename);
            $data->image = $filename;
        }
        $data->save();
        
       return redirect()->route('Certificate.index')->with('success', 'testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show6()
    {
        $data = DB::table('titles')->select('*')->where('id', 6)->first();
        return view('admin.Certificate.show', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $data = Certificate::find($id);
        return view('admin.Certificate.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Certificate::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/certificate/');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Remove old certificate image
            $oldImagePath = public_path("/Backend/images/certificate/{$data->image}");
            if (File::exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            // Upload new certificate image
            $filename = "certificate-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
            $file->move($destinationpath, $filename);
            $data->image = $filename;
        }
        $data->save();

        $data->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('Certificate.index')->with('success', 'Why_Choose_Us updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Certificate::find($id);
        $data->delete();
        return redirect()->route('Certificate.index',compact('data'));
    }
     public function update6(Request $request)
    {
        $data = Title::find(6);
        $data->update($request->all());
        $data->save();
        return redirect()->route('Certificate.index')->with('success', 'Successfully Update.');
    } 
    
}
