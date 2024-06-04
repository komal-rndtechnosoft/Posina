<?php

namespace App\Http\Controllers;

use App\Models\Technical;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Technical::all();
        $category = DB::table('technicals')->join('categories', 'categories.id', 'technicals.category_id')->select('*')->get();
        $product = DB::table('technicals')->join('products', 'products.id', 'technicals.product_id')->select('*')->get();

        return view('admin.Technical.list', compact('data', 'category','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banners = Technical::all();
        $category = DB::table('categories')->select('*')->get();
        $product = DB::table('products')->select('*')->get();
        return view('admin.Technical.create', compact('banners', 'category','product'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Technical();
        $banner->fill($request->all());
        $banner->category_id = $request->input('category_id');
        $banner->product_id = $request->input('product_id');
        $banner->save();

        return redirect()->route('Technical.index')->with('success', 'Product created successfully.');
    }
    /**
     * Display the specified resource.
     */

    public function edit($id)
    {
        $data = Technical::find($id);
        $cateogryid = $data->category_id;
        $productid = $data->product_id;


        $cateogry = DB::table('technicals')
            ->join('categories', 'categories.id', 'technicals.category_id')
            ->select('categories.id', 'categories.name')
            ->where('technicals.id', $id)
            ->first();

        // Get categories and subcategories
        $categories = DB::table('categories')
            ->select('id', 'name')
            ->get();


        // Get the selected category for the gallery item
        $selectedCategory = DB::table('technicals')
            ->join('categories', 'categories.id', 'technicals.category_id')
            ->select('categories.id', 'categories.name')
            ->where('technicals.id', $id)
            ->first();

            // products fetching


            $product = DB::table('technicals')
            ->join('products', 'products.id', 'technicals.product_id')
            ->select('products.id', 'products.name')
            ->where('technicals.id', $id)
            ->first();


        // Get categories and subcategories
        $product = DB::table('products')
            ->select('id', 'name')
            ->get();


        // Get the selected category for the gallery item
        $selectedproduct = DB::table('technicals')
            ->join('products', 'products.id', 'technicals.product_id')
            ->select('products.id', 'products.name')
            ->where('technicals.id', $id)
            ->first();

        return view('admin.Technical.edit', compact('product', 'categories', 'selectedCategory','selectedproduct','data'));
    }


 
        public function update(Request $request, $id)
        {
            $data = Technical::find($id);
              $data->update($request->all());
            $data->save();
    
    
            return redirect()->route('Technical.index')->with('success', 'subcat updated successfully');
        }
   


    public function destroy($id)
    {
        $data = Technical::find($id);
        $data->delete();
        return redirect()->route('Technical.index', compact('data'));
    }
public function getProductsByCategory($category)
{
    $products = Product::where('category_id', $category)->get(); // Assuming you have a Product model
    
    return response()->json($products);
}


}
