<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TempatWisata;


class TempatWisataController extends Controller
{
  public function index()
  {
      $tempatwisata = TempatWisata::paginate(5);
      return view('/admin/tempatwisata/tempatwisata', ['tempatwisata' => $tempatwisata]);
  }

  public function tambah()
  {
      return view('/admin/tempatwisata/tempatwisata_tambah');
  }

  public function store(Request $request)
  {
      $this->validate($request,[
          'nama_tempat_wisata' => 'required',
          'harga_tiket' => 'required',
          'kebersihan' => 'required',
          'jarak_tempuh' => 'required',
          'waktu_kunjungan' => 'required',
          'jumlah_pengunjung' => 'required',
          'popularitas' => 'required',
          'max_tampung' => 'required',
          'luas_tempat_wisata' => 'required',
          'wahana' => 'required',
          'protokol_covid' => 'required',
          'foto' => 'required',
          'deskripsi' => 'required',
          'sumber_data' => 'required',
      ]);

      $file = $request->file('foto');
      $ekstensi = $request->file('foto')->getClientOriginalExtension();
      $tujuan_upload = 'foto_tempat_wisata';
      $namafoto = $request->nama_tempat_wisata.".".$ekstensi;
      $file->move($tujuan_upload,$namafoto);

      $hargatiket = $request->harga_tiket;
      $kebersihan = $request->kebersihan;
      $jaraktempuh = $request->jarak_tempuh;
      $waktukunjungan = $request->waktu_kunjungan;
      $jumlahpengunjung = $request->jumlah_pengunjung;
      $popularitas = $request->popularitas;

      if ($hargatiket < 10000) {
        $skala_harga_tiket = 5;
      }elseif ($hargatiket >= 10000 && $hargatiket <= 25000) {
        $skala_harga_tiket = 4;
      }elseif ($hargatiket > 25000 && $hargatiket <= 50000) {
        $skala_harga_tiket = 3;
      }elseif ($hargatiket > 50000 && $hargatiket <= 100000) {
        $skala_harga_tiket = 2;
      }elseif ($hargatiket >100000) {
        $skala_harga_tiket = 1;
      }

      if ($kebersihan == "Sangat Bersih") {
        $skala_kebersihan = 5;
      }elseif ($kebersihan == "Bersih") {
        $skala_kebersihan = 4;
      }elseif ($kebersihan == "Biasa Saja") {
        $skala_kebersihan = 3;
      }elseif ($kebersihan == "Kotor") {
        $skala_kebersihan = 2;
      }elseif ($kebersihan == "Sangat Kotor") {
        $skala_kebersihan = 1;
      }

      if ($jaraktempuh < 5) {
        $skala_jarak_tempuh = 5;
      }elseif ($jaraktempuh >= 5 && $jaraktempuh <=10) {
        $skala_jarak_tempuh = 4;
      }elseif ($jaraktempuh > 10 && $jaraktempuh <=25) {
        $skala_jarak_tempuh = 3;
      }elseif ($jaraktempuh > 25 && $jaraktempuh <=50) {
        $skala_jarak_tempuh = 2;
      }elseif ($jaraktempuh >50) {
        $skala_jarak_tempuh = 1;
      }

      if ($waktukunjungan == "07.00 - 19.00") {
        $skala_waktu_kunjungan = 5;
      }elseif ($waktukunjungan == "07.00 - 17.00") {
        $skala_waktu_kunjungan = 3;
      }

      if ($jumlahpengunjung == "1000") {
        $skala_jumlah_pengunjung = 5;
      }elseif ($jumlahpengunjung == "700") {
        $skala_jumlah_pengunjung = 4;
      }elseif ($jumlahpengunjung == "500") {
        $skala_jumlah_pengunjung = 3;
      }elseif ($jumlahpengunjung == "300") {
        $skala_jumlah_pengunjung = 2;
      }elseif ($jumlahpengunjung == "1000") {
        $skala_jumlah_pengunjung = 1;
      }

      if ($popularitas == "Sangat Populer") {
        $skala_popularitas = 5;
      }if ($popularitas == "Populer") {
        $skala_popularitas = 4;
      }if ($popularitas == "Biasa Saja") {
        $skala_popularitas = 3;
      }if ($popularitas == "Kurang Populer") {
        $skala_popularitas = 2;
      }if ($popularitas == "Belum Dikenal") {
        $skala_popularitas = 1;
      }

      TempatWisata::create([
          'nama_tempat_wisata' => $request->nama_tempat_wisata,
          'harga_tiket' => $hargatiket,
          'kebersihan' => $kebersihan,
          'jarak_tempuh' => $jaraktempuh,
          'waktu_kunjungan' => $waktukunjungan,
          'jumlah_pengunjung' => $jumlahpengunjung,
          'popularitas' => $popularitas,
          'max_tampung' => $request->max_tampung,
          'luas_tempat_wisata' => $request->luas_tempat_wisata,
          'wahana' => $request->wahana,
          'protokol_covid' => $request->protokol_covid,
          'foto' => $namafoto,
          'deskripsi' => $request->deskripsi,
          'sumber_data' => $request->sumber_data,
          'skala_harga_tiket' => $skala_harga_tiket,
          'skala_kebersihan' => $skala_kebersihan,
          'skala_jarak_tempuh' => $skala_jarak_tempuh,
          'skala_waktu_kunjungan' => $skala_waktu_kunjungan,
          'skala_jumlah_pengunjung' => $skala_jumlah_pengunjung,
          'skala_popularitas' => $skala_popularitas,

      ]);
      return redirect('admin/tempatwisata')->with('msg', 'Data Telah Tersimpan');
  }

