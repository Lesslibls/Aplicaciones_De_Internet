Descripción del código: “Arrastrar y Escalar”
Este proyecto consiste en una página web sencilla que permite interactuar dinámicamente con un cuadro (div). Está desarrollada usando HTML, CSS y JavaScript puro, y tiene dos funcionalidades principales: arrastrar el cuadro con el mouse y escalar su tamaño dinámicamente en función de la posición horizontal del puntero.

🎯 Funcionalidades principales:
Arrastrar el cuadro:

El usuario puede hacer clic sobre el cuadro (mousedown) y arrastrarlo por toda la pantalla mientras mantiene presionado el botón del mouse (mousemove).

La posición del cuadro se actualiza en tiempo real con respecto a la posición del puntero (e.pageX y e.pageY).

Al soltar el mouse (mouseup), el cuadro deja de seguir el cursor.

Escalar el cuadro:

Mientras se mueve el mouse (sin importar si se está arrastrando o no), el tamaño del cuadro cambia dinámicamente.

El ancho y alto del cuadro se calculan en función de la posición horizontal (pageX) del mouse, usando la fórmula newSize = e.pageX / 5.

Se establece un tamaño mínimo de 50px para evitar que el cuadro se haga demasiado pequeño.

