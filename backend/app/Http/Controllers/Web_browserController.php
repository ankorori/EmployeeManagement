<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWeb_browserRequest;
use App\Http\Requests\UpdateWeb_browserRequest;
use App\Repositories\Web_browserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Web_browserController extends AppBaseController
{
    /** @var  Web_browserRepository */
    private $webBrowserRepository;

    public function __construct(Web_browserRepository $webBrowserRepo)
    {
        $this->webBrowserRepository = $webBrowserRepo;
    }

    /**
     * Display a listing of the Web_browser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $webBrowsers = $this->webBrowserRepository->all();

        return view('web_browsers.index')
            ->with('webBrowsers', $webBrowsers);
    }

    /**
     * Show the form for creating a new Web_browser.
     *
     * @return Response
     */
    public function create()
    {
        return view('web_browsers.create');
    }

    /**
     * Store a newly created Web_browser in storage.
     *
     * @param CreateWeb_browserRequest $request
     *
     * @return Response
     */
    public function store(CreateWeb_browserRequest $request)
    {
        $input = $request->all();

        $webBrowser = $this->webBrowserRepository->create($input);

        Flash::success('Web Browser saved successfully.');

        return redirect(route('webBrowsers.index'));
    }

    /**
     * Display the specified Web_browser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $webBrowser = $this->webBrowserRepository->find($id);

        if (empty($webBrowser)) {
            Flash::error('Web Browser not found');

            return redirect(route('webBrowsers.index'));
        }

        return view('web_browsers.show')->with('webBrowser', $webBrowser);
    }

    /**
     * Show the form for editing the specified Web_browser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $webBrowser = $this->webBrowserRepository->find($id);

        if (empty($webBrowser)) {
            Flash::error('Web Browser not found');

            return redirect(route('webBrowsers.index'));
        }

        return view('web_browsers.edit')->with('webBrowser', $webBrowser);
    }

    /**
     * Update the specified Web_browser in storage.
     *
     * @param int $id
     * @param UpdateWeb_browserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWeb_browserRequest $request)
    {
        $webBrowser = $this->webBrowserRepository->find($id);

        if (empty($webBrowser)) {
            Flash::error('Web Browser not found');

            return redirect(route('webBrowsers.index'));
        }

        $webBrowser = $this->webBrowserRepository->update($request->all(), $id);

        Flash::success('Web Browser updated successfully.');

        return redirect(route('webBrowsers.index'));
    }

    /**
     * Remove the specified Web_browser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $webBrowser = $this->webBrowserRepository->find($id);

        if (empty($webBrowser)) {
            Flash::error('Web Browser not found');

            return redirect(route('webBrowsers.index'));
        }

        $this->webBrowserRepository->delete($id);

        Flash::success('Web Browser deleted successfully.');

        return redirect(route('webBrowsers.index'));
    }
}
