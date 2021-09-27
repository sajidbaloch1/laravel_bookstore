<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    function author(){
      return  $this->belongsTo(author::class);
    }
    function category(){
        return $this->belongsTo(category::class);
    }
}
