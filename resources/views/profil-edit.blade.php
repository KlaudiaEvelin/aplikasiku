<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
</head>
<body>

<h1>Edit Profil</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('profil.update') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div>
        <label>Display Name</label>
        <br>
        <input type="text"
               name="display_name"
               value="{{ old('display_name', $user->display_name) }}">
    </div>

    <br>

    <div>
        <label>Foto Profil</label>
        <br>
        <input type="file" name="profile_img">
    </div>

    <br>

    <div>
        <label>Header Image</label>
        <br>
        <input type="file" name="header_img">
    </div>

    <br>

    <button type="submit">
        Simpan Perubahan
    </button>

</form>

<br>

<a href="{{ route('profil') }}">
    Kembali
</a>

</body>
</html>