<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Apartment extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class, 'apartment_service');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function visits(){
        return $this->hasMany(Visit::class);
    }

    public function sponsorships(){
        return $this->belongsToMany(Sponsorship::class);
    }

    protected $fillable = [
        'name',
        'rooms',
        'beds',
        'bathrooms',
        'mq',
        'address',
        'lat',
        'lon',
        'photo',
        'is_visible',
        'is_available',
        'is_sponsored'

    ];

}
