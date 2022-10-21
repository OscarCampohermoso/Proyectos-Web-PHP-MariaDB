-- tables
-- Table: administrador
CREATE TABLE administrador (
                               id_administrador int NOT NULL,
                               usuario_administrador varchar(300) NOT NULL,
                               password_administrador varchar(300) NOT NULL,
                               CONSTRAINT administrador_pk PRIMARY KEY (id_administrador)
);

-- Table: casa
CREATE TABLE casa (
                      id_casa int NOT NULL,
                      image_casa longblob NOT NULL,
                      precio_casa double NOT NULL,
                      descripcion_casa varchar(300) NOT NULL,
                      ubicacion_casa varchar(300) NOT NULL,
                      administrador_id_administrador int NOT NULL,
                      CONSTRAINT casa_pk PRIMARY KEY (id_casa)
);

-- Table: cliente
CREATE TABLE cliente (
                         id_cliente int NOT NULL,
                         usuario_cliente int NOT NULL,
                         password_cliente int NOT NULL,
                         CONSTRAINT cliente_pk PRIMARY KEY (id_cliente)
);

-- Table: departamento
CREATE TABLE departamento (
                              id_departamento int NOT NULL,
                              image_departamento longblob NOT NULL,
                              precio_departamento double NOT NULL,
                              descripcion_departamento varchar(300) NOT NULL,
                              ubicacion_departamento varchar(300) NOT NULL,
                              administrador_id_administrador int NOT NULL,
                              CONSTRAINT departamento_pk PRIMARY KEY (id_departamento)
);

-- Table: pedido
CREATE TABLE pedido (
                        id_pedido int NOT NULL,
                        descripcion_pedido varchar(300) NOT NULL,
                        fecha_pedido varchar(300) NOT NULL,
                        cliente_id_cliente int NOT NULL,
                        administrador_id_administrador int NOT NULL,
                        CONSTRAINT pedido_pk PRIMARY KEY (id_pedido)
);

-- foreign keys
-- Reference: casa_administrador (table: casa)
ALTER TABLE casa ADD CONSTRAINT casa_administrador FOREIGN KEY casa_administrador (administrador_id_administrador)
    REFERENCES administrador (id_administrador);

-- Reference: departamento_administrador (table: departamento)
ALTER TABLE departamento ADD CONSTRAINT departamento_administrador FOREIGN KEY departamento_administrador (administrador_id_administrador)
    REFERENCES administrador (id_administrador);

-- Reference: pedido_administrador (table: pedido)
ALTER TABLE pedido ADD CONSTRAINT pedido_administrador FOREIGN KEY pedido_administrador (administrador_id_administrador)
    REFERENCES administrador (id_administrador);

-- Reference: pedido_cliente (table: pedido)
ALTER TABLE pedido ADD CONSTRAINT pedido_cliente FOREIGN KEY pedido_cliente (cliente_id_cliente)
    REFERENCES cliente (id_cliente);

-- End of file.

