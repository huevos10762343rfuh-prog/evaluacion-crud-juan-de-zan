--[esquemas de la tabla de usuarios y de productos]

--[tabla de productos]
CREATE TABLE if NOT EXISTS productos (id INTEGER PRIMARY KEY, nombre TEXT, modelo TEXT, año INTEGER, precio INTEGER, descripcion TEXT, img TEXT);
INSERT INTO productos (id, nombre, modelo, año, precio, descripcion, img) VALUES ('1','ford','falcon','1970','2900','el falcon', '')
--[este codigo representa la creacion de las tablas ]
CREATE TABLE if NOT EXISTS usuarios (id INTEGER PRIMARY KEY, nombre TEXT, email TEXT, contraseña TEXT, rango booleano --[no me acuerdo como es el booleano en sql]);
INSERT INTO productos (id, nombre, modelo, año, precio, descripcion, img) VALUES ('','','','','', '')
--[este codigo representa la creacion de las tablas ]