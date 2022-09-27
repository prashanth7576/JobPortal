<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;

    protected $table='employes';

    protected $fillable=[

        'Employee_Name', 'Position', 'Email', 'Mobile_Num', 'Team','Date', 'Status','Profile_url'

    ];


}
