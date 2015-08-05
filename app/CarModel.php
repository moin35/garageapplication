<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public $timestamps=false;
    protected $table= 'car_model_name';
}
