CREATE DATABASE dugoshop_db;

CREATE TABLE PreOrderUser (
    email VARCHAR(255) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    shirtSize VARCHAR(1) NOT NULL DEFAULT 'M',
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT PK_PreOrderUser PRIMARY KEY (email)
);

INSERT INTO PreOrderUser (email, firstName, lastName, shirtSize)
VALUES ('danilo.dughetti@gmail.com', 'Danilo', 'Dughetti', 'L');