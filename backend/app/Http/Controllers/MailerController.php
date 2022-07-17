<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMailerRequest;
use App\Http\Requests\UpdateMailerRequest;
use App\Repositories\MailerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MailerController extends AppBaseController
{
    /** @var  MailerRepository */
    private $mailerRepository;

    public function __construct(MailerRepository $mailerRepo)
    {
        $this->mailerRepository = $mailerRepo;
    }

    /**
     * Display a listing of the Mailer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mailers = $this->mailerRepository->all();

        return view('mailers.index')
            ->with('mailers', $mailers);
    }

    /**
     * Show the form for creating a new Mailer.
     *
     * @return Response
     */
    public function create()
    {
        return view('mailers.create');
    }

    /**
     * Store a newly created Mailer in storage.
     *
     * @param CreateMailerRequest $request
     *
     * @return Response
     */
    public function store(CreateMailerRequest $request)
    {
        $input = $request->all();

        $mailer = $this->mailerRepository->create($input);

        Flash::success('Mailer saved successfully.');

        return redirect(route('mailers.index'));
    }

    /**
     * Display the specified Mailer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailer = $this->mailerRepository->find($id);

        if (empty($mailer)) {
            Flash::error('Mailer not found');

            return redirect(route('mailers.index'));
        }

        return view('mailers.show')->with('mailer', $mailer);
    }

    /**
     * Show the form for editing the specified Mailer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailer = $this->mailerRepository->find($id);

        if (empty($mailer)) {
            Flash::error('Mailer not found');

            return redirect(route('mailers.index'));
        }

        return view('mailers.edit')->with('mailer', $mailer);
    }

    /**
     * Update the specified Mailer in storage.
     *
     * @param int $id
     * @param UpdateMailerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMailerRequest $request)
    {
        $mailer = $this->mailerRepository->find($id);

        if (empty($mailer)) {
            Flash::error('Mailer not found');

            return redirect(route('mailers.index'));
        }

        $mailer = $this->mailerRepository->update($request->all(), $id);

        Flash::success('Mailer updated successfully.');

        return redirect(route('mailers.index'));
    }

    /**
     * Remove the specified Mailer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailer = $this->mailerRepository->find($id);

        if (empty($mailer)) {
            Flash::error('Mailer not found');

            return redirect(route('mailers.index'));
        }

        $this->mailerRepository->delete($id);

        Flash::success('Mailer deleted successfully.');

        return redirect(route('mailers.index'));
    }
}
