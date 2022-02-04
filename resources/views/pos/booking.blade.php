@extends('layouts.template')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
    <form action="{{route('booking.show')}}" method="post">
    @csrf
<div class="input-group mb-3">

</div>
         <div class="input-group mb-3">                
          <input type="number" class="form-control" name="ticket" placeholder="Ticket">
          <input type="hidden" name="schedule_id"/>
          </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Total_Price" name="total_price"> 
        </div>
    
        <div class="row">
          <div class="col-10">

          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Booking</button>
          </div>
          <!-- /.col -->
        </div>
</form>
</body>
</html>
@endsection