<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use Illuminate\Http\Request;

class DashboardPastryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pastrys.index',[
            'pastrys' => Pastry::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pastry $pastry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pastry $pastry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pastry $pastry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pastry $pastry)
    {
        //
    }
}