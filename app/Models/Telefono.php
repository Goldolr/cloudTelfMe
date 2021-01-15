<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_telefono';
    
    protected $fillable = ['marca', 'modelo', 'stock'];
}
