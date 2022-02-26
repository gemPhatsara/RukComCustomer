<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer_tb';
    protected $primary_Key = 'id';
    protected $fillable= ['firstname','lastname','phone','email','created_at'];
}
