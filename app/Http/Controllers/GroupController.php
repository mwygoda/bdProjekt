<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepository;
use App\Repositories\Group\GroupRepository;
use App\Repositories\Feed\FeedRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Group;
use App\GroupMember;
use DB;
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
		$userGroups = GroupMember::where('user_id','=', $user->id)->get();

		$userGroupIds = array();
		foreach ($userGroups as $userGroup ) {
			$userGroupIds[] = $userGroup->group_id;
		}


	 $groups = Group::whereNotIn('id', $userGroupIds )->get();
	 $myGroups = Group::whereIn('id', $userGroupIds )->get();
		//
		return view('groups.index',compact('groups', 'user','myGroups'));
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
		$usersGroups = GroupMember::where('group_id','=', $id)->get();

		$groupUsersIds = array();
		foreach (	$usersGroups as $userGroup ) {
			$groupUsersIds[] = $userGroup->user_id;
		}
		$users = User::whereIn('id', $groupUsersIds)->get();


		return view('groups.show',compact('user','currentGroup','users'));
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
	public function joinGroup($id)
	 {
		$user = Auth::user();
		GroupMember::insert( ['group_id' => $id, 'user_id' => $user->id, 'is_admin'=>0, 'created_at'=>Carbon::now()->timestamp, 'updated_at'=>Carbon::now()->timestamp]
	);
	return back();

	}
}
