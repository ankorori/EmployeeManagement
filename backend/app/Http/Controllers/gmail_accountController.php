<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creategmail_accountRequest;
use App\Http\Requests\Updategmail_accountRequest;
use App\Repositories\gmail_accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class gmail_accountController extends AppBaseController
{
    /** @var  gmail_accountRepository */
    private $gmailAccountRepository;

    public function __construct(gmail_accountRepository $gmailAccountRepo)
    {
        $this->gmailAccountRepository = $gmailAccountRepo;
    }

    /**
     * Display a listing of the gmail_account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gmailAccounts = $this->gmailAccountRepository->all();

        return view('gmail_accounts.index')
            ->with('gmailAccounts', $gmailAccounts);
    }

    /**
     * Show the form for creating a new gmail_account.
     *
     * @return Response
     */
    public function create()
    {
        return view('gmail_accounts.create');
    }

    /**
     * Store a newly created gmail_account in storage.
     *
     * @param Creategmail_accountRequest $request
     *
     * @return Response
     */
    public function store(Creategmail_accountRequest $request)
    {
        $input = $request->all();

        $gmailAccount = $this->gmailAccountRepository->create($input);

        Flash::success('Gmail Account saved successfully.');

        return redirect(route('gmailAccounts.index'));
    }

    /**
     * Display the specified gmail_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gmailAccount = $this->gmailAccountRepository->find($id);

        if (empty($gmailAccount)) {
            Flash::error('Gmail Account not found');

            return redirect(route('gmailAccounts.index'));
        }

        return view('gmail_accounts.show')->with('gmailAccount', $gmailAccount);
    }

    /**
     * Show the form for editing the specified gmail_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gmailAccount = $this->gmailAccountRepository->find($id);

        if (empty($gmailAccount)) {
            Flash::error('Gmail Account not found');

            return redirect(route('gmailAccounts.index'));
        }

        return view('gmail_accounts.edit')->with('gmailAccount', $gmailAccount);
    }

    /**
     * Update the specified gmail_account in storage.
     *
     * @param int $id
     * @param Updategmail_accountRequest $request
     *
     * @return Response
     */
    public function update($id, Updategmail_accountRequest $request)
    {
        $gmailAccount = $this->gmailAccountRepository->find($id);

        if (empty($gmailAccount)) {
            Flash::error('Gmail Account not found');

            return redirect(route('gmailAccounts.index'));
        }

        $gmailAccount = $this->gmailAccountRepository->update($request->all(), $id);

        Flash::success('Gmail Account updated successfully.');

        return redirect(route('gmailAccounts.index'));
    }

    /**
     * Remove the specified gmail_account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gmailAccount = $this->gmailAccountRepository->find($id);

        if (empty($gmailAccount)) {
            Flash::error('Gmail Account not found');

            return redirect(route('gmailAccounts.index'));
        }

        $this->gmailAccountRepository->delete($id);

        Flash::success('Gmail Account deleted successfully.');

        return redirect(route('gmailAccounts.index'));
    }
}
