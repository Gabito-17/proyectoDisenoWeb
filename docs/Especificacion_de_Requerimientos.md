# Proyecto

## ALMA

### Documento de Requisitos del Sistema

**Versión:** 0.1

**Fecha:** 07/06/2024

**Realizado por:** Gelabert André, Pavón Juan Gabriel.

**Realizado para:** "Consultorio Alma"

---

## Lista de Cambios

| Nro | Fecha     | Descripción       | Autor |
|-----|-----------|-------------------|-------|
| 0   | 07/06/2024| Version 0.1     | Pavón Juan Gabriel |
| 1   | 07/06/2024| Definicion de requisitos iteracion 01, Definicion de Objetivos iteracion 01| Pavon Juan Gabriel |

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
---

## Requisitos de Información

### IRQ – 01 Información sobre Pacientes

**Objetivos asociados**
- OBJ – 02: Gestionar Pacientes

**Requisitos asociados**

- UC-01: Registrar Pacientes
- UC-02: Modificación de Pacientes
- UC-03: Eliminar Pacientes
- UC-60: Validar usuario

**Descripción**
Se almacenará toda la información necesaria de los Pacientes que desean ser atendidos en el consultorio.

**Datos específicos**
- Nombre y apellido
- Tipo de DNI
- DNI
- Ciudad – Provincia - País
- Dirección
- Teléfono
- Mail
- Motivo Baja (en caso de ser necesario)
- Fecha Baja (en caso de ser necesario)

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
- UC- 32 - Obtener Ciudades
- UC- 33 - Consultar Ciudades
- UC- 34 - Eliminar Ciudades
- UC- 35 - Obtener Tipos de Documento
- UC- 36 - Consultar Tipos de Documento
- UC- 37 - Eliminar Tipos de Documento
- UC- 38 - Obtener Sexo
- UC- 39 - Modificar Sexo
- UC- 40 - Consultar Sexo
- UC- 41 - Eliminar Sexo
- UC- 42 - Obtener Estado Civil
- UC- 43 - Modificar Estado Civil
- UC- 44 - Consultar Estado Civil
- UC- 45 - Eliminar Estado Civil
- UC- 58: Inicio de Sesión
- UC- 59: Cerrar Sesión
- UC- 60: Validar usuario

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Nombre de País
- Nombre de provincia
- Nombre de Ciudad
- Tipo de Documento
- Estado Civil

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

### IRQ – 03 Información sobre Seguridad

**Objetivos asociados**
- OBJ05-Gestionar Seguridad

**Requisitos asociados**
- UC- 58 - Iniciar Sesión
- UC- 59 - Cerrar Sesión
- UC- 60 - Validar Usuario
- UC- 61 - Crear Rol
- UC- 62 - Modificar Rol
- UC- 63 - Eliminar Rol
- UC- 64 - Asignar Rol
- UC- 65 - Desasignar Rol
- UC- 66 - Consultar Roles

**Descripción**
El sistema permitirá llevar un control sobre los permisos y los roles que tendrá cada usuario que lo utilice.

**Datos específicos**
- Nombre Rol
- Permisos

**Estabilidad**
Alta

**Comentarios**

---

## Requisitos Funcionales

