<?php
/**
 * Created by Atila Silva.
 * Date: sáb, jan 2019 16:22:21 +0000.
 */

namespace App\Repositories;

use App\Cid10;

/**
 * Class Cid10DBRepository
 * @package App\Repositories
 */
class Cid10DBRepository implements Cid10RepositoryContract
{
    /**
     * Get all Cids10
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Cid10::get(['codigo' , 'nome']);
    }

    /**
     * Find Cid10
     * @param $code
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function find($code)
    {
        return Cid10::query()
            ->get(['codigo' , 'nome'])
            ->where('codigo' , '=' , $code)
            ->first();
    }
}
