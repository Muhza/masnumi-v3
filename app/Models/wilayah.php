<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class wilayah extends Model
{
	// use SoftDeletes;

	protected $table = 'wilayah';

	public $timestamps = false;

	protected $fillable = ['gambar','wilayah'];
	// whitelist = yang boleh di isi user

	// protected $guarded = ['deleted_at','upadated_at','created_at'];
}