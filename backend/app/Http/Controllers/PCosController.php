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
    private $pcosRepository;

    public function __construct(PCosRepository $pcosRepo)
    {
        $this->pcosRepository = $pcosRepo;
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
        $pcos = $this->pcosRepository->all();

        return view('pcos.index')
            ->with('pcos', $pcos);
    }

    /**
     * Show the form for creating a new PCos.
     *
     * @return Response
     */
    public function create()
    {
        return view('pcos.create');
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

        $pcos = $this->pcosRepository->create($input);

        Flash::success('PCos saved successfully.');

        return redirect(route('pcos.index'));
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
        $pcos = $this->pcosRepository->find($id);

        if (empty($pcos)) {
            Flash::error('PCos not found');

            return redirect(route('pcos.index'));
        }

        return view('pcos.show')->with('pcos', $pcos);
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
        $pcos = $this->pcosRepository->find($id);

        if (empty($pcos)) {
            Flash::error('pcos not found');

            return redirect(route('pcos.index'));
        }

        return view('pcos.edit')->with('pcos', $pcos);
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
        $pcos = $this->pcosRepository->find($id);

        if (empty($pcos)) {
            Flash::error('pcos not found');

            return redirect(route('pcos.index'));
        }

        $pcos = $this->pcosRepository->update($request->all(), $id);

        Flash::success('pcos updated successfully.');

        return redirect(route('pcos.index'));
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
        $pcos = $this->pcosRepository->find($id);

        if (empty($pcos)) {
            Flash::error('pcos not found');

            return redirect(route('pcos.index'));
        }

        $this->pcosRepository->delete($id);

        Flash::success('pcos deleted successfully.');

        return redirect(route('pcos.index'));
    }
}
