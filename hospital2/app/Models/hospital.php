<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class hospital extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded=[];
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function getvisit()
    {   
        /**---primary key of given foreign kry of patient id to id **/
        return $this->hasMany(visit::class,'patient_id','id');
    }
}
