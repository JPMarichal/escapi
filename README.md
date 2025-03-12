# ESCAPI - API de Escrituras

## Descripción
ESCAPI es una API RESTful desarrollada en Laravel que proporciona acceso a las escrituras de La Iglesia de Jesucristo de los Santos de los Últimos Días. La API permite consultar volúmenes, libros, capítulos, versículos y pericopas de las escrituras.

## Requisitos
- PHP >= 8.1
- MySQL >= 5.7
- Composer

## Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/JPMarichal/escapi.git
cd escapi
```

2. Instalar dependencias:
```bash
composer install
```

3. Configurar el archivo .env:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configurar la base de datos en .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=escapi
DB_USERNAME=root
DB_PASSWORD=
```

5. Ejecutar migraciones y seeders:
```bash
php artisan migrate --seed
```

## Estructura de Modelos

### Volumen
Representa un volumen de escritura (por ejemplo, El Libro de Mormón)
- Atributos: id, title, description, featured_image, keywords, nombre

### División
Representa una división dentro de un volumen
- Atributos: id, title, description, featured_image, keywords, volumen_id, nombre

### Libro
Representa un libro dentro de una división
- Atributos: id, title, description, featured_image, keywords, division_id, nombre

### Parte
Representa una parte dentro de un libro
- Atributos: id, title, description, featured_image, keywords, libro_id, nombre

### Capítulo
Representa un capítulo dentro de una parte
- Atributos: id, title, description, featured_image, keywords, libro_id, parte_id, num_capitulo, referencia, abreviatura, num_versiculos, titulo_capitulo, url_oficial, url_audio, id_periodo, sumario, resumen

### Perícopa
Representa una sección temática dentro de un capítulo
- Atributos: id, title, description, featured_image, keywords, capitulo_id, titulo, versiculo_inicial, versiculo_final, descripcion

### Versículo
Representa un versículo dentro de un capítulo
- Atributos: id, contenido, num_versiculo, capitulo_id, pericopa_id

## API Endpoints

### Volúmenes
- GET `/api/volumenes` - Lista todos los volúmenes
- GET `/api/volumenes/{id}` - Obtiene un volumen específico
- GET `/api/volumenes/{id}/divisiones` - Lista las divisiones de un volumen

### Divisiones
- GET `/api/divisiones` - Lista todas las divisiones
- GET `/api/divisiones/{id}` - Obtiene una división específica
- GET `/api/divisiones/{id}/libros` - Lista los libros de una división
- GET `/api/divisiones/{id}/volumen` - Obtiene el volumen de una división

### Libros
- GET `/api/libros` - Lista todos los libros
- GET `/api/libros/{id}` - Obtiene un libro específico
- GET `/api/libros/item?nombre={nombre}` - Busca un libro por nombre
- GET `/api/libros/{id}/partes` - Lista las partes de un libro
- GET `/api/libros/{id}/division` - Obtiene la división de un libro

### Partes
- GET `/api/partes` - Lista todas las partes
- GET `/api/partes/{id}` - Obtiene una parte específica
- GET `/api/partes/item?nombre={nombre}` - Busca una parte por nombre
- GET `/api/partes/{id}/capitulos` - Lista los capítulos de una parte
- GET `/api/partes/{id}/libro` - Obtiene el libro de una parte

### Capítulos
- GET `/api/capitulos` - Lista todos los capítulos (paginado)
- GET `/api/capitulos/{id}` - Obtiene un capítulo específico
- GET `/api/capitulos/item?referencia={referencia}` - Busca un capítulo por referencia
- GET `/api/capitulos/{id}/versiculos` - Lista los versículos de un capítulo
- GET `/api/capitulos/{id}/pericopas` - Lista las pericopas de un capítulo
- GET `/api/capitulos/{id}/libro` - Obtiene el libro del capítulo
- GET `/api/capitulos/{id}/parte` - Obtiene la parte del capítulo

### Pericopas
- GET `/api/pericopas` - Lista todas las pericopas
- GET `/api/pericopas/{id}` - Obtiene una perícopa específica
- GET `/api/pericopas/{id}/versiculos` - Lista los versículos de una perícopa
- GET `/api/pericopas/{id}/capitulo` - Obtiene el capítulo de la perícopa

### Versículos
- GET `/api/versiculos` - Lista todos los versículos (paginado)
- GET `/api/versiculos/{id}` - Obtiene un versículo específico
- GET `/api/versiculos/item?referencia={referencia}` - Busca un versículo por referencia
- GET `/api/versiculos/{id}/pericopa` - Obtiene la perícopa del versículo
- GET `/api/versiculos/{id}/capitulo` - Obtiene el capítulo del versículo

## Tests
El proyecto incluye tests exhaustivos para cada endpoint. Para ejecutar los tests:

```bash
php artisan test
```

## Documentación API
La documentación detallada de la API está disponible a través de Swagger UI:
```bash
php artisan serve
```
Luego visita: `http://localhost:8000/api/documentation`

## Licencia
Este proyecto está licenciado bajo la [Licencia MIT](LICENSE).
