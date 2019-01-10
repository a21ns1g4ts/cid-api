<?php
/**
 * Created by PhpStorm.
 * User: atila
 * Date: 08/01/19
 * Time: 23:40
 */

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

/**
 * Class Cid10Transformer
 * @package App\Transformers
 */
class Cid10Transformer extends TransformerAbstract
{

    /**
     * @param \stdClass
     * @return array
     */
    public function transform($cid10)
    {
        return [
            'codigo' => $cid10->codigo,
            'nome' => $cid10->nome
        ];
    }

}