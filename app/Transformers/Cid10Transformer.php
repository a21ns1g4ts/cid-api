<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 17:7:46 +0000.
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