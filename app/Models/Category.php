<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';

    protected $primaryKey = 'id_category';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
}
