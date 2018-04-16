@extends('layouts.app')

@section('content')
	
	@include('layouts.buttons')
	
	<ul>
	Current Price: <b>$ {{ $bitcoin["price_usd"] }}</b> <br>
	</ul>
	
	@include('layouts.pricechange')


@endsection