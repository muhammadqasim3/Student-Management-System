<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcademicRequest;
use App\Http\Requests\UpdateAcademicRequest;
use App\Repositories\AcademicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AcademicController extends AppBaseController
{
    /** @var  AcademicRepository */
    private $academicRepository;

    public function __construct(AcademicRepository $academicRepo)
    {
        $this->academicRepository = $academicRepo;
    }

    /**
     * Display a listing of the Academic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $academics = $this->academicRepository->all();

        return view('academics.index')
            ->with('academics', $academics);
    }

    /**
     * Show the form for creating a new Academic.
     *
     * @return Response
     */
    public function create()
    {
        return view('academics.create');
    }

    /**
     * Store a newly created Academic in storage.
     *
     * @param CreateAcademicRequest $request
     *
     * @return Response
     */
    public function store(CreateAcademicRequest $request)
    {
        $input = $request->all();

        $academic = $this->academicRepository->create($input);

        Flash::success('Academic saved successfully.');

        return redirect(route('academics.index'));
    }

    /**
     * Display the specified Academic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $academic = $this->academicRepository->find($id);

        if (empty($academic)) {
            Flash::error('Academic not found');

            return redirect(route('academics.index'));
        }

        return view('academics.show')->with('academic', $academic);
    }

    /**
     * Show the form for editing the specified Academic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $academic = $this->academicRepository->find($id);

        if (empty($academic)) {
            Flash::error('Academic not found');

            return redirect(route('academics.index'));
        }

        return view('academics.edit')->with('academic', $academic);
    }

    /**
     * Update the specified Academic in storage.
     *
     * @param int $id
     * @param UpdateAcademicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcademicRequest $request)
    {
        $academic = $this->academicRepository->find($id);

        if (empty($academic)) {
            Flash::error('Academic not found');

            return redirect(route('academics.index'));
        }

        $academic = $this->academicRepository->update($request->all(), $id);

        Flash::success('Academic updated successfully.');

        return redirect(route('academics.index'));
    }

    /**
     * Remove the specified Academic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $academic = $this->academicRepository->find($id);

        if (empty($academic)) {
            Flash::error('Academic not found');

            return redirect(route('academics.index'));
        }

        $this->academicRepository->delete($id);

        Flash::success('Academic deleted successfully.');

        return redirect(route('academics.index'));
    }
}
