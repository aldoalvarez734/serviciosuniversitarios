<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestamo;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamoq = prestamo::all();

        return $prestamoq;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prestamoq = prestamo::create([
            'matricula_id' => '20160316',
            'oficina_id' => '2',
            'costo' => '0',
            'fecha_prestamo' => '2020-11-30 16:00:00',
            'hora_prestamo' => '2020-11-30 16:00:00',
            'fecha_prestamo_fin' => '2020-11-30 17:00:00',
            'hora_prestamo_fin' => '2020-11-30 17:00:00'
        ]);

        return $prestamoq;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
