<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Rating;
use App\Tip;

class RatingController extends Controller
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
      $ratings = Rating::all();
      $tips = Tip::all();

      $params = array(
          'ratings' => $ratings,
          'tips' => $tips
      );
      return view('admin.ratings.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.ratings.create');
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
          'name' => 'required|max:191',
          'tip_id' => 'integer|min:0'

        ]);

        $rating = new Rating();
        $rating->name = $request->input('name');
        $rating->tip_id = $request->input('tip_id');

        $rating->save();
        $session = $request->session()->flash('message', 'Rating added successfully!');

        return redirect()->route('admin.ratings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $rating = Rating::findOrFail($id);

      return view('admin.ratings.show')->with(array(
          'rating' => $rating
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
      $rating = Rating::findOrFail($id);

      return view('admin.ratings.edit')->with(array(
          'rating' => $rating
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
      $rating = Rating::findOrFail($id);

      $request->validate([
          'name' => 'required|max:191',
          'tip_id' => 'integer|min:0'

      ]);

      $rating->name = $request->input('name');
      $rating->tip_id = $request->input('tip_id');
      $rating->save();
      $session = $request->session()->flash('message', 'Rating added successfully!');

      return redirect()->route('admin.ratings.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $rating = Rating::findOrFail($id);
      $rating->delete();

      Session::flash('message', 'Rating deleted successfully');

      return redirect()->route('admin.ratings.index');
    }
}
