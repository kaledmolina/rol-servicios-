<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'technician_id', 'created_by', 'client_id', 'fecha_servicio', 'status',
    ];

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function photos()
    {
        return $this->hasMany(ServicePhoto::class);
    }

    public function rating()
    {
        return $this->hasOne(ServiceRating::class);
    }
}
