<?php 
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model{
  protected $guarded = [];
  public function car()
  {
    return $this->hasMany(Car::class);
  }
}
