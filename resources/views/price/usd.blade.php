@extends('layouts.pixeladmin')

@section('content')
	@include('layouts.buttons')
	
	<ul>
	Current Price (USD): <b>$ {{ $bitcoin["price_usd"] }}</b> <br>
	</ul>

	@include('layouts.pricechange')
@endsection