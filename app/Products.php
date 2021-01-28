<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name','category','colour','size','weight','quantity','return','brand','avability','price','remark','image','date_and_time','delivery_date'];
}
