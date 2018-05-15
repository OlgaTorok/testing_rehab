<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Activity;
use App\Step;
use App\Category;
use App\Tip;
use App\Level;
use App\Rating;
use App\Emoji;


class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $activities = Activity::all();
        $categories = Category::all();
        $steps = Step::all();
        $levels = Level::all();
        $tips = Tip::all();
        $ratings = Rating::all();
        $emojis = Emoji::all();
        $params = array(
            // 'activities' => $activities,
            'categories' => $categories,
            'steps' => $steps,
            'levels' => $levels,
            'tips' => $tips,
            'ratings' => $ratings,
            'emojis' => $emojis
        );

       return view('user.activities.index')->with($params);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        return view('user.activities.show')->with(array(
            'activity' => $activity
        ));
    }

}
