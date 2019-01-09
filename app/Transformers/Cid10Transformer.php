<?php
/**
 * Created by PhpStorm.
 * User: atila
 * Date: 08/01/19
 * Time: 23:40
 */

namespace App\Transformers;

use App\Cid10;
use League\Fractal\TransformerAbstract;

/**
 * Class Cid10Transformer
 * @package App\Transformers
 */
class Cid10Transformer extends TransformerAbstract
{

    /**
     * @param Cid10 $cid10
     * @return array
     */
    public function transform(Cid10 $cid10)
    {
        return [
            'codigo' => $cid10->codigo,
            'nome' => $cid10->nome
        ];
    }

}