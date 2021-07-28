@extends('layouts.main')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<div class="alert alert-success">
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
              <li class="breadcrumb-item"><a href="http://localhost/Adminpanel/public/index.php/category/create">Add</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

</div>

<form class="form" method="post" action="{{route('subcategory.update',
$sub_categories->id)}}">

      @csrf

      @method('PATCH')    

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subcategory_Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category_Name" name="subcategory_name" 
                    value="{{$sub_categories->subcategory_name}}">
                  </div>

                   @error('subcategory_name')
                          <span class="text-danger">{{$message}}</span>
                      @enderror

                <div class="form-group">
                  <label for="name">Category</label>
                    <select name="category_id" class="form-control">
                      @php
                        $selectedvalue = $sub_categories->category_id;
                      @endphp
                      @foreach($categories as $category)
                      
                        <option value="{{$category->id}}" {{ $selectedvalue == $category->id ? 'selected = "selected"' : '' }}>{{$category->category_name}}</option>
                      @endforeach

                    </select>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-primary" name = "submit" value="submit">Update</button>

                </div>
              </form>
            </div>

@endsection      
            <!-- /.card -->