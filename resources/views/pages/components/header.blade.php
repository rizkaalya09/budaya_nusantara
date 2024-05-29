        <!-- Nav -->
        <nav id="nav" style="font-family: Arial, sans-serif;">
            <ul>
              @if (Auth::check())
              <li><a href="{{ route('logout') }}"><img src="{{asset('assets/images/logout.webp')}}" alt="Logout"></a></li>
              @else
              <li><a href="{{ route('welcome') }}"><img src="{{asset('assets/images/logout.webp')}}" alt="Login"></a></li>
              @endif
                <li><a href="{{ route('rumah_adat') }}">Rumah Adat</a></li>
                <li><a href="{{ route('pakaian_adat') }}">Pakaian Adat</a></li>
                <li><a href="{{route('alat_musik')}}">Alat Musik Daerah</a></li>
                <li><a href="{{ route('tarian_adat') }}">Tarian Adat</a></li>
                <li><a href="{{ route('makanan_tradisional') }}">Makanan Tradisional</a></li>
                <li><a href="{{ route('senjata_tradisional') }}">Senjata Tradisional</a></li>
            </ul>
        </nav>