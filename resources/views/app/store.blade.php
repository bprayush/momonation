@extends('app.includes.app')

@section('title')
Momonation | Store
@endsection

@section('content')

<h3 class="text-info">&nbsp;
	<i class="fas fa-store"></i>&nbsp;
	Store
</h3>
<h6 class="text-info float-right">
	<a href="#" data-toggle="modal" data-target="#myCart">
		Your Cart (0)
	</a>
</h6>
<br>
<table class="table table.hover">
	<thead>
		<tr>
			<th>Momo</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Buy </th>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>
				1&nbsp;&nbsp;&nbsp;
				<div class="btn-group">
				  <button type="button" class="btn btn-primary btn-sm">
				  	<i class="fas fa-angle-down"></i>
				  </button>
				  <button type="button" class="btn btn-primary btn-sm">
				  	<i class="fas fa-angle-up"></i>
				  </button>
				</div>
			</td>
			<td>Rs. 8</td>
			<td>
				<button onclick="buyMomo(10)" class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
	</thead>
</table>

<a href="{{route('checkout')}}" class="btn greenclick float-right">
	Go to Checkout 
</a>

@endsection

@section('scripts')
<script src="https://khalti.com/static/khalti-checkout.js"></script>
	<script type="text/javascript">
		var checkout;
		let momos;
		$(window).on('load', function(){
    		console.log('ads');
    	});
		function buyMomo(amnt){
			momos = amnt/10;
			let paisa = amnt * 100;
			checkout = new KhaltiCheckout(config);
	        checkout.show({amount: paisa});
	        
		}

		var config = {
            // replace the publicKey with yours
            "publicKey": "{{config('envKeys.khalti_keys.public_key')}}",
            "productIdentity": "1234567890",
            "productName": "MoMo",
            "productUrl": "http://example.com",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    sendAjax(payload, momos);
                    
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

       function sendAjax(payload, momos){
	       	$.ajax({
        		type: "post",
	            url: "{{ route('verify.khalti.transaction') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            	payload: payload, momos: momos
	            },
	            
	            success: function (s){
	            	console.log(s);
	            },
	            error: function(e){
	            	console.log(e);
	            	toastr.error('Something went wrong');

	        	}
		    });
       }
	</script>
@endsection