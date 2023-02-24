create database if not exists EDGroup;
use edgroup;

create table if not exists Evaluacion (
    id_evaluacion int AUTO_INCREMENT,
    fecha_evaluacion datetime DEFAULT current_timestamp,
    comentario_empleado varchar(250),
    comentario_supervisor varchar(250),
    meta_proxima varchar(200),
    desempenio char(1),
    emp_clave varchar(10),

    constraint `pk_evaluacion` primary key (id_evaluacion),
    constraint `fk_empleado` foreign key (emp_clave) REFERENCES Empleado (emp_clave) ON DELETE NO ACTION ON UPDATE NO ACTION
);

create table if not exists Respuesta (
    id int AUTO_INCREMENT,
    numero char(1) not null,
    inciso char(1) not null,
    id_evaluacion int,
    puntuacion char(1),
    comentario varchar(250),

    CONSTRAINT `chk_puntuacion` CHECK (puntuacion >= 0 and puntuacion <= 3),
    CONSTRAINT `pk_respuesta` primary key (id,numero,inciso),
    constraint `fk_evaluacion` foreign key (id_evaluacion) references evaluacion (id_evaluacion)
);

create table if not exists users
(
    id int(11) AUTO_INCREMENT,
    email varchar(100) not null,
    `password` varchar(255) not null,
    ip varchar(20),
    created_at datetime,
    updated_at datetime,
    validated varchar(5),
    token varchar(255),
    fname varchar(15),

    constraint `pk_user` primary key (id)
);

create table if not exists Empleado (
    clave varchar(10) not null,
    departamento varchar(30),
    puesto varchar(25),
    supervisor varchar(50),
    fecha_contratacion date,

    constraint `fk_employee_users` foreign key(Clave) references users (id)
);

delimiter //
CREATE TRIGGER newEmployee AFTER INSERT ON USERS
FOR EACH ROW
BEGIN
    INSERT INTO Empleado set clave = NEW.id;
END // 
delimiter ;