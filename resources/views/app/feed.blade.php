@extends('app.includes.app')

@section('title')
Momonation | Momo-Feed
@endsection

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="appreFeed">
			<h3 class="text-info" style="font-weight:bold;">
				Recent Appreciations
			</h3><br>
			<ul class="wow">
				<li>
					<i class="flaticon-dumpling text-secondary "></i>&nbsp;
					Prayush Bijukchhe appreciated Aakash Raj Dahal with 20 momos
				</li>
				<li>
					<i class="flaticon-dumpling text-secondary "></i>&nbsp;
					Animesh Pandey appreciated Prayush Bijukchhe with 30 momos
				</li>
				<li>
					<i class="flaticon-dumpling  text-secondary"></i>&nbsp;
					Aakash appreciated Prayush Bijukchhe with 20 momos
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-6">
		<h3 class="text-info" style="font-weight:bold;">
			Momonations News
		</h3><br>
		<ul class="wowNews">
			<li>
				You can now send the momos to everyone on the website
			</li>
			<li>
				To appreciate someone, you can simply search for the username and enter the amount of momos that you'd like to send to that person
			</li>
			<li>
				SFH is so dumb man... wtf
			</li>
		</ul>
	</div>
</div>

@endsection