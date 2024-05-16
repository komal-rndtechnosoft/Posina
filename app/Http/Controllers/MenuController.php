<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::all();
        return view('admin.Menu.list', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Menu::all();
        return view('admin.Menu.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new Menu();
        $data->fill($request->all());
        if ($request->hasfile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Backend/images/menu'), $filename);
            $data->banner_image = $filename;
        }
        $data->save();
        return redirect()->route('menu.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $Service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $data = Menu::find($id);
        return view('admin.Menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Menu::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/menu/');
        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/menu/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "certificate-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename;
            $files->move($destinationpath, $filename);
        }

        $data->save();

        $data->update($request->except('banner_image')); // Exclude the 'image' field from the update

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Menu::find($id);
        $data->delete();
        return redirect()->route('menu.index', compact('data'));
    }
}