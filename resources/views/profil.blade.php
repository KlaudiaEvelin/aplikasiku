<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <!-- Header Image -->
    <div class="profile-header">

        @if($user->header_img)
            <img
                src="{{ asset('storage/' . $user->header_img) }}"
                alt="Header Image"
                width="100%"
                height="250">
        @else
            <div style="height:250px; background:#ddd;">
                <h3 style="padding:100px 20px;">
                    Belum ada Header Image
                </h3>
            </div>
        @endif

    </div>

    <!-- Profile Section -->
    <div class="profile-info">

        @if($user->profile_img)
            <img
                src="{{ asset('storage/' . $user->profile_img) }}"
                alt="Profile Image"
                width="150"
                height="150">
        @else
            <div style="
                width:150px;
                height:150px;
                border-radius:50%;
                background:#ccc;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:50px;
            ">
                👤
            </div>
        @endif

        <h1>
            {{ $user->display_name ?? 'Belum Mengatur Nama' }}
        </h1>

        <p>
            @{{ $user->username }}
        </p>

    </div>

    <hr>

    <!-- Informasi Akun -->
    <div>

        <h2>Informasi Akun</h2>

        <table border="1" cellpadding="10">

            <tr>
                <td>ID User</td>
                <td>{{ $user->id_user }}</td>
            </tr>

            <tr>
                <td>Display Name</td>
                <td>{{ $user->display_name ?? '-' }}</td>
            </tr>

            <tr>
                <td>Username</td>
                <td>{{ $user->username }}</td>
            </tr>

            <tr>
                <td>Dibuat Pada</td>
                <td>{{ $user->created_at }}</td>
            </tr>

        </table>

    </div>

    <br>

    <!-- Tombol -->
    <div>

        <a href="{{ route('profil.edit') }}">
            <button type="button">
                Edit Profil
            </button>
        </a>

        <a href="{{ route('pohon') }}">
            <button type="button">
                Kembali ke Daftar Pohon
            </button>
        </a>

        <form
            action="{{ route('logout') }}"
            method="POST"
            style="display:inline;">

            @csrf

            <button type="submit">
                Logout
            </button>

        </form>

    </div>

    <hr>

    <!-- Riwayat Donasi (sementara) -->
    <div>

        <h2>Riwayat Donasi</h2>

        <p>
            Belum ada data donasi.
        </p>

        {{--
        Nanti jika sudah membuat tabel donations:

        @foreach($user->donations as $donasi)

            <div>
                <h3>{{ $donasi->tree->name }}</h3>
                <p>Rp {{ number_format($donasi->amount, 0, ',', '.') }}</p>
            </div>

        @endforeach
        --}}

    </div>

</body>
</html>