<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Estados y Municipios</title>
</head>
<body>
  <h2>Selecciona tu estado y municipio</h2>

  <label for="estado">Estado:</label>
  <select id="estado" onchange="cargarMunicipios()">
    <option value="">Selecciona un estado</option>
    <?php
      $estados = json_decode(file_get_contents("estados.json"), true);
      foreach ($estados as $estado) {
          $nombre = $estado["nombre"];
          echo "<option value=\"$nombre\">$nombre</option>";
      }
    ?>
  </select>

  <br><br>

  <label for="municipio">Municipio:</label>
  <select id="municipio">
    <option value="">Selecciona un municipio</option>
  </select>

  <script>
    function cargarMunicipios() {
      const estado = document.getElementById('estado').value;
      const municipioSelect = document.getElementById('municipio');
      municipioSelect.innerHTML = '<option>Cargando...</option>';

      if (estado === '') {
        municipioSelect.innerHTML = '<option>Selecciona un municipio</option>';
        return;
      }

      fetch('obtener_municipios.php?estado=' + encodeURIComponent(estado))
        .then(response => response.json())
        .then(data => {
          municipioSelect.innerHTML = '';
          if (data.length > 0) {
            data.forEach(municipio => {
              const option = document.createElement('option');
              option.value = municipio;
              option.textContent = municipio;
              municipioSelect.appendChild(option);
            });
          } else {
            municipioSelect.innerHTML = '<option>Sin municipios</option>';
          }
        })
        .catch(error => {
          console.error('Error:', error);
          municipioSelect.innerHTML = '<option>Error al cargar</option>';
        });
    }
  </script>
</body>
</html>
