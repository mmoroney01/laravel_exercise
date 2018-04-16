@if(Auth::check())
	<ul>
	<button><a href="{{ url('/usd') }}" id="usd-convert">USD</a></button>
	<button><a href="{{ url('/eur') }}" id="eur-convert">EUR</a></button>
	<button><a href="{{ url('/aud') }}" id="aud-convert">AUD</a></button>
	</ul>
@endif