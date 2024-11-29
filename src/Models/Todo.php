<?php

namespace Todos\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

  use HasFactory;

  // add fillable fields
  protected $fillable = ['title', 'description', 'is_completed'];
}
