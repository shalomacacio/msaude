<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\CampanhaAgendamento;

/**
 * Class CampanhaAgendamentoTransformer.
 *
 * @package namespace App\Transformers;
 */
class CampanhaAgendamentoTransformer extends TransformerAbstract
{
    /**
     * Transform the CampanhaAgendamento entity.
     *
     * @param \App\Entities\CampanhaAgendamento $model
     *
     * @return array
     */
    public function transform(CampanhaAgendamento $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
