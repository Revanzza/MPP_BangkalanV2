@extends('layouts.app')

@section('content')
<h1>{{ $agenda->nama_agenda }}</h1>
<p>{{ $agenda->deskripsi }}</p>

@endsection