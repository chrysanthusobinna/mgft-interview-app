<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contact extends Model
{

    protected $dates = ['deleted_at'];
    
    protected $table = 'contacts';
    protected $primaryKey = 'id';
     protected $fillable = [
          'firstname',
          'lastname',
          'email',
          'company_id',
      ];
      use HasFactory, SoftDeletes;
    use HasFactory;
}
