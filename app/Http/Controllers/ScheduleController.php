<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeslot;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::paginate(10);
        return view('schedule.index')->with('schedule', $schedule);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $officehours = new officehours();
        $officehours->startDate = $request['startDate'];
        $officehours->startTime = $request['startTime'];
        $officehours->endTime = $request['endTime'];
        $officehours->length = $request['length'];

        $dt1 = Carbon::create($officehours->startDate . $officehours->startTime);
        $dt2 = Carbon::create($officehours->startDate . $officehours->endTime);

        for ($i = $dt1->timestamp; $i <=$dt2->timestamp; $i+=$officehours->length*60) {
            $appointment = new Appointment(Carbon::createFromTimestamp($i));
            $appointment->save();
        }

        return redirect('officehours');
        // goes to officehours/index
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
