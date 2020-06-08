<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Repositories\ClassesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClassesController extends AppBaseController
{
    /** @var  ClassesRepository */
    private $classesRepository;

    public function __construct(ClassesRepository $classesRepo)
    {
        $this->classesRepository = $classesRepo;
    }

    /**
     * Display a listing of the Classes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classes = $this->classesRepository->all();

        return view('classes.index')
            ->with('classes', $classes);
    }

    /**
     * Show the form for creating a new Classes.
     *
     * @return Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created Classes in storage.
     *
     * @param CreateClassesRequest $request
     *
     * @return Response
     */
    public function store(CreateClassesRequest $request)
    {
        $input = $request->all();

        $classes = $this->classesRepository->create($input);

        Flash::success('Classes saved successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified Classes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('classes', $classes);
    }

    /**
     * Show the form for editing the specified Classes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('classes', $classes);
    }

    /**
     * Update the specified Classes in storage.
     *
     * @param int $id
     * @param UpdateClassesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassesRequest $request)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        $classes = $this->classesRepository->update($request->all(), $id);

        Flash::success('Classes updated successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified Classes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Classes not found');

            return redirect(route('classes.index'));
        }

        $this->classesRepository->delete($id);

        Flash::success('Classes deleted successfully.');

        return redirect(route('classes.index'));
    }
}
