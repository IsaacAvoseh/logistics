<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'pick_address', 'drop_address', 'distance', 'weight', 'carrier', 'status', 'type', 'tracking_id', 'amount']; 
}
