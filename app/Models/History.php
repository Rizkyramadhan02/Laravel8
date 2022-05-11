<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';

    protected $fillable = ['friends_id','groups_id','details'];
    public function friends(){
        return $this->belongsTo(Friends::class, 'friends_id', 'id');
    }
    public function groups(){
        return $this->belongsTo(Groups::class, 'groups_id', 'id');
    }
}
