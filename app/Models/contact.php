<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contact extends Model
{
	protected $table = 'contact';

	public $timestamps = false; // created_at and updated_at kosong
} 