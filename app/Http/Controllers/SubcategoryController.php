<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subcategory;

use App\Models\Category;

class SubcategoryController extends Controller

{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {
        $cruds = Subcategory::all();  
  
        return view('subcategory.index', compact('cruds'));  

    }

    /**
     * Show the form for creating a new resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */

    public function create()

    {


        $categories = Category::all();
        // dd($categories);

        return view('subcategory.create',compact('categories'));
    }

    /**
     * 
     * Store a newly created resource in storage.
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * 
     * @return \Illuminate\Http\Response
     * 
     */

    public function store(Request $request)

    {
        $this->validate($request,[
            
        'subcategory_name'  => 'required',
   
    ]);

    $crud = new Subcategory;

    $crud->subcategory_name = $request->get('subcategory_name');

    $crud->category_id = $request->get('category_id');

    $crud->save();

    return redirect()->route('subcategory.index')->with('success','data inserted successfully'); 


    }

    /**
     * 
     * Display the specified resource.
     * 
     *
     * @param  int  $id
     * 
     * 
     * @return \Illuminate\Http\Response
     * 
     */

    public function show($id)

    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */

    public function edit($id)

    {
    
    $sub_categories= Subcategory::find($id); 

    $categories = Category::all();

    return view('subcategory.edit', compact('sub_categories','categories')); 

    }

    /**
     * Update the specified resource in storage.
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * 
     * @param  int  $id
     * 
     * 
     * @return \Illuminate\Http\Response
     * 
     */

    public function update(Request $request, $id)

    {
       
       $this->validate($request,[
            
        'subcategory_name'  => 'required',
   
    ]);

    $sub_categories = Subcategory::find($id);

    $sub_categories->subcategory_name = $request->get('subcategory_name');

    $sub_categories->category_id = $request->get('category_id');

    $sub_categories->save();

    return redirect()->route('subcategory.index')->with('success','data updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        $crud=subCategory::find($id); 

        $crud->delete();
         
        return redirect()->route('subcategory.index')->with('success','data deleted successfully'); 
    }

}
