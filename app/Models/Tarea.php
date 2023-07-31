<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model {
  use HasFactory;
  
  protected $fillable = [
    "nombre",
    "completado"
  ];

  public function scopeMostRecent(Builder $query): Builder {
    return $query->orderByDesc("created_at", "asc");
  }
}
