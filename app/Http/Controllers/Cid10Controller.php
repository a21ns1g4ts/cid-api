<?php

namespace App\Http\Controllers;

use App\Cid10;
use App\Repositories\Cid10Repository;
use App\Transformers\Cid10Transformer;

/**
 * Class Cid10Controller
 * @package App\Http\Controllers
 */
class Cid10Controller extends Controller
{

    private $cid10Repository;

    /**
     * Cid10Controller constructor.
     * @param $cid10Repository
     */
    public function __construct(Cid10Repository $cid10Repository)
    {
        $this->cid10Repository = $cid10Repository;
    }


    /**
     * @return array
     */
    public function index(){

       return fractal($this->cid10Repository->all(), new Cid10Transformer())->toArray();

    }

    /**
     * @param $codigo
     * @return array
     */
    public function show($codigo){

        $cid = $this->cid10Repository->find($codigo);

        return  fractal($cid, new Cid10Transformer())->toArray();

    }
}
