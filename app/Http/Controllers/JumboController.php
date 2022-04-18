<?php

namespace App\Http\Controllers;

use App\Models\Jumbo;
use Illuminate\Http\Request;

class JumboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashbord.jumbotron.index', [
            'jumbo' => Jumbo::first()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumbo  $jumbo
     * @return \Illuminate\Http\Response
     */
    public function show(Jumbo $jumbo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumbo  $jumbo
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumbo $jumbo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumbo  $jumbo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumbo $jumbo)
    {
        $rules = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Jumbo::where('id',1)->update($rules);
    
        return redirect('/jumbotron')->with('success','Data telah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumbo  $jumbo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumbo $jumbo)
    {
        //
    }
}
