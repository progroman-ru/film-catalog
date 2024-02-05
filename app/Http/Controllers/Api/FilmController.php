<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use Illuminate\Http\Response;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Film::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        return Film::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return $film;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        return $film;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
