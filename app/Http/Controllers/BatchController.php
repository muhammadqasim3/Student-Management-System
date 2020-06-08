<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use App\Repositories\BatchRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BatchController extends AppBaseController
{
    /** @var  BatchRepository */
    private $batchRepository;

    public function __construct(BatchRepository $batchRepo)
    {
        $this->batchRepository = $batchRepo;
    }

    /**
     * Display a listing of the Batch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batches = $this->batchRepository->all();

        return view('batches.index')
            ->with('batches', $batches);
    }

    /**
     * Show the form for creating a new Batch.
     *
     * @return Response
     */
    public function create()
    {
        return view('batches.create');
    }

    /**
     * Store a newly created Batch in storage.
     *
     * @param CreateBatchRequest $request
     *
     * @return Response
     */
    public function store(CreateBatchRequest $request)
    {
        $input = $request->all();

        $batch = $this->batchRepository->create($input);

        Flash::success('Batch saved successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Display the specified Batch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        return view('batches.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified Batch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        return view('batches.edit')->with('batch', $batch);
    }

    /**
     * Update the specified Batch in storage.
     *
     * @param int $id
     * @param UpdateBatchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBatchRequest $request)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        $batch = $this->batchRepository->update($request->all(), $id);

        Flash::success('Batch updated successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Remove the specified Batch from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $batch = $this->batchRepository->find($id);

        if (empty($batch)) {
            Flash::error('Batch not found');

            return redirect(route('batches.index'));
        }

        $this->batchRepository->delete($id);

        Flash::success('Batch deleted successfully.');

        return redirect(route('batches.index'));
    }
}
