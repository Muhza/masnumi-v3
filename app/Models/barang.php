<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
	protected $table = 'barang'; // tidak menggunakan konsep prurals

	public $timestamps = false; // created_at and updated_at kosong
	
} 