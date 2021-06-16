<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Tempat Wisata - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/admin/tempatwisata" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>

                <form method="post" action="/admin/tempatwisata/update/{{$tempatwisata->id}}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama Tempat Wisata</label>
                        <input type="text" name="nama_tempat_wisata" class="form-control" placeholder="Nama Tempat Wisata .."
                        value="{{$tempatwisata->nama_tempat_wisata}}">

                        @if($errors->has('nama_tempat_wisata'))
                        <div class="text-danger">
                            {{ $errors->first('nama_tempat_wisata')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Harga Tiket</label>
                        <input type="text" name="harga_tiket" class="form-control" placeholder="Harga Tiket .."
                        value="{{$tempatwisata->harga_tiket}}">

                        @if($errors->has('harga_tiket'))
                        <div class="text-danger">
                            {{ $errors->first('harga_tiket')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Kebersihan</label>
                        <select class="form-control" id="kebersihan"
                        name="kebersihan">
                        <option value="Sangat Bersih">Sangat Bersih</option>
                        <option value="Bersih">Bersih</option>
                        <option value="Biasa Saja">Biasa Saja</option>
                        <option value="Kotor">Kotor</option>
                        <option value="Sangat Kotor">Sangat Kotor</option>
                    </select>
                    @if($errors->has('kebersihan'))
                    <div class="text-danger">
                        {{ $errors->first('kebersihan')}}
                    </div>
                    @endif

                </div>

                    <div class="form-group">
                        <label>Jarak Tempuh</label>
                        <input type="text" name="jarak_tempuh" class="form-control" placeholder="Jarak Tempuh .."
                        value="{{$tempatwisata->jarak_tempuh}}">

                        @if($errors->has('jarak_tempuh'))
                        <div class="text-danger">
                            {{ $errors->first('jarak_tempuh')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Waktu Kunjungan</label>
                        <select class="form-control" id="waktu_kunjungan"
                        name="waktu_kunjungan">
                        <option value="07.00 - 19.00">07.00 - 19.00</option>
                        <option value="07.00 - 17.00">07.00 - 17.00</option>
                    </select>
                    @if($errors->has('waktu_kunjungan'))
                    <div class="text-danger">
                        {{ $errors->first('waktu_kunjungan')}}
                    </div>
                    @endif

                  </div>

                  <div class="form-group">
                      <label>Daya Tampung</label>
                      <select class="form-control" id="popularitas"
                      name="jumlah_pengunjung">
                      <option value="1000">1000</option>
                      <option value="700">700</option>
                      <option value="500">500</option>
                      <option value="300">300</option>
                      <option value="100">100</option>
                  </select>
                  @if($errors->has('jumlah_pengunjung'))
                  <div class="text-danger">
                      {{ $errors->first('jumlah_pengunjung')}}
                  </div>
                  @endif

                </div>

                  <div class="form-group">
                      <label>Popularitas</label>
                      <select class="form-control" id="popularitas"
                      name="popularitas">
                      <option value="Sangat Populer">Sangat Populer</option>
                      <option value="Populer">Populer</option>
                      <option value="Biasa Saja">Biasa Saja</option>
                      <option value="Kurang Populer">Kurang Populer</option>
                      <option value="Belum Dikenal">Belum Dikenal</option>
                  </select>
                  @if($errors->has('popularitas'))
                  <div class="text-danger">
                      {{ $errors->first('popularitas')}}
                  </div>
                  @endif

                </div>

                <div class="form-group">
                    <label>Maks Jumlah Orang Yang Dapat Ditampung</label>
                    <input type="text" class="form-control" id="max_tampung"
                    name="max_tampung" value="{{$tempatwisata->max_tampung}}">
                </input>
                @if($errors->has('max_tampung'))
                <div class="text-danger">
                    {{ $errors->first('max_tampung')}}
                </div>
                @endif

              </div>

              <div class="form-group">
                  <label>Luas Tempat Wisata</label>
                  <input type="text" class="form-control" id="luas_tempat_wisata"
                  name="luas_tempat_wisata" value="{{$tempatwisata->luas_tempat_wisata}}">
              </input>
              @if($errors->has('luas_tempat_wisata'))
              <div class="text-danger">
                  {{ $errors->first('luas_tempat_wisata')}}
              </div>
              @endif

            </div>

            <div class="form-group">
                <label>Wahana Yang Disediakan</label>
                <textarea name="wahana" class="form-control" placeholder="Wahana....">{{$tempatwisata->wahana}}</textarea>

                @if($errors->has('wahana'))
                <div class="text-danger">
                {{ $errors->first('wahana')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Protokol Covid 19</label>
                <select class="form-control" id="protokol_covid"
                name="protokol_covid">
                <option value="Cek Suhu Dan Sarana Cuci Tangan">Cek Suhu Dan Sarana Cuci Tangan</option>
                <option value="Cek Suhu">Cek Suhu</option>
                <option value="Sarana Cuci Tangan">Sarana Cuci Tangan</option>
                <option value="Tidak Ada Protokol">Tidak Ada Protokol</option>
            </select>
            @if($errors->has('protokol_covid'))
            <div class="text-danger">
                {{ $errors->first('protokol_covid')}}
            </div>
            @endif

          </div>

                  <label>Input Foto Tempat Wisata</label>
                  <div class="input-group control-group">
                      <div class="custom-file">
                          <input type="file" class="form-control" name="foto" accept=".jpg,.png,.jpeg" id="file">
                          @if($errors->has('foto'))
                          <div class="text-danger">
                          {{ $errors->first('foto')}}
                          </div>
                          @endif
                      </div>
                      </div>
                      </br>

                      <div class="form-group">
                          <label>Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" placeholder="Deskripsi ..">{{$tempatwisata->deskripsi}}</textarea>

                          @if($errors->has('deskripsi'))
                          <div class="text-danger">
                          {{ $errors->first('deskripsi')}}
                          </div>
                          @endif

                      </div>

                      <div class="form-group">
                              <label>Sumber Data</label>
                              <input type="text" name="sumber_data" class="form-control" placeholder="Sumber .."
                              value="{{$tempatwisata->sumber_data}}">

                              @if($errors->has('sumber_data'))
                              <div class="text-danger">
                              {{ $errors->first('sumber_data')}}
                              </div>
                              @endif

                          </div>

            </br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>

        </form>

    </div>
</div>
</div>
<script type="text/javascript">
var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("File Max Is 2MB");
       this.value = "";
    };
};
</script>
<script type="text/javascript">
var rev = "fwd";
function titlebar(val){
var msg  = "Edit Tempat Wisata || Aplikasi Sistem Pendukung Keputusan Pemilihan Obyek Wisata Dikota Gorontalo";
var res = " ";
var speed = 100;
var pos = val;
var le = msg.length;
if(rev == "fwd"){
  if(pos < le){
      pos = pos+1;
      scroll = msg.substr(0,pos);
      document.title = scroll;
      timer = window.setTimeout("titlebar("+pos+")",speed);
  } else {
      rev = "bwd";
      timer = window.setTimeout("titlebar("+pos+")",speed);
  }
} else {
  if(pos > 0) {
      pos = pos-1;
      var ale = le-pos;
      scrol = msg.substr(ale,le);
      document.title = scrol;
      timer = window.setTimeout("titlebar("+pos+")",speed);
  } else {
      rev = "fwd";
      timer = window.setTimeout("titlebar("+pos+")",speed);
  }
}
}
titlebar(0);
</script>
</body>

</html>
