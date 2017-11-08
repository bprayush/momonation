<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			Welcome, {{ $user->name }}
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><a href="{{ route('app.index') }}">Dashboard</a></li>
				<li class="list-group-item"><a href="{{ route('appreciation') }}">Appreciate Someone</a></li>
				<li class="list-group-item">Appreciation History</li>
				<li class="list-group-item">My Profile</li>
			</ul>
		</div>
	</div>
</div>