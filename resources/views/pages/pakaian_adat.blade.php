@extends('pages.layouts.template')
@section('header')
<header id="header">
    <div class="user-logo container">
        <div>
            <h1>
                <a href="{{ route('home') }}" id="logo">Pakaian Adat</a>
            </h1>
        </div>
    </div>
</header>
@endsection
@section('content')
<div class="container-province">
    <!-- <h2>Karya Budaya dari Berbagai Suku Bangsa</h2> -->
    <div class="search-container">
        <button id="prev-btn" class="btn btn-secondary">Back</button> <!-- Tombol untuk navigasi ke provinsi sebelumnya -->
        <form id="filter-form" action="{{ route('pakaian_adat') }}" method="GET">
            <div class="province-dropdown">
                <select id="province-select" name="province_id">
                    <option value="">-- Pilih Provinsi --</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" {{ $provinceId == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
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
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const provinceSelect = document.getElementById('province-select');
        const filterForm = document.getElementById('filter-form');
        let currentProvinceIndex = provinceSelect.selectedIndex - 1;

        function updateURL(newIndex) {
            const selectedProvinceId = provinceSelect.options[newIndex + 1].value;
            window.location.href = `{{ route('pakaian_adat') }}?province_id=${selectedProvinceId}`;
        }

        nextBtn.addEventListener('click', function () {
            if (currentProvinceIndex < provinceSelect.options.length - 2) {
                currentProvinceIndex++;
                updateURL(currentProvinceIndex);
            }
        });

        prevBtn.addEventListener('click', function () {
            if (currentProvinceIndex > 0) {
                currentProvinceIndex--;
                updateURL(currentProvinceIndex);
            }
        });

        provinceSelect.addEventListener('change', function () {
            filterForm.submit();
        });
    });
</script>
@endsection
