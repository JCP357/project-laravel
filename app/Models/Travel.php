<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
protected $table='travels';
protected $guarded=["id"];
protected $appends=["username"];






public function getUsernameAttribute(){

$user_id=$this->user_id;
$username=User::where('id',$user_id)->first();

    return $username->name;

}




}

