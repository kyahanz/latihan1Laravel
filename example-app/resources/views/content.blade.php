<!DOCTYPE html>
<html>
<head>
    <title>Biodata Saya</title>
</head>
<body>
    <h1>Nama: {{ $biodata['nama'] }}</h1>
    <p>Usia: {{ $biodata['usia'] }} tahun</p>
    <p>Minat:</p>
    <ul>
        @foreach($biodata['minat'] as $minat)
            <li>{{ $minat }}</li>
        @endforeach
    </ul>
</body>
</html>
