@if( count($errors) )
	<div class="panel panel-danger">
		<div class="panel-heading">
			@foreach( $errors->all() as $error )
				<li>{{$error}}</li>
			@endforeach
		</div>
	</div>
@endif