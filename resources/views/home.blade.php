@if (session('success'))
    <script>
    alert("{{ session('success') }}");
    </script>
@endif

@if ($errors->any())
        <script>
        @foreach ($errors->all() as $error)
        alert("{{ $error }}");
        @endforeach
        </script>
@endif


@extends('layouts.dashboard')

<a href="{{ route('store') }}">Tambah</a>


@section('content')
        @foreach ($posts as $item)
        <div>
            <a href="{{ route('detail', ['post' => $item -> id]) }}"><img src="{{ asset('storage/images/'. $item -> path) }}" id="{{$item -> hotelName}}" alt="{{$item -> hotelName}}"></a>
            <h3>{{$item -> hotelName}}</h3>
            <small>{{$item -> desc}}</small>
        </div>
        @endforeach
@endsection


