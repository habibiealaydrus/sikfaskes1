<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antrian </title>
</head>

<body>
    <center>
        <h2>No.Antrian</h2>
        <h1>{{ $antrian }}</h1>
        <h2>Nama pasien : {{ $datapasien->nama }}</h2>
        <h3>Didaftarkan oleh: {{ $user }}</h3>
        <h4>Tanggal : {{ $tanggaldaftar }}</h4>
        <h3>Poli:{{ $poli }}</h3>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>
