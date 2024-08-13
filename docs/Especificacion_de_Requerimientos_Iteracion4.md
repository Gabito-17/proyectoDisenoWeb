# Proyecto

## ALMA

### Documento de Requisitos del Sistema

**Versión:** 0.1

**Fecha:** 11/08/2024

**Realizado por:** Gelabert André, Pavón Juan Gabriel.

**Realizado para:** "Consultorio Alma"

---

## Lista de Cambios

| Nro | Fecha     | Descripción       | Autor |
|-----|-----------|-------------------|-------|
| 0   | 07/06/2024| Version 0.1     | Gelabert André, Pavón Juan Gabriel |
| 1   | 07/06/2024| Definicion de requisitos iteracion 01, Definicion de Objetivos iteracion 01| Gelabert André, Pavon Juan Gabriel |
| 2   | 08/07/2024| Definicion de requisitos iteracion 02, Definicion de Objetivos iteracion 02| Gelabert André, Pavon Juan Gabriel |
| 3   | 11/08/2024| Definicion de requisitos iteracion 03, Definicion de Objetivos iteracion 03| Gelabert André, Pavon Juan Gabriel |
| 4   | 12/08/2024| Definicion de requisitos iteracion 04, Definicion de Objetivos iteracion 04| Gelabert André, Pavon Juan Gabriel |

---

## Presentacion General

El proyecto consiste en el desarrollo de un sistema web para "Consultorio Alma", ubicado en la ciudad de Montecarlo, Misiones. Este sistema se centrará en optimizar la gestión del consultorio psicológico que forma parte del sanatorio, el cual actualmente ofrece servicios de psicoterapia presencial para adultos de forma individual.

El objetivo principal del sistema es mejorar la eficiencia y la organización del consultorio, reemplazando los métodos tradicionales de almacenamiento de información en papel con una solución digital moderna que garantice la confidencialidad y la accesibilidad de los datos de los pacientes.

---

## Participantes del Proyecto
### Desarrolladores
* Gelabert, André.
* Pavon, Juan Gabriel.

### Cliente
* Rosch, Jonathan Alexander.

## Objetivos del Proyecto

- **OBJ01-Gestión de Psicólogos**: Permitir el registro sencillo de psicólogos, asegurando que toda la información relevante se almacene de forma digital y segura. Además, permitir la modificación de los datos almacenados de un psicólogo ya registrado. Por último, permitir la baja lógica de un psicólogo, garantizando que el historial de sesiones y pacientes se mantenga coherente y actualizado.
- **OBJ02-Gestion de Pacientes**: Permitir el registro sencillo de un paciente y su respectiva asociacion a un psicologo del consultorio, asegurando que toda la información relevante se almacene de forma digital y segura. Ademas permitir la modificacion de los datos almacenados de un paciente. Por ultimo permitir la baja logica de un paciente el historial de pacientes se mantenga coherente y actualizado.
- **OBJ03-Gestión de Sesiones**: Permitir el registro sencillo de sesiones y su respectiva asociación a un psicólogo y a un paciente del consultorio, asegurando que toda la información relevante se almacene de forma digital y segura. Además, permitir la modificación de los datos almacenados de una sesión ya registrada. Por último, permitir la baja lógica de una sesión, garantizando que el historial de sesiones se mantenga coherente y actualizado.
- **OBJ04-Gestionar Parámetros de Sistema**: El sistema permitirá la gestión integral de todos los parámetros necesarios para su óptimo funcionamiento. Estos parámetros incluirán los tipos de especialidad de los psicologos, los estados de las sesiones, ciertos datos de los pacientes (como podria ser su pais de residencia, su ciudad, etc) y cualquier otra variable que influya en la operativa diaria del consultorio. La gestión de estos parámetros garantizará que el sistema se adapte de manera flexible y eficiente a las necesidades específicas del consultorio, facilitando un entorno operativo fluido y personalizado.
- **OBJ05-Gestionar Seguridad**: El sistema gestionará toda la información relacionada con la seguridad de acceso del sitio, garantizando la protección de los datos sensibles de los pacientes y del consultorio. Esto incluirá la implementación de medidas de seguridad como la validación de usuarios, contar con sesiones, y la gestión de permisos y roles. Estas medidas asegurarán que solo el personal autorizado tenga acceso a la información relevante, manteniendo la confidencialidad y la integridad de los datos en cumplimiento con las normativas vigentes de protección de datos en el ámbito de la salud.
- **OBJ06-Gestion de Secretarios**: Permitir el registro sencillo de un secretario, asegurando que toda la información relevante se almacene de forma digital y segura. Ademas permitir la modificacion de los datos almacenados de un secretario. Este ultimo siendo importante para asistir al psicologo y ayudarle al mismo con la gestion de sesiones y pacientes. Ademas se ha de permitir la baja logica de un secretario.
- **OBJ07-Gestión de Sesiones**: Facilitar la gestión de las sesiones entre los pacientes y los psicólogos, permitiendo el registro, modificación y eliminación de sesiones. Además, garantizar la asociación correcta de cada sesión con el paciente y el psicólogo correspondiente, asegurando la integridad de los datos y la trazabilidad de las sesiones realizadas.
- **OBJ08-Gestión de Informes de Sesion**: Permitir la generación y gestión de informes de las sesiones realizadas, asegurando que cada sesión tenga su correspondiente informe asociado. Además, permitir la modificación y eliminación de los informes existentes, garantizando la actualización y coherencia de la información registrada.

