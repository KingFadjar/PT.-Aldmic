@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1024px; text-align: center;">
    <h1 class="mt-4">Selamat Datang di Halaman Landing</h1>
    <p class="mt-4">Klik ikon untuk menyalin kode: <span id="code">HALLOW10</span></p>
    <button class="btn btn-primary" onclick="copyCode()">Salin Kode</button>

    <!-- Form login -->
    <form class="mt-4" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <!-- Akhir form login -->

    <!-- Link untuk App Store -->
    <div class="mt-4">
        <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232807" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="App Store" class="img-fluid">
        </a>
    </div>

    <!-- Tombol "Buat Hari Seseorang" -->
    <button class="btn btn-primary mt-4" onclick="window.location.href='https://www.floweradvisor.com.ph/flowersphilippines'">Buat Hari Seseorang</button>

    <!-- Footer logo -->
    <footer class="mt-4">
        <a href="https://www.floweradvisor.com.ph" target="_blank">
            <img src="https://img.buyflowers.com.sg/assets/images/logo.webp" alt="Footer Logo" class="img-fluid">
        </a>
    </footer>
</div>

<script>
function copyCode() {
    var code = document.getElementById("code").innerText;
    var tempInput = document.createElement("input");
    tempInput.value = code;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("Kode telah disalin: " + code);
}
</script>
@endsection
