<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:31:40 +0000.
 */

namespace App\Http\Controllers;

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

        if (isset($_GET['page'])){
            $perPage = (isset($_GET['perPage']) ? $_GET['perPage'] : 10);
            $cids = fractal()
                ->collection($this->cid10Repository->all()->forPage($_GET['page'] , $perPage))
                ->transformWith(new Cid10Transformer());
        }else{
            $cids = fractal()
                ->collection($this->cid10Repository->all())
                ->transformWith(new Cid10Transformer());
        }

        return response()->json($cids->toArray()['data']);

    }

    /**
     * @param $codigo
     * @return array
     */
    public function show($codigo){

        $cid = fractal($this->cid10Repository->find($codigo), new Cid10Transformer());

        return  response()->json($cid->toArray()['data']);

    }
}
