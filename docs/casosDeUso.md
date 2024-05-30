# Modelo

## Diagrama de Casos de Uso
![Diagrama de Casos de Uso](/docs/diagramaCasosDeUso.png)

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si el secretario no confirma la eliminación, el paciente no es eliminado.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si el secretario no confirma la cancelación, la sesión no es cancelada.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.

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
- Si los datos ingresados no son válidos, el sistema muestra un mensaje de error y permite corregirlos.


