<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWeb_account_categoryRequest;
use App\Http\Requests\UpdateWeb_account_categoryRequest;
use App\Repositories\Web_account_categoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Web_account_categoryController extends AppBaseController
{
    /** @var  Web_account_categoryRepository */
    private $webAccountCategoryRepository;

    public function __construct(Web_account_categoryRepository $webAccountCategoryRepo)
    {
        $this->webAccountCategoryRepository = $webAccountCategoryRepo;
    }

    /**
     * Display a listing of the Web_account_category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $webAccountCategories = $this->webAccountCategoryRepository->all();

        return view('web_account_categories.index')
            ->with('webAccountCategories', $webAccountCategories);
    }

    /**
     * Show the form for creating a new Web_account_category.
     *
     * @return Response
     */
    public function create()
    {
        return view('web_account_categories.create');
    }

    /**
     * Store a newly created Web_account_category in storage.
     *
     * @param CreateWeb_account_categoryRequest $request
     *
     * @return Response
     */
    public function store(CreateWeb_account_categoryRequest $request)
    {
        $input = $request->all();

        $webAccountCategory = $this->webAccountCategoryRepository->create($input);

        Flash::success('Web Account Category saved successfully.');

        return redirect(route('webAccountCategories.index'));
    }

    /**
     * Display the specified Web_account_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $webAccountCategory = $this->webAccountCategoryRepository->find($id);

        if (empty($webAccountCategory)) {
            Flash::error('Web Account Category not found');

            return redirect(route('webAccountCategories.index'));
        }

        return view('web_account_categories.show')->with('webAccountCategory', $webAccountCategory);
    }

    /**
     * Show the form for editing the specified Web_account_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $webAccountCategory = $this->webAccountCategoryRepository->find($id);

        if (empty($webAccountCategory)) {
            Flash::error('Web Account Category not found');

            return redirect(route('webAccountCategories.index'));
        }

        return view('web_account_categories.edit')->with('webAccountCategory', $webAccountCategory);
    }

    /**
     * Update the specified Web_account_category in storage.
     *
     * @param int $id
     * @param UpdateWeb_account_categoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWeb_account_categoryRequest $request)
    {
        $webAccountCategory = $this->webAccountCategoryRepository->find($id);

        if (empty($webAccountCategory)) {
            Flash::error('Web Account Category not found');

            return redirect(route('webAccountCategories.index'));
        }

        $webAccountCategory = $this->webAccountCategoryRepository->update($request->all(), $id);

        Flash::success('Web Account Category updated successfully.');

        return redirect(route('webAccountCategories.index'));
    }

    /**
     * Remove the specified Web_account_category from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $webAccountCategory = $this->webAccountCategoryRepository->find($id);

        if (empty($webAccountCategory)) {
            Flash::error('Web Account Category not found');

            return redirect(route('webAccountCategories.index'));
        }

        $this->webAccountCategoryRepository->delete($id);

        Flash::success('Web Account Category deleted successfully.');

        return redirect(route('webAccountCategories.index'));
    }
}
