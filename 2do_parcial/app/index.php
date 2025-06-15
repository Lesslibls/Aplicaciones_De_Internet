<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Chat Multiusuario</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
    body {
      padding: 2rem;
      background-color: #1a0933;
      color: #32fbe2;
    }
    #chat {
      height: 300px;
      resize: none;
      background-color: #250d49;
      color: #fff;
      border: 1px solid #6f42c1;
      margin-bottom: 1rem;
    }
    #mensaje {
      background-color: #30115e;
      color: #fff;
      border: 1px solid #6f42c1;
    }
    .chat-container {
      max-width: 600px;
      margin: auto;
      padding: 2rem;
      border-radius: 1rem;
      background-color: #170229;
      box-shadow: 0 0 10px rgba(111, 66, 193, 0.5);
    }
    .btn-primary {
      background-color: #6f42c1;
      border-color: #6f42c1;
    }
    .btn-primary:hover {
      background-color: #8c68cd;
      border-color: #8c68cd;
    }
  </style>
  <script src="script.js" defer></script>
</head>
<body>

  <div class="chat-container">
    <h2 class="text-center mb-4">💬 Chat Multiusuario Anonimo</h2>

    <textarea id="chat" class="form-control mb-3" readonly></textarea>

    <div class="input-group">
      <input type="text" id="mensaje" class="form-control" placeholder="Escribe tu mensaje...">
      <button onclick="enviarMensaje()" class="btn btn-primary">Enviar</button>
    </div>
  </div>

</body>
</html>

