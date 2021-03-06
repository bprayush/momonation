@extends('app.includes.app')

@section('title')
    Momonation Dashboard
@endsection


@section('content')
<h5 class="text-info">Your Plate</h5>
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
            Appceciations
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-6">	
        <h5 class="text-info">Recent Activities</h5>
        <div class="boxes recents">
            @foreach($appreciations as $appreciation)
                {!! $appreciation !!}
                <hr>
            @endforeach
        </div>
    </div>
    <div class="col-md-6">
        <h5 class="text-info">Store</h5>
        <div class="boxes friends">
            <div class="row">
                <div class="col-md-6">
                    <div class="inwhite">
                        <div class="text-center">
                            <i class="flaticon-dumpling"></i>&nbsp; <br><br>
                            <h3>1 momo</h3>
                            <button class="btn btn-success greenclick">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inwhite">
                        <div class="text-center">
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i><br><br>
                            <h3>5 momos</h3>
                            <button class="btn btn-success greenclick">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="inwhite">
                        <div class="text-center">
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i><br>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i>
                            <i class="flaticon-dumpling"></i><br><br>
                            <h3>10 momos</h3>
                            <button class="btn btn-success greenclick">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection