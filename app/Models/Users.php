<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Users extends Model
{
    protected $table = 'users';
    use HasFactory;
    use SoftDeletes;

    public static function getAllAdminsPlayer() {
        return DB::table('users as u')
            ->select('u.role')
            ->whereRaw("(u.role = 'admin'")
            ->get();
    }
}
