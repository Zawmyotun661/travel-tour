@extends('layouts.template')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Package</title>
</head>
<body>

<form action="{{route('package.update',$package->id)}}"  method="Post" enctype="multipart/form-data">
@csrf
@method('patch')
<div class="input-group mb-3">
          <input type="text" class="form-control" name="package_name" placeholder="Package name"/>
          <input type="hidden" name="user_id" value="{{$user_id}}" />
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Route" name="route"/>
       
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Duration"  name="duration"/>
   
        </div>
        <div class="input-group mb-3">
          <input type="fload" class="form-control" placeholder="Price"  name="price" />
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" placeholder="Image"  name="image"/>
        </div>
        <div class="row">
          <div class="col-10">

          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-danger btn-inline-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

  
  
</body>
</html>
@endsection