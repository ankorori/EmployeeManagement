<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePCosRequest;
use App\Http\Requests\UpdatePCosRequest;
use App\Repositories\PCosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PCosController extends AppBaseController
{
    /** @var  PCosRepository */
    private $pCosRepository;

    public function __construct(PCosRepository $pCosRepo)
    {
        $this->pCosRepository = $pCosRepo;
    }

    /**
     * Display a listing of the PCos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pCos = $this->pCosRepository->all();

        return view('p_cos.index')
            ->with('pCos', $pCos);
    }

    /**
     * Show the form for creating a new PCos.
     *
     * @return Response
     */
    public function create()
    {
        return view('p_cos.create');
    }

    /**
     * Store a newly created PCos in storage.
     *
     * @param CreatePCosRequest $request
     *
     * @return Response
     */
    public function store(CreatePCosRequest $request)
    {
        $input = $request->all();

        $pCos = $this->pCosRepository->create($input);

        Flash::success('P Cos saved successfully.');

        return redirect(route('pCos.index'));
    }

    /**
     * Display the specified PCos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pCos = $this->pCosRepository->find($id);

        if (empty($pCos)) {
            Flash::error('P Cos not found');

            return redirect(route('pCos.index'));
        }

        return view('p_cos.show')->with('pCos', $pCos);
    }

    /**
     * Show the form for editing the specified PCos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pCos = $this->pCosRepository->find($id);

        if (empty($pCos)) {
            Flash::error('P Cos not found');

            return redirect(route('pCos.index'));
        }

        return view('p_cos.edit')->with('pCos', $pCos);
    }

    /**
     * Update the specified PCos in storage.
     *
     * @param int $id
     * @param UpdatePCosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePCosRequest $request)
    {
        $pCos = $this->pCosRepository->find($id);

        if (empty($pCos)) {
            Flash::error('P Cos not found');

            return redirect(route('pCos.index'));
        }

        $pCos = $this->pCosRepository->update($request->all(), $id);

        Flash::success('P Cos updated successfully.');

        return redirect(route('pCos.index'));
    }

    /**
     * Remove the specified PCos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pCos = $this->pCosRepository->find($id);

        if (empty($pCos)) {
            Flash::error('P Cos not found');

            return redirect(route('pCos.index'));
        }

        $this->pCosRepository->delete($id);

        Flash::success('P Cos deleted successfully.');

        return redirect(route('pCos.index'));
    }
}
