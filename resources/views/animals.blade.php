@extends("base")

@section("content")
    <div class="title m-b-md">
        De dieren
    </div>

    @foreach ($animals as $animal)
        <li>{{ $animal->naam }} ({{$animal->soort}})</li>
    @endforeach
@endsection
