<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class testing extends Model
{
  use HasFactory;
  protected $fillable = [
        'amount',
        'transaction_number',
    ];
}
