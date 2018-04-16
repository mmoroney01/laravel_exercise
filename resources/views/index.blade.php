@extends('layouts.app')

@section('content')
	
	@if(Auth::check())

	<ul>
	<button><a href="{{ url('/usd') }}" id="usd-convert">USD</a></button>
	<button><a href="{{ url('/eur') }}" id="eur-convert">EUR</a></button>
	<button><a href="{{ url('/aud') }}" id="aud-convert">AUD</a></button>
	</ul>

	@endif

	<br>
	
	<ul>	
	Current Price in USD: <b>$ {{ $bitcoinUSD["price_usd"] }}</b> <br>

	Price Change (1 Hour): <b>$ {{ $bitcoinUSD["percent_change_1h"] }}</b>

	@if($bitcoinUSD["percent_change_1h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_1h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price Change (24 Hours): <b>$ {{ $bitcoinUSD["percent_change_24h"] }}</b> 

	@if($bitcoinUSD["percent_change_24h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_24h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price Change (7 Days): <b>$ {{ $bitcoinUSD["percent_change_7d"] }}</b>

	@if($bitcoinUSD["percent_change_7d"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoinUSD["percent_change_7d"] < 0)
	  <span>&#8595;</span>
	@endif
	<br>

	
	</ul>
@endsection