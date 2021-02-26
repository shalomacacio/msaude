<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CampanhaAgendamentoRepository;
use App\Entities\CampanhaAgendamento;
use App\Validators\CampanhaAgendamentoValidator;

/**
 * Class CampanhaAgendamentoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CampanhaAgendamentoRepositoryEloquent extends BaseRepository implements CampanhaAgendamentoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CampanhaAgendamento::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CampanhaAgendamentoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
