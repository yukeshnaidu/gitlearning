<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'my_job_application.index',
        [
            'applications' => auth()->user()->jobApplications()
            ->with('job', 'job.employer')
            ->latest()
            ->get()
        ]
        );
    }

    public function destroy(string $id)
    {
        //
    }
}
