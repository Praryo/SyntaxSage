<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyntaxSageServers extends Model
{
    use HasFactory;
	
	Protected $table = 'servers';
	Protected $primaryKey = 'id';
}
