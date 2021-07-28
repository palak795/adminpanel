@extends('layouts.main')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($errors->any())
<div class="alert alert-success">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="content-header">
    {{-- {{$subcategory->subcategory_name}} --}}
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="http://localhost/Adminpanel/public/index.php/product/create">Add</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<form class="form" method="post" action="{{route('product.store')}}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">Product_Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product_Name" name="product_name">
        </div>
        @error('product_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputPassword1">Product_Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product_Price" name="product_price">
        </div>
        @error('product_price')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="name">Category</label>
            <select id="categoryList" name="category_id" class="form-control">
                {{-- dd($categories); --}}
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">SubCategory</label>
            <select id="subcategoryList" name="subcategory_id" class="form-control">
                
            </select>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name = "submit" value="submit">Submit</button>
        </div>
</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
    
        headers: {
    
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
        }
    });
    
    $(document).ready(function () {
     
        $('#categoryList').on('change',function(e) {
         
         var cat_id = e.target.value;
        
         $.ajax({
               
               url:"{{ route('subcat') }}", 
               // url:'',
               type:"POST",
               data: {
                   cat_id: cat_id
                },
              
               success:function (data) {
                
                var html = '';

                for (var i = 0; i < data.length; i++) {
                    html += '<option value="'+data[i].id+'">'+data[i].subcategory_name+'</option>';
                   
                }
                
                $('#subcategoryList').html(html);
              
                       }
                   })
                });

            });

        



</script>




@endsection