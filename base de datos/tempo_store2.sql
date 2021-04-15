CREATE DATABASE tempo_store2;

CREATE TABLE producto(    
    pro_id numeric not null,
    pro_nombre varchar(22) not null,
    pro_descripcion varchar(55) not null,
    pro_unidades numeric not null,
    pro_precio double not null,
    PRIMARY key (pro_id));

INSERT INTO producto VALUES (1,'camisa','camisa polo negra',10,120000);
INSERT INTO producto VALUES (2,'jeans','jeans rotos fravinci',5,100000);
INSERT INTO producto VALUES (3,'zapatos','zapatos negros air jordan 1',10,220000);
INSERT INTO producto VALUES (4,'gafas','gafas de sol con marco negro',3,20000);