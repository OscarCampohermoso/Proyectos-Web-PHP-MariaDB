
-- Table: celular_info
CREATE TABLE celular_info (
    id_celular serial NOT NULL,
    imagen longblob NOT NULL,
    nombre varchar(250) NOT NULL,
    marca varchar(250) NOT NULL,
    precio varchar(250) NOT NULL,
    CONSTRAINT celular_pk PRIMARY KEY (id_celular)
);



