<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = ['branches_id', 'employee_code', 'first_name',
        'last_name', 'birthdate', 'email', 'country_id', 'city', 'address', 'phone', 'hiring_date', 'status',
        'genre_id', 'turns_id'];

    public function shifts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Shifts::class);
    }
}
