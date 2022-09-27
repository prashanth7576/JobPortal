<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table='jobs';

    protected $primaryKey = 'id';
    public $timestamps = false;

    

    protected $guarded = [];
   
    protected $fillable = [
        'JobId',
        'JobTitle',
        'JobRole',
        'Description',
        'Positions',
        'Location',
        'AnnualSalary',
        'deptshortname',
        'Active',
        'CreatedDate',
        'CreatedBy',
        'ApplyLink',
        'CloseDate',
         ];


    public function item()
    {
    	return $this->hasOne(Item::class);
    }
         
}
