<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EmployeeTemperature extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'employee_temperatures';
    protected $guarded = [];
}
