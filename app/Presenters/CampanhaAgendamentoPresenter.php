<?php

namespace App\Presenters;

use App\Transformers\CampanhaAgendamentoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CampanhaAgendamentoPresenter.
 *
 * @package namespace App\Presenters;
 */
class CampanhaAgendamentoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CampanhaAgendamentoTransformer();
    }
}
