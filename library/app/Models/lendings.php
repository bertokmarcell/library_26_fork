<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['start', 'created_at', 'updated_at'])]
class lendings extends Model
{
    /** @use HasFactory<\Database\Factories\LendingsFactory> */
    use HasFactory;
}