  public function edit($id)
  {
      $tempatwisata = TempatWisata::where('id',$id)->first();
      return view('/admin/tempatwisata/tempatwisata_edit', ['tempatwisata' => $tempatwisata]);
  }


  public function update(Request $request, $id)
  {
      $this->validate($request,[
        'nama_tempat_wisata' => 'required',
        'harga_tiket' => 'required',
        'kebersihan' => 'required',
        'jarak_tempuh' => 'required',
        'waktu_kunjungan' => 'required',
        'jumlah_pengunjung' => 'required',
        'popularitas' => 'required',
        'max_tampung' => 'required',
        'luas_tempat_wisata' => 'required',
        'wahana' => 'required',
        'protokol_covid' => 'required',
        'foto' => 'required',
        'deskripsi' => 'required',
        'sumber_data' => 'required',
      ]);

      $tempatwisata = TempatWisata::where('id', $id)->first();

      unlink(public_path("foto_tempat_wisata/".$tempatwisata->foto));


      $file = $request->file('foto');
      $ekstensi = $request->file('foto')->getClientOriginalExtension();
      $namafoto = $request->nama_tempat_wisata.".".$ekstensi;

      $tempatwisata->nama_tempat_wisata = $request->nama_tempat_wisata;
      $tempatwisata->harga_tiket = $request->harga_tiket;
      $tempatwisata->kebersihan = $request->kebersihan;
      $tempatwisata->jarak_tempuh = $request->jarak_tempuh;
      $tempatwisata->waktu_kunjungan = $request->waktu_kunjungan;
      $tempatwisata->jumlah_pengunjung = $request->jumlah_pengunjung;
      $tempatwisata->popularitas = $request->popularitas;
      $tempatwisata->max_tampung = $request->max_tampung;
      $tempatwisata->luas_tempat_wisata = $request->luas_tempat_wisata;
      $tempatwisata->wahana = $request->wahana;
      $tempatwisata->protokol_covid = $request->protokol_covid;
      $tempatwisata->foto = $namafoto;
      $tempatwisata->deskripsi = $request->deskripsi;
      $tempatwisata->sumber_data = $request->sumber_data;
      $tempatwisata->save();

      $tujuan_upload = 'foto_tempat_wisata';
      $file->move($tujuan_upload,$namafoto);

      return redirect('admin/tempatwisata')->with('msg', 'Data Telah Teredit');
  }

  public function destroy($id)
  {
      $tempatwisata = TempatWisata::where('id', $id)->first();
      unlink(public_path("foto_tempat_wisata/".$tempatwisata->foto));
      $tempatwisata->delete();
      return redirect('admin/tempatwisata')->with('msg', 'Data Telah Terhapus');
  }

  public function search(Request $request)
  {
      $cari = $request->search;
      $tempatwisata = TempatWisata::where('nama_tempat_wisata','LIKE','%'.$cari.'%')
      ->orWhere('harga_tiket','LIKE','%'.$cari.'%')
      ->paginate(5);
      return view('/admin/tempatwisata/tempatwisata', ['tempatwisata' => $tempatwisata]);
  }
}
