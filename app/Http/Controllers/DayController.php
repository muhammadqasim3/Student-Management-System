<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDayRequest;
use App\Http\Requests\UpdateDayRequest;
use App\Repositories\DayRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DayController extends AppBaseController
{
    /** @var  DayRepository */
    private $dayRepository;

    public function __construct(DayRepository $dayRepo)
    {
        $this->dayRepository = $dayRepo;
    }

    /**
     * Display a listing of the Day.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $days = $this->dayRepository->all();

        return view('days.index')
            ->with('days', $days);
    }

    /**
     * Show the form for creating a new Day.
     *
     * @return Response
     */
    public function create()
    {
        return view('days.create');
    }

    /**
     * Store a newly created Day in storage.
     *
     * @param CreateDayRequest $request
     *
     * @return Response
     */
    public function store(CreateDayRequest $request)
    {
        $input = $request->all();

        $day = $this->dayRepository->create($input);

        Flash::success('Day saved successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Display the specified Day.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        return view('days.show')->with('day', $day);
    }

    /**
     * Show the form for editing the specified Day.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        return view('days.edit')->with('day', $day);
    }

    /**
     * Update the specified Day in storage.
     *
     * @param int $id
     * @param UpdateDayRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDayRequest $request)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        $day = $this->dayRepository->update($request->all(), $id);

        Flash::success('Day updated successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Remove the specified Day from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $day = $this->dayRepository->find($id);

        if (empty($day)) {
            Flash::error('Day not found');

            return redirect(route('days.index'));
        }

        $this->dayRepository->delete($id);

        Flash::success('Day deleted successfully.');

        return redirect(route('days.index'));
    }
}
