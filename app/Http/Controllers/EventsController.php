<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {

        $events = DB::table('events')->get();

        return $events->toArray();

        //throw new \Exception('implement in coding task 1');
    }

    public function getFutureEventsWithWorkshops() {

        $events = DB::table('events')->join('workshops', function ($join) {
            $join->on('events.id', '=', 'workshops.event_id')
                 ->where('workshops.end', '>',  date('Y-m-d').' 00:00:00');
        } )->get();
//'workshops', 'events.id', '=', 'workshops.event_id'
               
        return $events->toArray();
        //throw new \Exception('implement in coding task 2');
    }
}
