<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\About; // Import the About model or your relevant model


use function PHPUnit\Framework\returnSelf;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }


//     public function  searchProducts(Request $request)
//     {
//        if($request->serarch){

//         $searchProducts =Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginates(15);
//         return view('frontend.page.search', compact('searchProducts'));
//     }else{

// return redirect()->back()->with('message','Empty search');
//        }
//     }

public function about()
{


    return view('frontend.about');
}

public function gallery()
{


    return view('frontend.Gallery');
}


public function note(){
    return view('frontend.blog');
}



    public function categories()
    {
        // $categories =Category::where('status','0')->get();
        $categories =Category::all();

        return view('frontend.collections.category.index', compact('categories'));
    }


    public function products($category_name)
    {
        $category = Category::where('name', $category_name)->first();

        if ($category) {
            $products = $category->products()->get();
            return view('frontend.collections.products.index', compact('products', 'category'));
        } else {
            return redirect()->back();
        }
    }

    public function productsview(string $category_name, string $product_name)
    {
        $category = Category::where('name', $category_name)->first();

        if ($category) {
            $product = $category->products()->where('name',$product_name)->where('status','0')->first();
            if($product)
            {
    return view('frontend.collections.products.view', compact('product', 'category'));

      } else {
    return redirect()->back();
       }
       } else {
            return redirect()->back();
        }
    }
    public function thankyou()
    {
        return view ('frontend.thank-you');
    }


}
