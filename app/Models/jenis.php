<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jenis extends Model
{
	use SoftDeletes;

	protected $fillable = ['gambar','nm_jenis'];
	// whitelist = yang boleh di isi user

	protected $guarded = ['deleted_at','upadated_at','created_at'];
	// protected $guarded = []; // blacklist = yang tidak boleh di isi user

} 