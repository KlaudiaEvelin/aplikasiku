<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pohon Donasi</title>
</head>
<body>
    <h1>Pilih Pohon untuk didonasikan</h1>
    <ul>@foreach ($trees as $pohon)
       <li>{{ $pohon['name'] }} - Rp {{ number_format($pohon['price'], 0, ',', '.') }}</li>
    @endforeach
</ul>
</body>