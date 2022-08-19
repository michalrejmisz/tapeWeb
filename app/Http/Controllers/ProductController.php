<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


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
            ->select(['products.id', 'products.name_pl', 'products.name_en',  'products.description_pl', 'products.description_en', 'products.image', 'products.hidden', 'products.category_id', 'categories.name_pl as categoryName']);

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
            'name_pl' => 'required',
            'category_id' => 'required',
//            'description_pl' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ],
        [
            'name_pl.required' => "Wymagana jest nazwa produktu(w języku Polskim)",
            'category_id.required' => "Wybierz kategorię",
        ]
        );

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($image = $request->file('image')) {
            $profileImage = date('YmdHis') . ".webp";
            $imageResize = Image::make($image);
            $imageResize->encode('webp', 90);
            if ($imageResize->width() > 720){
                $imageResize->resize(720, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $path = public_path().'/images/product/';
            $imageResize->save($path.$profileImage);
        } else {
            $profileImage = 'no-thumb.webp';
        }

        $product= new Product();
        $product->name_pl=$request->get('name_pl');
        $product->category_id=$request->get('category_id');
        if($request->has('name_en')){
            $product->name_en=$request->get('name_en');
        }
        if($request->has('description_pl')){
            $product->description_pl=$request->get('description_pl');
        }
        if($request->has('description_en')){
            $product->description_en=$request->get('description_en');
        }
        $product->hidden=$request->get('hidden');
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'name_pl' => 'required',
            'category_id' => 'required',
//            'description_pl' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ],
            [
                'name_pl.required' => "Wymagana jest nazwa produktu(w języku Polskim)",
                'category_id.required' => "Wybierz kategorię",
                'image.mimes' => "Format pliku inny niż jpeg, png, gif, svg ,webp"
            ]
        );

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($image = $request->file('image')) {
            $profileImage = date('YmdHis') . ".webp";
            $imageResize = Image::make($image);
            $imageResize->encode('webp', 90);
            if ($imageResize->width() > 720){
                $imageResize->resize(720, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $path = public_path().'/images/product/';
            $imageResize->save($path.$profileImage);
        }

        $product= Product::find($id);

        if($request->has('image')){
            $image_old = $product->image;
            if($image != 'no-thumb.webp' or $image != 'no-thumb.jpeg'){
                if(File::exists(public_path('images/product/'.$image_old))) {
                    File::delete(public_path('images/product/'.$image_old));
                }
            }
        }


        if (empty($product)){
            $product = new Product;
        }

        $product->name_pl=$request->get('name_pl');
        $product->category_id=$request->get('category_id');
        if($request->has('name_en')){
            $product->name_en=$request->get('name_en');
        }
        if($request->has('description_pl')){
            $product->description_pl=$request->get('description_pl');
        }
        if($request->has('description_en')){
            $product->description_en=$request->get('description_en');
        }
        if($request->has('image')){
            $product->image=$profileImage;
        }
        $product->hidden=$request->get('hidden');


        $product->save();
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
        $image = $product->image;
        $product->delete();

        if($image != 'no-thumb.webp' or $image != 'no-thumb.jpeg'){
            if(File::exists(public_path('images/product/'.$image))) {
                File::delete(public_path('images/product/'.$image));
            }
        }

//        return Response()->json($product);
        return redirect()->back()->with('success', 'your message,here');
    }
}
