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
        <div class="text-center">
            <br><br><br><br><br>
            <div class="redeem">
                <h2 class="text-center text-info">Redeem a Mo:Mo of your choice</h2>
                <span class="float-right">
                    <a href="#">
                        Your Points ({{ $user->momobank->cooked }})
                    </a>
                </span><br><br>
                @if( $user->momobank->cooked < 200 )
                    <h5 style="color: red">You do not have sufficeint funds to redeem (min. 200 cooked mo:mo requried)</h5>
                @else
                    <button class="btn btn-info blueboi">
                        Redeem
                    </button><br><br><br>
                @endif
                <i><strong>OR</strong></i> <br><br>
                <h2 class="text-info">
                    Donate to Charity
                </h2>
                <br><br>
                <input type="number" placeholder="Enter Amount" class="form-control boxee" style="margin-left:auto;margin-right:auto;"><br>
                <a href="{{ route('charity') }}" class="btn btn-info blueboi">
                    Donate
                </a>
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