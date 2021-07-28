<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {
        $cruds = Category::all();  
  
        return view('profiles.index', compact('cruds'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()

    {
        return view('profiles.insert');
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
            
        'category_name'  => 'required',

   
    ]);

    $crud = new Category;

    $crud->category_name = $request->get('category_name');

    $crud->save();

    return redirect()->route('category.index')->with('success','data inserted successfully'); 


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

    $crud= Category::find($id); 

    return view('profiles.edit', compact('crud'));  
    
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
            
        'category_name'  => 'required',

   
    ]);

        $crud = Category::find($id);

        $crud->category_name = $request->get('category_name');

        $crud->save();

    return redirect()->route('category.index')->with('success','data Updated successfully'); 
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $crud=Category::find($id); 

        $crud->delete();
         
        return redirect()->route('category.index')->with('success','data deleted successfully');  
    }

}
