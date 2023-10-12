<div class="container ">
    <h5>Konfirmasi Pendaftaran Poli/Unit</h5>
    <form action="/tambahpasienpoli" method="post">
        @csrf
        <div class="form-group">
            <label>Nomor Medical Record </label>
            <input type="text" name="nomor_rekam_medik" class="form-control hide" id="nik"
                value="{{ $idpatient->nomor_rekam_medis }}">
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control hide" id="nik" value="{{ $idpatient->nik }}">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control hide" id="nik"
                value="{{ $idpatient->nama }}">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tanggal" class="form-control hide" id="nik"
                value="{{ date('d-m-Y', strtotime($idpatient->tanggal)) }}">
        </div>
        <div class="form-group">
            <label>Poli/Unit</label>
            <select name="poli_kunjungan" id="poli_kunjungan" class="form-control hide">
                @foreach ($poli as $poli)
                    <option value="{{ $poli->nama_unit }}">{{ $poli->nama_unit }}</option>
                @endforeach
            </select>
        </div>

        <p>Apakah pasien tersebut ingin didaftarkan?</p>
        <button type="submit" class="btn btn-primary">Daftarkan
        </button>
        <a href="#"
            onclick="window.open('/cetakantrianpolidokter/{{ $idpatient->id }}/{{ $poli->nama_unit }}', 'newwindow', 'width=400, height=250'); return false;"
            type="button" class="btn btn-success">
            Cetak Antrian
        </a>
        <a href="/pendaftaranberobat" type="button" class="btn btn-warning ">
            BATAL
        </a>
    </form>


</div>
