<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classSchedulings = $this->classSchedulingRepository->all();

        return view('class_schedulings.index')
            ->with('classSchedulings', $classSchedulings);
    }

    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with('classScheduling', $classScheduling);
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingRequest $request)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
