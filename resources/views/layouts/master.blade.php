<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPJS Kesehatan</title>
    <link rel="shortcut icon" href="https://bpjs-kesehatan.go.id/assets/img/favicon.png" type="image/x-icon">
    <link 
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"
    >
    <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
    >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="http://bpjs.test"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <a class="navbar-brand" href="http://bpjs.test"><b>BPJS</b> Kesehatan</a>
        </div>
    </div>
    <div class="navbtn">
        <button class="btn blue nav" onclick="location.href='{{ url('pasien') }}'"><i class="fas fa-list"></i><span>Daftar Pasien</span></button>
        <button class="btn green nav" onclick="location.href='{{ route('pasien.create') }}'"><i class="fas fa-user-plus"></i><span>Tambah Pasien Baru</span></button>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="contact-container" id="contact">
    <div class="social-media">
        <ul>
            <li><a href="https://github.com/codewara"><i class="fab fa-github"></i></a></li>
            <li><a href="https://linkedin,com/in/daneswaraa"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://instagram.com/_daneswara_"><i class="fab fa-instagram"></i></a></li>
            <li><a href="mailto:intxger@gmail.com"><i class="fa fa-envelope-open"></i></a></li>
        </ul>
    </div>
</footer>

</body>
</html>