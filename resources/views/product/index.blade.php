@extends('layouts.main')

@section('content')

<head>

    <style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/Adminpanel/public/index.php/product/create">Add</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

</div>

    <table class="center" border="1px">

<thead> 

<tr>

<td> <h1> ID </h1> </td>  

<td> <h1> Product_Name </h1> </td>

<td> <h1> Product_Price </h1> </td> 

<td> <h1> Category_id </h1> </td> 

<td> <h1> Subcategory_id </h1> </td> 

</tr> 

</thead>  

<tbody>  

@foreach($cruds as $crud) 

        <tr border="none"> 

            <td>{{$crud->id}}</td>  

            <td>{{$crud->product_name}}</td> 

            <td>{{$crud->product_price}}</td> 

            <td>{{$crud->Category->category_name}}</td> 

            <td>{{$crud->Subcategory->subcategory_name}}</td> 

<td> 

    <form action="{{ route('product.destroy', $crud->id)}}" method="post">

        @csrf 

                  @method('DELETE') 

                  
    <button class="btn btn-danger" type="submit">Delete</button>

</form>

</td>  

<td>  

<form action="{{ route('product.edit', $crud->id)}}" method="GET"> 

        @csrf  
                   
    <button class="btn btn-danger" type="submit">Edit</button> 


</form>

</td>  
  
        </tr>

@endforeach 

</tbody>  

</table>  

                
            </div>

@endsection      
           