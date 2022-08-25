<?php

namespace App\Model;

use App\Model\Project;
use Illuminate\Database\Eloquent\Model;

class projectimage extends Model
{
    public $table = 'projectimage';
    public $timestamps = false;

    public function images()
    {

        return $this->belongsToMany(Project::class, '');
    }
}
