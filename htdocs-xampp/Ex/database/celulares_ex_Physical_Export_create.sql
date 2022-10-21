-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2022-09-08 14:42:13.353

-- tables
-- Table: admin_user
CREATE TABLE admin_user (
    id_user int NOT NULL,
    usuario varchar(250) NOT NULL,
    contrasenia varchar(300) NOT NULL,
    CONSTRAINT admin_user_pk PRIMARY KEY (id_user)
);

-- Table: celular
CREATE TABLE celular (
    id_celular serial NOT NULL,
    image longblob NOT NULL,
    nombre varchar(250) NOT NULL,
    marca varchar(250) NOT NULL,
    precio varchar(250) NOT NULL,
    admin_user_id_user int NOT NULL,
    CONSTRAINT celular_pk PRIMARY KEY (id_celular)
);

-- foreign keys
-- Reference: celular_admin_user (table: celular)
ALTER TABLE celular ADD CONSTRAINT celular_admin_user FOREIGN KEY celular_admin_user (admin_user_id_user)
    REFERENCES admin_user (id_user);

-- End of file.

