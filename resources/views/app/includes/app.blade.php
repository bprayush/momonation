<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	
	<!-- FontAwesome CDN -->
	<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/momonation.css')}}" rel="stylesheet">
	<link href="{{asset('css/toastr.min.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{asset('dumplings/flaticon.css')}}">
	
</head>
<body>
	<body>
		<div class="wrapper">
			<!-- Sidebar Holder -->
			@include('app.includes.sidepanel')

			<!-- Page Content Holder -->
			<div id="content">
			</div>
			<div class="everything">
				<div class="navi">
					<span style="float:right;">
						<img src="https://media.licdn.com/dms/image/C4E03AQF6vlfnMgz5-Q/profile-displayphoto-shrink_200_200/0?e=1553126400&v=beta&t=Y5AI9X8Vq6T8kuRB4bqiUPfso_Ur64SDbYAD_1xoVPg" class="profile_pic">
						<button class="btn btn-info blueboi" data-toggle="modal" data-target="#money">
							<i class="fas fa-piggy-bank"></i>&nbsp;
							NPR. {{$user->budget}}
						</button>
					</span>
				</div>
				<div class="whiteman" style="margin-top:60px;">
					@include('app.includes.errors')
					@yield('content')
				</div>
			</div>
		</div>

		<!-- The Modal for Money-->
		<div class="modal fade" id="money">
		  <div class="modal-dialog modal-xl">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title text-info">
		        	<i class="fas fa-user"></i>&nbsp;
		        	Your Profile
		        </h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		        <div class="text-center">
		        	<img src="https://media.licdn.com/dms/image/C4E03AQF6vlfnMgz5-Q/profile-displayphoto-shrink_200_200/0?e=1553126400&v=beta&t=Y5AI9X8Vq6T8kuRB4bqiUPfso_Ur64SDbYAD_1xoVPg" class="profile_picmodal"><br>
		        	{{-- <span class="text-info">
		        		Prayush Bijukchhe
		        	</span><br><br> --}}
		        	<button class="btn btn-info blueboi" data-toggle="modal" data-target="#money">
		        		<i class="fas fa-piggy-bank"></i>&nbsp;
						{{ $user->budget }}
		        	</button> <br><br>
		        	<div class="row">
		        	    <div class="col-md-4">
		        	        <div class="boxes raw">
		        	            <span>
		        	                <i class="fas fa-drumstick-bite icon_stat"></i>&nbsp;
		        	            </span>
		        	            <span class="stat">
		        	                {{ $user->momobank->raw }}
		        	            </span>
		        	            Raw momos
		        	        </div>
		        	    </div>
		        	    <div class="col-md-4">
		        	        <div class="boxes cooked">
		        	            <span>
		        	                <i class="fas fa-fire icon_stat"></i>&nbsp;
		        	            </span>
		        	            <span class="stat">
		        	                {{ $user->momobank->cooked }}
		        	            </span>
		        	            Cooked momos
		        	        </div>
		        	    </div>
		        	    <div class="col-md-4">
		        	        <div class="boxes appreciations">
		        	            <span>
		        	                <i class="fas fa-thumbs-up icon_stat"></i>&nbsp;
		        	            </span>
		        	            <span class="stat">
		        	                {{ $user->appreciatedBy()->count() }}
		        	            </span>
		        	            Appreciations
		        	        </div>
		        	    </div>
		        	</div>
		        </div>
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-info blueboi" data-dismiss="modal">
		        	<i class="fas fa-times"></i>&nbsp;
		        	Close
		        </button>
		      </div>

		    </div>
		  </div>
		</div>

		<!-- Bootstrap 4 Dependencies -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		@yield('scripts')
		<script type="text/javascript">
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
		<script src="{{ asset('js/toastr.min.js') }}"></script>
		<script>
			@if( Session::has('success') )
				toastr.success("{{ Session::get('success') }}");
			@endif
			@if( Session::has('info') )
				toastr.info("{{ Session::get('info') }}")
			@endif
			@if( Session::has('error') )
				toastr.info("{{ Session::get('error') }}")
			@endif
		</script>
	</body>
</html>