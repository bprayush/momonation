@extends('admin.layouts.app')

@section('content')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Users
			</div>
			<div class="panel-body">
				@if ( ($users->count()) <= 0 )
					No registered users.
				@else
					<table class="table table-hover">
						<thead>
							<th>
								Image
							</th>
							<th>
								Name
							</th>
							<th>
								Raw
							</th>
							<th>
								Cooked
							</th>
							<th>
								Supervisor
							</th>
							<th>
								Delete
							</th>
						</thead>
						<tbody>
							@foreach( $users as $user )
								<tr>
									<td>
										<img src="{{ asset($user->profile->avatar) }}" width="50px" height="50px">
									</td>
									<td>
										{{ $user->name }}
									</td>
									<td>
										{{ $user->momobank['raw'] }}
									</td>
									<td>
										{{ $user->momobank['cooked'] }}
									</td>

									<td>
										@if( !$user->admin )
											@if( $user->supervisor )
												<a href="{{ route('revoke.supervisor', ['id' => $user->id]) }}" class="btn btn-danger btn-xs">Revoke</a>
											@else
												<a href="{{ route('make.supervisor', ['id' => $user->id]) }}" class="btn btn-success btn-xs">Make</a>
											@endif
										@endif
									</td>

									<td>
										@if( $user->id != 1 )
											@if( $user->id != Auth::id() )
												<a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger btn-xs">Delete</a>
											@endif
										@endif
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>

@endsection