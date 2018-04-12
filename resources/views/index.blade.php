@extends('layouts.app')

<!DOCTYPE html>
<html>

<head>
<title>Bitcoin Price</title>
</head>

<body>

Price of the Bitcoin (USD): <b>$ {{ $bitcoin["price_usd"] }}</b> <br>

{{-- Dump the entire arrays into the view --}}
{{dd($bitcoin)}}

{{dd($ethereum)}}

</body>
</html>