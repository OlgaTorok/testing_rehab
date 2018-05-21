<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\Activity;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $activities = Activity::all();
        $params = array(
            'users' => $users,
            'activities' => $activities
        );

        return view('admin.users.index')->with(array(
            'user' => $users
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'email' => 'required|max:191',
            // 'password' => 'required|max:191',
            'is_admin' => 'required|boolean',
            'consent' => 'required|boolean'
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->is_admin = $request->input('is_admin');
        $user->consent = $request->input('consent');
        $user->save();
        $session = $request->session()->flash('message', 'User added successfully!');
        return redirect()->route('admin.users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::findOrFail($id);
        return view ('admin.users.show')->with(array(
            'user'=> $user
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
        $users = User::findOrFail($id);
        return view('admin.users.edit')->with(array(
                    'user' => $users
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
      $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            // 'password' => 'required|max:191',
            'is_admin' => 'required|boolean',
            'consent' => 'required|boolean'
        ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->is_admin = $request->input('is_admin');
        $user->consent = $request->input('consent');
        $user->save();
        $session = $request->session()->flash('message', 'User added successfully!');
        return redirect()->route('admin.users.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        $request->session()->flash('message', 'User Deleted sucessfully');
        return redirect()->route('admin.users.index');
    }
    /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function activities_create($id)
        {
            $user = User::findOrFail($id);
            $activities = Activity::all();

            return view('admin.users.activities.create')->with(array(
                'user' => $user,
                'activities' => $activities
            ));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function activities_store(Request $request, $id)
          {
            $request->validate([
                'activities' => 'required'
            ]);

            $user = User::find($id);
            $user->activities()->sync($request->input('activities'));

            $session = $request->session()->flash('message', 'User activities stored successfully!');

            return redirect()->route('admin.users.show', $id);
        }


    }
