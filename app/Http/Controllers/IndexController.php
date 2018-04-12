<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
	public function show()
    {
        // Retrieve information about the bitcoin currency
        $bitcoinInfo = $this->getCryptoCurrencyInformation("bitcoin");


        // And so on with more than 1010 cryptocurrencies ...

        // Return a view as response (default.blade.php)
        return view("index", [
            "bitcoin" => $bitcoinInfo
        ]);
    }

    private function getCryptoCurrencyInformation($currencyId, $convertCurrency = "USD"){
        // Create a new Guzzle Plain Client
        $client = new Client();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://api.coinmarketcap.com/v1/ticker/$currencyId/?convert=$convertCurrency";

        // Execute the request
        $singleCurrencyRequest = $client->request('GET', $requestURL);
        
        // Obtain the body into an array format.
        $body = json_decode($singleCurrencyRequest->getBody() , true)[0];

        // If there were some error on the request, throw the exception
        if(array_key_exists("error" , $body)){
            throw $this->createNotFoundException(sprintf('Currency Information Request Error: $s', $body["error"]));
        }

        // Returns the array with information about the desired currency
        return $body;
    }

    // public function show(){
    // 	return view("index");
    // }
}
