<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Contactus;
use App\Models\Staticseo;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\ContactusEmail;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Technical;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $footer = DB::table('footers')->select('*')->first();
        $header = DB::table('headers')->select('*')->first();
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

        return view('Frontend.index', compact('whoweare', 'blogs', 'footer', 'title4', 'header', 'banners', 'brands', 'usp', 'usptitle', 'about', 'wcs', 'wcstitle', 'category', 'title3', 'title7', 'serve'));
    }
    public function aboutus()
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 1)->first();
        $title5 = DB::table('titles')->select('*')->where('id', 5)->first();
        $title6 = DB::table('titles')->select('*')->where('id', 6)->first();
        $testi = DB::table('testimonials')->select('*')->get();
        $certi = DB::table('certificates')->select('*')->get();
        $about = DB::table('abouts')->select('*')->first();
        $miss = DB::table('mission_visions')->select('*')->first();

        return view('Frontend.aboutus', compact('about', 'testi', 'title5', 'certi', 'title6','miss','menu1'));
    }
    public function products()
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 6)->first();
        $title8 = DB::table('titles')->select('*')->where('id', 8)->first();

        $product = DB::table('products')->select('*')->limit(30)->get();

        $tech = DB::table('technicals')
        ->join('products', 'products.id', '=', 'technicals.product_id')
        ->whereIn('products.id', $product->pluck('id'))
        ->select('technicals.*', 'products.id as product_id')
        ->get()
        ->groupBy('product_id');


        return view('Frontend.product', compact('product','menu1','tech','title8'));
    }
    public function productsdetails()
    {

        $category = DB::table('categories')->select('*')->get();
        return view('Frontend.product-detail', compact('category'));
    }
    public function blogs()
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 3)->first();

        $title4 = DB::table('titles')->select('*')->where('id', 4)->first();
        $blogs = DB::table('blogs')->select('*')->get();

        return view('Frontend.blogs', compact('blogs', 'title4','menu1'));
    }

    public function blogdetails($slug)
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 4)->first();
        $category = DB::table('categories')->select('*')->get();
        $blogs = DB::table('blogs')->select('*')->latest()->limit(3)->get();
        $data = DB::table('blogs')->select('*')->where('slug', $slug)->first();
        return view('Frontend.blog-details', compact('data', 'blogs', 'category','menu1'));
    }
    public function contact()
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 5)->first();

        return view('Frontend.Contact',compact('menu1'));
    }
    public function productdetails($categorySlug)
    {
        $menu1 = DB::table('menus')->select('*')->where('id', 7)->first();

        $product1 = Product::select('products.*')->get();
        $product = Product::select('products.*')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.slug', $categorySlug)
            ->get();
        $cat = DB::table('categories')->select('*')->get();
        $category = DB::table('categories')->select('*')->where('slug', $categorySlug)->first();
        $tech = DB::table('technicals')
        ->join('products', 'products.id', '=', 'technicals.product_id')
        ->whereIn('products.id', $product->pluck('id'))
        ->select('technicals.*', 'products.id as product_id')
        ->get()
        ->groupBy('product_id');

        return view('Frontend.product-detail', compact('category', 'cat', 'product', 'product1','tech','menu1'));
    }
   
   
    public function store1(Request $request)
    {

        $input = request()->except(['_token', '_method']);
        Contactus::create($input);

        $mail = Mail::to('diya.rndtechnosoft@gmail.com');
        $mail->send(new ContactusEmail($input));

        return back();

    }
    public function store(Request $request)
    {

        $input = request()->except(['_token', '_method']);
        Contact::create($input);

        $mail = Mail::to('diya.rndtechnosoft@gmail.com');
        $mail->send(new ContactEmail($input));

        return back();

    }
    public function showdesc()
    {
        $data = DB::table('staticseos')->select('*')->where('id', 1)->first();
        return view('admin.Menu.show', compact('data'));
    }
    public function updatedesc1(Request $request)
    {
        $data = Staticseo::find(1);
       
        $filename = "";
        $destination = public_path('Backend/images/menu');
            if ($request->hasfile('ogimage')) {
                $file = $request->file('ogimage');
        
                // Remove old image
                $userImage = public_path("Backend/images/menu/{$data->ogimage}");
                if (file_exists($userImage)) {
                    unlink($userImage);
                }
        
                // Upload Image
                $filename = "banner-" . strtotime(date('d-m-Y h:i:s')) . "." . $file->getClientOriginalExtension();
                $file->move($destination, $filename);
                $data->ogimage = $filename;
            }

            $data->update($request->except('ogimage')); // Exclude the 'image' field from the update

            return redirect()->route('menu.index')->with('success', 'Seo updated successfully');
    }

}
