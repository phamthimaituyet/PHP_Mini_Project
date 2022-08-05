create table users (
    id int auto_increment NOT NULL primary key,
    name VARCHAR(255) NOT NULL UNIQUE,
    password varchar(15) not null
);

CREATE TABLE Notes (
    id int AUTO_INCREMENT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL,
    user_id int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);