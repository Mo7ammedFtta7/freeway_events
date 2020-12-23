<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\CreateadminsRequest;
use App\Http\Requests\Dashboard\UpdateadminsRequest;
use App\Repositories\Dashboard\adminsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class adminsController extends AppBaseController
{
    /** @var  adminsRepository */
    private $adminsRepository;

    public function __construct(adminsRepository $adminsRepo)
    {
        $this->adminsRepository = $adminsRepo;
    }

    /**
     * Display a listing of the admins.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admins = $this->adminsRepository->all();

        return view('dashboard.admins.index')
            ->with('admins', $admins);
    }

    /**
     * Show the form for creating a new admins.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admins.create');
    }

    /**
     * Store a newly created admins in storage.
     *
     * @param CreateadminsRequest $request
     *
     * @return Response
     */
    public function store(CreateadminsRequest $request)
    {
        $input = $request->all();

        $admins = $this->adminsRepository->create($input);

        Flash::success('Admins saved successfully.');

        return redirect(route('dashboard.admins.index'));
    }

    /**
     * Display the specified admins.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admins = $this->adminsRepository->find($id);

        if (empty($admins)) {
            Flash::error('Admins not found');

            return redirect(route('dashboard.admins.index'));
        }

        return view('dashboard.admins.show')->with('admins', $admins);
    }

    /**
     * Show the form for editing the specified admins.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admins = $this->adminsRepository->find($id);

        if (empty($admins)) {
            Flash::error('Admins not found');

            return redirect(route('dashboard.admins.index'));
        }

        return view('dashboard.admins.edit')->with('admins', $admins);
    }

    /**
     * Update the specified admins in storage.
     *
     * @param int $id
     * @param UpdateadminsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadminsRequest $request)
    {
        $admins = $this->adminsRepository->find($id);

        if (empty($admins)) {
            Flash::error('Admins not found');

            return redirect(route('dashboard.admins.index'));
        }

        $admins = $this->adminsRepository->update($request->all(), $id);

        Flash::success('Admins updated successfully.');

        return redirect(route('dashboard.admins.index'));
    }

    /**
     * Remove the specified admins from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admins = $this->adminsRepository->find($id);

        if (empty($admins)) {
            Flash::error('Admins not found');

            return redirect(route('dashboard.admins.index'));
        }

        $this->adminsRepository->delete($id);

        Flash::success('Admins deleted successfully.');

        return redirect(route('dashboard.admins.index'));
    }
}