- **Registrar pacientes**: El secretario debe poder registrar pacientes en el software.
- **Modificar paciente**: El psicólogo o secretario debe poder modificar un paciente registrado en el sistema.
- **Eliminar paciente**: El psicólogo o secretario debe poder eliminar un paciente del sistema.
- **Listar pacientes**: El psicólogo o secretario debe poder listar todos los pacientes registrados.
- **Registrar Psicólogo**: El sistema debe poder registrar psicólogos en el sistema.
- **Modificar Psicólogo**: El psicólogo debe poder modificar sus datos registrados en el sistema.
- **Eliminar Psicólogo**: El sistema debe poder eliminar un psicólogo del sistema.
- **Listar Psicólogos**: El sistema debe poder listar a todos los psicólogos registrados.
- **Registrar Secretario**: El sistema debe permitir el registro de un nuevo secretario.
- **Modificar Secretario**: El sistema debe permitir la modificación de la información de un secretario previamente registrado.
- **Eliminar Secretario**: El sistema debe permitir la eliminación de un secretario previamente registrado.
- **Listar Secretarios**: El sistema debe permitir listar todos los secretarios.
- **Registrar sesión**: El sistema debe permitir registrar una nueva sesión.
- **Modificar sesión**: El sistema debe permitir modificar una sesión registrada.
- **Cancelar sesión**: El sistema debe permitir cancelar una nueva sesión registrada.
- **Listar sesiones**: El sistema debe poder listar todas las sesiones registradas.
- **Generar historia clínica**: El psicólogo debe poder generar una nueva historia clínica y asociarla a un paciente.
- **Buscar historia clínica**: Permitir la búsqueda sencilla de una historia clínica particular.
- **Listar historias clínicas**: Permitir la visualización de todas las historias clínicas.
- **Registrar informe de sesión**: El psicólogo debe poder registrar la información recaudada durante una sesión.
- **Consultar informe de sesión**: El psicólogo debe poder ver un informe de sesión en particular para su posterior análisis.
- **Derivar paciente**: El psicólogo debe poder generar un documento de derivación, el cual incluirá los informes de sesión asociados al mismo.
- **Incluir inicio de sesión**: El sistema debe incluir un apartado que permita el inicio de sesión mediante roles.


---
## Diagrama de Subsistemas
![Diagrama de Subsistemas](/docs/resources/subsistemas.png)

---
## Diagrama de Caso de Uso del Subsistema Gestión de Pacientes
![Diagrama de Casos de Uso del Subsistemas Gestion de Pacientes](/docs/resources/ucSubsistemaPacientes.png)
### Definición de Actores:
| ACT–01  | Secretario             |
|---------|-------------------|
| **Descripción** | Este actor representa a la secretaria del consultorio |
| **Comentarios** | La secretaria es la responsable de realizar la gestion de pacientes y de sesiones |

