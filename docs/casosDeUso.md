## Diagrama de Casos de Uso
![Diagrama de Casos de Uso](/proyectoDisenoWeb/docs/diagramaCasosDeUso.png)

---

# Casos de Uso Extendidos

## Registrar Paciente
**Descripción**: Permite registrar un nuevo paciente en el sistema.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario ingresa los datos del paciente (nombre, apellido, documento, dirección, teléfono, etc.).
2. El sistema valida los datos ingresados.
3. El sistema registra al paciente y confirma el registro.

**Flujos Alternativos**:
- 3a. Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

---

## Modificar Paciente
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

## Eliminar Paciente
**Descripción**: Permite eliminar un paciente del sistema.
**Actor(es)**: Secretario
**Flujo Principal**:
1. El secretario selecciona al paciente a eliminar.
2. El sistema solicita confirmación para eliminar al paciente.
3. El secretario confirma la eliminación.
4. El sistema elimina al paciente y confirma la eliminación.

**Flujos Alternativos**:
- 2a. Si el secretario no confirma la eliminación, el paciente no es eliminado.

---

## Consultar Paciente
**Descripción**: Permite consultar la información de un paciente.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona al paciente a consultar.
2. El sistema muestra la información detallada del paciente.

---

## Registrar Sesión
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

## Consultar Sesión
**Descripción**: Permite consultar las sesiones programadas.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona el criterio de búsqueda (paciente, fecha, psicólogo, etc.).
2. El sistema muestra la lista de sesiones que coinciden con el criterio seleccionado.

---

## Cancelar Sesión
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

## Consultar Agenda
**Descripción**: Permite consultar la agenda de sesiones.
**Actor(es)**: Secretario, Psicólogo
**Flujo Principal**:
1. El usuario selecciona el criterio de consulta (fecha, psicólogo, etc.).
2. El sistema muestra la agenda de sesiones que coinciden con el criterio seleccionado.

---

## Derivar Paciente
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
## Consultar Historia Clínica
**Descripción**: Permite consultar la historia clínica de un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El sistema muestra la historia clínica del paciente.

---

## Registrar Historia Clínica
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

## Modificar Informe de Sesión
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

## Consultar Informe de Sesión
**Descripción**: Permite consultar los informes de sesión de un paciente.
**Actor(es)**: Psicólogo
**Flujo Principal**:
1. El psicólogo selecciona al paciente.
2. El sistema muestra los informes de sesión del paciente.

---

## Registrar Informe de Sesión
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

## Generar informe de asistencia
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

## Enviar recordatorio de sesión al paciente
**Descripción**: El sistema envía un recordatorio al paciente sobre su sesión pendiente, unas horas antes de que suceda la misma, mediante WhatsApp.
**Actor(es)**: Sistema
**Flujo Principal**:
1. El sistema verifica qué pacientes tienen una sesión en la fecha actual.
2. El sistema envía un recordatorio de la sesión pendiente a cada paciente mediante un mensaje de WhatsApp.

**Flujos Alternativos**:
- 2a. Si el paciente no tiene un número de teléfono cargado, se termina el caso de uso.

---

## Adelantar sesión de un paciente en caso de cancelación
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