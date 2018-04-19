@extends('layouts.pixeladmin')

@section('content')
    <ul>
    Current Price: <b>$ {{ $bitcoin["price_usd"] }}</b> <br>
    </ul>
    @include('price.pricechange')
@endsection


