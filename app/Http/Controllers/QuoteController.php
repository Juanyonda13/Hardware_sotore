<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Quote;
use App\Models\Waytopay;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::simplePaginate(2);
        return view('Quote.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::All();
        $waytopays = Waytopay::All();
        return view('Quote.create',compact('employees', 'waytopays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = new Quote;
        $quote->hora_programada = $request->hora_programada;
        $quote->hora_inicio = $request->hora_inicio;
        $quote->hora_fin = $request->hora_fin;
        $quote->tiempo_total = $request->tiempo_total;
        $quote->total_pago = $request->total_pago;
        $quote->waytopay_id = $request->waytopay_id;
        $quote->employee_id = $request->employee_id;
        $quote->save();
        return redirect()->route('quote.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
