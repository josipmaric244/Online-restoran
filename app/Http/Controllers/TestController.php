<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{
    public function getJela(Request $request){

        $jela = ['bolognese', 'zagrebacki'];
        return $jela;
    }
    public function getJelo(Request $request, $id){
        dd($id);       //dumpanje varijabli
    }
}

