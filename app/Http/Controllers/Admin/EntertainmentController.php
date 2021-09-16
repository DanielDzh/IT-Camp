<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entertainments = Entertainment::orderBy('created_at','desc')->get();
        
        return view('admin.entertainment.index',[
            'entertainments' => $entertainments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entertainment::create($request->only(['url', 'alt_name', 'description']));
        return redirect()->back()->withSuccess('Нову розвагу додано успішно');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function show(Entertainment $entertainment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function edit(Entertainment $entertainment)
    {
        return view('admin.entertainment.edit',[
            'entertainments' => $entertainment

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entertainment $entertainment)
    {
        $entertainment->update($request->only(['url', 'alt_name', 'description']));
        return redirect()->back()->withSuccess('Успішно редаговано розвагу: '.$entertainment->description);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entertainment  $entertainment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entertainment $entertainment)
    {
        $entertainment->delete();
        return redirect()->back()->withSuccess('Успішно видалено розвагу: '.$entertainment->description);
    }
}
