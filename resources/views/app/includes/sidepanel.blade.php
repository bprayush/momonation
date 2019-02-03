{{-- <div class="col-md-4">
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
</div> --}}

<nav id="sidebar">
	<div class="sidebar-header">
		<h3 class="logo">
			<i class="flaticon-dumpling"></i>
			momonation
		</h3>
		<h6 class="slogan">12k+ momos eaten</h6>
	</div>

	<ul class="list-unstyled components">
		<li>
			<a href="#">
				<i class="fas fa-home"></i>&nbsp;
				Home
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fas fa-newspaper"></i>&nbsp;
				Feed
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fas fa-thumbs-up"></i>&nbsp;
				Appreciate
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fas fa-store"></i>&nbsp;
				Store
			</a>
		</li>
	</ul>
</nav>