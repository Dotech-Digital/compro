<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';
    protected $primaryKey = 'device_id';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'phone_number',
        'status',
        'session_key'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
