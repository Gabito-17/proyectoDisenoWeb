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
| 0   | 07/06/2024| Version 0.1     | Gelabert André, Pavón Juan Gabriel |
| 1   | 07/06/2024| Definicion de requisitos iteracion 01, Definicion de Objetivos iteracion 01| Gelabert André, Pavon Juan Gabriel |

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
# Requisitos del Sistema

## Requisitos de Información

### IRQ – 01 Información sobre Pacientes

**Objetivos asociados**
- OBJ – 02: Gestionar Pacientes

**Requisitos asociados**

- UC-01: Registrar Pacientes
- UC-02: Modificación de Pacientes
- UC-03: Eliminar Pacientes
- UC-04: Consultar Paciente

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
- UC- 35 - Obtener Tipos de Documento
- UC- 36 - Consultar Tipos de Documento
- UC- 37 - Eliminar Tipos de Documento
- UC- 38 - Obtener Sexo
- UC- 39 - Modificar Sexo
- UC- 40 - Consultar Sexo
- UC- 41 - Eliminar Sexo

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Nombre de País
- Tipo de Documento
- Sexo

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

## Requisitos Funcionales

- **Registrar pacientes**: El secretario debe poder registrar pacientes en el software.
- **Modificar paciente**: El psicólogo o secretario debe poder modificar un paciente registrado en el sistema.
- **Eliminar paciente**: El psicólogo o secretario debe poder eliminar un paciente del sistema.
- **Consultar pacientes**: El psicólogo o secretario deben poder ver de manera listada todos los pacientes registrados en el sistema.
- **Registrar, modificar y eliminar parameteros del sistema**: Se debe poder registrar toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio.


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
![Diagrama de Casos de Uso del Subsistemas Gestion de Parametros del sistema](/docs/resources/ucSubsistemaParametrosSistema.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---

## Casos de Uso del Sistema

### UC-01 - Registrar Paciente

| UC–01  | Registrar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite registrar un nuevo paciente en el sistema |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario ingresa los datos del paciente (nombre, apellido, documento, dirección, teléfono, etc.) |
| | 2 | El sistema valida los datos ingresados |
| | 3 | El sistema registra al paciente y confirma el registro |
| **Postcondición** | El paciente pasa a estar registrado en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 3 | 2 segundos |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

### UC–02 - Modificar Paciente

| UC–02  | Modificar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes |
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
| **Objetivos asociados** | - OBJ02-Gestionar pacientes |
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
| **Objetivos asociados** | - OBJ02-Gestionar pacientes |
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

### UC–26 - Obtener Paises

| UC–26  | Obtener Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener una lista de todos los países del mundo, o filtrar algunos países por región, mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona la información de los países. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita la lista de países desde el sistema. |
| | 2 | (Opcional) El administrador proporciona un filtro de región para la búsqueda. |
| | 2 | El sistema envía una solicitud a la API externa para obtener la lista de países, con o sin filtro de región. |
| | 4 | La API externa responde con la lista de países. |
| | 5 | El sistema muestra la lista de países al administrador. |
| **Postcondición** | El usuario obtiene la lista de países solicitada, ya sea completa o filtrada por región. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1 | Si el sistema detecta que ya hay Paises almacenados le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 2 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 4 | Si la API externa devuelve un error o no se encuentran países, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 4 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–27 - Consultar Paises

| UC–27  | Consultar Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de país.  |
| **Precondición** | Se desea conocer los distintos países que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita la lista de países al sistema. |
| | 2 | El sistema muestra la lista de países al administrador. |
| **Postcondición** | Los distintos países son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–28 - Eliminar Paises

| UC–28  | Eliminar Paises | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de un país.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita la lista de países al sistema. |
| | 2 | El sistema muestra la lista de países al administrador. |
| | 3 | El administrador selecciona de la lista, el/los País/es que desea eliminar. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el País ha sido removido. |
| **Postcondición** | El o los Países fueron eliminados correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | El sistema informa que posee datos relacionados dicho país y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---
### UC–35 - Alta de Tipo de Documento

| UC–35  | Alta de Tipo de Documento | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice el alta de un Tipo de documento.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona los tipos de documento de identidad. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador proporciona los datos para registrar el Tipo de Documento. |
| | 2 | El sistema valida los datos ingresados. |
| | 3 | El sistema avisa que el Tipo de Documento ha sido registrado. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–69 - Modificar Tipo de Documento

| UC–69  | Modificar Tipo de Documento | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la modificación de un Tipo de Documento.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita los datos del Tipo de Documento |
| | 2 | El sistema le devuelve los datos requeridos. |
| | 3 | El administrador ingresa los nuevos datos. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el Tipo de Documento ha sido modificado |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| | 5 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–36 - Consultar Tipos de Documento

| UC–36  | Consultar Tipos de Documento | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de tipos de documentos de identidad.  |
| **Precondición** | Se desea conocer los distintos tipos de documentos de identidad que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema los tipos de documentos de identidad cargados. |
| | 2 | El sistema muestra la lista de tipos de documentos de identidad al administrador. |
| **Postcondición** | Los distintos tipos de documentos de identidad son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–37 - Eliminar Tipos de Documento

| UC–37  | Eliminar Tipos de Documento | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de un tipo de documentos de identidad.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema los tipos de documentos de identidad cargados. |
| | 2 | El sistema muestra la lista de tipos de documentos de identidad al administrador. |
| | 3 | El administrador selecciona de la lista, el/los tipos de documentos de identidad que desea eliminar. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el tipo de documentos de identidad ha sido eliminado. |
| **Postcondición** | El o los tipos de documentos de identidad fueron eliminados correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | El sistema informa que posee datos relacionados dicho tipo de documento de identidad y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---
### UC–38 - Obtener Sexo

| UC–38  | Obtener Sexo | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener todos los tipos de sexo biologico que tiene una persona mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona los tipos de sexo biologico que tiene una persona. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema la lista de los tipos de sexo biologico que tiene una persona. |
| | 2 | El sistema envía una solicitud a la API externa para obtener lista de los tipos de sexo biologico que tiene una persona. |
| | 3 | La API externa responde con lista de los tipos de sexo biologico que tiene una persona. |
| | 4 | El sistema muestra la lista de los tipos de sexo biologico que tiene una persona. |
| **Postcondición** | El usuario obtiene la lista de los tipos de sexo biologico que tiene una persona. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1 | Si el sistema detecta que ya hay una lista de los tipos de sexo biologico que tiene una persona, le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 2 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 3 | Si la API externa devuelve un error o no se encuentran los tipos de sexo biologico que tiene una persona, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 3 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–39 - Modificar Sexo

| UC–39  | Modificar Sexo | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la modificación de un tipo de sexo biologico que tiene una persona.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema los datos del tipo de sexo biologico que tiene una persona. |
| | 2 | El sistema le devuelve los datos requeridos. |
| | 3 | El administrador ingresa los nuevos datos. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el tipo de sexo ha sido modificado. |
| **Postcondición** | El tipo de sexo biologico, posee los datos actualizados. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–40 - Consultar Sexo

| UC–40  | Consultar Sexo | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de de los tipos de sexo biologico que tiene una persona.  |
| **Precondición** | Se desea conocer los distintos tipos de sexo biologico que tiene una persona que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema la lista de los tipos de sexo biologico que tiene una persona. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | Los distintos tipos de sexo biologico que tiene una persona son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–41 - Eliminar Sexo

| UC–41  | Eliminar Sexo | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de un tipo de sexo biologico que tiene una persona.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema la lista de los tipos de sexo biologico que tiene una persona. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| | 3 | El administrador selecciona de la lista, el/los tipo/s de sexo biologico que desea eliminar. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el tipo de sexo biologico ha sido eliminado. |
| **Postcondición** | El o los tipos de sexo biologico fueron eliminados correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | El sistema informa que posee datos relacionados dicho tipo de sexo biologico y que no podrá eliminarse. El caso de uso queda sin efecto. |
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

| OBJ/IRQ                 | **OBJ01-Gestión de Psicólogos** | **OBJ02-Gestion de Pacientes** | **OBJ04-Gestionar Parámetros de Sistema** | **OBJ05-Gestionar Seguridad** |
|:--------------------------|:------------------------:|:------------------------:|:------------------------:|:------------------------:|
| **IRQ 01**||**X**||||
| **IRQ 02**||||**X**|**X**|
| **IRQ 03**|||||**X**|
| **NFR 01**|**X**|||||
| **NFR 02**||**X**||||
| **NFR 03**||**X**||||
| **NFR 04**||||**X**||
**NFR 05**|||||**X**|
---

## Glosario de Términos

| Termino  | Categoría | Comentarios |
|--------|--------------|----|
| **Administrador** | Actor | Este actor representa a la persona que se administrar los usuarios del sistema, como axial también agregar todos los parámetros para su uso. |
| **Secretario** | Actor | El secretario es el responsable de realizar la gestion de pacientes y de sesiones. |
| **Psicologo** | Actor | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes ademas debe poder registrar nuevos pacientes y sesiones. |
| **Registrar Pacientes** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un paciente. |
| **Modificar Pacientes** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un paciente. |
| **Eliminar Pacientes** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un paciente del sistema. |
| **Consultar Pacientes** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los datos de los paciente del sistema. |
| **Obtener Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para obtener un país mediante una API. |
| **Consultar Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los paises presentes en el sistema. |
| **Eliminar Países** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un país del sistema. |
| **Alta Tipo de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un tipo de documento. |
| **Modificar Tipos de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un tipo de documento. |
| **Eliminar Tipo de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un tipo de documento del sistema. |
| **Consultar Tipos de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los tipos de documento presentes en el sistema. |
| **Obtener Sexo** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para obtener todos los tipos de sexo biologico que tiene una persona mediante una API. |
| **Modificar Sexo** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un tipo de sexo biologico que puede tener una persona. |
| **Consultar Sexo** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar todos los tipos de sexo biologico que tiene una persona presentes en el sistema. |
| **Eliminar Sexo** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un tipo de sexo biologico que tiene una persona del sistema. |

## Modelo Conceptual
![Modelo Conceptual](/docs/resources/ModeloConceptualDiseñoWeb.png)
---

## U.I.D. - Diagrama de Interacción de Usuario

![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPaís.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónTipoDocumento.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónSexo.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPaciente.png)
---
## Modelo Navegacional

![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPrincipal.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPacientes.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalTipoDocumento.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionaSexo.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionaPais.png)
---

## Diseño de Interfaz Abstracta

### Diseño abstracto de registro y listado de pacientes ###
![](/docs/resources/DIA's/diaPantallas-diaRegistrarPaciente.drawio.png)
### Diseño abstracto de Modificar y eliminar pacientes ###
![](/docs/resources/DIA's/diaPantallas-diaModificar_y_EliminarPaciente.drawio.png)
### Diseño abstracto de Parametros ###
![](/docs/resources/DIA's/diaPantallas-diaParametros.drawio.png)
### Diseño abstracto de obtener, listar y eliminar Paises ###
![](/docs/resources/DIA's/diaPantallas-diaObtenerConsultarEliminarPaises.drawio.png)
### Diseño abstracto de obtener, listar y eliminar Sexos ###
![](/docs/resources/DIA's/diaPantallas-diaObtenerListarEliminarSexo.drawio.png)
### Diseño abstracto de modificar Sexo ###
![](/docs/resources/DIA's/diaPantallas-diaEditarSexo.drawio.png)
### Diseño abstracto de registrar, listar y eliminar Tipos de documento ###
![](/docs/resources/DIA's/diaPantallas-diaRegistrarTipoDocumento.drawio.png)
### Diseño abstracto de modificar tipo de documento ###
![](/docs/resources/DIA's/diaPantallas-ModificarTipoDocumento.drawio.png)