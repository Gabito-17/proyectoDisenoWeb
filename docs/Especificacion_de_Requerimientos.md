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
- **OBJ06-Gestion de Secretarios**: Permitir el registro sencillo de un secretario, asegurando que toda la información relevante se almacene de forma digital y segura. Ademas permitir la modificacion de los datos almacenados de un secretario. Este ultimo siendo importante para asistir al psicologo y ayudarle al mismo con la gestion de sesiones y pacientes. Ademas se ha de permitir la baja logica de un secretario.

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
- Tipo de Documento
- Numero de documento
- Sexo
- Dirección
- Teléfono
- Mail
- Ocupacion
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
- UC- 35 - Obtener Tipos de Documento
- UC- 36 - Consultar Tipos de Documento
- UC- 37 - Eliminar Tipos de Documento

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Tipo de Documento

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

### IRQ – 03 Información sobre Secretarios

**Objetivos asociados**
- OBJ – 06: Gestionar Secretario

**Requisitos asociados**

- UC-22: Registrar Secretario
- UC-23: Modificación de Secretario
- UC-24: Consultar Secretarios
- UC-25: Eliminar Secretario

**Descripción**
Se almacenará toda la información necesaria de los secretarios que trabajan en el consultorio.

**Datos específicos**
- Nombre y apellido
- Tipo de Documento
- Numero de documento
- Sexo
- Dirección
- Teléfono
- Mail
- Fecha Baja (en caso de ser necesario)

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

## Requisitos Funcionales

- **Registrar pacientes**: El secretario debe poder registrar pacientes en el software.
- **Modificar paciente**: El secretario debe poder modificar un paciente registrado en el sistema.
- **Eliminar paciente**: El secretario debe poder eliminar un paciente del sistema.
- **Consultar pacientes**: El psicólogo o secretario deben poder ver de manera listada todos los pacientes registrados en el sistema.
- **Registrar secretario**: El psicólogo debe poder registrar nuevos secretarios en el sistema.
- **Modificar secretario**: El psicólogo debe poder modificar la información de un secretario registrado en el sistema.
- **Eliminar secretario**: El psicólogo debe poder eliminar un secretario del sistema.
- **Consultar secretarios**: El psicólogo debe poder ver de manera listada todos los secretarios registrados en el sistema.
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
| **Comentarios** | El secretario es la responsable de realizar la gestion de pacientes y de sesiones |

| ACT–02  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes, secretarios y sesiones |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Secretarios
![Diagrama de Casos de Uso del Subsistemas Gestion de Secretarios](/docs/resources/ucSubsistemaSecretarios.png)
### Definición de Actores:

| ACT–01  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes, secretarios y sesiones |

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

### UC–04 - Consultar Pacientes

| UC–04  | Consultar Pacientes | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ02-Gestionar pacientes |
| **Requisitos asociados** | IRQ–01 Información sobre pacientes |
| **Descripción** | Permite consultar la información de los pacientes |
| **Precondición** | El secretario tiene acceso al sistema |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario solicita al sistema la lista de los pacientes que estan registrados en el sistema. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | Los distintos pacientes que estan registrados en el sistema son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de información de pacientes está disponible solo para usuarios autorizados |

---
### UC-22 - Registrar Secretario

| UC–22  | Registrar Secretario | |
|--------|--------------------|----|
| **Objetivos asociados** | OBJ06-Gestionar Secretario |
| **Requisitos asociados** | IRQ–03 Información sobre secretario |
| **Descripción** | Permite registrar un nuevo secretario en el sistema |
| **Precondición** | El piscologo tiene acceso al sistema y los datos necesarios del secretario |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El piscologo ingresa los datos del secretario (nombre, apellido, documento, dirección, teléfono, etc.) |
| | 2 | El sistema valida los datos ingresados |
| | 3 | El sistema registra al secretario y confirma el registro |
| **Postcondición** | El secretario pasa a estar registrado en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 3 | 2 segundos |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

### UC–23 - Modificar Secretario

