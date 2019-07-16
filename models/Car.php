<?php 
use Illuminate\Database\Eloquent\Model;

class Car extends Model{
  
  protected $guarded = [];

  public function brand () {
    return $this->belongsTo(Brand::class);
  }
}
