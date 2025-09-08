<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Página Principal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 20%;
      background: #f5f7fa;
    }
    button {
      background: #1e40af;
      color: white;
      font-size: 18px;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #1d4ed8;
    }
  </style>
</head>
<body>
  <h1>Bienvenido</h1>
  <p>Haz clic para ir al login</p>
  <button onclick="window.location.href='http://localhost/login'">Ir al Login</button>
</body>
</html>
