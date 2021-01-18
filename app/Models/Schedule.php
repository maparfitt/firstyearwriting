<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ScheduleController;
use Carbon\Carbon;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function makeTimeslots($officehours) {

        $dt1 = Carbon::create($officehours->startDate . $officehours->startTime);
        $dt2 = Carbon::create($officehours->startDate . $officehours->endTime);

        $timeslots = "";
        for ($i = $dt1->timestamp; $i <=$dt2->timestamp; $i+=$officehours->length*60) {
	        $timeslots = $timeslots . Carbon::createFromTimestamp($i) . ", ";
        }
        return $timeslots;
    }
}
