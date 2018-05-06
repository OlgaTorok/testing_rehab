<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Image;
use App\Http\Controllers\Controller;
use App\Activity;
use App\Tip;
use App\Category;
use App\Level;
use App\Rating;
use App\Emoji;
use App\Step;


class ActivityController extends Controller
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

      /**$input = array(
          'upload' => Input::file('upload')
      );

      $rules = array(
          'upload' => 'mimes:zip,rar|max:500'
      );

      $validator = Validator::make($input, $rules); */


        $activities = Activity::all();

        return view('admin.activities.index')->with(array(
           'activities' => $activities
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
        $cateogories = Category::all();
        $levels = Level::all();
        $ratings = Rating::all();
        $emojis = Emoji::all();
        $steps = Step::all();
        $params = array(
            'tips' => $tips,
            'categories' => $cateogories,
            'levels' => $levels,
            'ratings' => $ratings,
            'emojis' => $emojis,
            'steps' => $steps
        );
        return view('admin.activities.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Activity $activity, Step $step)
    {
        $request->validate([
           'title' => 'required|max:191',
           'description' => 'required',
           'short_descript' => 'required|max:20',
           'picture' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'level_id' => 'required|integer|min:0',
           'category_id' => 'required|integer|min:0',
           'rating_id' => 'required|integer|min:0',
           'emoji_id' => 'required|integer|min:0',
        ]);

        $activity = new Activity();
        $activity->title = $request->input('title');
        $activity->description = $request->input('description');
        $activity->short_descript = $request->input('short_descript');
        $activity->picture = $request->input('picture');
        $activity->level_id = $request->input('level_id');
        $activity->category_id = $request->input('category_id');
        $activity->rating_id = $request->input('rating_id');
        $activity->emoji_id = $request->input('emoji_id');


        // $activity->create($request->all());
        // $step->activity()->associate($activity);
        // $step->save();

        //Save Our Image
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $activity->image = $filename;
        }
        $activity->save();

        $session = $request->session()->flash('message', 'Activity added successfully!');

        return redirect()->route('admin.activities.index');

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

        return view('admin.activities.show')->with(array(
            'activity' => $activity
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
      $activity = Activity::findOrFail($id);

       return view("admin.activities.edit")->with(array(
           'activity' => $activity
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
        $activity = Activity::findOrFail($id);

        $request->validate([
            'title' => 'required|max:191',
            'description' => 'required',
            'short_descript' => 'required|max: 20',
            'picture' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'level_id' => 'required|integer|min:0',
            'category_id' => 'required|integer|min:0',
            'rating_id' => 'required|integer|min:0',
            'emoji_id' => 'required|integer|min:0',
        ]);

        $activity->title = $request->input('title');
        $activity->description = $request->input('description');
        $activity->short_descript = $request->input('short_descript');
        $activity->picture = $request->input('picture');
        $activity->level_id = $request->input('level_id');
        $activity->category_id = $request->input('category_id');
        $activity->rating_id = $request->input('rating_id');
        $activity->emoji_id = $request->input('emoji_id');
        $activity->save();

        $session = $request->session()->flash('message', 'Activity updated successfully!');

        return redirect()->route('admin.activities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

      Session::flash('message', 'Activity deleted successfully');

      return redirect()->route('admin.activities.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function steps_create($id)
    {
      $activity = Activity::findOrFail($id);
          $steps = Step::all();

          return view('admin.activities.steps.create')->with(array(
              'activity' => $activity,
              'steps' => $steps,
          ));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function steps_store(Request $request)
    {
        $request->validate([
            'steps' => 'required'

        ]);

        $activity = new Activity();
        $activity->steps()->sync($request->input('steps'));
        $activity->steps()->save();

        $session = $request->session()->flash('message', 'Activity steps stored successfully!');

        return redirect()->route('admin.activities.show', $id);
    }


    public function upload_img(Request $request, $id)
    {
        if($request->hasFile('picture')) {
            $img = $request->file('picture');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(640, 426)->save( public_path('../../public/img/' . $filename) );
        }

        $activity = Activity::findOrFail($id);
        $activity->picture = $filename;
        $activity->save();

        return view('admin.activities.create')->with(array(
            'activity' => $activity,
            'picture' => $img,
        ));
    }

    // public function tips_create($id)
    //     {
    //       $activity = Activity::findOrFail($id);
    //           $tips = Tip::all();
    //
    //           return view('admin.activities.tips.create')->with(array(
    //               'activity' => $activity,
    //               'tips' => $tips
    //           ));
    //       }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
    //     public function tips_store(Request $request)
    //     {
    //         $request->validate([
    //             'tips' => 'required'
    //         ]);
    //
    //         $activity = new Activity();
    //         $activity->tips()->sync($request->input('tips'));
    //         $activity->tips()->save();
    //
    //         $session = $request->session()->flash('message', 'Activity tips stored successfully!');
    //
    //         return redirect()->route('admin.activities.show', $id);
    //     }
    }
