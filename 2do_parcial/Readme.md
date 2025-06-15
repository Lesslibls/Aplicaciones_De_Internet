# 🗨️ Chat Multiusuario Web

Esta es una aplicación de **chat web multiusuario**, desarrollada con HTML, JavaScript (con jQuery) y PHP. Permite enviar y recibir mensajes en tiempo real entre múltiples usuarios, incluyendo conexión desde dispositivos móviles (teléfonos).

## 📋 Características

- Interfaz web simple y responsiva.
- Envío de mensajes mediante un campo de entrada y botón.
- Visualización de mensajes en una ventana de texto estático (multilínea).
- Guardado automático de los mensajes en un archivo `mensajes.dat`.
- Actualización automática del historial de mensajes cada 3 segundos usando `setInterval` y llamadas a un script PHP.

## 🛠️ Tecnologías usadas

- **Frontend:** HTML + CSS + JavaScript (jQuery)
- **Backend:** PHP
- **Almacenamiento:** Archivo `mensajes.dat` (en el servidor)

## 📱 Uso desde el teléfono

Puedes acceder a la aplicación desde tu teléfono móvil si ambos (PC y móvil) están conectados a la misma red local. Solo debes abrir el navegador en tu teléfono y colocar la IP local del servidor (por ejemplo, `http://192.168.0.10/chat`).

## 📂 Estructura del proyecto