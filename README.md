# TP-Especial-Parte-2---Web-2

Segunda Parte del Trabajo Práctico Especial de la materia Web2 (Tudai)

API REST para el recurso productos

Una API REST para manejar un CRUD / AMB de productos, permitiendo traer los datos de manera ordenada.

Importar la base de datos

	Importar desde PHPMyAdmin database/db_store.sql

Prueba con Postman

El endpoint de la API es http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos

-	Listar todos los productos – Método GET: Lista todos los productos existentes en la base de datos.
	
	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos

-	Listar los productos de manera ordenada – Método GET: Lista todos los productos existentes en la base de datos de acuerdo a la columna seleccionada en sort de manera ascendente o descendente según se especifique en order.

	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos/?sort=[nombre_de_columna]&order=[asc/desc]

-	Seleccionar un producto determinado por su ID – Método GET/:ID: Muestra un producto específico de acuerdo al ID seleccionado. 

	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos/:ID

-	Insertar un producto en la base de datos – Método POST: Inserta un producto en nuestra base de datos. 

	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos

-	Modificar un producto de la base de datos – Método PUT/:ID: Edita un producto identificado por su ID. 

	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos/:ID

-	Eliminar un producto de la base de datos – Método DELETE/:ID: Elimina un producto identificado por su ID. 

	http://localhost/web2/TP-Especial-Rest - Web2 - Tudai/api/productos/:ID
