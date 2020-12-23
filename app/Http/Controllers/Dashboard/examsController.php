<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\CreateexamsRequest;
use App\Http\Requests\Dashboard\UpdateexamsRequest;
use App\Repositories\Dashboard\examsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class examsController extends AppBaseController
{
    /** @var  examsRepository */
    private $examsRepository;

    public function __construct(examsRepository $examsRepo)
    {
        $this->examsRepository = $examsRepo;
    }

    /**
     * Display a listing of the exams.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $exams = $this->examsRepository->all();

        return view('dashboard.exams.index')
            ->with('exams', $exams);
    }

    /**
     * Show the form for creating a new exams.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.exams.create');
    }

    /**
     * Store a newly created exams in storage.
     *
     * @param CreateexamsRequest $request
     *
     * @return Response
     */
    public function store(CreateexamsRequest $request)
    {
        $input = $request->all();

        $exams = $this->examsRepository->create($input);

        Flash::success('Exams saved successfully.');

        return redirect(route('dashboard.exams.index'));
    }

    /**
     * Display the specified exams.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exams = $this->examsRepository->find($id);

        if (empty($exams)) {
            Flash::error('Exams not found');

            return redirect(route('dashboard.exams.index'));
        }

        return view('dashboard.exams.show')->with('exams', $exams);
    }

    /**
     * Show the form for editing the specified exams.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exams = $this->examsRepository->find($id);

        if (empty($exams)) {
            Flash::error('Exams not found');

            return redirect(route('dashboard.exams.index'));
        }

        return view('dashboard.exams.edit')->with('exams', $exams);
    }

    /**
     * Update the specified exams in storage.
     *
     * @param int $id
     * @param UpdateexamsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateexamsRequest $request)
    {
        $exams = $this->examsRepository->find($id);

        if (empty($exams)) {
            Flash::error('Exams not found');

            return redirect(route('dashboard.exams.index'));
        }

        $exams = $this->examsRepository->update($request->all(), $id);

        Flash::success('Exams updated successfully.');

        return redirect(route('dashboard.exams.index'));
    }

    /**
     * Remove the specified exams from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exams = $this->examsRepository->find($id);

        if (empty($exams)) {
            Flash::error('Exams not found');

            return redirect(route('dashboard.exams.index'));
        }

        $this->examsRepository->delete($id);

        Flash::success('Exams deleted successfully.');

        return redirect(route('dashboard.exams.index'));
    }
}
