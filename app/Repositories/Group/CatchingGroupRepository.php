<?php namespace App\Repositories\Group;

use Illuminate\Contracts\Cache\Repository as Cache;
use App\Group;

class CachingGroupRepository implements GroupRepository
{

 private $repository;
 private $cache;
 private $howMany;
 private $byName;

 public function __construct(GroupRepository $repository, Cache $cache)
 {
   $this->repository = $repository;

   $this->cache = $cache;
 }

 // public function getPaginated($howMany = 10, $byFirstname = null)
 // {
 //   $this->howMany = $howMany;
 //
 //   $this->byFirstname = $byFirstname;
 //
 //   if(! $this->byFirstname)
 //   {
 //     return $this->cache->remember('users.all', 20, function(){
 //
 //     });
 //   }
 //   else
 //   {
 //     return $this->repository->getPaginated($this->howMany, $this->byFirstname);
 //   }

 // }

 public function findById($id)
 {
   return $this->repository->findById($id);
 }

 public function findManyById(array $ids)
 {
   return $this->repository->findManyById($id);
 }

}
