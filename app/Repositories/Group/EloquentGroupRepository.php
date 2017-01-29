<?php namespace App\Repositories\Group;

use App\Group;
use Auth;

class EloquentGroupRepository implements GroupRepository
{
  // public function getPaginated($howMany = 10, $byFirstname = null)
	// {
	// 	if(is_null($byFirstname))
	// 	{
	// 		return Group::whereNotIn('id', [Auth::user()->id])->orderBy('firstname', 'asc')->paginate($howMany);
	// 	}
	//
	// 	return Group::whereNotIn('id', [Auth::user()->id])->where('firstname', 'like', '%'.$byFirstname.'%')->orderBy('firstname', 'asc')->paginate($howMany);
	//
	// }

  public function findById($id)
  {
    return Group::find($id);
  }
  public function findManyById(array $ids)
  {
    $groups = [];

    foreach ($ids as $id) {

      $groups[] = Group::find($id);
    }

    return	$groups;
  }
  // public function findByIdWithFeeds($id)
  // {
  //   return Group::with([
  //     'feeds' => function($query){
  //     $query->latest();
  //   }])->findOrFail($id);
  // }


}