---
# Requisitos del Sistema

## Requisitos de Información

### IRQ - 01: Información sobre Seguridad

**Objetivos asociados**
- OBJ05-Gestionar Seguridad

**Requisitos asociados**

- UC-61 - Crear Rol
- UC-62 - Modificar Rol
- UC-63 - Eliminar Rol
- UC-64 - Asignar Rol
- UC-65 - Desasignar Rol
- UC-66 - Consulta de Roles

**Descripción**
El sistema permitirá llevar un control sobre los permisos y los roles que tendrá cada usuario que lo utilice.

**Datos específicos**
- Nombre Rol
- Permisos

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

### IRQ – 02 Información sobre los parámetros del Sistema

**Objetivos asociados**
- OBJ04-Gestionar Parámetros de Sistema
- OBJ05-Gestionar Seguridad

**Requisitos asociados**

- UC- 26 - Obtener Paises
- UC- 27 - Consultar Paises
- UC- 28 - Eliminar Paises
- UC- 29 - Obtener Provincias
- UC- 30 - Consultar Provincias
- UC- 31 - Eliminar Provincias
- UC- 58: Inicio de Sesión
- UC- 59: Cerrar Sesión

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Nombre de País
- Nombre de provincia
- Nombre de Ciudad
- Nombre de Usuario
- Contraseña

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

## Requisitos Funcionales

- **Registrar, modificar y eliminar parameteros del sistema**: Se debe poder registrar toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio.
- **Incluir inicio de sesión**: El sistema debe incluir un apartado que permita el inicio de sesión mediante roles.
- **Gestionar Roles**: El sistema debe permitir la creación, modificación y eliminación de roles. Además, debe permitir asignar y desasignar roles a los usuarios. Esto garantizará un control adecuado sobre los permisos y accesos de cada usuario en el sistema.

---
## Diagrama de Subsistemas
![Diagrama de Subsistemas](/docs/resources/subsistemas4taIteracion.png)

