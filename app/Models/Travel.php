<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
protected $table='travels';
protected $primary="id";
protected $fillable=["id_provincia","user_id","price","from","to","request"];
protected $appends=["username"];






public function getUsernameAttribute(){

$user_id=$this->user_id;
$username=User::where('id',$user_id)->first();

    return $username->name;

}




}

