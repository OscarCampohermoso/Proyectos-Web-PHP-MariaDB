-- tables
-- Table: medicamento
CREATE TABLE medicamento (
    id_medicamento serial NOT NULL,
    cod_medicamento varchar(250) NOT NULL,
    nombre_medicamento varchar(250) NOT NULL,
    tipo_medicamento varchar(250) NOT NULL,
    empresa varchar(250) NOT NULL,
    fecha_eleboracion date NOT NULL,
    fecha_registro date NOT NULL,
    tipo_de_envase varchar(250) NOT NULL,
    usuario_id_usuario int(50) NOT NULL,
    CONSTRAINT medicamento_pk PRIMARY KEY (id_medicamento)
);

-- Table: usuario
CREATE TABLE usuario_admin (
    id_usuario int(50) NOT NULL,
    usuario varchar(250) NOT NULL,
    contrasenia varchar(250) NOT NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (id_usuario)
);

-- foreign keys
-- Reference: producto_usuario (table: medicamento)
ALTER TABLE medicamento ADD CONSTRAINT medicamento_usuario FOREIGN KEY medicamento_usuario (usuario_id_usuario)
    REFERENCES usuario (id_usuario);

--trigger for auto-incremente 

DELIMITER $$
CREATE FUNCTION autoInc()
    RETURNS INT(10)
    BEGIN
        DECLARE getCount INT(50);

        SET getCount = (
            SELECT COUNT(id_usuario)
            FROM tests) + 1;

        RETURN getCount;
    END$$
DELIMITER;

/*Examples for insert values
INSERT INTO tests (test_num, test_name) VALUES (autoInc(), 'one');
INSERT INTO tests (test_num, test_name) VALUES (autoInc(), 'two');
INSERT INTO tests (test_num, test_name) VALUES (autoInc(), 'three');*/