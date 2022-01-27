<?php

namespace App\Http\Controllers;

use App\Models\Jelo;
use Illuminate\Http\Request;

class JeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //dohvacanje svih modela tog tipa
    //npr /jelos
    public function index()
    {
        return Jelo::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $jelo = Jelo::create(['manufacturer' => $request->manufacturer, 'year' => $request->year, 'jelo_model' => $request->jelo_model, 'user_id' => $request->user_id]);

        return $jelo;
    }
    //kreiranje modela, POST na /jelos

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jelo  $jelo
     * @return \Illuminate\Http\Response
     */
    public function show(Jelo $jelo)
    {
        return $jelo;

    }

    //dohvacanje pojedinacnog jela

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jelo  $jelo
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Jelo $jelo)
    {
        $jelo = Jelo::create(['manufacturer' => $request->manufacturer, 'year' => $request->year, 'jelo_model' => $request->jelo_model, 'user_id' => $request->user_id]);

        return $jelo;
    }

    //
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jelo  $jelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jelo $jelo)
    {
        return $jelo->delete();

    }
}
