<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class  Comment ex
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'email', 'address', 'phone_number', 'note'];

    public function bills()
    {
        return $this->hasMany(Bill::class, 'id_customer');
    }
}
