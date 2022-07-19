<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
//
//        return view('dashboard.product.product',compact('products'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
//        return redirect()->route('welcome');
//        $data = Product::latest()->get();

        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select(['products.id', 'products.name', 'products.description as description', 'products.image', 'products.category_id', 'categories.name as xyz']);

        $data = Product::latest()->get();
        return Datatables::of($products)
            ->addIndexColumn()
            ->addColumn('action', 'dashboard.action')
            ->rawColumns(['action'])
            ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'images/product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $profileImage = 'no-thumb.png';
        }

        $product= new Product();
        $product->name=$request->get('name');
        $product->category_id=$request->get('category_id');
        $product->description=$request->get('description');
        $product->image=$profileImage;
        $product->save();

//        return response()->json(['success'=>'Data is successfully added']);
//        return response()->json('Image uploaded successfully');
        return redirect()->back()->with('success', 'your message,here');
//        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        return redirect()->back()->with('success', 'your message,here');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

//        return Response()->json($product);
        return redirect()->back()->with('success', 'your message,here');
    }
}
