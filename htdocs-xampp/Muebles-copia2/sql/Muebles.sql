-- tables
-- Table: orders

-- $sqlSelect=$conn->query("SELECT MAX(id_usuario) FROM usuario_admin");
-- $result = $sqlSelect->fetchColumn();
-- $function = $result + 1;
CREATE TABLE orders (
    id_order int NOT NULL,
    order_number int NOT NULL,
    furniture_description varchar(250) NOT NULL,
    shipping_price double NOT NULL,
    shipping_cost double NOT NULL,
    admin_id_admin int NOT NULL,
    CONSTRAINT orders_pk PRIMARY KEY (id_order)
);

-- Table: sale_products
CREATE TABLE sale_products (
    id_sale_product int NOT NULL,
    image_sale_product longblob NOT NULL,
    description_sale_product varchar(250) NOT NULL,
    quantity_in_stock int NOT NULL,
    unit_price double NOT NULL,
    admin_id_admin int NOT NULL,
    CONSTRAINT sale_products_pk PRIMARY KEY (id_sale_product)
);

-- Table: admin
CREATE TABLE admin_user (
    id_admin int NOT NULL,
    usuario varchar(250) NOT NULL,
    contrasenia varchar(300) NOT NULL,
    CONSTRAINT admin_pk PRIMARY KEY (id_admin)
);

-- foreign keys
-- Reference: orders_admin (table: orders)
ALTER TABLE orders ADD CONSTRAINT orders_admin FOREIGN KEY orders_admin (admin_id_admin)
    REFERENCES admin_user (id_admin);

-- Reference: sale_products_admin (table: sale_products)
ALTER TABLE sale_products ADD CONSTRAINT sale_products_admin FOREIGN KEY sale_products_admin (admin_id_admin)
    REFERENCES admin_user (id_admin);


-- End of file.

