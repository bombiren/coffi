CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    is_payment BOOLEAN,
    street VARCHAR(100),
    payment_type VARCHAR(30)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    price DECIMAL(10,2),
    weight INT,
    id_customers INT,
    FOREIGN KEY (id_customers) REFERENCES customers(id)
);

CREATE TABLE menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    street VARCHAR(100),
    id_orders INT,
    id_customers INT,
    state VARCHAR(30),
    FOREIGN KEY (id_orders) REFERENCES orders(id),
    FOREIGN KEY (id_customers) REFERENCES customers(id)
);
