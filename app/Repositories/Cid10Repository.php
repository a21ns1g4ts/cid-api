<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:22:21 +0000.
 */

namespace App\Repositories;

use App\Cid10;
use Illuminate\Support\Facades\DB;

/**
 * Class Cid10Repository
 * @package App\Repositories
 */
class Cid10Repository implements Cid10RepositoryContract
{

    /**
     * Retorna todas as doenças
     *
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all(){

        if ($this->verifyConnectDB() === false){

           return $this->getAllFromFile();

        }

        return Cid10::all();

    }

    /**
     * Retorna uma doença por código
     *
     * @param $codigo
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Support\Collection|mixed
     */
    public function find($codigo){

        if ($this->verifyConnectDB() === false){

            return $this->getByCodeFromFile($codigo);

        }

        return Cid10::query()->get(['codigo' , 'nome'])->where('codigo' , '=' , $codigo)->first();
    }

    /**
     * @param $code
     * @return \Illuminate\Support\Collection
     */
    private function getByCodeFromFile($code){

        return collect($this->fileData())->where('codigo' , '=' , $code)->first();

    }

    /**
     * @return mixed
     */
    private function getAllFromFile(){

        return $this->fileData();

    }

    /**
     * @return mixed
     */
    private function fileData(){

        return json_decode(file_get_contents(__BASE__.'/database/seeds/cid10.json'));

    }

    /**
     * @return bool
     */
    private function verifyConnectDB(){

        try{

            DB::connection()->getPdo();

            return true;

        }catch(\Exception $e){

            return false;

        }

    }
}