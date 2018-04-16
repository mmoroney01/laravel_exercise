@extends('layouts.app')

@section('content')
	<ul>
	Current Price of Bitcoin (USD): <b>$ {{ $bitcoin["price_usd"] }}</b> <br>

	Price of Bitcoin over 1 Hour (USD): <b>$ {{ $bitcoin["percent_change_1h"] }}</b> 

	@if($bitcoin["percent_change_1h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_1h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price of Bitcoin over 1 Day (USD): <b>$ {{ $bitcoin["percent_change_24h"] }}</b> 

	@if($bitcoin["percent_change_24h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_24h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price of Bitcoin over 1 Week (USD): <b>$ {{ $bitcoin["percent_change_7d"] }}</b>

	@if($bitcoin["percent_change_7d"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_7d"] < 0)
	  <span>&#8595;</span>
	@endif
	<br>
	</ul>
@endsection

<!DOCTYPE html>
<html>

<head>
<title>Bitcoin Price</title>
</head>

<body>



</body>
</html>

