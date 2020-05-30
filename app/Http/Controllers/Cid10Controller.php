<?php
/**
 * Created by Atila Silva.
 * Date: sáb, jan 2019 01:09:49
 */

namespace App\Http\Controllers;

use App\Repositories\Cid10RepositoryContract;

/**
 * Class Cid10Controller
 * @package App\Http\Controllers
 */
class Cid10Controller extends Controller
{
    /**
     * @var Cid10RepositoryContract
     */
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
     * @return mixed
     */
    public function index()
    {
        return $this->cid10Repository->all() ?? abort(404);
    }

    /**
     * @param $code
     * @return mixed
     */
    public function show($code)
    {
        return $this->cid10Repository->find($code) ?? abort(404);
    }
}
