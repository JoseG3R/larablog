<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Home</title>
</head>
<body>
    <h1>Hola Mundo LAravel - - - {{ "Hola en php $nombre $apellido"}}</h1>

    <ul>
    @foreach ($frutas as $fruta)
        <li>{{ $fruta }}</li>
    @endforeach
    </ul>
    
    <ul>
        @forelse ($frutas2 as $fruta2)
            <li>{{ $fruta2 }}</li>    
        @empty
            <li>Vacío</li>
        @endforelse
    </ul>

    <ul>
        @forelse ($frutas2 as $fruta2)
        <li>
            @if ($loop->first)
            Primero:
            @elseif ($loop->last)
            Ultimo:
            @else
            Medio:
            @endif
            {{ $fruta2 }}
        </li>     
        @empty
        <li>Vacío</li>

        @endforelse
    </ul>
</body>
</html>