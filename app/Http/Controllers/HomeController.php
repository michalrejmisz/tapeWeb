<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App;

class HomeController extends Controller
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
        $products=Product::where('category_id', $id)->get();
        return view('product_list')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function changeLang(Request $request, $lang){

        App::setLocale($lang);
        $request->session()->put("lang_code", $lang);
        return redirect()->back();

    }
}
