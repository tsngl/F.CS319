<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'descuription',
        'position',
        'address',
        'type',
        'status',
        'last_date',
    ];
    use HasFactory;
}
