<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatedepartmentAPIRequest;
use App\Http\Requests\API\UpdatedepartmentAPIRequest;
use App\Models\department;
use App\Repositories\departmentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class departmentController
 * @package App\Http\Controllers\API
 */

class departmentAPIController extends AppBaseController
{
    /** @var  departmentRepository */
    private $departmentRepository;

    public function __construct(departmentRepository $departmentRepo)
    {
        $this->departmentRepository = $departmentRepo;
    }

    /**
     * Display a listing of the department.
     * GET|HEAD /departments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $departments = $this->departmentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($departments->toArray(), 'Departments retrieved successfully');
    }

    /**
     * Store a newly created department in storage.
     * POST /departments
     *
     * @param CreatedepartmentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatedepartmentAPIRequest $request)
    {
        $input = $request->all();

        $department = $this->departmentRepository->create($input);

        return $this->sendResponse($department->toArray(), 'Department saved successfully');
    }

    /**
     * Display the specified department.
     * GET|HEAD /departments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        return $this->sendResponse($department->toArray(), 'Department retrieved successfully');
    }

    /**
     * Update the specified department in storage.
     * PUT/PATCH /departments/{id}
     *
     * @param int $id
     * @param UpdatedepartmentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedepartmentAPIRequest $request)
    {
        $input = $request->all();

        /** @var department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        $department = $this->departmentRepository->update($input, $id);

        return $this->sendResponse($department->toArray(), 'department updated successfully');
    }

    /**
     * Remove the specified department from storage.
     * DELETE /departments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var department $department */
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            return $this->sendError('Department not found');
        }

        $department->delete();

        return $this->sendSuccess('Department deleted successfully');
    }
}
