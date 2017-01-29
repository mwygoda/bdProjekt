<?php namespace App\Repositories\Group;

use App\Group;

interface GroupRepository
{
//  public function public function getPaginated($howMany, $byKeyword);
  public function findById($id);
  public function findManyById(array $ids);
//  public function findByIdWithFeeds($id);
}
