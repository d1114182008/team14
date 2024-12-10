<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $table="project_details";

    protected $fillable = [
        'date_listed',
        'year',
        'application_number',
        'implementation_area',
        'township',
        'province_city_code',
        'province_city_town_code',
        'project_name',
        'central_grant',
        'local_matching_funds',
        'total_approved_budget_thousand',
        'implementation_item',
        'notes',
    ];
}
