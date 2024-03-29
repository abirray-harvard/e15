<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        # Order belongs to User
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Models\User');
    }
}
