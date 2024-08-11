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

### IRQ – 01 Información sobre Sesiones

**Objetivos asociados**
- OBJ07 - Gestión de Sesiones

**Requisitos asociados**

- UC-05 - Registrar Sesión
- UC-69 - Modificar Sesión
- UC-06 - Consultar Sesión
- UC-07 - Cancelar Sesión

**Descripción**
Se almacenará toda la información necesaria de las Sesiones que se llevan a cabo en el consultorio.

**Datos específicos**
- Fecha
- Hora
- Estado
- PacienteSesion
- PsicologoSesion
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

- UC-70 - Registrar Ocupación
- UC-71 - Modificar Ocupación
- UC-72 - Consultar Ocupación
- UC-73 - Eliminar Ocupación

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Ocupación

**Estabilidad**
Alta

**Comentarios**
Ninguno

---
### IRQ – 03 Información sobre Informes de Sesion

**Objetivos asociados**
- OBJ08 - Gestión de Informes de Sesion

**Requisitos asociados**

- UC-14 - Registrar Informe de Sesión
- UC-12 - Modificar Informe de Sesión
- UC-13 - Consultar Informe de Sesión

**Descripción**
Se almacenará toda la información necesaria de los informes de las sesiones que se llevan a cabo en el consultorio.

**Datos específicos**
- Fecha
- Hora
- Descripción
- Tipo de descripción

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

## Requisitos Funcionales

- **Registrar, modificar y eliminar parameteros del sistema**: Se debe poder registrar toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio.
- **Registrar Sesión**: El sistema debe permitir el registro de sesiones, incluyendo la fecha, hora, paciente, y psicólogo asociados. Esto garantizará un seguimiento adecuado de las sesiones realizadas en el consultorio.
- **Modificar Sesión**: El sistema debe permitir la modificación de los datos de una sesión ya registrada, como la fecha y la hora de la misma. Esto permitirá corregir cualquier error o actualizar la información relevante.
- **Consultar Sesión**: El sistema debe permitir la consulta y el listado de todas las sesiones presentes en el sistema.
- **Cancelar Sesión**: El sistema debe permitir la cancelación de una sesión, actualizando su estado correspondiente. Esto garantizará un manejo adecuado de las sesiones programadas y permitirá liberar recursos en caso de cancelaciones.
- **Generar Informe de Sesión**: El sistema debe permitir la generación de informes de las sesiones realizadas. Esto incluye la captura de la fecha, hora, descripción y tipo de descripción de la sesión. El informe generado debe estar asociado correctamente a la sesión correspondiente, garantizando la integridad de los datos y la trazabilidad de las sesiones realizadas.
- **Consultar Informe de Sesión**: El sistema debe permitir consultar un informe de sesión de una sesión en particular y mostrar al usuario su respectiva información
- **Modificar Informe de Sesión**: El sistema debe permitir la modificación de los datos de un informe de sesión ya registrado, como la descripción y tipo de descripción de la misma. Esto permitirá corregir cualquier error o actualizar la información relevante.

---
## Diagrama de Subsistemas
![Diagrama de Subsistemas](/docs/resources/subsistemas3eraIteracion.png)

---
## Diagrama de Caso de Uso del Subsistema Gestión de Sesiones
![Diagrama de Casos de Uso del Subsistemas Gestion de Sesiones](/docs/resources/ucSubsistemaSesiones.png)
### Definición de Actores:
| ACT–01  | Secretario             |
|---------|-------------------|
| **Descripción** | Este actor representa a la secretaria del consultorio |
| **Comentarios** | El secretario es la responsable de realizar la gestion de pacientes y de sesiones |

