@extends('layouts.pixeladmin')

@section('content')
	<ul>
	Current Price (USD): <b>$ {{ $bitcoin["price_usd"] }}</b> <br>
	</ul>
	@include('price.pricechange')
@endsection