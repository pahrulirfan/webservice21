<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
//    protected $table = 'customers';
//    protected $primaryKey = 'id';
//    public $timestamps = true;

    protected $fillable = ['name', 'phone', 'email', 'address'];
}
