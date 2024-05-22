<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Title;
use Illuminate\Support\Facades\Auth;

use App\Models\Subcategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Product::all();
        $category = DB::table('products')->join('categories', 'categories.id', 'products.category_id')->select('*')->get();
        return view('admin.Product.list', compact('banners', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banners = Product::all();
        $category = DB::table('categories')->select('*')->get();


        return view('admin.Product.create', compact('banners', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Product();
        $banner->fill($request->all());
        $destinationPath = public_path('/Backend/images/product');

        $banner->category_id = $request->input('category_id');
        $multi_i = [];
        if ($request->hasFile('multiimage')) {
            $files = $request->file('multiimage');
            foreach ($files as $key => $file) {
                $filename = "ProductMulti-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalName();
                $multi_i[] = $filename;
                $file->move($destinationPath, $filename);
            }
            $banner['multiimage'] = implode('|', $multi_i);

        }

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Backend/images/product'), $filename);
            $banner->image = $filename;


        }
        $banner->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    /**
     * Display the specified resource.
     */

    public function edit($id)
    {
        $product = Product::find($id);

        $cateogryid = $product->category_id;


        $cateogry = DB::table('products')
            ->join('categories', 'categories.id', 'products.category_id')
            ->select('categories.id', 'categories.name')
            ->where('products.id', $id)
            ->first();

        // Get categories and subcategories
        $categories = DB::table('categories')
            ->select('id', 'name')
            ->get();


        // Get the selected category for the gallery item
        $selectedCategory = DB::table('products')
            ->join('categories', 'categories.id', 'products.category_id')
            ->select('categories.id', 'categories.name')
            ->where('products.id', $id)
            ->first();

        return view('admin.Product.edit', compact('product', 'categories', 'selectedCategory'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $filename = "";

        $destination = public_path('Backend/images/product/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image
            $usersImage = public_path("Backend/images/product/$product"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "certificate-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $product->image = $filename;
            $files->move($destination, $filename);
        }


        // Handle 'multiimage' field
        if (Auth::check()) {
            $input = $request->except(['_token', '_method']);
            $destination = public_path('Backend/images/product/');
            $existingMultiImages = Product::where('id', $id)->pluck('multiimage')->first();
            $multi_i = [];
            if ($request->hasFile('multiimage')) {
                $files = $request->file('multiimage');
                foreach ($files as $key => $file) {
                    $filename = "ProductMulti-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalName();
                    $multi_i[] = $filename;
                    $file->move($destination, $filename);
                }
                // Append the new images to the existing ones
                if ($existingMultiImages) {
                    $multi_i = array_merge(explode('|', $existingMultiImages), $multi_i);
                }
                $input['multiimage'] = implode('|', $multi_i);
                $product->multiimage = $input['multiimage'];
            } else {
                // No new images uploaded, retain the existing multi_image
                $input['multiimage'] = $existingMultiImages;
                $product->multiimage = $input['multiimage'];
            }
        }

        // Update the description field and other fields (excluding 'image' and 'multiimage')
        $product->update($request->except(['image', 'multiimage']));

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index', compact('product'));
    }


    public function remove1($id, $image, $index)
    {

        // Delete the image file from the server
        $imagePath = public_path('Backend/images/product/') . $image;
        $product = Product::find($id);

        if ($product) {
            // Image file deleted successfully
            if (File::delete($imagePath)) {
                // Remove the image from the array using the index
                $existingImages = explode('|', $product->multiimage);
                unset($existingImages[$index]);

                // Re-index the array
                $updatedImages = array_values($existingImages);

                // Update the 'multiimage' field in the database
                $product->multiimage = implode('|', $updatedImages);
                $product->save();

                return back()->with('delete', 'Image deleted successfully.');
            } else {
                // Handle the case where file deletion fails
                return redirect()->back()->with('error', 'Error deleting an image file.');
            }
        } else {
            // Handle the case where data is not found
            return redirect()->back()->with('error', 'Data not found.');
        }
    }

    public function show8()
    {
        $data = DB::table('titles')->select('*')->where('id', 8)->first();
        return view('admin.Product.show', compact('data'));
    }
    public function update8(Request $request)
    {
        $data = Title::find(8);
        $data->update($request->all());
        $data->save();
        return redirect()->route('product.index')->with('success', 'Successfully Update.');
    } 

}