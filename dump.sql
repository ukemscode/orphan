-- execute this query before you start your project

CREATE DATABASE orphan

USE orphan

CREATE TABLE child (  
                        name VARCHAR(20),
                        gender VARCHAR(10),
                        filename VARCHAR(200),
                        status VARCHAR(20),
                        age int
                        funding INT
            );

create table admin(     
                        email varchar(30) unique not null, 
                        password varchar(100)
            );

            