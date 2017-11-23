<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $chart = Charts::create('line', 'highcharts')
            ->setView('custom.line.chart.view') // Use this if you want to use your own template
            ->setTitle('My nice chart')
            ->setLabels(['First', 'Second', 'Third'])
            ->setValues([5,10,20])
            ->setDimensions(1000,500)
            ->setResponsive(false);
        return view('test', ['chart' => $chart]);
    }
}
