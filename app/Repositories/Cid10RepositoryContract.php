<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:27:5 +0000.
 */

namespace App\Repositories;

/**
 * Interface Cid10RepositoryContract
 * @package App\Repositories
 */
interface Cid10RepositoryContract
{
    /**
     * Obtém todas as doenças
     *
     * @return mixed
     */
    public function all();

    /**
     * Obtém doença por código
     *
     * @param $codigo
     * @return mixed
     */
    public function find($codigo);
}