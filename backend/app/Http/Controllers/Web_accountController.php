<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWeb_accountRequest;
use App\Http\Requests\UpdateWeb_accountRequest;
use App\Repositories\Web_accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Web_accountController extends AppBaseController
{
    /** @var  Web_accountRepository */
    private $webAccountRepository;

    public function __construct(Web_accountRepository $webAccountRepo)
    {
        $this->webAccountRepository = $webAccountRepo;
    }

    /**
     * Display a listing of the Web_account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $webAccounts = $this->webAccountRepository->all();

        return view('web_accounts.index')
            ->with('webAccounts', $webAccounts);
    }

    /**
     * Show the form for creating a new Web_account.
     *
     * @return Response
     */
    public function create()
    {
        return view('web_accounts.create');
    }

    /**
     * Store a newly created Web_account in storage.
     *
     * @param CreateWeb_accountRequest $request
     *
     * @return Response
     */
    public function store(CreateWeb_accountRequest $request)
    {
        $input = $request->all();

        $webAccount = $this->webAccountRepository->create($input);

        Flash::success('Web Account saved successfully.');

        return redirect(route('webAccounts.index'));
    }

    /**
     * Display the specified Web_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $webAccount = $this->webAccountRepository->find($id);

        if (empty($webAccount)) {
            Flash::error('Web Account not found');

            return redirect(route('webAccounts.index'));
        }

        return view('web_accounts.show')->with('webAccount', $webAccount);
    }

    /**
     * Show the form for editing the specified Web_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $webAccount = $this->webAccountRepository->find($id);

        if (empty($webAccount)) {
            Flash::error('Web Account not found');

            return redirect(route('webAccounts.index'));
        }

        return view('web_accounts.edit')->with('webAccount', $webAccount);
    }

    /**
     * Update the specified Web_account in storage.
     *
     * @param int $id
     * @param UpdateWeb_accountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWeb_accountRequest $request)
    {
        $webAccount = $this->webAccountRepository->find($id);

        if (empty($webAccount)) {
            Flash::error('Web Account not found');

            return redirect(route('webAccounts.index'));
        }

        $webAccount = $this->webAccountRepository->update($request->all(), $id);

        Flash::success('Web Account updated successfully.');

        return redirect(route('webAccounts.index'));
    }

    /**
     * Remove the specified Web_account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $webAccount = $this->webAccountRepository->find($id);

        if (empty($webAccount)) {
            Flash::error('Web Account not found');

            return redirect(route('webAccounts.index'));
        }

        $this->webAccountRepository->delete($id);

        Flash::success('Web Account deleted successfully.');

        return redirect(route('webAccounts.index'));
    }
}
