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
---

## Requisitos de Información

### IRQ – 01 Información sobre Psicólogos

**Objetivos asociados**
- OBJ01-Gestión de Psicólogos

**Requisitos asociados**
- UC-10: Alta de Psicólogos
- UC-11: Modificación de Psicólogos
- UC-12: Baja de Psicólogos

**Descripción**
Se almacenará toda la información necesaria de los psicólogos que trabajan en el consultorio.

**Datos específicos**
- Nombre y apellido
- Especialidad
- Dirección
- Ciudad – Provincia - País
- Teléfono
- Mail
- Motivo de Baja (en caso de ser necesario)
- Fecha de Baja (en caso de ser necesario)

**Estabilidad**
Alta

**Comentarios**
Este requisito garantiza que toda la información relevante sobre los psicólogos se gestione adecuadamente, permitiendo su registro, modificación y baja lógica en el sistema para mantener un historial coherente y actualizado.

---

### IRQ – 02 Información sobre Pacientes

**Objetivos asociados**
- OBJ – 02: Gestionar Pacientes

**Requisitos asociados**
- UC-01: Validar usuario
- UC-02: Alta de Pacientes
- UC-04: Modificación de Pacientes
- UC-05: Baja de Pacientes

**Descripción**
Se almacenará toda la información necesaria de los Pacientes que desean ser atendidos en el consultorio.

**Datos específicos**
- Login
- Password
- Nombre y apellido
- DNI
- Dirección
- Ciudad – Provincia - País
- Teléfono
- Mail
- Motivo Baja (en caso de ser necesario)
- Fecha Baja (en caso de ser necesario)

**Estabilidad**
Alta

**Comentarios**
Ninguno

---

### IRQ – 03 Información sobre Sesiones

**Objetivos asociados**
- OBJ03-Gestión de Sesiones

**Requisitos asociados**
- UC-09: Validar usuario
- UC-10: Alta de Sesiones
- UC-11: Modificación de Sesiones
- UC-12: Baja de Sesiones

**Descripción**
Se almacenará toda la información necesaria de las Sesiones que se realicen en el consultorio.

**Datos específicos**
- Fecha y hora de la sesión
- Psicólogo asignado
- Paciente asociado
- Descripción de la sesión
- Tipo de sesión
- Estado de la sesión (activo, cancelado, completado)
- Motivo de cancelación (en caso de ser necesario)
- Fecha de cancelación (en caso de ser necesario)

**Estabilidad**
Alta

**Comentarios**
Este requisito garantiza que toda la información relevante sobre las sesiones se gestione de manera adecuada, permitiendo su registro, modificación y baja lógica en el sistema para mantener un historial coherente y actualizado.

---

## Requisitos Funcionales

- Registrar paciente: Permitir el registro de nuevos pacientes.
- Consultar paciente: Permitir la consulta de los datos de un paciente.
- Modificar paciente: Permitir la modificacion de un paciente previamente registrado.
- Eliminar paciente:  Permitir la baja de un paciente previamente registrado.
- Registrar Sesion: Permitir el registro de nuevas sesiones, asociarla a un Psicologo y un Paciente.
- Consultar Sesion: Permitir la consulta de los datos de una sesion.
- Modificar Sesion: Permitir la modificacion de una sesion previamente registrada.
- Eliminar Sesion:  Permitir la baja de una sesion previamente registrada.

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

## Diagrama de Caso de Uso del Subsistema Gestión de Sesiones
![Diagrama de Casos de Uso del Subsistema de Gestión de Sesiones](/docs/resources/ucSubsistemaSesiones.png)
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

## Casos de Uso del Sistema
| UC–01  | Registrar Paciente | |
|--------|--------------------|----|
| **Objetivos asociados** | OBJ–01 Gestionar pacientes |
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
| **Objetivos asociados** | OBJ–01 Gestionar pacientes |
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
| **Objetivos asociados** | OBJ–01 Gestionar pacientes |
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
| **Objetivos asociados** | OBJ–01 Gestionar pacientes |
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

### UC–05 - Registrar Sesión

