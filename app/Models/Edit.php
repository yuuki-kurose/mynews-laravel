<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    use HasFactory;
    
    protected $table    = 'edit_histories';
    protected $guarded  = array('id');

    public static $rules = array(
        'profile_id'    => 'required',
        'edited_at'     => 'required',
    );
}