| ACT–02  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes y sesiones |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Parametros del sistema
![Diagrama de Casos de Uso del Subsistemas Gestion de Pacientes](/docs/resources/ucSubsistemaParametrosSistema.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---

## Diagrama de Caso de Uso del Subsistema Gestión de Seguridad
![Diagrama de Casos de Uso del Subsistema de Gestión de Seguridad](/docs/resources/ucSubsistemaSeguridad.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---

## Casos de Uso del Sistema
| UC–01  | Registrar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite registrar un nuevo paciente en el sistema |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario ingresa los datos del paciente (nombre, apellido, documento, dirección, teléfono, etc.) |
| | 2 | El sistema valida los datos ingresados |
| | 3 | El sistema registra al paciente y confirma el registro |
| **Postcondición** | El paciente debe estar previamente registrado en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 3 | 2 segundos |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

"""
### UC–02 - Modificar Paciente

| UC–02  | Modificar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite modificar la información de un paciente existente |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario selecciona al paciente a modificar |
| | 2 | El sistema muestra los datos actuales del paciente |
| | 3 | El secretario modifica los datos necesarios |
| | 4 | El sistema valida los nuevos datos |
| | 5 | El sistema actualiza la información del paciente y confirma la modificación |
| **Postcondición** | Los datos del paciente están actualizados en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 5 | 2 segundos |
| **Frecuencia** | 5 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar la modificación |

---

### UC–03 - Eliminar Paciente

| UC–03  | Eliminar Paciente | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite dar de baja lógicamente a un paciente del sistema |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario selecciona al paciente a eliminar |
| | 2 | El sistema solicita confirmación para eliminar al paciente |
| | 3 | El secretario confirma la eliminación |
| | 4 | El sistema elimina al paciente y confirma la eliminación |
| **Postcondición** | El paciente está eliminado del sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2a | Si el secretario no confirma la eliminación, el paciente no es eliminado |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 4 | 1 segundo |
| **Frecuencia** | 1 vez/día |
| **Estabilidad** | alta |
| **Comentarios** | Si el paciente es eliminado, toda su información es archivada y no se puede acceder a ella a menos que sea reactivada |

---

### UC–04 - Consultar Paciente

| UC–04  | Consultar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite consultar la información de un paciente |
| **Precondición** | El usuario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El usuario selecciona al paciente a consultar |
| | 2 | El sistema muestra la información detallada del paciente |
| **Postcondición** | La información del paciente es visualizada por el usuario |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1a | Si el paciente no está registrado, el sistema muestra un mensaje de error |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de información de pacientes está disponible solo para usuarios autorizados |

---

### UC–60 - Validar Usuario

| UC–60  | Validar Usuario | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Pacientes <br> - IRQ-02: Información sobre los parámetros del sistema <br> - IRQ-03: Información sobre Seguridad |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso, cuando un psicologo, secretario o usuario desea ingresar al sistema.|
| **Precondición** | El usuario tiene su inicio de sesión y su contraseña disponible.|
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide que se identifique el usuario |
| | 2 | El usuario proporciona su nombre de sesión y la contraseña |
| | 3 | El sistema valida los datos ingresados por el usuario |
| **Postcondición** | El usuario se encuentra dentro del sistema, de acuerdo a los permisos que le hayan dado |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso|
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | - |
| **Comentarios** | - |

---

### UC–58 - Iniciar Sesión

| UC–58  | Iniciar Sesión | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Pacientes <br> - IRQ-02: Información sobre los parámetros del sistema <br> - IRQ-03: Información sobre Seguridad |
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
| **Objetivos asociados** | - OBJ02-Gestionar pacientes <br> - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-01: Información sobre Pacientes <br> - IRQ-02: Información sobre los parámetros del sistema <br> - IRQ-03: Información sobre Seguridad |
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
### UC–32 - Obtener Ciudades

| UC–32  | Obtener Ciudades | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener una lista de todas las ciudades de las provincias deseadas mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona la información de las ciudades. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema la lista de ciudades de las provincias presentes en el mismo. |
| | 5 | (Opcional) El administrador proporciona un filtro de provincias para la búsqueda. |
| | 6 | El sistema envía una solicitud a la API externa para obtener la lista de ciudades, con o sin filtro de provincia. |
| | 7 | La API externa responde con la lista de ciudades. |
| | 8 | El sistema muestra un mensaje al administrador indicando de que provincias se obtuvieron las ciudades. |
| **Postcondición** | El usuario obtiene la lista de ciudades solicitada, ya sea completa o filtrada por provincia. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 4 | Si el sistema detecta que ya hay ciudades almacenadas en las provincias le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 6 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 7 | Si la API externa devuelve un error o no se encuentran ciudades, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 7 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–33 - Consultar Ciudades

| UC–33  | Consultar Ciudades | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de ciudades.  |
| **Precondición** | Se desea conocer las distintas ciudades que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador selecciona el pais del cual desea ver las provincias cargadas. |
| | 5 | El sistema muestra la lista de provincias al administrador. |
| | 6 | El administrador selecciona la provincia de la cual desea ver las ciudades cargadas. |
| | 7 | El sistema muestra la lista de ciudades al administrador. |
| **Postcondición** | Las distintas ciudades son listadas para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 7 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–34 - Eliminar Ciudades

| UC–34  | Eliminar Ciudades | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de una ciudad.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El sistema muestra la lista de países al administrador. |
| | 5 | El administrador selecciona el pais del cual desea ver las provincias cargadas. |
| | 6 | El sistema muestra la lista de provincias al administrador. |
| | 7 | El administrador selecciona la provincia de la cual desea ver las ciudades cargadas. |
| | 8 | El sistema muestra la lista de ciudades al administrador. |
| | 9 | El administrador selecciona de la lista, la/s ciudad/es que desea eliminar. |
| | 10 | El sistema pregunta si quiere continuar con la operación. |
| | 11 | El sistema informa que la ciudad ha sido removida. |
| **Postcondición** | La o las ciudades fueron eliminadas correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 11 | El sistema informa que posee datos relacionados dicha ciudad y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

---
# Requerimientos no Funcionales

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