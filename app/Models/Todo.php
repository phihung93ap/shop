<?php

namespace App\Models\Todo;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Models\Todo
 */
class Todo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todos';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
  
}