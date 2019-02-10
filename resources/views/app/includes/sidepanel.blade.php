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
			<a href="{{ route('app.index') }}">
				<i class="fas fa-home"></i>&nbsp;
				Home
			</a>
		</li>
		<li>
			<a href="{{ route('momo-feed') }}">
				<i class="fas fa-newspaper"></i>&nbsp;
				Feed
			</a>
		</li>
		<li>
			<a href="{{ route('appreciation') }}">
				<i class="fas fa-thumbs-up"></i>&nbsp;
				Appreciate 
			</a>
		</li>
		<li>
			<a href="{{ route('store') }}">
				<i class="fas fa-store"></i>&nbsp;
				Store
			</a>
		</li>
		<li>
			<a href="{{ route('redeem.index') }}">
				<i class="fas fa-store"></i>&nbsp;
				Redeem
			</a>
		</li>
		<li>
			<a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
				<i class="fas fa-sign-out-alt"></i>&nbsp;
				Log Out
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    {{ csrf_field() }}
			</form>
		</li>
	</ul>
</nav>
