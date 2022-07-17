<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAntivirusSoftwareRequest;
use App\Http\Requests\UpdateAntivirusSoftwareRequest;
use App\Repositories\AntivirusSoftwareRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AntivirusSoftwareController extends AppBaseController
{
    /** @var  AntivirusSoftwareRepository */
    private $antivirusSoftwareRepository;

    public function __construct(AntivirusSoftwareRepository $antivirusSoftwareRepo)
    {
        $this->antivirusSoftwareRepository = $antivirusSoftwareRepo;
    }

    /**
     * Display a listing of the AntivirusSoftware.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $antivirusSoftware = $this->antivirusSoftwareRepository->all();

        return view('antivirus_software.index')
            ->with('antivirusSoftware', $antivirusSoftware);
    }

    /**
     * Show the form for creating a new AntivirusSoftware.
     *
     * @return Response
     */
    public function create()
    {
        return view('antivirus_software.create');
    }

    /**
     * Store a newly created AntivirusSoftware in storage.
     *
     * @param CreateAntivirusSoftwareRequest $request
     *
     * @return Response
     */
    public function store(CreateAntivirusSoftwareRequest $request)
    {
        $input = $request->all();

        $antivirusSoftware = $this->antivirusSoftwareRepository->create($input);

        Flash::success('Antivirus Software saved successfully.');

        return redirect(route('antivirusSoftware.index'));
    }

    /**
     * Display the specified AntivirusSoftware.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $antivirusSoftware = $this->antivirusSoftwareRepository->find($id);

        if (empty($antivirusSoftware)) {
            Flash::error('Antivirus Software not found');

            return redirect(route('antivirusSoftware.index'));
        }

        return view('antivirus_software.show')->with('antivirusSoftware', $antivirusSoftware);
    }

    /**
     * Show the form for editing the specified AntivirusSoftware.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $antivirusSoftware = $this->antivirusSoftwareRepository->find($id);

        if (empty($antivirusSoftware)) {
            Flash::error('Antivirus Software not found');

            return redirect(route('antivirusSoftware.index'));
        }

        return view('antivirus_software.edit')->with('antivirusSoftware', $antivirusSoftware);
    }

    /**
     * Update the specified AntivirusSoftware in storage.
     *
     * @param int $id
     * @param UpdateAntivirusSoftwareRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAntivirusSoftwareRequest $request)
    {
        $antivirusSoftware = $this->antivirusSoftwareRepository->find($id);

        if (empty($antivirusSoftware)) {
            Flash::error('Antivirus Software not found');

            return redirect(route('antivirusSoftware.index'));
        }

        $antivirusSoftware = $this->antivirusSoftwareRepository->update($request->all(), $id);

        Flash::success('Antivirus Software updated successfully.');

        return redirect(route('antivirusSoftware.index'));
    }

    /**
     * Remove the specified AntivirusSoftware from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $antivirusSoftware = $this->antivirusSoftwareRepository->find($id);

        if (empty($antivirusSoftware)) {
            Flash::error('Antivirus Software not found');

            return redirect(route('antivirusSoftware.index'));
        }

        $this->antivirusSoftwareRepository->delete($id);

        Flash::success('Antivirus Software deleted successfully.');

        return redirect(route('antivirusSoftware.index'));
    }
}
