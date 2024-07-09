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
| 2   | 08/07/2024| Definicion de requisitos iteracion 02, Definicion de Objetivos iteracion 02| Gelabert André, Pavon Juan Gabriel |

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

### IRQ – 01 Información sobre Psicólogos

**Objetivos asociados**
- OBJ01 - Gestión de Psicólogos

**Requisitos asociados**

- UC-18 - Registrar Psicólogo
- UC-19 - Modificar Psicólogo
- UC-20 - Consultar Psicólogo
- UC-21 - Eliminar Psicólogo

**Descripción**
Se almacenará toda la información necesaria de los Psicólogos que trabajan en el consultorio.

**Datos específicos**
- Nombre y apellido
- Tipo de DNI
- DNI
- Ciudad – Provincia - País
- Dirección
- Teléfono
- Mail
- Especialidad
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

- UC-42 - Obtener Estado Civil
- UC-43 - Modificar Estado Civil
- UC-44 - Consultar Estado Civil
- UC-45 - Eliminar Estado Civil
- UC-46 - Registrar Especialidad
- UC-47 - Modificar Especialidad
- UC-48 - Consultar Especialidad
- UC-49 - Eliminar Especialidad

**Descripción**
Se registrara toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio

**Datos específicos**
- Estado Civil
- Especialidad del psicologo

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

## Requisitos Funcionales

- **Registrar, modificar y eliminar parameteros del sistema**: Se debe poder registrar toda la información necesaria, reconocidas como parámetros del sistema, para poder operar con el sitio del consultorio.
- **Registrar Psicólogo**: El sistema debe poder registrar psicólogos en el sistema.
- **Modificar Psicólogo**: El psicólogo debe poder modificar sus datos registrados en el sistema.
- **Eliminar Psicólogo**:  El sistema debe poder eliminar un psicólogo del sistema.
- **Listar Psicólogos**: El sistema debe poder listar a todos los psicólogos registrados.

---
## Diagrama de Subsistemas
![Diagrama de Subsistemas](/docs/resources/subsistemas2daIteracion.png)