---
## Diagrama de Caso de Uso del Subsistema Gestión de Seguridad del sistema
![Diagrama de Casos de Uso del Subsistemas Gestión de Seguridad del sistema](/docs/resources/ucSubsistemaSeguridad.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Parametros del sistema
![Diagrama de Casos de Uso del Subsistemas Gestion de Parametros del sistema](/docs/resources/ucSubsistemaParametrosSistemaIteracion4.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---

## Casos de Uso del Sistema

### UC–61 - Crear Rol

| UC–61  | Crear Rol | |
|--------|-----------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso, cuando el administrador desea crear un rol. |
| **Precondición** | El administrador desea generar un nuevo rol, para ser asignado a los usuarios que se registren. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador ingresa los datos correspondientes al rol que desea guardar. |
| | 5 | El sistema valida los datos ingresados. |
| | 6 | El sistema avisa que los datos ingresados fueron guardados correctamente. |
| **Postcondición** | El rol se encuentra creado en el sistema. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–62 - Modificar Rol

| UC–62  | Modificar Rol | |
|--------|---------------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso, cuando el administrador desea modificar un rol creado. |
| **Precondición** | El administrador conoce de antemano cuál es el rol que desea modificar. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita el rol en cuestión para proceder a su modificación. |
| | 5 | El sistema le devuelve los datos. |
| | 6 | El administrador procede a ingresar los nuevos datos del rol. |
| | 7 | El sistema le pregunta si desea guardar los cambios realizados. |
| | 8 | El sistema informa que los cambios fueron guardados. |
| **Postcondición** | El rol se modificó correctamente. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | Alta |
| **Comentarios** | - |

---

### UC–63 - Eliminar Rol

| UC–63  | Eliminar Rol | |
|--------|--------------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso, cuando el administrador desea eliminar algún rol de usuario que haya creado. |
| **Precondición** | El administrador conoce de antemano el rol que desea eliminar. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita el rol en cuestión para proceder a su eliminación. |
| | 5 | El sistema le devuelve los datos. |
| | 6 | El administrador procede a efectuar el borrado de dicho rol. |
| | 7 | El sistema pregunta si desea continuar con el proceso. |
| | 8 | El sistema avisa que el rol fue revocado del sistema. |
| **Postcondición** | El rol ya no puede ser asignado a ningún usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema, le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| | 8 | El sistema avisa que dicho rol está asignado a usuarios, pudiendo el administrador proseguir con la eliminación y dejar dichos usuarios sin rol; o bien, asignar otro tipo de rol a dichos usuarios. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | Alta |
| **Comentarios** | - |

---

### UC–64 - Asignar Rol

| UC–64  | Asignar Rol | |
|--------|--------------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como lo describe el siguiente caso de uso, cuando el administrador desea asignar un rol a un usuario especificado. |
| **Precondición** | El administrador conoce de antemano al usuario en cuestión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema, los datos de un determinado usuario. |
| | 5 | El sistema le devuelve los datos solicitados. |
| | 6 | El administrador procede a elegir el rol adecuado para el usuario en cuestión. |
| | 7 | El sistema pregunta si desea continuar con el proceso. |
| | 8 | El sistema avisa que los datos fueron guardados correctamente. |
| **Postcondición** | Los permisos del usuario han cambiado. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema, le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | Alta |
| **Comentarios** | - |

---

### UC–65 - Desasignar Rol

| UC–65  | Desasignar Rol | |
|--------|--------------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como lo describe el siguiente caso de uso, cuando el administrador desea banear o quitar algún rol a un usuario especificado. |
| **Precondición** | El administrador conoce de antemano al usuario en cuestión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema, los datos de un determinado usuario. |
| | 5 | El sistema le devuelve los datos solicitados. |
| | 6 | El administrador procede a elegir el rol adecuado para el usuario en cuestión. |
| | 7 | El sistema pregunta si desea continuar con el proceso. |
| | 8 | El sistema avisa que los datos fueron guardados correctamente. |
| **Postcondición** | Los permisos del usuario han cambiado. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema, le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | Alta |
| **Comentarios** | - |

---

### UC–66 - Consulta de Roles

| UC–66  | Consulta de Roles | |
|--------|--------------|----|
| **Objetivos asociados** | - OBJ-05: Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse como lo describe el siguiente caso de uso, cuando el Administrador desea consultar sobre los roles que deben poseer los usuarios. |
| **Precondición** | El administrador sabe de antemano, que existen los roles en el sistema. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema, los distintos tipos de roles que poseen los usuarios. |
| | 5 | El sistema devuelve los datos solicitados. |
| **Postcondición** | El administrador cuenta con los datos requeridos. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que el nombre de usuario o contraseña proporcionado no concuerda con uno de los usuarios del sistema, le pedirá que ingrese nuevamente esos datos. De lo contrario, quedará sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | Alta |
| **Comentarios** | - |

---

### UC–58 - Iniciar Sesión

| UC–58  | Iniciar Sesión | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad <br> - IRQ-02: Información sobre los parámetros del sistema  |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el Administrador, Psicologo o Secretario desee iniciar sesión como usuario. |
| **Precondición** | El Administrador, Psicologo o Secretario que desee iniciar sesión debe poseer usuario y contraseña. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El Administrador, Psicologo o Secretario solicita al sistema comenzar con el proceso de Inicio de Sesión. |
| | 2 | El sistema solicita nombre de usuario y contraseña.|
| | 3 | El sistema termina el proceso de Inicio de Sesión.|
| **Postcondición** | El usuario ha iniciado sesion en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–59 - Cerrar Sesión

| UC–58  | Cerrar Sesión | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Seguridad <br> - IRQ-02: Información sobre los parámetros del sistema  |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el Administrador, Psicologo o Secretario desee cerrar sesión. |
| **Precondición** | El Administrador, Psicologo o Secretario qque desee cerrar sesión tuvo que haber iniciado sesión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El Administrador, Psicologo o Secretario solicita al sistema comenzar con el proceso de Cierre de Sesión. |
| | 2 | El sistema pregunta si realmente desea cerrar sesión.|
| | 3 | El sistema termina el proceso de Cierre de Sesión.|
| **Postcondición** | El usuario ha cerrado sesion en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | - | - |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–26 - Obtener Paises

| UC–26  | Obtener Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener una lista de todos los países del mundo, o filtrar algunos países por región, mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona la información de los países. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita la lista de países desde el sistema. |
| | 5 | (Opcional) El administrador proporciona un filtro de región para la búsqueda. |
| | 6 | El sistema envía una solicitud a la API externa para obtener la lista de países, con o sin filtro de región. |
| | 7 | La API externa responde con la lista de países. |
| | 8 | El sistema muestra la lista de países al administrador. |
| **Postcondición** | El usuario obtiene la lista de países solicitada, ya sea completa o filtrada por región. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 4 | Si el sistema detecta que ya hay Paises almacenados le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 6 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 7 | Si la API externa devuelve un error o no se encuentran países, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 7 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–27 - Consultar Paises

| UC–27  | Consultar Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de país.  |
| **Precondición** | Se desea conocer los distintos países que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El sistema muestra la lista de países al administrador. |
| **Postcondición** | Los distintos países son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 4 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–28 - Eliminar Paises

| UC–28  | Eliminar Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de un país.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El sistema muestra la lista de países al administrador. |
| | 5 | El administrador selecciona de la lista, el/los País/es que desea eliminar. |
| | 6 | El sistema pregunta si quiere continuar con la operación. |
| | 7 | El sistema informa que el País ha sido removido. |
| **Postcondición** | El o los Países fueron eliminados correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 7 | El sistema informa que posee datos relacionados dicho país y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–29 - Obtener Provincias

| UC–29  | Obtener Provincias | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener una lista de todas las provincias de los paises deseados mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona la información de las provincias. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema la lista de provincias de los paises presentes en el mismo. |
| | 5 | (Opcional) El administrador proporciona un filtro de paises para la búsqueda. |
| | 6 | El sistema envía una solicitud a la API externa para obtener la lista de provincias, con o sin filtro de pais. |
| | 7 | La API externa responde con la lista de provincias. |
| | 8 | El sistema muestra un mensaje al administrador indicando de que países se obtuvieron las provincias. |
| **Postcondición** | El usuario obtiene la lista de provincias solicitada, ya sea completa o filtrada por país. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 4 | Si el sistema detecta que ya hay provincias almacenadas en los paises le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 6 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 7 | Si la API externa devuelve un error o no se encuentran provincias, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 7 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–30 - Consultar Provincias

| UC–30  | Consultar Provincias | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de provincias.  |
| **Precondición** | Se desea conocer las distintas provincias que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador selecciona el pais del cual desea ver las provincias cargadas. |
| | 5 | El sistema muestra la lista de provincias al administrador. |
| **Postcondición** | Las distintas provincias son listadas para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–31 - Eliminar Provincias

| UC–31  | Eliminar Provincias | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de una provincia.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El sistema muestra la lista de países al administrador. |
| | 5 | El administrador selecciona el pais del cual desea ver las provincias cargadas. |
| | 6 | El sistema muestra la lista de provincias al administrador. |
| | 7 | El administrador selecciona de la lista, la/s provincia/s que desea eliminar. |
| | 8 | El sistema pregunta si quiere continuar con la operación. |
| | 9 | El sistema informa que la provincia ha sido removida. |
| **Postcondición** | La o las provincias fueron eliminadas correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 9 | El sistema informa que posee datos relacionados dicha provincia y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

## Requerimientos no Funcionales

| **NFR - 01**                 | **Soporte de actualizaciones** |
|--------------------------|------------------------|
| Objetivos asociados      |**OBJ - 01**: Mantener el software actualizado|
| Requisitos asociados     |**IRQ - 01**: Mecanismo de actualización del software |
| Descripción              | El sistema debe ser capaz de recibir e implementar actualizaciones periódicas para mejorar su funcionamiento y seguridad. |
| Comentarios              | Ninguno                |

| **NFR - 02**                 | **Soporte de nuevas funcionalidades** |
|--------------------------|------------------------|
| Objetivos asociados      |**OBJ - 02**: Permitir la incorporación de nuevas funcionalidades|
| Requisitos asociados     |**IRQ - 02**: Flexibilidad para la adición de funciones|
| Descripción              | El sistema debe ser diseñado de manera que sea fácil agregar nuevas funcionalidades sin afectar la estabilidad del sistema existente. |
| Comentarios              | Ninguno                |

| **NFR - 03**                 | **Plataforma web**        |
|--------------------------|------------------------|
| Objetivos asociados      |**OBJ - 03**: Desarrollar el sistema para funcionar en plataformas web|
| Requisitos asociados     |**IRQ - 03**: Compatibilidad con navegadores web estándar|
| Descripción              | El sistema estará diseñado y desarrollado para ser accesible a través de navegadores web estándar, lo que permitirá un fácil acceso desde diferentes dispositivos. |
| Comentarios              | Ninguno                |

| **NFR - 04**                 | **Restricción de documentación** |
|--------------------------|------------------------|
| Objetivos asociados      | **OBJ - 04**: Restringir acceso a la documentación según los roles |
| Requisitos asociados     | **IRQ - 04**: Mecanismo de control de acceso a la documentación |
| Descripción              | La documentación del sistema estará disponible solo para los roles autorizados, con un mecanismo de control de acceso que asegure la confidencialidad de la información. |
| Comentarios              | Ninguno                |

| **NFR - 05**                 | **Computadora principal y para la secretaria** |
|--------------------------|------------------------|
| Objetivos asociados      |**OBJ - 05**: Garantizar acceso adecuado a los registros según los roles|
| Requisitos asociados     |**IRQ - 05**: Control de acceso diferenciado para la computadora principal y la de la secretaria |
| Descripción              | El sistema debe garantizar que la computadora principal tenga acceso completo a todos los registros contables y de pacientes, mientras que la computadora de la secretaria tendrá acceso restringido únicamente a los aspectos pertinentes para su función. |
| Comentarios              | Ninguno                |
---
## Matriz de Rastreabilidad Objetivo/Requisitos

| OBJ/IRQ                 | **OBJ04-Gestionar Parámetros de Sistema** | **OBJ05-Gestionar Seguridad** |
|:--------------------------|:------------------------:|:------------------------:|
| **IRQ 01**||**X**|
| **IRQ 02**|**X**|**X**|
| **NFR 01**|**X**|**X**|
| **NFR 02**|**X**||
| **NFR 03**|**X**|**X**|
| **NFR 04**||**X**|
| **NFR 05**|||
---

## Glosario de Términos

| Termino  | Categoría | Comentarios |
|--------|--------------|----|
| **Administrador** | Actor | Este actor representa a la persona que se administrar los usuarios del sistema, como axial también agregar todos los parámetros para su uso. |
| **Iniciar Sesión** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para que un usuario inicie sesión en el sistema. |
| **Cerrar Sesión** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para que un usuario cierre sesión en el sistema. |
| **Agregar Rol** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para agregar un nuevo rol al sistema. |
| **Modificar Rol** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para modificar un rol existente en el sistema. |
| **Eliminar Rol** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para eliminar un rol del sistema. |
| **Consultar Roles** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los roles que pueden tener los usuarios presentes en el sistema. |
| **Asignar Rol** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para cuando el administrador desea asignar un rol a un usuario especificado. |
| **Deasignar Rol** | Caso de uso | Este caso de uso describe los pasos que se deben realizar para cuando el administrador desea desasignar un rol a un usuario especificado. |
| **Obtener Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para obtener un país mediante una API. |
| **Consultar Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los paises presentes en el sistema. |
| **Eliminar Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un país del sistema. |
| **Obtener Provincias** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para obtener una provincia mediante una API. |
| **Consultar Provincias** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar las provincias presentes en el sistema. |
| **Eliminar Provincias** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar una provincia del sistema. |

## Modelo Conceptual
![Modelo Conceptual](/docs/resources/ModeloConceptual4taIteracion.png)
---

## U.I.D. - Diagrama de Interacción de Usuario

![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPais.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónProvincia.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónRoles.png)
---
![](/docs/resources/UID's/UIDAsignarDesasignarRoles.png)
---
![](/docs/resources/UID's/UIDInicioCierreSesion.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPaciente4taIteracion.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPsicologo4taIteracion.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónSecretario4taIteracion.png)
---
## Modelo Navegacional

![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPrincipal4taIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPacientes4taIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalSecretarios4taIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPsicologos4taIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalUbicacionGeografica.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalRoles.png)
---

## Diseño de Interfaz Abstracta

### Diseño abstracto de Iniciar Sesion ###
![](/docs/resources/DIA's/diaIniciarSesion.png)
### Diseño abstracto de Registrar, listar y eliminar Roles ###
![](/docs/resources/DIA's/diaRegistrarListarEliminarRoles.png)
### Diseño abstracto de Modificar Roles ###
![](/docs/resources/DIA's/diaModificarRoles.png)
### Diseño abstracto de Parametros ###
![](/docs/resources/DIA's/diaParametros4taIteracion.png)
### Diseño abstracto de obtener, listar y eliminar Paises ###
![](/docs/resources/DIA's/diaObtenerListarEliminarPaises.png)
### Diseño abstracto de obtener, listar y eliminar Provincias ###
![](/docs/resources/DIA's/diaObtenerListarEliminarProvincias.png)
### Diseño abstracto de registro y listado de Pacientes 4ta Iteracion ###
![](/docs/resources/DIA's/diaRegistrarPaciente4taIteracion.png)
### Diseño abstracto de Modificar y eliminar Pacientes 4ta Iteracion ###
![](/docs/resources/DIA's/diaModificarEliminarPaciente4taIteracion.png)
### Diseño abstracto de registro y listado de Secretarios 4ta Iteracion ###
![](/docs/resources/DIA's/diaRegistrarSecretario4taIteracion.png)
### Diseño abstracto de Modificar y eliminar Secretarios 4ta Iteracion ###
![](/docs/resources/DIA's/diaModificarEliminarSecretario4taIteracion.png)
### Diseño abstracto de registro y listado de Psicologos 4ta Iteracion ###
![](/docs/resources/DIA's/diaRegistrarPsicologo4taIteracion.png)
### Diseño abstracto de Modificar y eliminar Psicologos 4ta Iteracion ###
![](/docs/resources/DIA's/diaModificarEliminarPsicologo4taIteracion.png)