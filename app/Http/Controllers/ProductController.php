<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Subcategory;

use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $cruds = Product::all();  
  
        return view('product.index' ,compact('cruds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

    $categories = Category::all();

    $subcategories = Subcategory::all();

    return view('product.create',compact('categories','subcategories'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request,[
        'product_name'  => 'required',
        'product_price' => 'required',
        
      ]);
         
        $crud = new Product;
        $crud->product_name=$request->get('product_name');
        $crud->category_id=$request->get('category_id');
        $crud->product_price=$request->get('product_price');
        $crud->subcategory_id=$request->get('subcategory_id');
        $crud->save();
        return redirect()->route('product.index')->with('success','data inserted successfully'); 
        
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
    $products = Product::find($id);

    $sub_categories= Subcategory::all(); 

    $categories = Category::all();

    return view('product.edit',compact('products' , 'sub_categories' , 'categories')); 

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
        $this->validate($request,[
        'product_name'  => 'required',
        'product_price' => 'required',
        
      ]);
         
        $products = Product::find($id);
        $products->product_name=$request->get('product_name');
        $products->category_id=$request->get('category_id');
        $products->product_price=$request->get('product_price');
        $products->subcategory_id=$request->get('subcategory_id');
        $products->save();
        return redirect()->route('product.index')->with('success','data inserted successfully'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=Product::find($id); 

        $crud->delete();
         
        return redirect()->route('product.index')->with('success','data deleted successfully'); 
    }

    public function getSubCategory(request $request)

    {

      $subcategories = Subcategory::where('category_id', $request->cat_id)->get(); 

      return response()->json($subcategories);  
    
    }
}
