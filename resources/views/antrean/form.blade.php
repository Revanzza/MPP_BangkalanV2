@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-[#1E90FF]">Formulir Ambil Nomor Antrian</h2>
    <form id="antreanForm" method="POST" action="{{ route('antrean.store') }}">
        @csrf
        <div class="mb-4">
            <label for="institution" class="block mb-1 font-semibold">Pilih Instansi</label>
            <select id="institution" name="institution_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Pilih Instansi --</option>
                @foreach($institutions as $institution)
                    <option value="{{ $institution->id }}">{{ $institution->nama_institution }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="service" class="block mb-1 font-semibold">Pilih Layanan</label>
            <select id="service" name="id_service" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Pilih Layanan --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" data-institution="{{ $service->id_institution }}">{{ $service->nama_layanan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nama" class="block mb-1 font-semibold">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="nik" class="block mb-1 font-semibold">NIK</label>
            <input type="text" id="nik" name="nik" class="w-full border rounded px-3 py-2" maxlength="20" required>
        </div>
        <div class="mb-4">
            <label for="no_telp" class="block mb-1 font-semibold">No Telp</label>
            <input type="text" id="no_telp" name="no_telp" class="w-full border rounded px-3 py-2" required>
        </div>
        <button type="submit" class="w-full bg-[#1E90FF] text-white font-bold py-2 rounded hover:bg-[#007acc]">Ambil Nomor Antrian</button>
    </form>
</div>

<script>
    document.getElementById('institution').addEventListener('change', function() {
        var institutionId = this.value;
        var serviceSelect = document.getElementById('service');
        var options = serviceSelect.querySelectorAll('option');
        options.forEach(function(option) {
            if (!option.value) {
                option.style.display = '';
                option.selected = true;
                return;
            }
            if (option.getAttribute('data-institution') === institutionId) {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        });
        serviceSelect.value = '';
    });
</script>
@endsection
