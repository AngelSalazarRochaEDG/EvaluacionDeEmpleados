create database if not exists EDGroup;

create table if not exists Empleado (
    Emp_Clave varchar(10) not null,
	Emp_Nombre varchar(50),
    Emp_Departamento varchar(30),
    Emp_Puesto varchar(25),
    Emp_Supervisor varchar(50),
    Emp_Fecha_Contratacion date,

    constraint `pk_empleado` primary key(Emp_Clave)
);

create table if not exists Evaluacion (
    Id_Evaluacion int AUTO_INCREMENT,
    Fecha_Evaluacion date,
    Comentario_Empleado varchar(250),
    Comentario_Supervisor varchar(250),
    Meta_Proxima varchar(200),
    Desempenio_General char(1),
    Emp_Clave varchar(10),

    constraint `pk_evaluacion` primary key (Id_Evaluacion),
    constraint `fk_empleado` foreign key (Emp_Clave) REFERENCES Empleado (Emp_Clave) ON DELETE NO ACTION ON UPDATE NO ACTION
);

create table if not exists Habilidades (
	Habilidad char(1),
    Promedio int,
    Comentario_x_Habilidad varchar(250),
    Id_Evaluacion int not null,

    CONSTRAINT `pk_habilidades` primary key (Habilidad),
    CONSTRAINT `fk_Evaluacion` foreign key (Id_Evaluacion) references Evaluacion (Id_Evaluacion)
);

create table if not exists Preguntas (
    Habilidad varchar(1) not null,
    Inciso varchar(2) not null,
    Respuesta char(1),
    Comentario_x_Pregunta varchar(250),

    CONSTRAINT `fk_habilidad_pregunta` foreign key (Habilidad) references Habilidades (Habilidad),
    CONSTRAINT `pk_inciso` primary key (Habilidad, Inciso)
);

/*
CREATE TABLE `alumno` (
    `Matricula` varchar(15) COLLATE latin1_bin NOT NULL,
    `Id_Grupo` int(11) NOT NULL,
    `Dia` varchar(15) COLLATE latin1_bin NOT NULL,

    CONSTRAINT `Id_Grupo_Fk` FOREIGN KEY (`Id_Grupo`,`Dia`) REFERENCES `detallehorario` (`Id_Grupo`,`Dia`) ON DELETE NO ACTION ON UPDATE NO ACTION
)   ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
*/
