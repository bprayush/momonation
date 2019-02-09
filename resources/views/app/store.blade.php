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
		Your Cart (<label id="cartAmm">0</label>)
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
				<label contenteditable="true" id="amount" onfocusout="changePrice()" onKeypress="if(event.keyCode < 48 || event.keyCode > 57){return false;}">1&nbsp;&nbsp;</label>&nbsp;
				<div class="btn-group">
				  <button onclick="decreaseNumber('amount')"  type="button" class="btn btn-primary btn-sm">
				  	<i class="fas fa-angle-down"></i>
				  </button>
				  <button onclick="addNumber('amount')" type="button" class="btn btn-primary btn-sm">
				  	<i class="fas fa-angle-up"></i>
				  </button>
				</div>
			</td>
			<td>Rs. <label id="price">10</label></td>
			<td>
				<button onclick="addToCart()" class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
	</thead>
</table>

<button onclick="buyMomo()" class="btn greenclick float-right">
	Go to Checkout 
</button>

@endsection

@section('scripts')
<script src="https://khalti.com/static/khalti-checkout.js"></script>
	<script type="text/javascript">
		var checkout;
		let momos;
		let cart = [];
		function changePrice(){
			let text = parseInt($('#amount').text());
			price = text * 10;
			$('#price').text(price);
		}

		function addToCart(){
			let	price = parseInt($('#cartAmm').text());
			price += 1;
			let num = parseInt($('#amount').text());
			cart.push(num);
			$('#amount').text('1');
			$('#price').text('10');
			$('#cartAmm').text(price);
		}

		function addNumber(id){
			console.log($('#'+id));
			let text = parseInt($('#'+id).text());
			text += 1;
			let	price = parseInt($('#price').text());
			price += 10;
			$('#price').text(price);
			$('#'+id).text(text);
		}

		function decreaseNumber(id){
			let text = parseInt($('#'+id).text());
			if (text >=1) {
				text -= 1;
				let	price = parseInt($('#price').text());
				price -= 10;
				$('#price').text(price);
				$('#'+id).text(text);
			}
			
		}

		function buyMomo(){
			if (cart.length > 0) {
				momos = cart.reduce(function(a, b){
					return a + b;
				}, 0);
				// console.log(momos);
				let paisa = momos * 10 * 100;
				cart = [];
				$('#cartAmm').text('0');
				checkout = new KhaltiCheckout(config);
		        checkout.show({amount: paisa});
			}
			
	        
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
                    // console.log(payload);
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