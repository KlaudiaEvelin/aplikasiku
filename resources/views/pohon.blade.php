<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pohon Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        @foreach ($trees as $pohon)
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ $pohon['Img'] }}" alt="">

                    <h3 class="product-name">{{ $pohon['Name'] }}</h3>
                    <p class="product-price">Rp {{ number_format($pohon['Price'], 0, ',', '.') }}</p>

                </div>
            </div>
        @endforeach
    </div>
</div>
</body>