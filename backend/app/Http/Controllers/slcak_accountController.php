<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createslcak_accountRequest;
use App\Http\Requests\Updateslcak_accountRequest;
use App\Repositories\slcak_accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class slcak_accountController extends AppBaseController
{
    /** @var  slcak_accountRepository */
    private $slcakAccountRepository;

    public function __construct(slcak_accountRepository $slcakAccountRepo)
    {
        $this->slcakAccountRepository = $slcakAccountRepo;
    }

    /**
     * Display a listing of the slcak_account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slcakAccounts = $this->slcakAccountRepository->all();

        return view('slcak_accounts.index')
            ->with('slcakAccounts', $slcakAccounts);
    }

    /**
     * Show the form for creating a new slcak_account.
     *
     * @return Response
     */
    public function create()
    {
        return view('slcak_accounts.create');
    }

    /**
     * Store a newly created slcak_account in storage.
     *
     * @param Createslcak_accountRequest $request
     *
     * @return Response
     */
    public function store(Createslcak_accountRequest $request)
    {
        $input = $request->all();

        $slcakAccount = $this->slcakAccountRepository->create($input);

        Flash::success('Slcak Account saved successfully.');

        return redirect(route('slcakAccounts.index'));
    }

    /**
     * Display the specified slcak_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slcakAccount = $this->slcakAccountRepository->find($id);

        if (empty($slcakAccount)) {
            Flash::error('Slcak Account not found');

            return redirect(route('slcakAccounts.index'));
        }

        return view('slcak_accounts.show')->with('slcakAccount', $slcakAccount);
    }

    /**
     * Show the form for editing the specified slcak_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slcakAccount = $this->slcakAccountRepository->find($id);

        if (empty($slcakAccount)) {
            Flash::error('Slcak Account not found');

            return redirect(route('slcakAccounts.index'));
        }

        return view('slcak_accounts.edit')->with('slcakAccount', $slcakAccount);
    }

    /**
     * Update the specified slcak_account in storage.
     *
     * @param int $id
     * @param Updateslcak_accountRequest $request
     *
     * @return Response
     */
    public function update($id, Updateslcak_accountRequest $request)
    {
        $slcakAccount = $this->slcakAccountRepository->find($id);

        if (empty($slcakAccount)) {
            Flash::error('Slcak Account not found');

            return redirect(route('slcakAccounts.index'));
        }

        $slcakAccount = $this->slcakAccountRepository->update($request->all(), $id);

        Flash::success('Slcak Account updated successfully.');

        return redirect(route('slcakAccounts.index'));
    }

    /**
     * Remove the specified slcak_account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slcakAccount = $this->slcakAccountRepository->find($id);

        if (empty($slcakAccount)) {
            Flash::error('Slcak Account not found');

            return redirect(route('slcakAccounts.index'));
        }

        $this->slcakAccountRepository->delete($id);

        Flash::success('Slcak Account deleted successfully.');

        return redirect(route('slcakAccounts.index'));
    }
}
