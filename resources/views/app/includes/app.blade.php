<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- FontAwesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/momonation.css')}}" rel="stylesheet">
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
						<button class="btn btn-info blueboi">
							<i class="fas fa-piggy-bank"></i>&nbsp;
							NPR. 800
						</button>
					</span>
				</div>
				<div class="whiteman" style="margin-top:60px;">
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Bootstrap 4 Dependencies -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>
	</body>
</html>