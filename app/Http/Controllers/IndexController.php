<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TempatWisata;

class IndexController extends Controller
{

  public function tempatwisata()
  {
      $tempatwisata = TempatWisata::paginate(5);
      return view('tempatwisata')
      ->with(compact('tempatwisata'));
  }

  public function tempatwisatasearch(Request $request)
  {
      $cari = $request->search;
      $tempatwisata = TempatWisata::where('nama_tempat_wisata','LIKE','%'.$cari.'%')->paginate(5);
      return view('tempatwisata', ['tempatwisata' => $tempatwisata]);
  }

  public function tempatwisatareadmore($id)
  {
  $tempatwisata = TempatWisata::where('id', $id)->first();
       return view('tempatwisatareadmore')
      ->with(compact('tempatwisata'));
  }

  public function wisatawan()
  {
       return view('wisatawan');
  }

  public function wisatawanstore(Request $request)
  {
    $namawisatawan = $request->nama_wisatawan;
    $skala_harga_tiket = $request->harga_tiket;
    $skala_kebersihan = $request->kebersihan;
    $skala_jarak_tempuh = $request->jarak_tempuh;
    $skala_waktu_kunjungan = $request->waktu_kunjungan;
    $skala_jumlah_pengunjung = $request->jumlah_pengunjung;
    $skala_popularitas = $request->popularitas;

    $rekomendasitempatwisata1 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)
    ->Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)
    ->Where('skala_popularitas', $skala_popularitas)->get();

    $rekomendasitempatwisata2 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)
    ->Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)->get();

    $rekomendasitempatwisata3 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)
    ->Where('skala_popularitas', $skala_popularitas)->get();

    $rekomendasitempatwisata4 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)->get();

    $rekomendasitempatwisata5 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_popularitas', $skala_popularitas)->get();

    $rekomendasitempatwisata6 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)
    ->Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)->get();

    $rekomendasitempatwisata7 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)->get();

    $rekomendasitempatwisata8 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)->get();

    $rekomendasitempatwisata9 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_popularitas', $skala_popularitas)->get();

    $rekomendasitempatwisata10 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)->get();

    $rekomendasitempatwisata11 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_kebersihan', $skala_kebersihan)->get();

    $rekomendasitempatwisata12 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)->get();

    $rekomendasitempatwisata13 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_popularitas', $skala_popularitas)->get();

    $rekomendasitempatwisata14 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)->get();

    $rekomendasitempatwisata15 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)
    ->Where('skala_jarak_tempuh', $skala_jarak_tempuh)->get();

    $rekomendasitempatwisata16 = TempatWisata::where('skala_harga_tiket',$skala_harga_tiket)->get();
    $rekomendasitempatwisata17 = TempatWisata::Where('skala_kebersihan', $skala_kebersihan)->get();
    $rekomendasitempatwisata18 = TempatWisata::Where('skala_jarak_tempuh', $skala_jarak_tempuh)->get();
    $rekomendasitempatwisata19 = TempatWisata::Where('skala_jumlah_pengunjung', $skala_jumlah_pengunjung)->get();
    $rekomendasitempatwisata20 = TempatWisata::Where('skala_popularitas', $skala_popularitas)->get();
    $rekomendasitempatwisata21 = TempatWisata::Where('skala_waktu_kunjungan', $skala_waktu_kunjungan)->get();

    if (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_waktu_kunjungan) && isset($skala_jumlah_pengunjung) && isset($skala_popularitas)) {
      $rekomendasitempatwisata = $rekomendasitempatwisata1;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_waktu_kunjungan) && isset($skala_jumlah_pengunjung))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata2;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_waktu_kunjungan) && isset($skala_popularitas))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata3;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_waktu_kunjungan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata4;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_popularitas))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata5;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh) && isset($skala_jumlah_pengunjung))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata6;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jarak_tempuh))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata7;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_jumlah_pengunjung))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata8;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_popularitas))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata9;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan) && isset($skala_waktu_kunjungan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata10;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_kebersihan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata11;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_waktu_kunjungan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata12;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_popularitas))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata13;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_jumlah_pengunjung))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata14;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket) && isset($skala_jarak_tempuh))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata15;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_harga_tiket))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata16;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_kebersihan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata17;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_jarak_tempuh))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata18;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_jumlah_pengunjung))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata19;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_popularitas))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata20;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }elseif (isset($skala_waktu_kunjungan))  {
      $rekomendasitempatwisata = $rekomendasitempatwisata21;
        return view('rekomendasitempatwisata')
        ->with(compact('namawisatawan'))
        ->with(compact('rekomendasitempatwisata'));
    }
  }

}
