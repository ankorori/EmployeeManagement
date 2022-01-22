<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createskype_accountRequest;
use App\Http\Requests\Updateskype_accountRequest;
use App\Repositories\skype_accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class skype_accountController extends AppBaseController
{
    /** @var  skype_accountRepository */
    private $skypeAccountRepository;

    public function __construct(skype_accountRepository $skypeAccountRepo)
    {
        $this->skypeAccountRepository = $skypeAccountRepo;
    }

    /**
     * Display a listing of the skype_account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skypeAccounts = $this->skypeAccountRepository->all();

        return view('skype_accounts.index')
            ->with('skypeAccounts', $skypeAccounts);
    }

    /**
     * Show the form for creating a new skype_account.
     *
     * @return Response
     */
    public function create()
    {
        return view('skype_accounts.create');
    }

    /**
     * Store a newly created skype_account in storage.
     *
     * @param Createskype_accountRequest $request
     *
     * @return Response
     */
    public function store(Createskype_accountRequest $request)
    {
        $input = $request->all();

        $skypeAccount = $this->skypeAccountRepository->create($input);

        Flash::success('Skype Account saved successfully.');

        return redirect(route('skypeAccounts.index'));
    }

    /**
     * Display the specified skype_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skypeAccount = $this->skypeAccountRepository->find($id);

        if (empty($skypeAccount)) {
            Flash::error('Skype Account not found');

            return redirect(route('skypeAccounts.index'));
        }

        return view('skype_accounts.show')->with('skypeAccount', $skypeAccount);
    }

    /**
     * Show the form for editing the specified skype_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skypeAccount = $this->skypeAccountRepository->find($id);

        if (empty($skypeAccount)) {
            Flash::error('Skype Account not found');

            return redirect(route('skypeAccounts.index'));
        }

        return view('skype_accounts.edit')->with('skypeAccount', $skypeAccount);
    }

    /**
     * Update the specified skype_account in storage.
     *
     * @param int $id
     * @param Updateskype_accountRequest $request
     *
     * @return Response
     */
    public function update($id, Updateskype_accountRequest $request)
    {
        $skypeAccount = $this->skypeAccountRepository->find($id);

        if (empty($skypeAccount)) {
            Flash::error('Skype Account not found');

            return redirect(route('skypeAccounts.index'));
        }

        $skypeAccount = $this->skypeAccountRepository->update($request->all(), $id);

        Flash::success('Skype Account updated successfully.');

        return redirect(route('skypeAccounts.index'));
    }

    /**
     * Remove the specified skype_account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skypeAccount = $this->skypeAccountRepository->find($id);

        if (empty($skypeAccount)) {
            Flash::error('Skype Account not found');

            return redirect(route('skypeAccounts.index'));
        }

        $this->skypeAccountRepository->delete($id);

        Flash::success('Skype Account deleted successfully.');

        return redirect(route('skypeAccounts.index'));
    }
}
