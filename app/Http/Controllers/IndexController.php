<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;

class IndexController extends Controller
{
	public function index()
	{
		// Grab data from the API
		$bitcoinInfo = $this->getCryptoCurrencyInformation("bitcoin", "USD");

		// Include in the returned view
        return view("index", [
            "bitcoin" => $bitcoinInfo,
        ]);
	}

	public function show($type)
	{
		$bitcoinInfo = $this->getCryptoCurrencyInformation("bitcoin", "{$type}");

        return view("price/{$type}", [
            "bitcoin" => $bitcoinInfo,
        ]);
	}

    private function getCryptoCurrencyInformation($currencyId, $currencyType)
    {
        // Create a new Guzzle Plain Client
        $client = new Client();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://api.coinmarketcap.com/v1/ticker/$currencyId/?convert=$currencyType";

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

     private function getGuzzleFileCachedClient(){
        // Create a HandlerStack
        $stack = HandlerStack::create();

        // 10 minutes to keep the cache
        $TTL = 600;

        // Retrieve the cache folder path of your Laravel Project
        $cacheFolderPath = base_path() . "/bootstrap";
        
        // Instantiate the cache storage: a PSR-6 file system cache with 
        // a default lifetime of 10 minutes (60 seconds).
        $cache_storage = new Psr6CacheStorage(
            new FilesystemAdapter(
                // Create Folder GuzzleFileCache inside the providen cache folder path
                'GuzzleFileCache',
                $TTL, 
                $cacheFolderPath
            )
        );
        
        // Add Cache Method
        $stack->push(
            new CacheMiddleware(
                new GreedyCacheStrategy(
                    $cache_storage,
                    600 // the TTL in seconds
                )
            ), 
            'greedy-cache'
        );
        
        // Initialize the client with the handler option and return it
        return new Client(['handler' => $stack]);
    }
}
