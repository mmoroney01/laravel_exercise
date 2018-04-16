@extends('layouts.app')

@section('content')
	<ul>
	Current Price of Bitcoin (USD): <b>$ {{ $bitcoinUSD["price_usd"] }}</b> <br>

	Price of Bitcoin over 1 Hour (USD): <b>$ {{ $bitcoinUSD["percent_change_1h"] }}</b>

	@if($bitcoinUSD["percent_change_1h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_1h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price of Bitcoin over 1 Day (USD): <b>$ {{ $bitcoinUSD["percent_change_24h"] }}</b> 

	@if($bitcoinUSD["percent_change_24h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_24h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price of Bitcoin over 1 Week (USD): <b>$ {{ $bitcoinUSD["percent_change_7d"] }}</b>

	@if($bitcoinUSD["percent_change_7d"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_7d"] < 0)
	  <span>&#8595;</span>
	@endif
	<br>

	@if(Auth::check())
	Current Price of Bitcoin (EUR): <b>$ {{ $bitcoinEUR["price_eur"] }}</b> <br>
	Current Price of Bitcoin (AUD): <b>$ {{ $bitcoinAUD["price_aud"] }}</b> <br>
	@endif
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

