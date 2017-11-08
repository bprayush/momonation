@extends('admin.layouts.app')

@section('content')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Approve Users
			</div>
			<div class="panel-body">
				@if( $users->count() <= 0 )
					No users to approve.
				@else
					<table class="table table-hover">
						<thead>
							<th>
								Name
							</th>
							<th>
								Email
							</th>
							<th>
								Approve
							</th>
							<th>
								Disapprove
							</th>
						</thead>
						<tbody>
							@foreach( $users as $user )

							<tr>
								<td>
									{{ $user->name  }}
								</td>
								<td>
									{{ $user->email }}
								</td>
								<td>
									<a href="{{ route('user.approve', ['id' => $user->id]) }}" class="btn btn-success btn-xs">Approve</a>
								</td>
								<td>
									<a href="{{ route('user.disapprove', ['id' => $user->id]) }}" class="btn btn-danger btn-xs">Disapprove</a>
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
