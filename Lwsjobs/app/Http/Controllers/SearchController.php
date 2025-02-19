<?php

namespace Modules\Lwsjobs\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Lwsjobs\Models\Job;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function __invoke()
    {
        //dd(request('q'));
        //$jobs = Job::with(['employer', 'tags'])->where('title', 'LIKE', '%' . request('q') . '%')->get();
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . request('q') . '%')
            ->get();

        return view('lwsjobs::results', ['jobs' => $jobs]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
