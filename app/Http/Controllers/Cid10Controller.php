<?php

namespace App\Http\Controllers;

use App\Cid10;
use App\Transformers\Cid10Transformer;

class Cid10Controller extends Controller
{

    public function index(){

        $cids = Cid10::all();

        return fractal($cids, new Cid10Transformer())->toArray();

    }

    public function show($codigo){

        $cid = Cid10::query()->get(['codigo' , 'nome'])->where('codigo' , '=' , $codigo);

        return  fractal($cid, new Cid10Transformer())->toArray();

    }
}
