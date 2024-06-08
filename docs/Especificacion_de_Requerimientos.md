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
## Diagrama de Caso de Uso del Subsistema Gestión de Socios
### Definición de Actores:
| ACT–01  | Secretaria             |
|---------|-------------------|
| **Descripción** | Este actor representa a la secretaria del consultorio |
| **Comentarios** | La secretaria es la responsable de realizar la gestion de pacientes y de sesiones |


