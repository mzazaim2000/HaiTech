<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_tb extends Model{

    public $table= 'user';
    public $primaryKey ='id';
    public $incrementing = true;
    public $timestamps = false;
}