| ACT–02  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes y sesiones |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Parametros del sistema
![Diagrama de Casos de Uso del Subsistemas Gestion de Parametros del sistema](/docs/resources/ucSubsistemaParametrosSistemaIteracion3.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Informes de Sesión
![Diagrama de Casos de Uso del Subsistemas Gestion de Informes de Sesión](/docs/resources/ucSubsistemaInformesSesion.png)
### Definición de Actores:
| ACT–01  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes y sesiones |

---

## Casos de Uso del Sistema

### UC-05 - Registrar Sesión

| UC–05  | Registrar Sesión | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ07-Gestion de Sesiones |
| **Requisitos asociados** | IRQ–01 Información sobre Sesiones |
| **Descripción** | Permite registrar una nueva sesión para un paciente. |
| **Precondición** | Un secretario o un psicólogo tiene acceso al sistema y los datos necesarios para la sesión |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario o otro psicólogo ingresa los datos de la sesión (fecha, hora, paciente y psicólogo) |
| | 2 | El sistema valida los datos ingresados |
| | 3 | El sistema registra la sesión y confirma el registro. |
| **Postcondición** | La sesión debe estar posteriormente registrada en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

### UC-69 - Modificar Sesión

| UC-69  | Modificar Sesión | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ07-Gestion de Sesiones |
| **Requisitos asociados** | IRQ–01 Información sobre Sesiones |
| **Descripción** | Permite modificar la información de una sesión existente |
| **Precondición** | Un secretario o un psicólogo tienen acceso al sistema y los datos necesarios de la sesión |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un secretario o un psicólogo selecciona la sesión a modificar |
| | 2 | El sistema muestra los datos actuales del sesión |
| | 3 | Un secretario o un psicólogo modifica los datos necesarios |
| | 4 | El sistema valida los nuevos datos |
| | 5 | El sistema actualiza la información del sesión y confirma la modificación |
| **Postcondición** | Los datos de la sesion están actualizados en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar la modificación |

---

### UC–06 - Consultar Sesión

| UC–06  | Consultar Sesión | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ07-Gestion de Sesiones |
| **Requisitos asociados** | IRQ–01 Información sobre Sesiones |
| **Descripción** | Permite consultar la información de los psicólogos |
| **Precondición** | Un secretario o un psicólogo tienen acceso al sistema. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un Administrador o otro psicólogo solicita al sistema la lista de las sesiones que estan registradas en el sistema. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | Las distintas sesiones que estan registradas en el sistema son listadas para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de información de sesiones está disponible solo para usuarios autorizados |

---

### UC-07 - Cancelar Sesión

| UC-07  | Cancelar Sesión | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ07-Gestion de Sesiones |
| **Requisitos asociados** | IRQ–01 Información sobre Sesiones |
| **Descripción** | Permite cancelar una sesión del sistema |
| **Precondición** | Un secretario o un psicólogo tiene acceso al sistema y los datos necesarios de la sesión a ser cancelada |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un secretario o un psicólogo selecciona la sesión a cancelar |
| | 2 | El sistema solicita confirmación para cancelar la sesión |
| | 3 | Un secretario o un psicólogo confirma la cancelación |
| | 4 | El sistema cancela sesión |
| **Postcondición** | El estado de la sesión pasa a estar "cancelada" |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | Si el secretario o un psicólogo, no confirma la cancelación, la sesión no es cancelada |
| | 4 | El sistema informa que la sesion ya fue realizada y no se puede cancelar. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si la sesión es cancelada, toda su información es archivada y no se puede acceder a ella a menos que sea reactivada |

---

### UC–14 - Registrar Informe de Sesión

| UC–14  | Registrar Informe de Sesión | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ08-Gestión de Informes de Sesion |
| **Requisitos asociados** | - IRQ-03: Información sobre Informes de Sesion |
| **Descripción** | Permite registrar un nuevo informe de sesión para un paciente.  |
| **Precondición** | Un psicólogo tiene acceso al sistema y los datos necesarios para el informe sesión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona una sesión. |
| | 2 | El psicólogo ingresa los detalles del informe de sesión (fecha, hora, descripción, tipo de descripción, etc.).|
| | 3 | El sistema valida los datos ingresados. |
| | 4 | El sistema avisa que el informe de sesión de la sesión ha sido registrado. |
| **Postcondición** | El usuario registra en el sistema un estado civil. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 4 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–12 - Modificar Informe de Sesión

| UC–12  | Modificar Informe de Sesión | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ08-Gestión de Informes de Sesion |
| **Requisitos asociados** | - IRQ-03: Información sobre Informes de Sesion |
| **Descripción** | Permite modificar la información de un informe de sesión existente.  |
| **Precondición** | Un psicólogo tiene acceso al sistema y los datos necesarios para el informe sesión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo solicita al sistema los datos del informe de sesion que tiene una sesión. |
| | 2 | El sistema le devuelve los datos requeridos. |
| | 3 | El psicólogo ingresa los nuevos datos. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que el informe de sesion ha sido modificado. |
| **Postcondición** | El informe de sesion, posee los datos actualizados. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–13 - Consultar Informe de Sesión

| UC–13  | Consultar Informe de Sesión | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ08-Gestión de Informes de Sesion |
| **Requisitos asociados** | - IRQ-03: Información sobre Informes de Sesion |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta del informe de sesión que tiene la sesión.  |
| **Precondición** | Se desea conocer el informe de sesión que tiene una sesión. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema el informe de sesión y sus respectivos datos que tiene la sesión seleccionada. |
| | 2 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | El informe de sesión que tiene la sesión son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---


### UC–70 - Registrar Ocupación

| UC–70  | Registrar Ocupación | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice el alta de una ocupacion que puede tener un paciente.  |
| **Precondición** | El usuario debe poseer permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador proporciona los datos para registrar una ocupacion que puede tener un paciente. |
| | 2 | El sistema valida los datos ingresados. |
| | 3 | El sistema avisa que la ocupacion que puede tener un paciente ha sido registrado. |
| **Postcondición** | El usuario registra en el sistema una ocupacion que puede tener un paciente. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–71 - Modificar Ocupación

| UC–71  | Modificar Ocupación | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la modificación de una ocupacion que puede tener un paciente.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita los datos de una ocupacion que puede tener un paciente |
| | 2 | El sistema le devuelve los datos requeridos. |
| | 3 | El administrador ingresa los nuevos datos. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que la ocupacion que puede tener un paciente ha sido modificado |
| **Postcondición** | La ocupacion que puede tener un paciente, posee los datos actualizados. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| | 5 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–72 - Consultar Ocupación

| UC–72  | Consultar Ocupación | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de las distintas ocupaciones que pueden tener los pacientes.  |
| **Precondición** | Se desea conocer las distintas ocupaciones que pueden tener los pacientes que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema las distintas ocupaciones que pueden tener los pacientes cargados en el sistema. |
| | 2 | El sistema muestra la lista de las distintas ocupaciones que pueden tener los pacientes al administrador. |
| **Postcondición** | Las distintas ocupaciones que pueden tener los pacientes son listadas para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–49 - Eliminar Ocupación

| UC–49  | Eliminar Ocupación | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de una ocupación que puede tener un paciente.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema las ocupación que puede tener un paciente cargadas. |
| | 2 | El sistema muestra la lista de las ocupación que puede tener un paciente al administrador. |
| | 3 | El administrador selecciona de la lista, la/las ocupación/es que puede tener un paciente, que desea eliminar. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que la ocupación que puede tener un paciente ha sido eliminado. |
| **Postcondición** | La o las ocupaciones que puede tener un paciente fueron eliminadas correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | El sistema informa que posee datos relacionados dicha ocupación y que no podrá eliminarse. El caso de uso queda sin efecto. |
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

| OBJ/IRQ                 | **OBJ01-Gestionar Psicólogos** | **OBJ02-Gestionar Pacientes** | **OBJ04-Gestionar Parámetros de Sistema** | **OBJ05-Gestionar Seguridad** |
|:--------------------------|:------------------------:|:------------------------:|:------------------------:|:------------------------:|
| **IRQ 01**|**X**|||||
| **IRQ 02**|||**X**|**X**||
| **NFR 01**|**X**|||||
| **NFR 02**|**X**|||||
| **NFR 03**|**X**|**X**||||
| **NFR 04**||||**X**||
**NFR 05**||||**X**||
---

## Glosario de Términos

| Termino  | Categoría | Comentarios |
|--------|--------------|----|
| **Administrador** | Actor | Este actor representa a la persona que se administrar los usuarios del sistema, como axial también agregar todos los parámetros para su uso. |
| **Psicologo** | Actor | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes ademas debe poder registrar nuevos pacientes y sesiones. |
| **Registrar Psicólogos** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un psicólogo. |
| **Modificar Psicólogos** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un psicólogo. |
| **Eliminar Psicólogos** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un psicólogo del sistema. |
| **Consultar Psicólogos** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los datos de los psicólogos del sistema. |
| **Registrar Estado Civil** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar un estado civil que puede tener un paciente. |
| **Modificar Estado Civil** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar un estado civil que puede tener una persona. |
| **Consultar Estado Civil** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los estados civiles presentes en el sistema. |
| **Eliminar Estado Civil** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar un estado civil del sistema. |
| **Registrar Especialidad** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para registrar la especialidad que puede tener un psicólogo. |
| **Modificar Especialidad** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para modifcar una especialidad que puede tener un psicólogo. |
| **Eliminar Especialidad** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para eliminar una especialidad que puede tener un psicólogo del sistema. |
| **Consultar Especialidad** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para consultar los tipos de especialidades que puede tener un psicólogo presentes en el sistema. |

## Modelo Conceptual
![Modelo Conceptual](/docs/resources/ModeloConceptual2daIteracion.png)
---

## U.I.D. - Diagrama de Interacción de Usuario

![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónEstadoCivil.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónEspecialidad.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPsicologo.png)
---
![](/docs/resources/UID's/UIDAltaModificaciónEliminaciónPaciente2daIteracion.png)
---
## Modelo Navegacional

![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPrincipal2daIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPacientes2daIteracion.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalPsicologos.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionalEspecialidad.png)
---
![](/docs/resources/ModelosNavegacionales/ModeloNavegacionaEstadoCivil.png)
---

## Diseño de Interfaz Abstracta

### Diseño abstracto de registro y listado de psicologos ###
![](/docs/resources/DIA's/diaPantallas-RegistrarPsicologo.png)
### Diseño abstracto de Modificar y eliminar psicologos ###
![](/docs/resources/DIA's/diaPantallas-Modificar_y_EliminarPsicologo.png)
### Diseño abstracto de registro y listado de Pacientes 2da Iteracion ###
![](/docs/resources/DIA's/diaPantallas-diaRegistrarPaciente2daIteracion.png)
### Diseño abstracto de Modificar y eliminar Pacientes 2da Iteracion ###
![](/docs/resources/DIA's/diaPantallas-diaModificarEliminarPaciente2daIteracion.png)
### Diseño abstracto de Parametros ###
![](/docs/resources/DIA's/diaPantallas-Parametros2daIteracion.png)
### Diseño abstracto de obtener, listar y eliminar Estados Civiles ###
![](/docs/resources/DIA's/diaPantallas-ObtenerListarEliminarEstadoCivil.png)
### Diseño abstracto de modificar Estado civil ###
![](/docs/resources/DIA's/diaPantallas-EditarEstadoCivil.png)
### Diseño abstracto de registrar, listar y eliminar Especialidades de un Psicologo ###
![](/docs/resources/DIA's/diaPantallas-RegistrarEspecialidad.png)
### Diseño abstracto de modificar Especialidades de un Psicologo ###
![](/docs/resources/DIA's/diaPantallas-ModificarEspecialidad.png)