| UC–05  | Registrar Sesión | |
|--------|------------------|----|
| **Objetivos asociados** | OBJ–02 Gestionar sesiones |
| **Requisitos asociados** | IRQ–02 Información sobre sesiones |
| **Descripción** | Permite registrar una nueva sesión para un paciente |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios del paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario selecciona al paciente |
| | 2 | El secretario ingresa los detalles de la sesión (fecha, hora, psicólogo, etc.) |
| | 3 | El sistema valida los datos ingresados |
| | 4 | El sistema registra la sesión y confirma el registro |
| **Postcondición** | La sesión está registrada en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3a | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 4 | 2 segundos |
| **Frecuencia** | 5 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | Si hay algún error en los datos, el sistema permite corregirlos y reintentar el registro |

---

### UC–06 - Consultar Sesión

| UC–06  | Consultar Sesión | |
|--------|-------------------|----|
| **Objetivos asociados** | OBJ–02 Gestionar sesiones |
| **Requisitos asociados** | IRQ–02 Información sobre sesiones |
| **Descripción** | Permite consultar las sesiones programadas |
| **Precondición** | El usuario tiene acceso al sistema y los datos necesarios de las sesiones |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El usuario selecciona el criterio de búsqueda (paciente, fecha, psicólogo, etc.) |
| | 2 | El sistema muestra la lista de sesiones que coinciden con el criterio seleccionado |
| **Postcondición** | La información de las sesiones es visualizada por el usuario |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1a | Si no se encuentran sesiones, el sistema muestra un mensaje de error |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de sesiones está disponible solo para usuarios autorizados |

---

### UC–07 - Cancelar Sesión

| UC–07  | Cancelar Sesión | |
|--------|------------------|----|
| **Objetivos asociados** | OBJ–02 Gestionar sesiones |
| **Requisitos asociados** | IRQ–02 Información sobre sesiones |
| **Descripción** | Permite cancelar una sesión programada |
| **Precondición** | El secretario tiene acceso al sistema y los datos necesarios de las sesiones |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario selecciona la sesión a cancelar |
| | 2 | El sistema solicita confirmación para cancelar la sesión |
| | 3 | El secretario confirma la cancelación |
| | 4 | El sistema cancela la sesión y confirma la cancelación |
| **Postcondición** | La sesión está cancelada en el sistema |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2a | Si el secretario no confirma la cancelación, la sesión no es cancelada |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 4 | 1 segundo |
| **Frecuencia** | 1 vez/día |
| **Estabilidad** | alta |
| **Comentarios** | Si la sesión es cancelada, el paciente es notificado y la sesión queda disponible para ser reprogramada |

---

### UC–08 - Consultar Agenda

| UC–08  | Consultar Agenda | |
|--------|------------------|----|
| **Objetivos asociados** | OBJ–02 Gestionar sesiones |
| **Requisitos asociados** | IRQ–02 Información sobre sesiones |
| **Descripción** | Permite consultar la agenda de sesiones |
| **Precondición** | El usuario tiene acceso al sistema y los datos necesarios de las sesiones |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El usuario selecciona el criterio de consulta (fecha, psicólogo, etc.) |
| | 2 | El sistema muestra la agenda de sesiones que coinciden con el criterio seleccionado |
| **Postcondición** | La información de la agenda es visualizada por el usuario |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 1a | Si no se encuentran sesiones, el sistema muestra un mensaje de error |
| **Rendimiento** | **Paso** | **Cota de tiempo** |
| | 2 | 1 segundo |
| **Frecuencia** | 10 veces/día |
| **Estabilidad** | alta |
| **Comentarios** | La consulta de la agenda está disponible solo para usuarios autorizados |

---

| UC–09  | Derivar Paciente | |
|--------|------------------|----|
| **Descripción** | Permite derivar un paciente a otro psicólogo |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente a derivar |
| | 2 | El psicólogo ingresa los detalles de la derivación (psicólogo receptor, descripción, etc.) |
| | 3 | El sistema valida los datos ingresados |
| | 4 | El sistema registra la derivación y confirma el registro |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3a | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |

| UC–10  | Consultar Historia Clínica | |
|--------|---------------------------|----|
| **Descripción** | Permite consultar la historia clínica de un paciente |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente |
| | 2 | El sistema muestra la historia clínica del paciente |

| UC–11  | Registrar Historia Clínica | |
|--------|---------------------------|----|
| **Descripción** | Permite registrar una nueva historia clínica para un paciente |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente |
| | 2 | El psicólogo ingresa los detalles de la historia clínica (cantidad de sesiones, descripción, etc.) |
| | 3 | El sistema valida los datos ingresados |
| | 4 | El sistema registra la historia clínica y confirma el registro |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3a | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |

