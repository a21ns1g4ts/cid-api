<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:22:21 +0000.
 */

namespace App\Repositories;

use App\Cid10;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * Class Cid10DBRepository
 * @package App\Repositories
 */
class Cid10DBRepository implements Cid10RepositoryContract
{

    /**
     * Retorna todas as doenças
     *
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all(){
        return Cid10::all();
    }

    /**
     * Retorna uma doença por código
     *
     * @param $codigo
     * @return Builder|Collection|mixed
     */
    public function find($codigo){
        return Cid10::query()->get(['codigo' , 'nome'])->where('codigo' , '=' , $codigo)->first();
    }
}
