CREATE DATABASE IF NOT EXISTS yeticave
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE yeticave;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_date_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_email VARCHAR(256) NOT NULL UNIQUE,
    user_name VARCHAR(128) NOT NULL,
    user_pass VARCHAR(128) NOT NULL,
    user_contact_info TEXT
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(128) NOT NULL,
    category_code VARCHAR(128) NOT NULL
);

CREATE TABLE lots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lot_date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    lot_name TEXT NOT NULL,
    lot_description TEXT NOT NULL,
    lot_img TEXT,
    lot_base_bid INT NOT NULL,
    lot_end_auction DATETIME, 
    lot_bid_min_step INT NOT NULL,

    lot_link_category INT,
    lot_link_owner INT,
    lot_link_vinner INT,

    FOREIGN KEY (lot_link_category) REFERENCES users(id),
    FOREIGN KEY (lot_link_owner) REFERENCES users(id),
    FOREIGN KEY (lot_link_vinner) REFERENCES categories(id)
);

CREATE TABLE bids (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bid_date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    bid_value INT NOT NULL,

    bid_link_author INT,
    bid_link_lot INT,

    FOREIGN KEY (bid_link_author) REFERENCES users(id),
    FOREIGN KEY (bid_link_lot) REFERENCES lots(id)
);