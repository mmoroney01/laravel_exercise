<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    public function getPrice()
    {
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
		$client->getTickers();
		$client->getTicker('bitcoin');
		$client->getExchangeRate('ethereum', 'USD');
		$client->convertToFiat(10, 'ethereum', 'USD');
		$client->convertToCrypto(10, 'USD', 'ethereum');
		$client->getGlobals();

		return view('bitcoin/price', [
            'client' => $client,
        ]);

    }

}
