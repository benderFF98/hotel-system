<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'client_id',
        'room_number',
        'beds_number',
        'description',
        'price',
        'status',
    ];

    protected $dates = [
        'occupied_from',
        'occupied_to'
    ];

    //Accessor
//    public function getPriceAttribute(): string
//    {
//        $valor = $this->attributes['price'];
//        return "US$ " . number_format((float)$valor,  2, '.', '');
//    }

    //Relationships
    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }

    //Query Scopes
    public function scopeBeds(Builder $query, $value): Builder
    {
        if (!$value) {
            return $query;
        }

        return $query->where('beds_number', $value);
    }

    public function scopePrice(Builder $query, $value_from, $value_to): Builder
    {
        if (!$value_from and !$value_to) {
            return $query;
        }

        return $query->whereBetween('price', [$value_from, $value_to]);
    }

    public function scopeStatus(Builder $query, $value): Builder
    {
        if (!$value) {
            return $query;
        }

        return $query->where('status', $value);
    }
}
