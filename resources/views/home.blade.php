<!DOCTYPE HTML>
<html>
<head>
    <title>Budaya Nusantara</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="path/to/new/styles.css" />
    <style>
        
        /* CSS untuk logo home */
        #nav img {
            width: 30px;
            height: 30px;
            vertical-align: middle;
            margin-right: 5px;
        }

        #nav h1 a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <section id="hero-section">
        <!-- Tombol aksi, jika diperlukan -->
    </section>

    <!-- Main -->
    @include('pages.components.header')
    <section id="main">
        <div class="container">
            <div class="row gtr-200">
                <div class="col-12">

                    <section id="box" class="box highlight">
                        <ul class="special">
                            <li class="list-adat"><a href="{{route('rumah_adat')}}"><img src="{{asset('assets/images/rumah_adat.jpg')}}" alt="Rumah Adat"><span class="label">Rumah Adat</span></a></li>
                            <li class="list-adat"><a href="{{route('pakaian_adat')}}"><img src="{{asset('assets/images/pakaian_adat.jpeg')}}" alt="Pakaian Adat"><span class="label">Pakaian Adat</span></a></li>
                            <li class="list-adat"><a href="{{route('alat_musik')}}"><img src="{{asset('assets/images/alat_musik.webp')}}" alt="Alat Musik Daerah"><span class="label">Alat Musik Daerah</span></a></li>
                            <li class="list-adat"><a href="{{route('tarian_adat')}}"><img src="{{asset('assets/images/tarian_adat.webp')}}" alt="Tarian Adat"><span class="label">Tarian Adat</span></a></li>
                            <li class="list-adat"><a href="{{route('makanan_tradisional')}}"><img src="{{asset('assets/images/makanan.jpg')}}" alt="Makanan Tradisional"><span class="label">Makanan Tradisional</span></a></li>
                            <li class="list-adat"><a href="{{route('senjata_tradisional')}}"><img src="{{asset('assets/images/senjata-tradisional.webp')}}" alt="Senjata Tradisional"><span class="label">Senjata Tradisional</span></a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
