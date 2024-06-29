<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{

    protected $fillable = [
   'name',
   'description',
   'amount',
   'thumbnail',
   'price',



];
    use HasFactory;


public function user(): BelongsTo {
   return $this->belongsTo(User::class);
}






}


