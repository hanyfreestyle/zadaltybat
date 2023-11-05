<?php

namespace App\Models\roles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBModelHasRoles extends Model
{
    use HasFactory;

    protected $table = "model_has_roles";

}
