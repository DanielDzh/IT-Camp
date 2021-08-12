<?php

namespace App\Http\Controllers;

use App\Models\Registered;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registereds = Registered::orderBy('created_at','desc')->get();
    
    return view('admin.registered.index',[
        'registereds' => $registereds
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registered::create($request->only(['name','lastname','email','phone']));
        return redirect()->back()->withSuccess('Дані відправлено успішно');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registered  $registered
     * @return \Illuminate\Http\Response
     */
    public function show(Registered $registered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registered  $registered
     * @return \Illuminate\Http\Response
     */
    public function edit(Registered $registered)
    {
        return view('admin.registered.edit',[
            'registereds' => $registered

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registered  $registered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registered $registered)
    {
        $registered->update($request->only(['name','lastname','email','phone']));
        return redirect()->back()->withSuccess('Успішно редаговано користувача: '.$registered->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registered  $registered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registered $registered)
    {
        $registered->delete();
        return redirect()->back()->withSuccess('Успішно видалено користувача: '.$registered->name);
    }
}
