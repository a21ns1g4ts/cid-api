<?php

namespace App\Http\Controllers;

use App\Cid10;
use App\Transformers\Cid10Transformer;

/**
 * Class Cid10Controller
 * @package App\Http\Controllers
 */
class Cid10Controller extends Controller
{

    /**
     * @return array
     */
    public function index(){

        $cids = Cid10::all();

        return fractal($cids, new Cid10Transformer())->toArray();

    }

    /**
     * @param $codigo
     * @return array
     */
    public function show($codigo){

        $cid = Cid10::query()->get(['codigo' , 'nome'])->where('codigo' , '=' , $codigo);

        return  fractal($cid, new Cid10Transformer())->toArray();

    }
}
