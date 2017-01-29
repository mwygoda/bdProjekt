<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model {

	//\
  protected $table = 'groups';


  protected $fillable = ['name', 'profileimage', 'grouptopic'];

  public function feeds()
  {
    return $this->hasMany('App\Feed')->latest();
  }
  public function is($id)
  {
    return $this->id == $id;
  }

}
