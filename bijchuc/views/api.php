<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Costo</th>
            <th>Encargado</th>
            <th>Utilidad</th>
        </tr>
    </thead>
    <tbody id="tablaProyecto">
    </tbody>
</table>

<script>
// Suponiendo que tu API está en http://localhost:8085/api/proyecto
const url = 'http://localhost:8085/bijchuc';

fetch(url)
  .then(response => response.json())
  .then(data => {
    const tabla = document.getElementById('tablaProyecto');
    data.forEach(proyecto => {
      const fila = `<tr>
                      <td>${proyecto[0]}</td>
                      <td>${proyecto[1]}</td>
                      <td>${proyecto[2]}</td>
                      <td>${proyecto[3]}</td>
                      <td>${proyecto[4]}</td>
                      <td>${proyecto[5]}</td>
                    </tr>`;
      tabla.innerHTML += fila;
    });
  })
  .catch(error => console.error('Error:', error));
</script>