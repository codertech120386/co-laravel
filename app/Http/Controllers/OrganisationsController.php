<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class OrganisationsController extends Controller
{
    public function store()
    {

        Cache::put(request('oragnisationName'), json_encode([
            'oragnisationName' => request('oragnisationName'),
            'currency' => request('currency')
        ]));

        return Cache::get(request('oragnisationName'));
    }

    public function fetch()
    {
        return Cache::get(request('name'));
    }
}
