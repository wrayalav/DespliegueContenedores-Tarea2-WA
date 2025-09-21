<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manual Básico de Linux & Docker - Grupo 3</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #1f3b73, #2d7bb0);
      color: #ffffff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
      min-height: 100vh;
      text-align: center;
      padding: 20px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
      font-family: 'Poppins', sans-serif;
    }

    h2 {
      font-size: 2rem;
      margin-top: 2rem;
      color: #ffdd57;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    }

    .commands {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 2rem;
      width: 100%;
      max-width: 1000px;
    }

    .command-card {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .command-card:hover {
      transform: scale(1.05);
      background: rgba(255, 255, 255, 0.2);
    }

    .command {
      font-family: monospace;
      background: rgba(0,0,0,0.4);
      padding: 8px 12px;
      border-radius: 8px;
      display: inline-block;
      margin: 10px 0;
      color: #ffdd57;
    }

    .members {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5rem;
      gap: 15px;
    }

    .member-card {
      background: rgba(255, 255, 255, 0.15);
      padding: 15px 25px;
      border-radius: 10px;
      font-size: 1.1rem;
      font-weight: bold;
      color: #ffffff;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    footer {
      margin-top: 3rem;
      font-size: 0.9rem;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <h1>📘 Manual Básico de Linux & Docker</h1>
  <p>Comandos esenciales para aprender administración de sistemas y DevOps.</p>

  <!-- Sección Linux -->
  <h2>🐧 Comandos Linux</h2>
  <div class="commands">
    <div class="command-card">
      <h3>Ver directorio actual</h3>
      <div class="command">pwd</div>
      <p>Muestra la ruta del directorio en el que te encuentras.</p>
    </div>

    <div class="command-card">
      <h3>Listar archivos</h3>
      <div class="command">ls -l</div>
      <p>Muestra los archivos y carpetas con detalles.</p>
    </div>

    <div class="command-card">
      <h3>Cambiar de directorio</h3>
      <div class="command">cd carpeta</div>
      <p>Te mueve a la carpeta especificada.</p>
    </div>

    <div class="command-card">
      <h3>Crear carpeta</h3>
      <div class="command">mkdir nombre</div>
      <p>Crea un directorio con el nombre indicado.</p>
    </div>

    <div class="command-card">
      <h3>Copiar archivos</h3>
      <div class="command">cp origen destino</div>
      <p>Copia un archivo o carpeta hacia otra ubicación.</p>
    </div>

    <div class="command-card">
      <h3>Mover o renombrar</h3>
      <div class="command">mv origen destino</div>
      <p>Mueve o renombra un archivo o carpeta.</p>
    </div>

    <div class="command-card">
      <h3>Eliminar archivo</h3>
      <div class="command">rm archivo</div>
      <p>Elimina un archivo permanentemente.</p>
    </div>

    <div class="command-card">
      <h3>Mostrar contenido</h3>
      <div class="command">cat archivo.txt</div>
      <p>Muestra el contenido de un archivo en la terminal.</p>
    </div>
  </div>

  <!-- Sección Docker -->
  <h2>🐳 Comandos Docker</h2>
  <div class="commands">
    <div class="command-card">
      <h3>Ver versión de Docker</h3>
      <div class="command">docker --version</div>
      <p>Muestra la versión instalada de Docker.</p>
    </div>

    <div class="command-card">
      <h3>Descargar una imagen</h3>
      <div class="command">docker pull nginx</div>
      <p>Descarga la imagen de <b>nginx</b> desde Docker Hub.</p>
    </div>

    <div class="command-card">
      <h3>Listar imágenes</h3>
      <div class="command">docker images</div>
      <p>Muestra todas las imágenes disponibles localmente.</p>
    </div>

    <div class="command-card">
      <h3>Ejecutar un contenedor</h3>
      <div class="command">docker run -d -p 8080:80 nginx</div>
      <p>Crea un contenedor en segundo plano mapeando el puerto <b>8080</b> al <b>80</b>.</p>
    </div>

    <div class="command-card">
      <h3>Listar contenedores</h3>
      <div class="command">docker ps -a</div>
      <p>Muestra los contenedores activos e inactivos.</p>
    </div>

    <div class="command-card">
      <h3>Detener un contenedor</h3>
      <div class="command">docker stop ID</div>
      <p>Detiene un contenedor en ejecución.</p>
    </div>

    <div class="command-card">
      <h3>Eliminar un contenedor</h3>
      <div class="command">docker rm ID</div>
      <p>Elimina un contenedor detenido.</p>
    </div>

    <div class="command-card">
      <h3>Eliminar una imagen</h3>
      <div class="command">docker rmi nginx</div>
      <p>Elimina la imagen de <b>nginx</b> de tu sistema.</p>
    </div>
  </div>

  <h2>Integrantes del Grupo 3</h2>
  <div class="members">
    <div class="member-card">Patricia Jaramillo</div>
    <div class="member-card">Guillermo Cifuentes</div>
    <div class="member-card">Glenda Pallo</div>
    <div class="member-card">Ruperto Cisneros</div>
    <div class="member-card">William Ayala</div>
  </div>
  
  <footer>
    Docker Compose - Tarea 2 - Grupo 3
  </footer>
</body>
</html>
