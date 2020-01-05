<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jenis extends Model
{
	use Softdeletes;
	protected $dates = ['deleted_at'];
	protected $primaryKey = 'id_jenis';
	
	public $timestamps = false; // created_at updated_at kosong

	protected $fillable = ['gambar', 'nm_jenis'];
	// protected $guarded = ['created_at','updated_at'];
}  