<html>
<head>
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://khalti.com/static/khalti-checkout.js"></script>
</head>
<body>
    ...
    <!-- Place this where you need payment button -->
    <button id="payment-button">Pay with Khalti</button>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
    	$(window).on('load', function(){
    		console.log('ads');
    	})
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_29955c7492e749b5bff4f354175f118e",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
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

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            checkout.show({amount: 1000});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>
</html>