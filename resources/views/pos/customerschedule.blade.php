@extends('layouts.template')

@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show All Schedules</title>
</head>
<body>
<form action="{{route('customer.schedule',$package->id)}}" method="post">
@csrf


@foreach($schedule as $schedule)
<div class="row">
 <div class="col-md-10">
 <h1 class="text-center mx-3 bg-dark"> Schedules </h1>
  <div class="card-body">
    
<table>
<table class="table table-striped table-dark">
                  <thead>                  
                    <tr class="bg-primary" >
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
                      <td></td>
                      <td class="text-right"> <a class="btn btn-warning" href="{{route('booking.show',$schedule->id)}}"><i class="fas fa-book nav-icon"></i></a></td>
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