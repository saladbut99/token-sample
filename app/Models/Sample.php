<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Sample extends Model
{
    use HasApiTokens ,HasFactory, Notifiable;

    protected $table = 'sample';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email_address',
        'password',
    ];

    public $timestamps = 'false';
}
