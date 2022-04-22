<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $fillable = ['nama', 'no_tlp', 'alamat'];
    use HasFactory;
    protected $guarded = ['nama'];
}
