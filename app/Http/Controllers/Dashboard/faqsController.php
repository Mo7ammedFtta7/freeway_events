<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\CreatefaqsRequest;
use App\Http\Requests\UpdatefaqsRequest;
use App\Repositories\faqsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class faqsController extends AppBaseController
{
    /** @var  faqsRepository */
    private $faqsRepository;

    public function __construct(faqsRepository $faqsRepo)
    {
        $this->faqsRepository = $faqsRepo;
    }

    /**
     * Display a listing of the faqs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faqs = $this->faqsRepository->all();

        return view('dashboard.faqs.index')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new faqs.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.faqs.create');
    }

    /**
     * Store a newly created faqs in storage.
     *
     * @param CreatefaqsRequest $request
     *
     * @return Response
     */
    public function store(CreatefaqsRequest $request)
    {
        $input = $request->all();

        $faqs = $this->faqsRepository->create($input);

        Flash::success('Faqs saved successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Display the specified faqs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.show')->with('faqs', $faqs);
    }

    /**
     * Show the form for editing the specified faqs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.edit')->with('faqs', $faqs);
    }

    /**
     * Update the specified faqs in storage.
     *
     * @param int $id
     * @param UpdatefaqsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefaqsRequest $request)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        $faqs = $this->faqsRepository->update($request->all(), $id);

        Flash::success('Faqs updated successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Remove the specified faqs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faqs = $this->faqsRepository->find($id);

        if (empty($faqs)) {
            Flash::error('Faqs not found');

            return redirect(route('faqs.index'));
        }

        $this->faqsRepository->delete($id);

        Flash::success('Faqs deleted successfully.');

        return redirect(route('faqs.index'));
    }
}
