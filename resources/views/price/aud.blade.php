@extends('layouts.pixeladmin')

@section('content')
	<ul>
	Current Price (AUD): <b>$ {{ round($bitcoin["price_aud"], 2) }}</b> <br>
	</ul>
	@include('price.pricechange')
@endsection