<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpc_accountRequest;
use App\Http\Requests\Updatepc_accountRequest;
use App\Repositories\pc_accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pc_accountController extends AppBaseController
{
    /** @var  pc_accountRepository */
    private $pcAccountRepository;

    public function __construct(pc_accountRepository $pcAccountRepo)
    {
        $this->pcAccountRepository = $pcAccountRepo;
    }

    /**
     * Display a listing of the pc_account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pcAccounts = $this->pcAccountRepository->all();

        return view('pc_accounts.index')
            ->with('pcAccounts', $pcAccounts);
    }

    /**
     * Show the form for creating a new pc_account.
     *
     * @return Response
     */
    public function create()
    {
        return view('pc_accounts.create');
    }

    /**
     * Store a newly created pc_account in storage.
     *
     * @param Createpc_accountRequest $request
     *
     * @return Response
     */
    public function store(Createpc_accountRequest $request)
    {
        $input = $request->all();

        $pcAccount = $this->pcAccountRepository->create($input);

        Flash::success('Pc Account saved successfully.');

        return redirect(route('pcAccounts.index'));
    }

    /**
     * Display the specified pc_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pcAccount = $this->pcAccountRepository->find($id);

        if (empty($pcAccount)) {
            Flash::error('Pc Account not found');

            return redirect(route('pcAccounts.index'));
        }

        return view('pc_accounts.show')->with('pcAccount', $pcAccount);
    }

    /**
     * Show the form for editing the specified pc_account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pcAccount = $this->pcAccountRepository->find($id);

        if (empty($pcAccount)) {
            Flash::error('Pc Account not found');

            return redirect(route('pcAccounts.index'));
        }

        return view('pc_accounts.edit')->with('pcAccount', $pcAccount);
    }

    /**
     * Update the specified pc_account in storage.
     *
     * @param int $id
     * @param Updatepc_accountRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepc_accountRequest $request)
    {
        $pcAccount = $this->pcAccountRepository->find($id);

        if (empty($pcAccount)) {
            Flash::error('Pc Account not found');

            return redirect(route('pcAccounts.index'));
        }

        $pcAccount = $this->pcAccountRepository->update($request->all(), $id);

        Flash::success('Pc Account updated successfully.');

        return redirect(route('pcAccounts.index'));
    }

    /**
     * Remove the specified pc_account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pcAccount = $this->pcAccountRepository->find($id);

        if (empty($pcAccount)) {
            Flash::error('Pc Account not found');

            return redirect(route('pcAccounts.index'));
        }

        $this->pcAccountRepository->delete($id);

        Flash::success('Pc Account deleted successfully.');

        return redirect(route('pcAccounts.index'));
    }
}
