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

class BitcoinController extends Controller
{



}
