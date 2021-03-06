<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model {

    protected $table = 'product_group';

    protected $primaryKey = 'id_product_group';

    public $timestamps = false;

    protected $fillable = [
        'name', 'description'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
}
