<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mixes extends Model
{
    use CrudTrait;
    protected $table = 'mixes';
    protected $guarded = [];
    use HasFactory;
}
