<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello World</title>
</head>
<body>
    <ol>
        @foreach ($items as $item)
            <h3>{{$item["judul"]}}</h3>
            <p>{{$item["isiLaporan"]}}</p>
        @endforeach
    </ol>
</body>
</html>