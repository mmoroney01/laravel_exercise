<ul>
	Price Change (1 Hour): <b>$ {{ $bitcoin["percent_change_1h"] }}</b>

	@if($bitcoin["percent_change_1h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_1h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price Change (24 Hours): <b>$ {{ $bitcoin["percent_change_24h"] }}</b> 

	@if($bitcoin["percent_change_24h"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_24h"] < 0)
	  <span>&#8595;</span>
	@endif

	<br>

	Price Change (7 Days): <b>$ {{ $bitcoin["percent_change_7d"] }}</b>

	@if($bitcoin["percent_change_7d"] > 0)
	  <span>&#8593;</span>
	@elseif($bitcoin["percent_change_7d"] < 0)
	  <span>&#8595;</span>
	@endif
</ul>