<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body>
    <h1>Tienes un nuevo mensaje de {{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
    
    <p><strong>Correo Electrónico:</strong> {{ $data['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $data['phone_number'] ?? 'No especificado' }}</p>
    
    <hr>
    
    <h3>Mensaje:</h3>
    <p>{{ $data['message'] }}</p>
    
    <hr>
    
    <p>Este mensaje fue enviado desde el formulario de contacto de tu sitio web.</p>
</body>
</html>