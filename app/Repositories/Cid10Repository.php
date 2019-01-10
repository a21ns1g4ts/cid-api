<?php
/**
 * Created by PhpStorm.
 * User: atila
 * Date: 10/01/19
 * Time: 12:46
 */

namespace App\Repositories;

use App\Cid10;
use Illuminate\Support\Facades\DB;

/**
 * Class Cid10Repository
 * @package App\Repositories
 */
class Cid10Repository
{

    /**
     * @return Cid10[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all(){

        if ($this->verifyConnectDB() === false){

           return $this->getAllFromFile();

        }

        return Cid10::all();

    }

    /**
     * @param $codigo
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null
     */
    public function find($codigo){

        if ($this->verifyConnectDB() === false){

            return $this->getByCodeFromFile($codigo);

        }

        return Cid10::query()->get(['codigo' , 'nome'])->where('codigo' , '=' , $codigo);
    }

    /**
     * @param $code
     * @return \Illuminate\Support\Collection
     */
    private function getByCodeFromFile($code){

        return collect($this->fileData())->where('codigo' , '=' , $code);

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