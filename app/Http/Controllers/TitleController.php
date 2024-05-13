<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Title::all();
        return view('admin.Title.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Title::all();
        return view('Backend.Title.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = new Title();
          $data->fill($request->all());
      
        $data->save();

                return redirect()->route('title.index')->with('success', 'Title created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(counter $About)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $data = Title::find($id);
        return view('Backend.Title.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $data = Title::find($id);
        $data->update($request->all());
        $data->save();



        return redirect()->route('title.index')->with('success', 'Title updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Title::find($id);
        $data->delete();
        return redirect()->route('title.index',compact('data'));
    }
}