<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeowRequest;
use App\Http\Requests\UpdateMeowRequest;
use App\Models\Meow;
use Database\Factories\MeowFactory;
use Illuminate\Http\Request;

class MeowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        return view('list-meows', ['meows' => Meow::all()]);
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
    //public function store(StoreMeowRequest $request)
    public function store(Request $request)
    {
        // dd($request->all());
        Meow::create($request->only((new Meow())->getFillable()))
            //->commentaires()->createMany(['me'])
            ->save();

        return redirect('/meow-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meow $meow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meow $meow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeowRequest $request, Meow $meow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meow $meow)
    {
        //
    }
}