---
## Diagrama de Caso de Uso del Subsistema Gestión de Psicologos
![Diagrama de Casos de Uso del Subsistemas Gestion de Psicologos](/docs/resources/ucSubsistemaPsicologos.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

| ACT–02  | Psicologo             |
|---------|-------------------|
| **Descripción** | Este actor representa a un psicologo del consultorio |
| **Comentarios** | El Psicologo es la responsable de llevar a cabo las sesiones con los pacientes y realizar los informes de sesion correspondientes, ademas debe poder registrar nuevos pacientes y sesiones |

---
## Diagrama de Caso de Uso del Subsistema Gestión de Parametros del sistema
![Diagrama de Casos de Uso del Subsistemas Gestion de Parametros del sistema](/docs/resources/ucSubsistemaParametrosSistemaIteracion2.png)
### Definición de Actores:
| ACT–01  | Administrador             |
|---------|-------------------|
| **Descripción** | Este actor es el encargado de asignar los permisos a los usuarios para poder utilizar el sistema; tendrá privilegios para hacer todo tipo de modificación en cuanto a los grupos de usuarios y poder reparar algún tipo de inconsistencia en los datos que presenta el sistema. También se encargará de cargar y actualizar todos los parámetros del sistema cuando así lo requieran|
| **Comentarios** | Ninguno |

---

## Casos de Uso del Sistema

### UC-18 - Registrar Psicólogo

| UC–18  | Registrar Psicólogo | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ01-Gestion de Psicólogos |
| **Requisitos asociados** | IRQ–01 Información sobre Psicólogos |
| **Descripción** | Permite registrar un nuevo psicólogo en el sistema |
| **Precondición** | Un Administrador o otro psicólogo tiene acceso al sistema y los datos necesarios del psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El Administrador o otro psicólogo ingresa los datos del paciente (nombre, apellido, documento, dirección, teléfono, especialidad, etc.) |
| | 2 | El sistema valida los datos ingresados |
| | 3 | El sistema registra al psicólogo y confirma el registro |
| **Postcondición** | El psicólogo debe estar posteriormente registrado en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

### UC-19 - Modificar Psicólogo

| UC-19  | Modificar Psicólogo | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ01-Gestion de Psicólogos |
| **Requisitos asociados** | IRQ–01 Información sobre Psicólogos |
| **Descripción** | Permite modificar la información de un psicólogo existente |
| **Precondición** | Un Administrador o otro psicólogo tienen acceso al sistema y los datos necesarios del psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un Administrador o otro psicólogo selecciona al psicólogo a modificar |
| | 2 | El sistema muestra los datos actuales del psicólogo |
| | 3 | Un Administrador o otro psicólogo modifica los datos necesarios |
| | 4 | El sistema valida los nuevos datos |
| | 5 | El sistema actualiza la información del psicólogo y confirma la modificación |
| **Postcondición** | Los datos del psicólogo están actualizados en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar la modificación |

---

### UC-20 - Consultar Psicólogo

| UC-20  | Consultar Psicólogo | |
|--------|--------------------|----|
| **Objetivos asociados** | - OBJ01-Gestion de Psicólogos |
| **Requisitos asociados** | IRQ–01 Información sobre Psicólogos |
| **Descripción** | Permite consultar la información de un psicólogo |
| **Precondición** | Un Administrador o otro psicólogo tiene acceso al sistema y los datos necesarios del psicólogo a listar |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un Administrador o otro psicólogo selecciona al psicólogo a consultar |
| | 2 | El sistema muestra la información detallada del psicólogo |
| **Postcondición** | La información del psicólogo es visualizada por un Administrador o otro psicólogo |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1 | Si el psicólogo no está registrado, el sistema muestra un mensaje de error y se termina el caso de uso |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de información de psicólogos está disponible solo para usuarios autorizados |

---

### UC-21 - Eliminar Psicólogo

| UC-21  | Eliminar Psicólogo | |
|--------|-------------------|----|
| **Objetivos asociados** | - OBJ01-Gestion de Psicólogos |
| **Requisitos asociados** | IRQ–01 Información sobre Psicólogos |
| **Descripción** | Permite dar de baja lógicamente a un psicólogo del sistema |
| **Precondición** | Un Administrador o otro psicólogo tiene acceso al sistema y los datos necesarios del psicólogo a ser dado de baja |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | Un Administrador o otro psicólogo selecciona al psicólogo a eliminar |
| | 2 | El sistema solicita confirmación para eliminar al psicólogo |
| | 3 | Un Administrador o otro psicólogo confirma la eliminación |
| | 4 | El sistema elimina al psicólogo y confirma la eliminación |
| **Postcondición** | El psicólogo está eliminado del sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | Si el administrador, o otro psicólogo, no confirma la eliminación, el psicólogo no es eliminado |
| | 4 | El sistema informa que posee datos relacionados de dicho psicólogo y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Si el psicólogo es eliminado, toda su información es archivada y no se puede acceder a ella a menos que sea reactivada |

---

### UC–42 - Obtener Estado Civil

| UC–42  | Obtener Estado Civil | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema debe permitir obtener todos los tipos de estado civil que tiene una persona mediante una API externa. Esta funcionalidad es esencial para el registro y manejo de datos de los usuarios del sistema.  |
| **Precondición** | El sistema tiene acceso a la API externa que proporciona los tipos de estado civil que tiene una persona. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema la lista de los tipos de estado civil de una persona. |
| | 5 | El sistema envía una solicitud a la API externa para obtener lista de los tipos de estado civil que tiene una persona. |
| | 6 | La API externa responde con lista de los tipos de estado civil que tiene una persona. |
| | 7 | El sistema muestra la lista de los tipos de estado civil que tiene una persona. |
| **Postcondición** | El usuario obtiene la lista de los tipos de estado civil que tiene una persona. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 4 | Si el sistema detecta que ya hay una lista de los tipos de estado civil que tiene una persona, le pregunta al usuario si desea sobrescribirlos. Si no desea sobreescribir se termina el caso de uso, mientras que si está de acuerdo en sobrescribir se sigue el caso de uso con normalidad. |
| | 5 | Si el sistema no puede conectarse a la API externa, se muestra un mensaje de error indicando que la información no está disponible en ese momento. |
| | 6 | Si la API externa devuelve un error o no se encuentran los tipos de estado civil que tiene una persona, se muestra un mensaje indicando que no se encontraron resultados. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 6 | La respuesta de la API externa debe recibirse en menos de 5 segundos. |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | Es importante garantizar que el sistema maneje adecuadamente las posibles fallas en la conexión con la API externa y proporcione mensajes de error claros al usuario. |

---

### UC–43 - Modificar Estado Civil

| UC–43  | Modificar Estado Civil | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la modificación de un tipo de estado civil que tiene una persona.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema los datos del tipo de estado civil que tiene una persona. |
| | 5 | El sistema le devuelve los datos requeridos. |
| | 6 | El administrador ingresa los nuevos datos. |
| | 7 | El sistema pregunta si quiere continuar con la operación. |
| | 8 | El sistema informa que el tipo de sexo ha sido modificado. |
| **Postcondición** | El tipo de estado civil, posee los datos actualizados. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–44 - Consultar Estado Civil

| UC–44  | Consultar Estado Civil | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de de los tipos de estado civil que tiene una persona.  |
| **Precondición** | Se desea conocer los distintos tipos de estado civil que tiene una persona que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema la lista de los tipos de estado civil que tiene una persona. |
| | 5 | El sistema le proporciona los datos obtenidos. |
| **Postcondición** | Los distintos tipos de estado civil que tiene una persona son listados para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 5 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–45 - Eliminar Estado Civil

| UC–45  | Eliminar Estado Civil | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema <br> - OBJ05-Gestionar Seguridad |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de un tipo de estado civil que tiene una persona.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema pide al administrador que se identifique. |
| | 2 | El administrador proporciona los datos solicitados. |
| | 3 | El sistema valida al usuario. |
| | 4 | El administrador solicita al sistema la lista de los tipos de estado civil que tiene una persona. |
| | 5 | El sistema le proporciona los datos obtenidos. |
| | 7 | El administrador selecciona de la lista, el/los tipo/s de estado civil que desea eliminar. |
| | 8 | El sistema pregunta si quiere continuar con la operación. |
| | 9 | El sistema informa que el tipo de documentos de identidad ha sido eliminado. |
| **Postcondición** | El o los tipos de estado civil fueron eliminados correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta, que el nombre de usuario o contraseña proporcionado no concuerda con unos de los usuarios del sistema; le pedirá que ingrese nuevamente esos datos. De lo contrario, quedara sin efecto el caso de uso. |
| | 9 | El sistema informa que posee datos relacionados dicho tipo de estado civil y que no podrá eliminarse. El caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–46 - Registrar Especialidad

| UC–46  | Registrar Especialidad | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice el alta de una especialidad que puede tener un psicologo.  |
| **Precondición** | El usuario debe poseer permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador proporciona los datos para registrar una especialidad que puede tener un psicologo. |
| | 2 | El sistema valida los datos ingresados. |
| | 3 | El sistema avisa que la especialidad que puede tener un psicologo ha sido registrado. |
| **Postcondición** | El usuario registra en el sistema una especialidad que puede tener un psicologo. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–47 - Modificar Especialidad

| UC–47  | Modificar Especialidad | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la modificación de una especialidad que puede tener un psicologo.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta tarea. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita los datos de una especialidad que puede tener un psicologo |
| | 2 | El sistema le devuelve los datos requeridos. |
| | 3 | El administrador ingresa los nuevos datos. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que la especialidad que puede tener un psicologo ha sido modificado |
| **Postcondición** | El tipo de especialidad, posee los datos actualizados. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| | 5 | Si el sistema detecta que los datos que se estan intentando ingresar ya existen, se le informa al usuario y se le solicita que cambie los datos o que cancele la carga |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–48 - Consultar Especialidad

| UC–48  | Consultar Especialidad | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el usuario realice consulta de las de especialidades que pueden tener los psicologos.  |
| **Precondición** | Se desea conocer las distintas especialidades que pueden tener los psicologos que el sistema posee cargados. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema las distintas especialidades que pueden tener los psicologos cargados en el sistema. |
| | 2 | El sistema muestra la lista de especialidades que pueden tener los psicologos al administrador. |
| **Postcondición** | Las distintas especialidades que pueden tener los psicologos son listadas para el usuario. |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2 | El sistema avisa que no se encontraron datos de acuerdo al criterio seleccionado; y solicita que se modifique. En caso contrario, el caso de uso queda sin efecto. |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | - | - |
| **Frecuencia** | - |
| **Estabilidad** | alta |
| **Comentarios** | - |

---

### UC–49 - Eliminar Especialidad

| UC–49  | Eliminar Especialidad | |
|--------|------------------|----|
| **Objetivos asociados** | - OBJ04-Gestionar Parámetros de Sistema |
| **Requisitos asociados** | - IRQ-02: Información sobre los parámetros del sistema |
| **Descripción** | El sistema deberá comportarse tal como se describe en el siguiente caso de uso cuando el administrador realice la baja de una especialidad que puede tener un psicologo.  |
| **Precondición** | El usuario debe tener permisos de administrador para realizar esta operación. |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El administrador solicita al sistema las especialidades que puede tener un psicologo cargadas. |
| | 2 | El sistema muestra la lista de las especialidades que puede tener un psicologo al administrador. |
| | 3 | El administrador selecciona de la lista, la/las especialidad/es que puede tener un psicologo, que desea eliminar. |
| | 4 | El sistema pregunta si quiere continuar con la operación. |
| | 5 | El sistema informa que la especialidad que puede tener un psicologo ha sido eliminado. |
| **Postcondición** | La o las especialidades que puede tener un psicologo fueron eliminadas correctamente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 5 | El sistema informa que posee datos relacionados dicha especialidad y que no podrá eliminarse. El caso de uso queda sin efecto. |
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
| **Obtener Estado Civil** | Caso de uso | Este caso de uso describe los pasos que se debe realizar para obtener los estados civiles mediante una API. |
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