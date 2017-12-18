<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Prefecture;
use App\TagoneList;
use App\TagtwoList;
use App\Product;

class ContactsController extends Controller
{
	// バリデーションのルール
	public $validateRules = [
		'name' => 'required',
//		'email' => 'required',
		'comment' => 'max:500'
	];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    return view('contacts/index');
    }

	public function confirm(Request $request) {
		$post_data = $request->all();
		return view('contacts/confirm', compact('post_data'));
	}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $this->validate($request, $this->validateRules);
	    Contact::create($request->all());
	    \Session::flash('flash_message', '記事を作成しました。');
	    return redirect('contact/result');
    }


	public function result() {
		return view('contacts/result');
	}
}
