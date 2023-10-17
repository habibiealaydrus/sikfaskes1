<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antrian </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <center>
        <div class="printarea" id="printarea">
            @csrf
            <h2>No.Antrian</h2>
            <h1>{{ $antrian }}</h1>
            <h2>Nama pasien : {{ $nama }}</h2>
            <h3>Didaftarkan oleh: {{ $user }}</h3>
            <h4>Tanggal : {{ $tanggaldaftar }}</h4>
            <h3>Poli: {{ $poli }}</h3>
            <h3>Harga : Rp.{{ $harga->harga }},-</h3>
        </div>
        <form action="/tambahpasienpenunjang" method="post">
            @csrf
            <div class="input">
                <input type="text" name="nomor_rekam_medik" class="invisible" id="nomor_rekam_medik"
                    value="{{ $nomor_rekam_medik }}">
            </div>
            <div class="input">
                <input type="text" name="poli_kunjungan" class="invisible" id="poli_kunjungan"
                    value="{{ $poli }}">
            </div>
            <button type="submit" class="btn btn-primary">Daftarkan
            </button>
        </form>
    </center>
    <script>
        let printarea = document.getElementById("printarea").innerHTML;
        window.print();
        printarea;
    </script>
</body>

</html>
