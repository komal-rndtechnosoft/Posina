<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use App\Models\Title;

// use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Testimonial::all();
        return view('admin.Testimonials.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Testimonial::all();
        return view('admin.Testimonials.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Testimonial();
        $data->fill($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/testimonial'), $filename);
            $data->image = $filename;


        }

        $data->save();

        return redirect()->route('testimonials.index')->with('success', 'testimonial created successfully.');
    }
    /**
     * Display the specified resource.
     */

    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('admin.Testimonials.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Testimonial::find($id);
        $filename = "";
        $destination = public_path('/Backend/images/testimonial');
        if ($request->hasfile('image')) {
            $file = $request->file('image');

            // Remove old image
            $userImage = public_path("/Backend/images/testimonial/{$data->image}");
            if (file_exists($userImage)) {
                unlink($userImage);
            }

            // Upload Image
            $filename = "testimonial-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $data->image = $filename;
        }

        $data->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('testimonials.index')->with('success', 'testimonial updated successfully');
    }

    public function destroy($id)
    {
        $data = Testimonial::find($id);
        $data->delete();
        return redirect()->route('testimonials.index', compact('data'));
    }

    public function show5()
    {
        $data = DB::table('titles')->select('*')->where('id', 5)->first();
        return view('admin.Testimonials.show', compact('data'));
    }
    public function update5(Request $request)
    {
        $data = Title::find(5);
        $data->update($request->all());
        $data->save();
        return redirect()->route('testimonials.index')->with('success', 'Successfully Update.');
    }
}