<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepository;
use App\Repositories\Group\GroupRepository;
use App\Repositories\Feed\FeedRepository;
use Illuminate\Http\Request;
use App\Group;
use Auth;
class GroupController extends Controller {
	public function __construct()
	{
		$this->currentUser = Auth::user();
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$user = $this->currentUser;
		$groups = Group::all();
		//
		return view('groups.index',compact('groups', 'user'));
	}
	// public function index(Request $request, UserRepository $userRepository)
	// {
	// 	$user = $this->currentUser;
	//
	// 	$users = $userRepository->getPaginated(null, $request->firstname);
	//
	// 	return view('users.index', compact('users', 'user'));
	// }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Auth::user();
		$currentGroup = Group::find($id);
		return view('groups.show',compact('user','currentGroup'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
