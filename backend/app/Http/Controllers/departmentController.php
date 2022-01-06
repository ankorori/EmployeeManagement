<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use App\Repositories\departmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class departmentController extends AppBaseController
{
    /** @var  departmentRepository */
    private $departmentRepository;

    public function __construct(departmentRepository $departmentRepo)
    {
        $this->departmentRepository = $departmentRepo;
    }

    /**
     * Display a listing of the department.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $departments = $this->departmentRepository->all();

        return view('departments.index')
            ->with('departments', $departments);
    }

    /**
     * Show the form for creating a new department.
     *
     * @return Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created department in storage.
     *
     * @param CreatedepartmentRequest $request
     *
     * @return Response
     */
    public function store(CreatedepartmentRequest $request)
    {
        $input = $request->all();

        $department = $this->departmentRepository->create($input);

        Flash::success('Department saved successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified department.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.show')->with('department', $department);
    }

    /**
     * Show the form for editing the specified department.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.edit')->with('department', $department);
    }

    /**
     * Update the specified department in storage.
     *
     * @param int $id
     * @param UpdatedepartmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedepartmentRequest $request)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $department = $this->departmentRepository->update($request->all(), $id);

        Flash::success('Department updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified department from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $this->departmentRepository->delete($id);

        Flash::success('Department deleted successfully.');

        return redirect(route('departments.index'));
    }
}
