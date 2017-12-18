<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;

class EditController extends RegisterController
{

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/edit';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	    // 現在認証されているユーザーの取得
	    $user = Auth::user();

		// 現在認証されているユーザーのID取得
	    $id = Auth::id();

	    if (Auth::check()) {
		    echo "ログイン済みのユーザー！";
	    } else {
	    	echo "ログインしてないよー";
	    }
	    $oldData = [
		    'lastname' => $user->lastname,
		    'firstname' => $user->firstname,
		    'zipcode' => $user->zipcode,
		    'address' => $user->address,
		    'phone' => $user->phone,
		    'email' => $user->email,
		    //
	    ];
	    \Session::flashInput($oldData);
	    $prefs = config('pref');
	    return view('edit')->with(['prefs'=> $prefs, 'edit' =>true]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                return view('edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


}
