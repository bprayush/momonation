@extends('layouts.app')

@section('content')
	
	@include('app.includes.sidepanel')

	<div class="col-md-8">
		<div class="panel panel-info">
			<div class="panel-heading">
				Activity
			</div>
			<div class="panel-body">
				<ul class="list-group">
					
					@if( count($appreciations) > 0 )
						@foreach( $appreciations as $appreciation )
							<li class="list-group-item">{!! $appreciation !!}</li>
						@endforeach
					@else
						<li class="list-group-item">No appreciations yet</li>
					@endif

				</ul>
			</div>
		</div>
	</div>
@endsection