# Casos de Uso Extendidos

## UC- 01 - Registrar Paciente
**Descripción**: Permite registrar un nuevo paciente en el sistema.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario ingresa los datos del paciente (nombre, apellido, documento, dirección, teléfono, etc.).
2. El sistema valida los datos ingresados.
3. El sistema registra al paciente y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 02 - Modificar Paciente
**Descripción**: Permite modificar la información de un paciente existente.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario selecciona al paciente a modificar.
2. El sistema muestra los datos actuales del paciente.
3. El secretario modifica los datos necesarios.
4. El sistema valida los nuevos datos.
5. El sistema actualiza la información del paciente y confirma la modificación.

**Flujos Alternativos**:
- 5a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 03 -  Eliminar Paciente
**Descripción**: Permite dar de baja logicamente a un paciente del sistema.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario selecciona al paciente a eliminar.
2. El sistema solicita confirmación para eliminar al paciente.
3. El secretario confirma la eliminación.
4. El sistema elimina al paciente y confirma la eliminación.

**Flujos Alternativos**:
- 2a. Si el secretario no confirma la eliminación, el paciente no es eliminado.

---

## UC- 04 - Consultar Paciente
**Descripción**: Permite consultar la información de un paciente.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona al paciente a consultar.
2. El sistema muestra la información detallada del paciente.

---

## UC- 05 - Registrar Sesión
**Descripción**: Permite registrar una nueva sesión para un paciente.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario selecciona al paciente.
2. El secretario ingresa los detalles de la sesión (fecha, hora, psicólogo, etc.).
3. El sistema valida los datos ingresados.
4. El sistema registra la sesión y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 06 - Consultar Sesión
**Descripción**: Permite consultar las sesiones programadas.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona el criterio de búsqueda (paciente, fecha, psicólogo, etc.).
2. El sistema muestra la lista de sesiones que coinciden con el criterio seleccionado.

---

## UC- 07 - Cancelar Sesión
**Descripción**: Permite cancelar una sesión programada.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario selecciona la sesión a cancelar.
2. El sistema solicita confirmación para cancelar la sesión.
3. El secretario confirma la cancelación.
4. El sistema cancela la sesión y confirma la cancelación.

**Flujos Alternativos**:
- 2a. Si el secretario no confirma la cancelación, la sesión no es cancelada.

---

## UC- 08 - Consultar Agenda
**Descripción**: Permite consultar la agenda de sesiones.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona el criterio de consulta (fecha, psicólogo, etc.).
2. El sistema muestra la agenda de sesiones que coinciden con el criterio seleccionado.

---

## UC- 09 - Derivar Paciente
**Descripción**: Permite derivar un paciente a otro psicólogo.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente a derivar.
2. El psicólogo ingresa los detalles de la derivación (psicólogo receptor, descripción, etc.).
3. El sistema valida los datos ingresados.
4. El sistema registra la derivación y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---
## UC- 10 - Consultar Historia Clínica
**Descripción**: Permite consultar la historia clínica de un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El sistema muestra la historia clínica del paciente.

---

## UC- 11 - Registrar Historia Clínica
**Descripción**: Permite registrar una nueva historia clínica para un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El psicólogo ingresa los detalles de la historia clínica (cantidad de sesiones, descripción, etc.).
3. El sistema valida los datos ingresados.
4. El sistema registra la historia clínica y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 12 - Modificar Informe de Sesión
**Descripción**: Permite modificar la información de un informe de sesión existente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona el informe de sesión a modificar.
2. El sistema muestra los datos actuales del informe de sesión.
3. El psicólogo modifica los datos necesarios.
4. El sistema valida los nuevos datos.
5. El sistema actualiza la información del informe de sesión y confirma la modificación.

**Flujos Alternativos**:
- 4a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 13 - Consultar Informe de Sesión
**Descripción**: Permite consultar los informes de sesión de un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El sistema muestra los informes de sesión del paciente.

---

## UC- 14 - Registrar Informe de Sesión
**Descripción**: Permite registrar un nuevo informe de sesión para un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El psicólogo ingresa los detalles del informe de sesión (fecha, hora, descripción, tipo de descripción, etc.).
3. El sistema valida los datos ingresados.
4. El sistema registra el informe de sesión y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## UC- 15 - Generar informe de asistencia
**Descripción**: Permite generar un informe con la cantidad de asistencias del paciente a las sesiones.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El sistema lista todas las sesiones de ese paciente.
3. El psicólogo genera el informe de asistencia.
4. El sistema emite el informe y lo guarda en un historial de informes emitidos.

**Flujos Alternativos**:
- 2a. Si el paciente no tiene ninguna sesión para listar, se termina el caso de uso.

---

## UC- 16 - Enviar recordatorio de sesión al paciente
**Descripción**: El sistema envía un recordatorio al paciente sobre su sesión pendiente, unas horas antes de que suceda la misma, mediante WhatsApp.
**Actor(es)**: Sistema
**Flujo Principal**:
1. El sistema verifica qué pacientes tienen una sesión en la fecha actual.
2. El sistema envía un recordatorio de la sesión pendiente a cada paciente mediante un mensaje de WhatsApp.

**Flujos Alternativos**:
- 2a. Si el paciente no tiene un número de teléfono cargado, se termina el caso de uso.

---

## UC- 17 - Adelantar sesión de un paciente en caso de cancelación
**Descripción**: El sistema puede adelantar la sesión de un paciente, si este está de acuerdo, en caso de que otro paciente cancele su sesión con anticipación.
**Actor(es)**: Sistema, Secretario y Paciente
**Flujo Principal**:
1. El secretario recibe una solicitud de cancelación de la sesión de un paciente, siendo proporcionado el DNI del paciente, la fecha y la hora de la sesión.
2. El sistema verifica que el paciente tenga una sesión en la fecha y hora proporcionadas para la cancelación, y cancela la sesión.
3. Posteriormente, el sistema verifica quién es el paciente más próximo cuya sesión sea más cercana, tanto en fecha como en hora, a la sesión cancelada y le envía un correo electrónico preguntándole si desea adelantar su sesión, solo si el paciente seleccionó durante el registro de la sesión que estaba dispuesto a ser notificado en cuanto surgiera la posibilidad de adelantar su sesión.
4. El paciente marca que sí en el correo electrónico.
5. El sistema modifica automáticamente la sesión del cliente para actualizar la nueva fecha y hora de la sesión.
6. El sistema envía otro correo electrónico al paciente para confirmarle que su sesión fue actualizada correctamente.
7. El sistema envía una notificación al secretario con el cambio de horario y/o fecha de la sesión del paciente.

**Flujos Alternativos**:
- 3a. Si no hay ningún paciente que desea cambiar la fecha y/o hora de su sesión, se termina el caso de uso.
- 4a. Si el paciente no desea modificar su sesión, el sistema realizará el paso 3 nuevamente con la próxima persona de la lista.
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