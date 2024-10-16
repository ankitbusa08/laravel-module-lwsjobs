<?php

namespace Modules\Lwsjobs\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Lwsjobs\Models\Tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // list all the jobs with this tag
        return view('lwsjobs::results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
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
