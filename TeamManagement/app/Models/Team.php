<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';
    public $incrementing = false;
    protected $primaryKey = "team_id";
    protected $fillable = [
        'team_id',
        'team_name',
        'department_id',
        
    ];
}
