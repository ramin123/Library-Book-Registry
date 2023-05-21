<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Requests;
use App\Http\Requests\Table\CreateTimeRequest;
use App\Http\Requests\Table\UpdateTimeRequest;
use App\Repositories\Table\TimeRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Table\Time;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TimeController extends InfyOmBaseController
{
    /** @var  TimeRepository */
    private $timeRepository;

    public function __construct(TimeRepository $timeRepo)
    {
        $this->timeRepository = $timeRepo;
    }

    /**
     * Display a listing of the Time.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->timeRepository->pushCriteria(new RequestCriteria($request));
        $times = $this->timeRepository->all();
        return view('admin.table.times.index')
            ->with('times', $times);
    }

    /**
     * Show the form for creating a new Time.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.table.times.create');
    }

    /**
     * Store a newly created Time in storage.
     *
     * @param CreateTimeRequest $request
     *
     * @return Response
     */
    public function store(CreateTimeRequest $request)
    {
        $input = $request->all();

        $time = $this->timeRepository->create($input);

        Flash::success('Time saved successfully.');

        return redirect(route('admin.table.times.index'));
    }

    /**
     * Display the specified Time.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $time = $this->timeRepository->findWithoutFail($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        return view('admin.table.times.show')->with('time', $time);
    }

    /**
     * Show the form for editing the specified Time.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $time = $this->timeRepository->findWithoutFail($id);

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        return view('admin.table.times.edit')->with('time', $time);
    }

    /**
     * Update the specified Time in storage.
     *
     * @param  int              $id
     * @param UpdateTimeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTimeRequest $request)
    {
        $time = $this->timeRepository->findWithoutFail($id);

        

        if (empty($time)) {
            Flash::error('Time not found');

            return redirect(route('times.index'));
        }

        $time = $this->timeRepository->update($request->all(), $id);

        Flash::success('Time updated successfully.');

        return redirect(route('admin.table.times.index'));
    }

    /**
     * Remove the specified Time from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.table.times.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Time::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.table.times.index'))->with('success', Lang::get('message.success.delete'));

       }

}
