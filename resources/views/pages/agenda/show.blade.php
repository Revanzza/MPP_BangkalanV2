@extends('layouts.app')

@section('content')
<h1>{{ $agenda->nama_agenda }}</h1>
<!-- resources/views/pages/agenda/show.blade.php -->

<div class="prose text-gray-800 max-w-none">
    {!! modifyContent($agenda->deskripsi) !!}
</div>
@endsection