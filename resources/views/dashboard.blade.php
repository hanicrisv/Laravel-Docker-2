<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007acc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
     <header>
    <a href="http://localhost:8080/admin">solo para admin</a>
     <a href="http://localhost:8080/user">solo para usuario</a>
    
  </header>
  <main>
    <h1>Panel de Control</h1>
    <p>¡Has iniciado sesión!</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
    </main>
</body>
</html>