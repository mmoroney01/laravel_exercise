@extends('layouts.pixeladmin')

@section('content')
	@include('layouts.buttons')
	
	<ul>
	Current Price (AUD): <b>$ {{ round($bitcoin["price_aud"], 2) }}</b> <br>
	</ul>

	@include('layouts.pricechange')
@endsection