<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addjob extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['JobId', 'JobTitle', 'Description' , 'Positions' ,'Location' , 'AnnualSalary' , 'DeptId' , 'EmpId' , 'Active' , 'CreatedDate' , 'Created_By' , 'Remarks' , 'JobsId' , 'CloseDate'];
    
}

