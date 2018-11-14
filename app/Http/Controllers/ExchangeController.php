<?php

namespace App\Http\Controllers;

use App\Exchange;
use Illuminate\Http\Request;
use App\Currency;
USE Goutte;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $currencies = Currency::all();
        $crawler = Goutte::request('GET', 'https://www.hsbc.com.mx/1/2/es/personas/divisas');
        $crawler->filter('.vdp_tableStyle tbody tr')->each(function($row) use($currencies){
            foreach ($currencies as $currency) {
                if ($currency->currency == trim($row->filter('td')->eq(0)->text())) {
                    $currency->exchanges()->create([
                        'buy' => trim(str_replace('$', '', $row->filter('td')->eq(1)->text())),
                        'sell' => trim(str_replace('$', '', $row->filter('td')->eq(2)->text())),
                    ]);
                }
            }
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function show(Exchange $exchange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function edit(Exchange $exchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exchange $exchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exchange $exchange)
    {
        //
    }
}
