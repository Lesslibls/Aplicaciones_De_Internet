## 📝 Práctica 1: Mi primera página web

### 📄 Descripción
En esta práctica se construye una página web sencilla utilizando HTML y CSS. Se exploran distintos elementos semánticos, visuales y de formulario. Además, se incluye un script básico con JavaScript para manipular dinámicamente el contenido de la página.

### 🎯 Objetivos
- Utilizar etiquetas HTML para estructurar contenido (títulos, párrafos, listas, tablas, formularios).
- Aplicar estilos básicos con CSS.
- Incluir un script en JavaScript para modificar el contenido de un elemento usando `getElementById` y `innerHTML`.


## 🟢 Práctica 2: Fondo dinámico con movimiento del mouse

### 📄 Descripción
Esta práctica implementa un efecto dinámico de fondo que responde al movimiento del mouse, modificando el color en gradiente según la posición del cursor en la pantalla. Se utiliza JavaScript para detectar coordenadas del evento `mousemove` y cambiar el color de fondo en tiempo real.

### 🎯 Objetivos
- Detectar eventos de movimiento del mouse (`mousemove`).
- Obtener las coordenadas `clientX` y `clientY` (o `offsetX` y `offsetY`) del cursor.
- Generar un color RGB dinámico:
  - Rojo (`R`) basado en la posición horizontal.
  - Verde (`G`) basado en la posición vertical.
  - Azul (`B`) como valor fijo.
- Aplicar el color como fondo a la página con efecto gradual (usando `transition` en CSS).

🌈 Práctica 3: Gradiente RGB dinámico con el mouse
📄 Descripción:
Esta práctica consiste en cambiar gradualmente el color de fondo de la página a medida que el usuario mueve el mouse. El valor del color se calcula en tiempo real según la posición del cursor:

Rojo (R): depende del movimiento horizontal (clientX).

Verde (G): depende del movimiento vertical (clientY).

Azul (B): permanece fijo.

🎯 Objetivos
Aplicar eventos de tipo mousemove.

Calcular valores RGB en función de clientX y clientY.

Modificar el fondo de forma progresiva con transition CSS.


