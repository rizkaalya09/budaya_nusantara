@extends('pages.layouts.template')
@section('header')
<header id="header">
    <div class="user-logo container">
        <div>
            <h1>
                <a href="{{ route('home') }}" id="logo">Makanan Tradisional</a>
            </h1>
        </div>
    </div>
</header>
@endsection
@section('content')
<div class="container-province">
    <!-- <h2>Karya Budaya dari Berbagai Suku Bangsa</h2> -->
    <div class="search-container">
        <form action="{{ route('makanan_tradisional') }}" method="GET">
           <div class="province-dropdown">
                <select id="province-select" name="province_id">
                    <option value="">-- Pilih Provinsi --</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" {{ $provinceId == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <button id="prev-btn" class="btn btn-secondary">Back</button> <!-- Tombol untuk navigasi ke provinsi sebelumnya -->
        <button id="next-btn" class="btn btn-secondary">Next</button> <!-- Tombol untuk navigasi ke provinsi berikutnya -->
    </div>

    @if($items->isEmpty())
        <div class="no-data">
            <p>Tidak ada data</p>
        </div>
    @else
        @foreach ($items as $item)
        <div class="province-info hidden" id="province-info-{{ $item->id }}">
            <div class="info-content">
                <h3 id="province-title" class="province-title">{{ $item->name }}</h3>
                <div class="info-details">
                    @if ($item->image)
                        <img src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}" id="province-image">
                    @else
                        <img src="{{asset('assets/images/sumbar.jpg')}}" alt="" id="province-image">                            
                    @endif
                    <p id="province-description">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.province-info');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const provinceSelect = document.getElementById('province-select');
        const filterForm = document.getElementById('filter-form');
        let currentIndex = 0;

        function showItem(index) {
            items.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }

        if (items.length > 0) {
            showItem(currentIndex);

            nextBtn.addEventListener('click', function () {
                if (currentIndex < items.length - 1) {
                    currentIndex++;
                    showItem(currentIndex);
                }
            });

            prevBtn.addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--;
                    showItem(currentIndex);
                }
            });
        } else {
            nextBtn.style.display = 'none';
            prevBtn.style.display = 'none';
        }

        provinceSelect.addEventListener('change', function () {
            filterForm.submit();
        });
    });
</script>
@endsection