| UC–23  | Modificar Secretario | |
|--------|--------------------|----|
| **Objetivos asociados** | OBJ06-Gestionar Secretario |
| **Requisitos asociados** | IRQ–03 Información sobre secretario |
| **Descripción** | Permite modificar la información de un secretario existente |
| **Precondición** | El piscologo tiene acceso al sistema y los datos necesarios del secretario |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El piscologo selecciona al secretario a modificar |
| | 2 | El sistema muestra los datos actuales del secretario |
| | 3 | El piscologo modifica los datos necesarios |
| | 4 | El sistema valida los nuevos datos |
| | 5 | El sistema actualiza la información del secretario y confirma la modificación |
| **Postcondición** | Los datos del secretario están actualizados en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 5 | 2 segundos |
| **Frecuencia** | 5 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar la modificación |

---

### UC–25 - Eliminar Secretario

| UC–25  | Eliminar Secretario | |
|--------|-------------------|----|
| **Objetivos asociados** | OBJ06-Gestionar Secretario |
| **Requisitos asociados** | IRQ–03 Información sobre secretario |
| **Descripción** | Permite dar de baja lógicamente a un secretario del sistema |
| **Precondición** | El piscologo tiene acceso al sistema y los datos necesarios del secretario |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El piscologo selecciona al secretario a eliminar |
| | 2 | El sistema solicita confirmación para eliminar al secretario |
| | 3 | El piscologo confirma la eliminación |
| | 4 | El sistema elimina al secretario y confirma la eliminación |
| **Postcondición** | El secretario está eliminado del sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2a | Si el piscologo no confirma la eliminación, el secretario no es eliminado |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 4 | 1 segundo |
| **Frecuencia** | 1 vez/día |
| **Estabilidad** | alta |
| **Comentarios** | Si el paciente es eliminado, toda su información es archivada y no se puede acceder a ella a menos que sea reactivada |

---

### UC–24 - Consultar Secretarios

| UC–24  | Consultar Secretarios | |
|--------|--------------------|----|
| **Objetivos asociados** | OBJ06-Gestionar Secretario |
| **Requisitos asociados** | IRQ–03 Información sobre secretario |
| **Descripción** | Permite consultar la información de los secretarios |
| **Precondición** | El Psicólogo tiene acceso al sistema |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El Psicólogo solicita al sistema la lista de los secretarios que estan registrados en el sistema. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | Los distintos secretarios que estan registrados en el sistema son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de información de secretarios está disponible solo para usuarios autorizados |


---
### UC–35 - Alta de Tipo de Documento

| UC–35  | Alta de Tipo de Documento | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice el alta de un Tipo de documento.  |
| **Precondición** | El usuario debe poseer permisos de administrador para realizar esta tarea. |
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

| OBJ/IRQ                 | **OBJ02-Gestionar Pacientes** | **OBJ04-Gestionar Parámetros de Sistema** | **OBJ05-Gestionar Seguridad** | **OBJ06-Gestionar Secretarios**|
|:--------------------------|:------------------------:|:------------------------:|:------------------------:|:------------------------:|
| **IRQ 01**|**X**||||
| **IRQ 02**||**X**|**X**||
| **IRQ 03**||||**X**|
| **NFR 01**|**X**||||
| **NFR 02**||**X**|**X**||
| **NFR 03**|**X**|**X**|**X**|**X**|
| **NFR 04**|||**X**||
**NFR 05**||||**X**|
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
| **Consultar Pacientes** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los paciente registrados del sistema. |
| **Registrar Secretarios** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un secretario. |
| **Modificar Secretarios** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un secretario. |
| **Eliminar Secretarios** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un secretario del sistema. |
| **Consultar Secretarios** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los secretario registrados del sistema. |
| **Alta Tipo de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un tipo de documento. |
| **Modificar Tipos de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un tipo de documento. |
| **Eliminar Tipo de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un tipo de documento del sistema. |
| **Consultar Tipos de Documento** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los tipos de documento presentes en el sistema. |

## Modelo Conceptual
![Modelo Conceptual](/docs/resources/ModeloConceptualDiseñoWeb.png)
---

## U.I.D. - Diagrama de Interacción de Usuario

![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPaciente.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónTipoDocumento.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónSecretario.png)
---

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