| UC–12  | Modificar Informe de Sesión | |
|--------|---------------------------|----|
| **Descripción** | Permite modificar la información de un informe de sesión existente |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona el informe de sesión a modificar |
| | 2 | El sistema muestra los datos actuales del informe de sesión |
| | 3 | El psicólogo modifica los datos necesarios |
| | 4 | El sistema valida los nuevos datos |
| | 5 | El sistema actualiza la información del informe de sesión y confirma la modificación |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 4a | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |

| UC–13  | Consultar Informe de Sesión | |
|--------|---------------------------|----|
| **Descripción** | Permite consultar los informes de sesión de un paciente |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente |
| | 2 | El sistema muestra los informes de sesión del paciente |

| UC–14  | Registrar Informe de Sesión | |
|--------|---------------------------|----|
| **Descripción** | Permite registrar un nuevo informe de sesión para un paciente |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente |
| | 2 | El psicólogo ingresa los detalles del informe de sesión (fecha, hora, descripción, tipo de descripción, etc.) |
| | 3 | El sistema valida los datos ingresados |
| | 4 | El sistema registra el informe de sesión y confirma el registro |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3a | Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos |

| UC–15  | Generar informe de asistencia | |
|--------|----------------------------|----|
| **Descripción** | Permite generar un informe con la cantidad de asistencias del paciente a las sesiones |
| **Actor(es)** | Psicólogo |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El psicólogo selecciona al paciente |
| | 2 | El sistema lista todas las sesiones de ese paciente |
| | 3 | El psicólogo genera el informe de asistencia |
| | 4 | El sistema emite el informe y lo guarda en un historial de informes emitidos |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2a | Si el paciente no tiene ninguna sesión para listar, se termina el caso de uso |

| UC–16  | Enviar recordatorio de sesión al paciente | |
|--------|------------------------------------------|----|
| **Descripción** | El sistema envía un recordatorio al paciente sobre su sesión pendiente, unas horas antes de que suceda la misma, mediante WhatsApp |
| **Actor(es)** | Sistema |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El sistema verifica qué pacientes tienen una sesión en la fecha actual |
| | 2 | El sistema envía un recordatorio de la sesión pendiente a cada paciente mediante un mensaje de WhatsApp |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 2a | Si el paciente no tiene un número de teléfono cargado, se termina el caso de uso |

| UC–17  | Adelantar sesión de un paciente en caso de cancelación | |
|--------|-----------------------------------------------|----|
| **Descripción** | El sistema puede adelantar la sesión de un paciente, si este está de acuerdo, en caso de que otro paciente cancele su sesión con anticipación |
| **Actor(es)** | Sistema, Secretario y Paciente |
| **Flujo Principal** | **Paso** | **Acción** |
| | 1 | El secretario recibe una solicitud de cancelación de la sesión de un paciente, siendo proporcionado el DNI del paciente, la fecha y la hora de la sesión |
| | 2 | El sistema verifica que el paciente tenga una sesión en la fecha y hora proporcionadas para la cancelación, y cancela la sesión |
| | 3 | Posteriormente, el sistema verifica quién es el paciente más próximo cuya sesión sea más cercana, tanto en fecha como en hora, a la sesión cancelada y le envía un correo electrónico preguntándole si desea adelantar su sesión, solo si el paciente seleccionó durante el registro de la sesión que estaba dispuesto a ser notificado en cuanto surgiera la posibilidad de adelantar su sesión |
| | 4 | El paciente marca que sí en el correo electrónico |
| | 5 | El sistema modifica automáticamente la sesión del cliente para actualizar la nueva fecha y hora de la sesión |
| | 6 | El sistema envía otro correo electrónico al paciente para confirmarle que su sesión fue actualizada correctamente |
| | 7 | El sistema envía una notificación al secretario con el cambio de horario y/o fecha de la sesión del paciente |
| **Flujo Alternativo** | **Paso** | **Acción** |
| | 3a | Si no hay ningún paciente que desea cambiar la fecha y/o hora de su sesión, se termina el caso de uso |
| | 4a | Si el paciente no desea modificar su sesión, el sistema realizará el paso 3 nuevamente con la próxima persona de la lista |

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