<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->view = "dashboard.pages.kalender.";
    }

     public function index()
    {
        return view($this->view."index");
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
    public function show(Kalender $kalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalender $kalender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kalender $kalender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalender $kalender)
    {
        //
    }
}
