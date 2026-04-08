# Changelog

Todos los cambios notables en este proyecto serán documentados en este archivo.

El formato está basado en [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
y este proyecto se adhiere a [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.0] - 2026-04-07

### Añadido
- Nuevo diseño **minimalista** para el `index.html` principal con tonos pastel y colores alegres.
- **Previsualizaciones dinámicas** mediante iframes en la página principal para cada proyecto.
- Inclusión de **Nicky Shop** (Opción 5) en el portafolio principal.
- Archivos `style.css` y `script.js` independientes para cada opción de sitio web.

### Cambiado
- Reestructuración modular del proyecto: cada opción ahora reside en su propia carpeta con sus respectivos recursos.
- Actualización de rutas y enlaces internos para soportar la nueva estructura de directorios.
- Mejora de la experiencia de usuario (UX) con un diseño más limpio, centrado y ordenado.

### Eliminado
- Código CSS y JS inline en los archivos HTML de las opciones 1 a 4, moviéndolos a archivos externos para mayor mantenibilidad.

## [1.0.1] - 2026-03-28

### Cambiado
- Conversión de archivos `.php` a `.html` para compatibilidad nativa con GitHub Pages.
- Unificación de `index2.php` como el nuevo `index.html` principal.
- Actualización de enlaces internos entre páginas.

### Añadido
- Soporte para despliegue estático en GitHub Pages.
- Botones de navegación de retorno al portafolio principal en todas las secciones.
