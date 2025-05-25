<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $guarded = ['id', 'updated_at', 'created_at'];
    protected $fillable = ['name', 'type', 'url', 'filename', 'description'];

}
