@extends('layouts.pixeladmin')

@section('content')
	<ul>
	Current Price (EUR): <b>$ {{ round($bitcoin["price_eur"], 2) }}</b> <br>
	</ul>
	@include('price.pricechange')
@endsection