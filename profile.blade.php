<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"
        media="screen,projection" />


    <!-- my CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Halaman Profile</title>
</head>

<body>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">Santho Manullang</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{url('welcome')}}">Home</a></li>
                        <li><a href="{{url('profile')}}">Profile</a></li>
                        <li><a href="{{url('register')}}"><button type="submit"
                                    class="btn blue darken-2">Register</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="{{ url('welcome') }}">Home</a></li>
        <li><a href="{{ url('profile') }}">Profile</a></li>
        <li><a href="{{ url('/register') }}"><button type="submit" class="btn blue darken-2">Register</button></a></li>
    </ul>





    <h1 align="center">MY PROFILE</h1>
    <table width="760" border="1" cellspacing="0" cellpadding="5" align="center">
        <tr align="center" bgcolor="#66CC33">
            <td width="174">DATA DIRI</td>
            <td width="353">KETERANGAN</td>
            <td width="232">FOTO</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>SanthoBaido Hasian Manullang</td>
            <td rowspan="100" align="justify"><img src="{{asset('assets/img/portfolio/santho.jpg')}}" width="500"
                    height="1000">
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>Sistem Informasi (SI)</td>
        </tr>
        <tr>
            <td>Konsentrasi</td>
            <td>Sistem Informasi</td>
        </tr>
        <tr>
            <td>Jenjang</td>
            <td>Strata-1 (S1)</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>Laki-Laki</td>
        </tr>
        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>Medan/28 Desember 1990</td>
        </tr>
        <tr>
            <td>Perguruan Tinggi</td>
            <td>STMIK BUDI DARMA MEDAN INDONESIA</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>Jl. Bajak II H, Medan - Sumatera Utara</td>
        </tr>
        <tr>
            <td>Kelurahan</td>
            <td>Harjosari II</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>Medan Amplas</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>Katholik</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>20147</td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>085262208490</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>Admin AR</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>santhosian@gmail.com</td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td>Santho Sian</td>
        </tr>
        <tr>
            <td>Twitter</td>
            <td>@Santho_Manulang</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>Ngoding, Bermain Game, Mendengarkan Musik, Membaca</td>
        </tr>
        <tr>
            <td>Kemampuan</td>
            <td>Ms.Office, Install OS Windows, Windows Server, Ubuntu, Kali Linux</td>
        </tr>
        <tr>
            <td>Kata-Kata Mutiara</td>
            <td>You must be do the things you think you cannot do, anda
                harus melakukan hal yang anda pikir anda tak bisa lakukan
            </td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>Bercita-cita ingin menjadi seorang Web Developer, System Administrator
                & Network Engineer</td>
        </tr>
    </table> <br>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
    <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);


    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);


    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll);
    </script>

</body>

</html>