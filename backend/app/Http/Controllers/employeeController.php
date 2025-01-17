<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use App\Repositories\employeeRepository;
use App\Repositories\departmentRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\department;
use Illuminate\Http\Request;
use Flash;
use Response;

class employeeController extends AppBaseController
{
    /** @var  employeeRepository */
    private $employeeRepository;
    /** @var departmentRepository */
    private $departmentRepository;

    public function __construct(employeeRepository $employeeRepo,departmentRepository $departmentRepo)
    {
        $this->employeeRepository = $employeeRepo;
        $this->departmentRepository = $departmentRepo;
    }

    /**
     * Display a listing of the employee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employees = $this->employeeRepository->all();

        return view('employees.index')
            ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new employee.
     *
     * @return Response
     */
    public function create()
    {
        $departments = $this->departmentRepository->all();
        return view('employees.create')->with('departments', $departments);
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param CreateemployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateemployeeRequest $request)
    {
        $input = $request->all();

        $employee = $this->employeeRepository->create($input);

        Flash::success('Employee saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified employee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified employee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified employee in storage.
     *
     * @param int $id
     * @param UpdateemployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateemployeeRequest $request)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee = $this->employeeRepository->update($request->all(), $id);

        Flash::success('Employee updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified employee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $this->employeeRepository->delete($id);

        Flash::success($employee->name . 'さんを削除しました');

        return redirect(route('employees.index'));
    }
}
