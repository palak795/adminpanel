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

<form class="form" method="post" action="{{route('category.update',$crud->id)}}">

      @csrf

      @method('PATCH')    

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category_Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category_Name" name="category_name" value="{{$crud->category_name}}">
                  </div>

                   @error('category_name')
                          <span class="text-danger">{{$message}}</span>
                      @enderror

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-primary" name = "submit" value="submit">Update</button>

                </div>
              </form>
            </div>

@endsection      
            <!-- /.card -->