Descripción del Practica 1: Multiplicador con Selectores
🎯 Objetivo
Crear una pequeña herramienta interactiva en la que se puedan seleccionar dos números entre 1 y 10, y mostrar el resultado de su multiplicación:

El tercer <select> se actualiza con una lista de opciones del 1 al producto de los dos primeros.

Se incluye un botón para mostrar el resultado final como texto en pantalla.

⚙️ Funcionamiento
S1 y S2 son dos <select> con opciones del 1 al 10.

Cuando el usuario cambia cualquiera de estos (onchange), se ejecuta la función calcular():

Calcula el producto S1 × S2.

Rellena el tercer selector (resultado) con los valores del 1 al producto.

Al hacer clic en el botón, se llama a mostrarProducto() que muestra en pantalla:
“El producto de S1 × S2 es [resultado]”.

JavaScript:

Uso de for para generar las opciones.

onchange para actualizar el tercer selector automáticamente.

Función calcular() para lógica de multiplicación.

Función mostrarProducto() para mostrar el resultado en texto.


🧩 Descripción de Practica 2: Generar Matriz de Selects
🎯 Objetivo
Generar una matriz visual de <select>s en la pantalla, con tamaño definido por el usuario mediante campos de texto para columnas (x) y filas (y). Cada <select> contiene opciones numéricas desde 0 hasta el producto fila × columna.

⚙️ Funcionamiento
El usuario introduce el número de columnas y filas.

Al hacer clic en el botón “Generar”:

Se ejecuta la función generarMatriz().

Esta recorre las coordenadas (fila, columna) y genera un <select> por posición.

Cada <select> se posiciona con position: absolute según su lugar en la matriz.

Cada uno contiene opciones numéricas de 0 hasta (fila × columna).

🔍 Ejemplo:
Si se ingresa x = 3 y y = 2, se crea una matriz de 2 filas por 3 columnas, y cada <select> tiene:

En (0,0): opciones de 0

En (0,1): opciones de 0

En (1,2): opciones de 0 a 2