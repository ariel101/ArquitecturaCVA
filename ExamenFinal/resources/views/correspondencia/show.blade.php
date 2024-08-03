<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>id: {{$correspondencia->id}}</li>
        <li>fecha:{{$correspondencia->fecha}}</li>
        <li>remitente:{{$correspondencia->remitente}}</li>
        <li>asunto:{{$correspondencia->asunto}}</li>
        <li>cite:{{$correspondencia->cite}}</li>
        <li>id destinatario:{{$correspondencia->destinatario_id}}</li>
            
    </ul>
    
</body>
</html>