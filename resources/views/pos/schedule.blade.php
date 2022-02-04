@extends('layouts.template')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Register</title>
</head>
<body>

<form action="/pos/schedule" method="post">

@csrf
<div class="input-group mb-3">
          <input type="text" class="form-control" name="hotel_name" placeholder="Hotel name">
          <input type="hidden" name="user_id"/>
          
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Bus" name="bus">
       
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Date"  name="depature_date">
   
        </div>
        <div class="input-group mb-3">
          <input type="time" class="form-control" placeholder="Time"  name="depature_time">
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Total Seat"  name="total_seat">
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Available Seat"  name="available_seat">
        </div>
        <div class="row">
          <div class="col-10">

          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Click</button>
          </div>
          <!-- /.col -->
        </div>

</form>
</body>
</html>
@endsection