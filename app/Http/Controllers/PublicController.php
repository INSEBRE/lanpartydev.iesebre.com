<?php namespace App\Http\Controllers;

class PublicController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){

    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('web.home');
	}

    public function premis()
    {
        return view('web.premis');
    }

    public function colaboradors()
    {
        return view('web.colaboradors');
    }

    public function cartell()
    {
        return view('web.cartell');
    }
}