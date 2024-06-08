# Modelo de Contenidos

## Diagrama de Clases
![Diagrama de Clases](/docs/diagramaClases.png)

# Descripción de Clases del Sistema

## Persona
**Atributos:**
- **NumeroDoc**: String[15] - Número de documento de la persona.
- **tipoDoc**: TipoDocumento - Tipo de documento (DNI, LC, LE, PASAPORTE).
- **nombre**: String - Nombre de la persona.
- **apellido**: String - Apellido de la persona.
- **telefono**: String[20] - Número de teléfono.
- **direccion**: String - Dirección de la persona.
- **sexo**: Sexo - Género de la persona (MASCULINO, FEMENINO, OTROS).
- **fechaDeNacimiento**: LocalDate - Fecha de nacimiento.
- **eliminado**: Boolean - Indica si la persona ha sido eliminada.

---
## Paciente
**Atributos:**
- **estadoCivil**: EstadoCivil - Estado civil del paciente (CASADO, SOLTERO, VIUDO, DIVORCIADO).
- **ocupacion**: String - Ocupación del paciente.

---

## Psicologo
**Atributos:**
- **especialidad**: Especialidad - Especialidad del psicólogo (Psicoanálisis, Psicoterapia).
---

## Secretario
**Atributos:**

---

## Derivacion
**Atributos:**
- **idDerivacion**: Integer - Identificador de la derivación.
- **psicologoResponsable**: String - Nombre del psicólogo responsable.
- **psicologo**: Psicologo - Referencia al psicólogo que realiza la derivación.
- **descripcion**: String - Descripción de la derivación.

---

## Sesion
**Atributos:**
- **nroSesion**: Integer - Número de la sesión.
- **fecha**: LocalDate - Fecha de la sesión.
- **hora**: LocalTime - Hora de la sesión.

---

## HistoriaClinica
**Atributos:**
- **idHistoriaClinica**: Integer - Identificador de la historia clínica.
- **cantSesiones**: Integer - Cantidad de sesiones.
- **descripcion**: String - Descripción de la historia clínica.

---

## InformeSesion
**Atributos:**
- **fecha**: LocalDate - Fecha del informe de la sesión.
- **hora**: LocalTime - Hora del informe de la sesión.
- **List<descripcion>**: String - Lista de descripciones.
- **tipoDeDescripcion**: TipoDeDescripcion - Tipo de descripción (Análisis, Notas, Conclusión).

---

## TipoDocumento
**Valores Posibles**:
- DNI
- LC
- LE
- PASAPORTE

---

## Sexo
**Valores Posibles**:
- MASCULINO
- FEMENINO
- OTROS

---

## EstadoCivil
**Valores Posibles**:
- CASADO
- SOLTERO
- VIUDO
- DIVORCIADO

---

## EstadoSesion
**Valores Posibles**:
- Realizada
- Pendiente
- Cancelado

---

## Especialidad
**Valores Posibles**:
- Psicoanálisis
- Psicoterapia

---

## TipoDeDescripcion
**Valores Posibles**:
- Análisis
- Notas
- Conclusión
