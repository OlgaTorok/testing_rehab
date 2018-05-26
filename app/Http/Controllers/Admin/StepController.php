<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Activity;
use App\Step;
use App\Tip;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = Step::all();

      return view('admin.steps.index')->with(array(
          'steps' => $steps
      ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tips = Tip::all();
      $params = array(
          'tips' => $tips,

      );
      return view('admin.steps.create')->with($params);
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
            'description' => 'required|max:191',
            // 'tip_id' => 'integer|min:0',
        ]);

        $step = new Step();
        $step->description = $request->input('description');
        // $step->tip_id = $request->input('tip_id');
        $step->save();

        $session = $request->session()->flash('message', 'Step added successfully!');

        return redirect()->route('admin.steps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $step = Step::findOrFail($id);

        return view('admin.steps.show')->with(array(
            'step' => $step
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
        $step = Step::findOrFail($id);

        return view('admin.steps.edit')->with(array(
            'step' => $step
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
        $step = Step::findOrFail($id);

        $request->validate([
            'description' => 'required|max:191',
            // 'tip_id' => 'integer|min:0',
        ]);

        $step->description = $request->input('description');
        // $step->tip_id = $request->input('tip_id');
        $step->save();

        $session = $request->session()->flash('message', 'Step updated successfully!');

        return redirect()->route('admin.steps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $step = Step::findOrFail($id);

        $step->delete();

        Session::flash('message', 'Step deleted successfully');

        return redirect()->route('admin.steps.index');
    }
}
