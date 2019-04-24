<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:22:21 +0000.
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * Class Cid10FileRepository
 * @package App\Repositories
 */
class Cid10FileRepository implements Cid10RepositoryContract
{

    /**
     * Retorna todas as doenças
     *
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all(){
        return $this->fileData();
    }

    /**
     * Retorna uma doença por código
     *
     * @param $codigo
     * @return Builder|Collection|mixed
     */
    public function find($codigo){
        return $this->getByCodeFromFile($codigo);
    }

    /**
     * @param $code
     * @return Collection
     */
    private function getByCodeFromFile($code){
        return collect($this->fileData())->where('codigo' , '=' , $code)->first();
    }

    /**
     * @return mixed
     */
    private function fileData(){
        return json_decode(file_get_contents(__BASE__.'/database/seeds/cid10.json'));
    }
}
