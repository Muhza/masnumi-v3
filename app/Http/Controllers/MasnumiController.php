<?php   
	
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\barang;
use App\Models\user;
use App\Models\contact;
use App\Models\wilayah;

class MasnumiController extends Controller
{
	// Halaman User
	public function indexuser()  
	{
		return view('index');
	} 

	public function showprodukuser()  
	{
		$showprodukuser = barang::paginate(4);

		return view('index')->with('barang', $showprodukuser);
	}

	public function cariproduk(Request $request)  
	{
		$cari = $request->search;

		$produkuser = barang::where('spek_barang','like',"%".$cari."%")->paginate(4);

		return view('index')->with('barang', $produkuser);
	} 

	public function index()  
	{
		return view('produk/home');
	} 

	// controller Barang
	// show 
	public function showbarang() 
	{   
		$barang = barang::paginate(4);

		return view('produk/barang')->with('barang', $barang);
	}

	// fitur search barang
	public function cari(Request $request)  
	{
		$cari = $request->cari;

		$barang = barang::where('spek_barang','like',"%".$cari."%")->paginate(4);

		return view('produk/barang')->with('barang', $barang);
	} 

	// insert
	public function create()
	{
		return view('produk/create');  
	}

	public function store(Request $request)   
	{	
		$this->validate($request,[
			'gambar' => 'max:50000' // 50mb
		]);

		// upload file gambar
		$filename = time() . '.png';
		$request->file('gambar')->storeAs('public/img', $filename);

		$barang = New barang;
		$barang->gambar_brg = $filename;
		$barang->spek_barang = $request->spek;
		$barang->kondisi = $request->kondisi;
		$barang->berat = $request->berat;
		$barang->tgl_beli = $request->tgl_beli;
		$barang->harga = $request->harga;
		$barang->stok = $request->jml_stok;
		$barang->deskripsi = $request->desc;

		$barang->save();

		return redirect('/barang');
	}

	// ediit
	public function edit($id)
	{
		$edit = barang::where('id_barang', $id)->get();

		return view('produk/edit')->with('edit', $edit);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request,[
			'gambar' => 'max:50000' // 50mb
		]);

		// update file gambar
		$filename = time() . '.png';
		$request->file('gambar')->storeAs('public/img', $filename);

		// update data
		$data = array(
			'gambar_brg' => $filename,
			'spek_barang' => $request->spek,
			'kondisi' => $request->kondisi,
			'berat' => $request->berat,
			'tgl_beli' => $request->tgl_beli,
			'harga' => $request->harga,
			'stok' => $request->jml_stok,
			'deskripsi' => $request->desc,
		);
		// dd($data);
		$update = barang::where('id_barang',$id)->update($data);

		return redirect('/barang');
	} 

	// delete
	public function hapus($id)   
	{
		$barang = barang::where('id_barang',$id)->delete();

		return redirect('/barang');
	}

	// // Controller user
	// // show user

	public function showuser()   
	{	
		$datauser = user::all();

		return view('user/user')->with('user', $datauser);
	}

	// create
	public function createuser(){
		return view('user/create');
	} 

	// store user
	// public function storeuser(){

	// 	return view('user/create');
	// } 

	// edit user
	public function edituser($id)   
	{
		$edit = user::where('id_user', $id)->get();

		dd($edit);
		return view('user/edit');
	}

	// controller wilayah
	// show wilayah
	public function showwilayah() {
		$datawilayah = wilayah::all();

		return view('wilayah/wilayah')->with('wilayah', $datawilayah); 
	}

	// create wilayah
	public function createwilayah()   
	{
		return view('wilayah/createwilayah');
	}

	// store wilayah
	public function storewilayah(Request $request)
	{
		// upload file
		$filename = time() . '.png';
		$request->file('gambar')->storeAs('public/img', $filename);

		$wilayah = New wilayah;
		$wilayah->gambar = $filename;
		$wilayah->wilayah = $request->wilayah;
		$wilayah->save();

		return redirect('/wilayah'); 
	}

	// edit wilayah
	public function editwilayah($id)   
	{
		$edit = wilayah::where('id_wilayah', $id)->get();

		return view('wilayah/editwilayah')->with('edit', $edit);
	}

	// update wilayah
	public function updatewilayah(Request $update, $id)   
	{	
		// upload file
		$filename = time() . '.png';
		$update->file('gambar')->storeAs('public/img', $filename);

		$data = array(
			'gambar' => $filename,
			'wilayah' => $update->nm_wilayah,
		);

		// dd($data);
		$update = wilayah::where('id_wilayah',$id)->update($data);

		return redirect('/wilayah');
	}

	// delete
	public function hapuswilayah($id)   
	{
		$hapus = wilayah::where('id_wilayah', $id)->delete();

		return redirect('/wilayah');
	}

	// controller Contact
	public function showcontact()
	{	
		$contact = contact::all();

		return view('contact/contact')->with('contact', $contact); 
	}

	// // show contact
	// public function createcontact()   
	// {
	// 	return view('contact/create');
	// }

	// // contact store
	// public function storecontact(Request $request)
	// {
	// 	$contact = New contact;
	// 	$contact->gambar = $request->gambar;
	// 	$contact->nama = $request->nama;
	// 	$contact->jabatan = $request->jabatan;
	// 	$contact->alamat = $request->alamat;
	// 	$contact->telp = $request->telp;
	// 	$contact->email = $request->email;
	// 	$contact->save();

	// 	return redirect('/contact');
	// }

	// contact edit
	public function editcontact($id)
	{
		$edit = contact::where('id_contact', $id)->get();

		return view('contact/editcontact')->with('editc', $edit);
	}

	// contact update
	public function updatecontact(Request $request, $id)
	{
		// logic validate 
		$this->validate($request, [
			'telp' => 'min:13|max:13'
		]);

		// update contact
		$data = array(
			'gambar' => $request->gambar,
			'alamat' => $request->alamat,
			'telp' => $request->telp,
			'email' => $request->email,		
		);

		$update = contact::where('id_contact',$id)->update($data);

		return redirect('/contact');		
	}
}