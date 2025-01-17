<?php
/**
 * Created by PhpStorm.
 * User: Nzuki
 * Date: 2024/11/26
 * Time: 17:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'count', 'reference', 'district_id'];
}