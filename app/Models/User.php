<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id_users';

    public $timestamps = false;

    protected $fillable = [
        'login', 'password', 'first_name', 'surname', 'date_of_entry', 'email'
    ];

    protected $hidden = [
        'password',
    ];
}
