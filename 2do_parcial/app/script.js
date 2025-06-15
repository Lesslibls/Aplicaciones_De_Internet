// Leer mensajes cada segundo
setInterval(cargarMensajes, 1000);

function enviarMensaje() {
  const mensaje = document.getElementById('mensaje').value.trim();
  if (mensaje === '') return;

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'servidor.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('mensaje=' + encodeURIComponent(mensaje));

  document.getElementById('mensaje').value = '';

  // Animación de resplandor suave
  const chatBox = document.getElementById('chat');
  chatBox.classList.add('glow');
  setTimeout(() => chatBox.classList.remove('glow'), 500);
}

function cargarMensajes() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'mensajes.dat', true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      const chatBox = document.getElementById('chat');
      const oldScrollHeight = chatBox.scrollHeight;
      chatBox.value = xhr.responseText;

      // Desplazarse al final
      chatBox.scrollTop = chatBox.scrollHeight;
    }
  };
  xhr.send();
}
