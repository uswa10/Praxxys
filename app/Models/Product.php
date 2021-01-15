<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $primaryKey = 'id';
public $timestamps = false;
public function user(){
  return $this->belongsTo('App\Models\User');
}
}
