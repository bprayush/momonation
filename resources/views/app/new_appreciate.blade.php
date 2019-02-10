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
	<form action="{{ route('appreciate') }}" method="POST">
		{{ csrf_field() }}	
		<select name="appreciated_user" class="form-control boxee" required>
			<option>Select User to Appreciate</option>
			@foreach( $users as $usr )
				@if( $usr->id !== $user->id )
					<option value="{{ $usr->id }}">{{ $usr->name }}</option>
				@endif
			@endforeach
		</select><br>
		<input type="number" name="raw" class="form-control boxee" placeholder="Amount of momo" min="0" max="{{$user->momobank->raw}}" requried><br>
		<textarea name="name" id="" cols="30" rows="4" class="form-control boxeetext" placeholder="Enter Message" required></textarea><br>
		<button class="btn btn-info blueboi" type="submit">
			<i class="fas fa-thumbs-up"></i>&nbsp;
			Send Appreciation
		</button>
	</form>
</div>

@endsection