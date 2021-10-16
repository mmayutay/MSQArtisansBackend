<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOrderTracker;

class JobOrderForTracking extends Controller
{
    public function AddJobOrderToTracker(Request $request)
    {
        $createJobTrack = new JobOrderTracker();
        $createJobTrack->artisan_id = $request->artisan_id;
        $createJobTrack->job_orders_id = $request->job_order;
        $createJobTrack->jo_type = $request->type;
        $createJobTrack->save();
        return $createJobTrack;
    }

    public function getJobOrdersOnTrack($artisan_id, $type)
    {
        return JobOrderTracker::select('*')
            ->where('artisan_id', $artisan_id)
            ->where('jo_type', $type)
            ->get();
    }

    public function SelectedJobFinish(Request $request)
    {
        $selectedJob = JobOrderTracker::where('id', $request->id)->get()[0];
        $selectedJob->artisan_id = $request->artisan_id;
        $selectedJob->job_orders_id = $request->job_order;
        $selectedJob->jo_type = $request->type;
        $selectedJob->save();
        return $selectedJob;
    }
}
