<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App;

class  HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
////        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function products_all(){
        $products=Product::all();
        return view('product_list')->with('products', $products);
    }

    public function product_by_category($id){
        $category = Category::find($id);
        $products=Product::where('category_id', $id)->get();
//        return view('product_list')->with('products', $products);
        return view('product_list', compact(['products', 'category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function changeLang(Request $request, $lang){

//        App::setLocale($lang);
//        $request->session()->put("lang_code", $lang);
//        return redirect()->back();

//        $locale = request()->segment(1);
//        if (array_key_exists($locale, config('languages'))) {
//            app()->setLocale($locale);
//        }

        if($lang == "en"){
            App::setLocale($lang);
//            $segments = str_replace(url('/'), '', url()->previous());
//            $segments = array_filter(explode('/', $segments));
//            array_shift($segments);
//            array_unshift($segments, $lang);

//            return redirect()->to(implode('/', $segments));
            return redirect()->to('/en/');
        }

        if($lang == "pl"){
            App::setLocale($lang);
            return redirect()->to('/');
        }

    }
}
