@extends('layouts.template')

@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show All Packages</title>
</head>
<body>
<form action="/pos/show" method="post">
@csrf

<div class="row">

  <div class="col-md-6">
  @foreach($package as $package)
 
  <div class="card-body">
 
<table class="table table-striped table-dark ">
                  <thead>                  
                    <tr>
                      <th style="width:10px">No</th>
                      <th>Package</th>
                   
                    </tr>
                  </thead>

                  <tbody>
                 
                  <tr>
                  <td>1</td>
                      <td>  <img src="{{url($package->image)}}" width="70%" height="120px"/></td>
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
                   <td>  <a class="btn btn-primary" href="/pos/editpackage/{{$package->id}}"> <i class="fas fa-pencil-alt nav-icon"></i></a></td>
                   <td class="text-right"> 
                   
                    <a class="btn btn-danger" href="/package-delete/{{$package->id}}"><i class="fas fa-trash nav-icon"></i></a>
                  </td>
                 </tr>

                  </tbody>
                 
</table>          
                    

</div>
@endforeach
</div>


<div class="col-md-6">
@foreach($schedule as $schedule)
  <div class="card-body">
  
<table>
<table class="table table-striped table-dark">
                  <thead>                  
                    <tr>
                      <th style="width:10px">No</th>
                      <th>Schedule</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                
                    <tr>
                      <td>6</td>
                      <td>{{$schedule->hotel_name}}</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>{{$schedule->bus}}</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>{{$schedule->hotel_name}}</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>{{$schedule->depature_date}}</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>{{$schedule->depature_time}}</td>
                    </tr>
          
                  <tr>
                      <td>11</td>
                      <td>{{$schedule->total_seat}}</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>{{$schedule->available_seat}}</td>
                    </tr>
                    <tr>
                      <td><a class="btn btn-primary" href="/pos/editschedule/{{$schedule->id}}"><i class="fas fa-pencil-alt nav-icon"></i></a></td>
                      <td class="text-right">
                      <a class="btn btn-danger" href="/schedule-delete/{{$schedule->id}}">  <i class="fas fa-trash nav-icon"></i></a> 
                      </td>
                      
                    </tr>
               
              </tbody>          
</table>
                
                       
</div>
@endforeach
</div>

</div>

             

</form>
</body>
</html>
@endsection