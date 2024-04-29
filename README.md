# CRUD_PHP
Sistema CRUD simple en Laravel

Notas: Primeramente, una disculpa por el desarrollo tan apresurado, enfermé de fiebre un poco fuerte el viernes por la noche y apenas me estoy recuperando, espero comprendan mi situación, debido a esto me faltaron pulir detalles y ajustar algunas cosas del front, pero la app es completamente funcional.

## Dificultades:
- Hace mucho que no manejaba laravel y php, por lo que tuve fue un poco de problemas en cuanto a las versiones de ambos.
- Durante la implemetación de la BD, me tompé con un problema de tipos, por lo que utilicé __decimal__ en lugar de __double__.
- Quise realizar un deploy en netlify pero por cuestiones de salud no alcancé (sé que esto no estaba en los requisitos pero quería darle presentación).
- El desarrollo del modulo para el slug no lo pude completar, por la misma situación mencionada.

## Desarrollo
- Para el desarrollo utilicé bootstrap, ya que es una de las librerias con las que mas cuento en conocimientos,
- Tambien utilicé una extenión tipo Prettier para darle un poco mas de formato al codigo.
- Dentro del desarrollo, el cual lo encontré bastante ágil, decidí utilizar una plantilla sobre la creación de proyecto de Laravel y PHP.

## Ejecución.
Hay que utilizar dos comandos en terminales diferentes:
- `npm run dev` el omando de npm solia usarlo para cuando no cargara los estilos de bootstrap, desconozco el error de esto.
- `php artisan serve`


### Módulo ProductRequest

- **Namespace:** `App\Http\Requests\ProductRequest`
- **Propósito:** Este módulo se encarga de manejar las reglas de validación para los datos de los productos al realizar operaciones como crear o actualizar un producto.
- **Reglas de Validación:**
  - **name:** Obligatorio, debe ser una cadena de texto que describe el nombre del producto.
  - **description:** Obligatorio, debe ser una cadena de texto que describe la descripción del producto.
  - **slug:** Obligatorio, debe ser una cadena de texto que representa una versión legible de la URL del producto.
  - **price:** Obligatorio, representa el precio del producto.
  - **stock:** Obligatorio, indica la cantidad de existencias disponibles para el producto.
  - **brand:** Obligatorio, debe ser una cadena de texto que especifica la marca del producto.
  - **features:** Obligatorio, debe ser una cadena de texto que enumera las características principales del producto.

### Módulo Controller

- **Namespace:** `App\Http\Controllers\Controller`
- **Propósito:** Este controlador sirve como base para otros controladores en la aplicación. Proporciona funcionalidades como la autorización de solicitudes y la validación de datos.

### Módulo HomeController

- **Namespace:** `App\Http\Controllers\HomeController`
- **Propósito:** Este controlador gestiona las acciones relacionadas con el panel de control de la aplicación. Requiere que los usuarios estén autenticados para acceder a estas funcionalidades.

### Módulo ProductController

- **Namespace:** `App\Http\Controllers\ProductController`
- **Propósito:** Este controlador se encarga de gestionar todas las operaciones relacionadas con los productos en la aplicación, incluyendo la creación, edición, visualización y eliminación de productos.
- **Funciones:**
  1. **index:** Muestra una lista paginada de todos los productos existentes en la base de datos.
  2. **create:** Muestra el formulario para crear un nuevo producto.
  3. **store:** Almacena los datos de un nuevo producto creado por el usuario.
  4. **show:** Muestra los detalles completos de un producto específico.
  5. **edit:** Muestra el formulario de edición para modificar la información de un producto.
  6. **update:** Actualiza los datos de un producto después de ser editado por el usuario.
  7. **destroy:** Elimina un producto específico de la base de datos.

### Rutas

- **Ruta Base:** `/`
  - **Propósito:** La página de inicio de la aplicación, que generalmente muestra información introductoria o de bienvenida.
- **Ruta de Recursos:** `/products`
  - **Controlador:** `ProductController`
  - **Acciones:** index, create, store, show, edit, update, destroy
  - **Descripción:** Esta ruta maneja todas las operaciones CRUD relacionadas con los productos en la aplicación.
- **Ruta de Autenticación:** `/home`
  - **Controlador:** `HomeController`
  - **Acción:** index
  - **Descripción:** Esta ruta muestra el panel de control de la aplicación y requiere que los usuarios inicien sesión para acceder.
- **Rutas Personalizadas:**
  - **Crear Producto:** `/products/create`
    - **Descripción:** Accede al formulario de creación de un nuevo producto.
  - **Mostrar Productos:** `/products`
    - **Descripción:** Muestra la lista de todos los productos disponibles en la aplicación.
  - **Rutas de Autenticación:** `/login`, `/register`, `/logout`
    - **Descripción:** Rutas estándar para la autenticación de usuarios, incluyendo inicio de sesión, registro y cierre de sesión.
