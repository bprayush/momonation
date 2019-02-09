@extends('app.includes.app')

@section('title')
Momonation | Appreciate
@endsection

@section('content')

<h3 class="text-info">
	<i class="fas fa-thumbs-up"></i>&nbsp;
	Appreciate
</h3>

<div style="margin-top:40px;">
	<input type="text" class="form-control boxee" placeholder="Username or email"><br>
	<input type="number" class="form-control boxee" placeholder="Amount of momo"><br>
	<textarea name="" id="" cols="30" rows="4" class="form-control boxeetext" placeholder="Enter Message"></textarea><br>
	<button class="btn btn-info blueboi">
		<i class="fas fa-thumbs-up"></i>&nbsp;
		Send Appreciation
	</button>
</div>

@endsection