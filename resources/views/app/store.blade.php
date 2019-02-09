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
			<th>Amount</th>
			<th>Buy </th>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>1</td>
			<td>Rs. 10</td>
			<td>
				<button onclick="buyMomo(10)" class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>5</td>
			<td>Rs. 50</td>
			<td>
				<button class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>10</td>
			<td>Rs. 100</td>
			<td>
				<button class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>20</td>
			<td>Rs. 200</td>
			<td>
				<button class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
		<tr>
			<td>Raw Momo</td>
			<td>30</td>
			<td>Rs. 300</td>
			<td>
				<button class="btn btn-sm greenclick">
					<i class="fas fa-plus"></i>&nbsp;
					Add to Cart
				</button>
			</td>
		</tr>
		<tr style="font-weight: bold;">
			<td>Total</td>
			<td></td>
			<td>Rs. 1000</td>
		</tr>
	</thead>
</table>

<a href="{{route('checkout')}}" class="btn greenclick float-right">
	Go to Checkout 
</a>


<!-- The Modal for Viewing the Cart-->
<div class="modal fade" id="myCart">
  <div class="modal-dialog modal-lg"">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-info">
        	<i class="fas fa-shopping-cart"></i>&nbsp;
        	Your Cart
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Your cart has the following items
        <table class="table">
        	<tr>
        		<th>Momo</th>
        		<th>Quantity</th>
        		<th>Amount</th>
        		<th></th>
        	</tr>
        	<tr>
				<td>Raw Momo</td>
				<td>1</td>
				<td>Rs. 10</td>
				<td>
					<div class="btn-group btn-sm">
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-plus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-minus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-trash"></i>
					  </button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Raw Momo</td>
				<td>5</td>
				<td>Rs. 50</td>
				<td>
					<div class="btn-group btn-sm">
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-plus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-minus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-trash"></i>
					  </button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Raw Momo</td>
				<td>10</td>
				<td>Rs. 100</td>
				<td>
					<div class="btn-group btn-sm">
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-plus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-minus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-trash"></i>
					  </button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Raw Momo</td>
				<td>20</td>
				<td>Rs. 200</td>
				<td>
					<div class="btn-group btn-sm">
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-plus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-minus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-trash"></i>
					  </button>
					</div>
				</td>
			</tr>
			<tr>
				<td>Raw Momo</td>
				<td>30</td>
				<td>Rs. 300</td>
				<td>
					<div class="btn-group btn-sm">
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-plus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-minus"></i>
					  </button>
					  <button type="button" class="btn btn-primary btn-sm">
					  	<i class="fas fa-trash"></i>
					  </button>
					</div>
				</td>
			</tr>
			<tr style="font-weight: bold;">
				<td>Total</td>
				<td></td>
				<td>Total: 1000</td>
				<td></td>
			</tr>
        </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="{{route('checkout')}}" type="button" class="btn btn-info blueboi">
        	Proceed to Checkout
        </a>
      </div>

    </div>
  </div>
</div>

@endsection

@section('scripts')
<script src="https://khalti.com/static/khalti-checkout.js"></script>
	<script type="text/javascript">
		var checkout;
		function buyMomo(amnt){
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
                    $.ajax({
		        		type: "post",
			            url: "{{ route('verify.khalti') }}",
			            headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			            },
			            data: { _token : $('meta[name="csrf-token"]').attr('content'),
			            	payload: payload
			            },
			            
			            success: function (s){
			            	console.log(s);
			            },
			            error: function(e){
			            	console.log(e);
			            	toastr.error('Something went wrong');

			        	}
	        		});
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

       
	</script>
@endsection