@extends('layouts.template')

@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show All Packages</title>
</head>
<body>
<form action="/pos/customerpackage" method="post">
@csrf


  @foreach($package as $package)
 <div class="row">
 <div class="col-md-10">
 <h1 class="text-center mx-3 bg-dark"> Packages </h1>
  <div class="card-body">
 
<table class="table table-striped table-dark">
                  <thead>                  
                    <tr class="bg-primary">
                      <th style="width:10px">No</th>
                      <th>Package</th>
                     
                    </tr>
                  </thead>

                  <tbody>
                 
                  <tr>
                  <td>1</td>
                      <td>  <img src="{{url($package->image)}}" width="50%" height="200px"/></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>{{$package->package_name}}</td>
                      
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>{{$package->route}}</td>
                     
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>{{$package->duration}}</td>
                    
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>{{$package->price}}</td>
                    </tr>
                    <tr>
                      <td></td>
                
                      <td class="text-right"><a class="btn btn-warning" href="{{route('customer.schedule',$package->id)}}"><i class="fas fa-arrow-circle-right nav-icon"></i></a></td>
                

                    </tr>
                 
                  </tbody>
                 
</table>            
</div>
                    
 </div>                 


</div>
@endforeach


             

</form>
</body>
</html>
@endsection