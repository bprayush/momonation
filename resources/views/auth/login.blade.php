<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Momonation</title>
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/momonation.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dumplings/flaticon.css')}}">
</head>

<body>
    <div class="wrap">
        <div class="row">
            <div class="col-md-6">
                <div class="message">
                    <h3>
                        <i class="flaticon-dumpling"></i>&nbsp;
                        momonation
                    </h3>
                    <div class="sloganlandingPage">
                       <i class="fas fa-quote-left"></i><br>
                       appreciation made easy <br>
                       <i class="fas fa-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="logger">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane container active" id="home">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <h2 class="text-info">Log In</h2>
                            <br>
                            <input name="email" value="{{ old('email') }}" type="text" class="form-control boxee" placeholder="Email"><br>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span><br>
                            @endif
                            <input type="password" name="password" class="form-control boxee" placeholder="Enter your password"><br>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span><br>
                            @endif
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp;
                            Keep me Signed In <br><br>
                            <button type="submit" class="btn btn-info blueboi">
                                <i class="fas fa-sign-in-alt"></i>&nbsp;
                                Log In
                            </button>
                        </form>
                        <br><br>
                        <hr><br>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h2 class="text-info">Register</h2><br>
                            <input type="text" name="name" value="{{ old('name') }}"  class="form-control boxee" placeholder="Your Full Name" required><br>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control boxee" placeholder="Your Email ID" required><br>
                            <input type="password" class="form-control boxee" placeholder="Enter Password" name="password" required><br>
                            <input type="password" class="form-control boxee" placeholder="Confirm Password" name="password_confirmation" required><br>
                            <button class="btn btn-info blueboi">
                                <i class="fas fa-user-plus"></i>&nbsp;
                                Register
                            </button>
                        </form>
                      </div>
                      <div class="tab-pane container fade" id="menu1">
                          <br><br>
                          <input type="text" class="form-control boxee" placeholder="Your Full Name"><br>
                          <input type="text" class="form-control boxee" placeholder="Your Email ID"><br>
                          <input type="password" class="form-control boxee" placeholder="Enter Password"><br>
                          <input type="password" class="form-control boxee" placeholder="Confirm Password"><br>
                          <input type="checkbox">&nbsp;
                          I agree to the Terms and Conditions <br><br>
                          <button class="btn btn-info blueboi">
                              <i class="fas fa-user-plus"></i>&nbsp;
                              Register
                          </button>
                      </div>
                    </div>
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
</body>
</html>