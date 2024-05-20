<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
         $footer=DB::table('footers')->select('*')->first();
        $header=DB::table('headers')->select('*')->first();
        $banners = DB::table('banners')->select('*')->get();
        $brands = DB::table('brands')->select('*')->get();
        $blogs = DB::table('blogs')->select('*')->limit(3)->get();
        $usp = DB::table('u_s_p_s')->select('*')->get();
        $usptitle = DB::table('titles')->select('*')->where('id', 1)->first();
        $about = DB::table('abouts')->select('*')->first();
        $whoweare = DB::table('whoweares')->select('*')->first();
        $wcs = DB::table('w_c_s')->select('*')->get();
        $wcstitle = DB::table('titles')->select('*')->where('id', 2)->first();
        $category = DB::table('categories')->select('*')->get();
        $title3 = DB::table('titles')->select('*')->where('id', 3)->first();
        $title4 = DB::table('titles')->select('*')->where('id', 4)->first();
        $title7 = DB::table('titles')->select('*')->where('id', 7)->first();
        $serve = DB::table('serves')->select('*')->get();

        return view('Frontend.index', compact('whoweare', 'blogs','footer', 'title4', 'header','banners', 'brands', 'usp', 'usptitle', 'about', 'wcs', 'wcstitle', 'category', 'title3', 'title7', 'serve'));
    }
    public function aboutus()
    {
       $title5 = DB::table('titles')->select('*')->where('id', 5)->first();
         $title6 = DB::table('titles')->select('*')->where('id', 6)->first();
        $testi = DB::table('testimonials')->select('*')->get();
        $certi = DB::table('certificates')->select('*')->get();

        $about = DB::table('abouts')->select('*')->first();


        return view('Frontend.aboutus', compact('about', 'testi', 'title5','certi','title6'));
    }
    public function products()
    {
        $product = DB::table('products')->select('*')->limit(30)->get();

        return view('Frontend.product',compact('product'));
    }
    public function productsdetails()
    {
        $category = DB::table('categories')->select('*')->get();
        return view('Frontend.product-detail',compact('category'));
    }
    public function blogs()
    {
        $title4 = DB::table('titles')->select('*')->where('id', 4)->first();
        $blogs = DB::table('blogs')->select('*')->get();

        return view('Frontend.blogs', compact('blogs', 'title4'));
    }

    public function blogdetails($slug)
    {
       $category = DB::table('categories')->select('*')->get();
        $blogs = DB::table('blogs')->select('*')->latest()->limit(3)->get();
        $data = DB::table('blogs')->select('*')->where('slug', $slug)->first();
        return view('Frontend.blog-details', compact('data', 'blogs','category'));
    }
    public function contact()
    {
        return view('Frontend.Contact');
    }
    public function productdetails($categorySlug)
    {
        $product1 = Product::select('products.*')->get();

        $product = Product::select('products.*')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->where('categories.slug', $categorySlug)
        ->get();
        $cat = DB::table('categories')->select('*')->get();
        $category = DB::table('categories')->select('*')->where('slug', $categorySlug)->first();
    return view('Frontend.product-detail', compact('category','cat','product','product1'));
    }
    public function getProduct(Request $request)
    {
        $productId = $request->input('id');
        $product1 = Product::find($productId);
        return response()->json($product1);
    }
    public function store(Request $request)
    {
      
        $input = request()->except(['_token', '_method']);
        Contact::create($input);

        $mail = Mail::to('diya.rndtechnosoft@gmail.com');
        $mail->send(new ContactEmail($input));

        return back();

    }
    
}
