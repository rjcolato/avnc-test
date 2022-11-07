<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turns extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'clock_in', 'clock_out'];

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
}
