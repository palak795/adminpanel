<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">

    <title>Laravel Full Text Search Tutorial</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 

</head>

   <body>
    <div class="container">
        <h1>Laravel Full Text Search Tutorial</h1>
      <form method="GET" id="Clear" action="{{route('get.data')}}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search" >
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary">Search</button>
                    <a class="btn btn-secondary" id="reset" href="#">Reset</a>
                </div>
                <div class="col-md-6">
                </div>  
            </div>
        </form>
   <br/>
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>product_title</th>
                <th>product_name</th>
                <th>product_price</th>
                <th>product_description</th>
                <th>file</th>
                <th>product</th>
            </tr>

                @dd($cruds);

            
 

            <tr>
                <th>Id</th>
                <th>product_title</th>
                <th>product_name</th>
                <th>product_price</th>
                <th>product_description</th>
                <th>file</th>
                <th>product</th>
            </tr>


        </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

<script>

   document.getElementById("reset").addEventListener("click", function(event){
      event.preventDefault();
      window.location.href = "http://localhost/Adminpanel/public/index.php/get-data";
    });

</script>


    </div>
</body>
</html>