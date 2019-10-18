<?php

namespace App\Http\Controllers;

use App\Repositories\Cid10RepositoryContract;
use App\Transformers\Cid10Transformer;
use App\Visitors;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function __construct(Cid10RepositoryContract $cid10Repository)
    {
        $this->cid10Repository = $cid10Repository;
    }


    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request){

        $visit = new Visitors;
        $visit->ip = $request->ip();
        $visit->end_point = 'cid10/';
        $visit->created_at = Carbon::now();
        $visit->save();

        $cids = fractal()
            ->collection($this->cid10Repository->all())
            ->transformWith(new Cid10Transformer());

        return response()->json($cids->toArray()['data']);

    }

    /**
     * @param Request $request
     * @param $codigo
     * @return array
     */
    public function show(Request $request, $codigo){

        $visit = new Visitors;
        $visit->ip = $request->ip();
        $visit->end_point = 'cid10/'. $codigo;
        $visit->created_at = Carbon::now();
        $visit->save();

        $cid = fractal($this->cid10Repository->find($codigo), new Cid10Transformer());

        return  response()->json($cid->toArray()['data']);

    }
}
