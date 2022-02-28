<?php
namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(5);
        return view("admin.products.all",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('admin.products.create' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Image =$request->file('image');
        $ProductImage = time()."_".$Image->getClientOriginalName();
        $Image->move('img',$ProductImage);

        Product::create([
            'proname' => $request->proname,
            'desc' => $request->desc,
            'price' => $request->price,
            'cat_id' => $request->cat_id,
            'image' => $ProductImage,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product =Product::findOrFail($id);
        return view('admin.products.show', compact('product')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Image =$request->file('image');
        $ProductImage = time()."_".$Image->getClientOriginalName();
        $Image->move('img',$ProductImage);

        $product = Product::findOrfail($id);
        $product->update([
            'proname' => $request->proname,
            'desc' => $request->desc,
            'price' => $request->price,
            'image' => $ProductImage,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $product =Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
