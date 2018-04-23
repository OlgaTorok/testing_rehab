<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Tip;

class TipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all();

         return view('admin.tips.index')->with(array(
             'tips' => $tips
         ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:191'
        ]);

        $tip = new Tip();
        $tip->description = $request->input('description');
        $tip->save();

        $session = $request->session()->flash('message', 'Tip added successfully!');

        return redirect()->route('admin.tips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tip = Tip::findOrFail($id);

        return view('admin.tips.show')->with(array(
            'tip' => $tip
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tip = Tip::findOrFail($id);

        return view('admin.tips.edit')->with(array(
            'tip' => $tip
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tip = Tip::findOrFail($id);

        $request->validate([
            'description' => 'required|max:191'
        ]);

        $tip->description = $request->input('description');
        $tip->save();

        $session = $request->session()->flash('message', 'Tip updated successfully!');

        return redirect()->route('admin.tips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tip = Tip::findOrFail($id);
        $tip->delete();

        Session::flash('message', 'Tip deleted successfully');

        return redirect()->route('admin.tips.index');
    }
}
