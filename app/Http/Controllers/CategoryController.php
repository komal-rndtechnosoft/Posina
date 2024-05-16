<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Title;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.categories.create', compact('data'));
    }

   

 public function store(Request $request)
    {
        $data = new Category();
        $data->fill($request->all());
             $destinationPath = public_path('/Backend/images/banners');


        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/banners'), $filename);
            $data->image = $filename;

           
        }
         $data->save();

            return redirect()->route('category.index')->with('success', 'Product created successfully.');
    }
    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Category::find($id);
        return view('admin.categories.edit', compact('data'));
    }

   
  public function update(Request $request, $id)
    {
        $data = Category::find($id);
        $filename = "";
        $destinationpath = public_path('/Backend/images/category/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("/Backend/images/category/$data"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationpath, $filename);
        }


        $data->save();

        $data->update($request->except('image')); // Exclude the 'image' field from the update

        return redirect()->route('category.index')->with('success', 'Blog updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->route('category.index',compact('data'));
    }
    public function update7(Request $request)
    {
        $data = Title::find(7);
        $data->update($request->all());
        $data->save();
        return redirect()->route('category.index')->with('success', 'Successfully Update.');
    } 
    public function show7()
    {
        $data = DB::table('titles')->select('*')->where('id', 7)->first();
        return view('admin.categories.show', compact('data'));
    }
}

