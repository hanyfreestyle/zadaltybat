<?php

namespace App\Models\roles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBRoleHasPermissions extends Model
{
    use HasFactory;
    protected $table = "role_has_permissions";
}
