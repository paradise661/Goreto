<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'doctor_name',
        'doctor_title',
        'message',
        'file_path',
        'image', 
    ];

    /**
     * Prescription belongs to a Customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
