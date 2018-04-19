@extends('layouts.pixeladmin')

@section('content')
	@include('layouts.buttons')

	<ul>
	Current Price (EUR): <b>$ {{ round($bitcoin["price_eur"], 2) }}</b> <br>
	</ul>

	@include('layouts.pricechange')
@endsection