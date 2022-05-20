<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
protected $table='travels';
protected $primary="id";
protected $fillable=["price","from","to"];




}
//aqui van las relaciones  $table->integer("user_id");

