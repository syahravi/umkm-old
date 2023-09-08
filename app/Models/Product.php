<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $table = 'products';
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'thumbnail_id'
    ];
}
