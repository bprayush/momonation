@extends('layouts.app')

@section('content')

	@include('app.includes.sidepanel')

	<div class="col-md-8">

		@include('app.includes.errors')

		<div class="panel panel-default">
			<div class="panel-heading">
				Appreciation Form
			</div>
			<div class="panel-body">
				<form action="{{ route('appreciate') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="apprname">Name your appreciation</label>
						<input type="text" name="name" class="form-control" placeholder="Appreciation Name">
					</div>
					<div class="form-group">
						<label for="appreciate">Appreciate</label>
						<select class="form-control" id="Appreciate" name="appreciated_user">
							@foreach( $users as $usr )
								@if( $usr->id !== $user->id )
									<option value="{{ $usr->id }}">{{ $usr->name }}</option>
								@endif
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="Momo Amount">MoMo amount</label>
						<select class="form-control" id="MoMo amount" name="raw">
							<option value="">Select Number of MoMo</option>
							<option value="5">Half Plate</option>
							<option value="10">One Plate</option>
							<option value="20">Two Plate</option>
						</select>
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">Appreciate</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection