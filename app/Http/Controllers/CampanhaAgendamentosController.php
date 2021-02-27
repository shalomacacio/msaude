<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CampanhaAgendamentoCreateRequest;
use App\Http\Requests\CampanhaAgendamentoUpdateRequest;
use App\Repositories\CampanhaAgendamentoRepository;
use App\Validators\CampanhaAgendamentoValidator;

/**
 * Class CampanhaAgendamentosController.
 *
 * @package namespace App\Http\Controllers;
 */
class CampanhaAgendamentosController extends Controller
{
    /**
     * @var CampanhaAgendamentoRepository
     */
    protected $repository;

    /**
     * @var CampanhaAgendamentoValidator
     */
    protected $validator;

    /**
     * CampanhaAgendamentosController constructor.
     *
     * @param CampanhaAgendamentoRepository $repository
     * @param CampanhaAgendamentoValidator $validator
     */
    public function __construct(CampanhaAgendamentoRepository $repository, CampanhaAgendamentoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $campanhaAgendamentos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $campanhaAgendamentos,
            ]);
        }

        return view('campanhaAgendamentos.index', compact('campanhaAgendamentos'));
    }

    public function create(){
        return view('campanhas.agendamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CampanhaAgendamentoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CampanhaAgendamentoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $campanhaAgendamento = $this->repository->create($request->all());

            $response = [
                'message' => 'CampanhaAgendamento created.',
                'data'    => $campanhaAgendamento->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campanhaAgendamento = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $campanhaAgendamento,
            ]);
        }

        return view('campanhaAgendamentos.show', compact('campanhaAgendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campanhaAgendamento = $this->repository->find($id);

        return view('campanhaAgendamentos.edit', compact('campanhaAgendamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CampanhaAgendamentoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CampanhaAgendamentoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $campanhaAgendamento = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CampanhaAgendamento updated.',
                'data'    => $campanhaAgendamento->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'CampanhaAgendamento deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CampanhaAgendamento deleted.');
    }
}
