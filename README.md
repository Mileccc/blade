## Uso de Blade y Layouts 🌐

#### 1. Entendiendo Blade en Laravel

Blade es el motor de plantillas de Laravel, diseñado para simplificar la tarea de escribir código HTML en aplicaciones PHP. Facilita la inyección de datos y la ejecución de lógica PHP de manera elegante y organizada.

#### 2. Construcción de Layouts

Los layouts en Blade permiten definir una estructura base común para varias vistas, evitando la repetición de código y mejorando la mantenibilidad. 

### 🛠️ Creación de un Proyecto de Ejemplo

#### Paso a Paso:

1. **Creación de un Nuevo Proyecto**: Usamos el comando `laravel new nombre_proyecto` para iniciar.
2. **Acceso al Directorio del Proyecto**: Nos situamos en el directorio del proyecto recién creado.
3. **Preparación de Vistas Iniciales**: Eliminamos la vista predeterminada (`welcome.blade.php`) y preparamos vistas para nuestra landing page (`index.blade.php`, `about.blade.php`, etc.).

#### Implementando Layouts en Blade:

1. **Definir un Layout Base**: Creamos un archivo `landing.blade.php` en una nueva carpeta `layouts` dentro de `resources/views`.
2. **Estructura del Layout**: Definimos la estructura HTML común y utilizamos directivas Blade `@yield('nombre_seccion')` para definir áreas dinámicas.
3. **Extender Layout en Vistas**: En cada vista individual, extendemos el layout usando `@extends('layouts.landing')` y definimos el contenido de cada sección con `@section('nombre_seccion')`.

### 🚀 Ejemplo Práctico: Construyendo una Landing Page

#### Layout Base: `resources/views/layouts/landing.blade.php`

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <div>
        @yield('content')
    </div>
</body>
</html>
```

#### Vista `index.blade.php`

```blade
@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <h1>Index Page</h1>
    <p>Welcome to our website.</p>
@endsection
```

#### Vista `about.blade.php`

```blade
@extends('layouts.landing')

@section('title', 'About Us')

@section('content')
    <h1>About Page</h1>
    <p>Learn more about us.</p>
@endsection
```

### 📝 Reflexiones y Buenas Prácticas

- **Reutilización de Código**: Los layouts de Blade facilitan la gestión de cambios y mejoran la reutilización del código.
- **Estructuración Lógica**: La separación de secciones promueve una estructuración lógica y clara del proyecto.
- **Escalabilidad**: La capacidad de extender y modificar layouts garantiza una escalabilidad eficaz.

---

### Práctica en VSC

![Pasted image 20240123185809](https://github.com/Mileccc/blade/assets/121825748/645dcf66-0266-4701-92df-accdaf8f1ee4)


#### Resultado

![Pasted image 20240123185844](https://github.com/Mileccc/blade/assets/121825748/85a953c9-8114-4da1-b960-32456d15f5a1)

