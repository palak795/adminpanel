@extends('layouts.main')

@section('content')

<style type="text/css">
    .show-on-desktop,
    .show-on-mobile{
        display: none;

    }
</style>

<div class="show-on-desktop">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard for desktop</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <form enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product_Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="product_title" name="product_title">
            </div>
            @error('product_title')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">product_Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product_Name" name="product_name">
            </div>
            @error('product_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">product_Price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product_price" name="product_price">
            </div>
            @error('product_price')
            <span class="text-danger">{{$message}}</span>
            @enderror 

            <div class="form-group">
                <label for="exampleInputPassword1">Product_Description</label>
                <textarea name = "product_description" cols= "10" rows = "5" class="form-control" id="exampleInputPassword1" placeholder="Product_Description"></textarea>
            </div>
            @error('product_description')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </div>

    </form>
</div>

<div class="show-on-mobile">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard for Mobile Screen</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <form enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product_Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="product_title" name="product_title">
            </div>
            @error('product_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label for="exampleInputPassword1">product_Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product_Name" name="product_name">
            </div>
            @error('product_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">product_Price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product_price" name="product_price">
            </div>
            @error('product_price')
            <span class="text-danger">{{$message}}</span>
            @enderror 
            <div class="form-group">
                <label for="exampleInputPassword1">Product_Description</label>
                <textarea name = "product_description" cols= "10" rows = "5" class="form-control" id="exampleInputPassword1" placeholder="Product_Description"></textarea>
            </div>
            @error('product_description')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </div>

    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">

    showForms();

    function showForms() {

        console.log($(window).width());    

        if ($(window).width() > 500) {

            $('.show-on-desktop').show();

            $('.show-on-mobile').hide();

        }else{

            $('.show-on-desktop').hide();

            $('.show-on-mobile').show();
        }
    }


    $(window).resize(function(){

        showForms();

    })
    
</script>

@endsection      
