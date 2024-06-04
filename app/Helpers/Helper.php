<?php

use App\Models\Menu;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;

class Helper
{
    public static function BreadCrumb($slug)
    {
        if($slug=='')
        {
            return Menu::where('slug','home')->first();
        }
        
        return Menu::where('slug', $slug)->first();
    }
    
    public static function BlogSeo($slug)
    {
        return Blog::where('slug', $slug)->first();
    }
    
 
    public static function CategorySEo($slug)
    {
        return Category::where('slug', $slug)->first();
    }
}
?>
