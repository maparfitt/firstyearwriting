<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeslot;
use Carbon\Carbon;

class TimeslotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeslots = Timeslot::paginate(10);
        return view('timeslots.index')->with('timeslots', $timeslots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timeslots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timeslotGroup = new TimeslotGroup();
        $timeslotGroup->startDate = $request['startDate'];
        $timeslotGroup->startTime = $request['startTime'];
        $timeslotGroup->endTime = $request['endTime'];
        $timeslotGroup->length = $request['length'];

        $dt1 = Carbon::create($timeslotGroup->startDate . $timeslotGroup->startTime);
        $dt2 = Carbon::create($timeslotGroup->startDate . $timeslotGroup->endTime);

        for ($i = $dt1->timestamp; $i <=$dt2->timestamp; $i+=$timeslotGroup->length*60) {
            $timeslot = new Timeslot(Carbon::createFromTimestamp($i));
            $timeslot->save();
        }
        return redirect('timeslots');
        // goes to timeslots/index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

