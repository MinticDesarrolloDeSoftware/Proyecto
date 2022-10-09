Este proyecto se desarrollo mediante el paquete de Software Xampp, 
se uso para gestionar las bases de datos que se requirio para desarrollar el proyecto.
 


A continuacion se adjunta el nombre de la base de datos 
login_register_db -----> Nombre Base de datos 

usuarios --------> Nombre Tabla

a continuacion se adjuntara las consultas usadas para simular usuarios ya creados para hacer uso de la aplicacion

create table usuarios (
	ID INT AUTOINCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL, 
	edad INT NOT NULL,
	direccion VARCHAR(50) NOT NULL,
	genero VARCHAR(50) NOT NULL,
	signo VARCHAR(50) NOT NULL,
	usuario VARCHAR(50) NOT NULL,
	contrasena VARCHAR(50) NOT NULL,
	correo VARCHAR(50) NOT NULL,
	PRIMARY KEY("ID")
);

insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (1, 'Antons', 'Penhaleurack', 20, '60924 Susan Park', 'Male', 'Libra', 'apenhaleurack0', 'VL8wbLLngYov', 'apenhaleurack0@pen.io');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (2, 'Lari', 'Eicheler', 21, '731 Monterey Point', 'Female', 'Leo', 'leicheler1', 'oGV9y2', 'leicheler1@ameblo.jp');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (3, 'Elsi', 'Trevethan', 26, '0 Swallow Parkway', 'Female', 'Virgo', 'etrevethan2', '6yzXIdtgbE', 'etrevethan2@hostgator.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (4, 'Yolanda', 'Adenot', 30, '9 Clarendon Circle', 'Female', 'Aries', 'yadenot3', 'B3zOlHa6', 'yadenot3@etsy.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (5, 'Harli', 'Maliffe', 25, '1 West Circle', 'Female', 'Acuario', 'hmaliffe4', 'oA5UM0dfEN', 'hmaliffe4@mlb.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (6, 'Delinda', 'Behne', 18, '59 Gulseth Parkway', 'Female', 'Capricornio', 'dbehne5', 'E7GID6QKBoo', 'dbehne5@ca.gov');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (7, 'Matthus', 'Cowl', 18, '84400 Melby Plaza', 'Male', 'Escorpio', 'mcowl6', 'uqU8tGinQkX', 'mcowl6@go.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (8, 'Eba', 'Windmill', 20, '541 Kingsford Junction', 'Female', 'Sagitario', 'ewindmill7', '5IlbRfPW', 'ewindmill7@blogs.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (9, 'Lucina', 'Pattie', 28, '21144 Lotheville Park', 'Female', 'Leo', 'lpattie8', 'CdhBhp', 'lpattie8@harvard.edu');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (10, 'Devlin', 'Churchard', 21, '8 Sunbrook Lane', 'Male', 'Piscis', 'dchurchard9', 'o3DSU3lZA', 'dchurchard9@histats.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (11, 'Ebba', 'Manclark', 20, '36526 Tennyson Terrace', 'Female', 'Piscis', 'emanclarka', 'LeAylLdo', 'emanclarka@go.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (12, 'Walther', 'Beves', 30, '8 Vahlen Road', 'Male', 'Acuario', 'wbevesb', 'easLe3', 'wbevesb@google.ca');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (13, 'Georgeanna', 'Morville', 25, '8791 1st Avenue', 'Female', 'Geminis', 'gmorvillec', 'bkTvhg2H', 'gmorvillec@canalblog.com');
insert into usuarios(id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (14, 'Paquito', 'Earry', 21, '2001 Shelley Drive', 'Male', 'Virgo', 'pearryd', 'DLH1xearea', 'pearryd@narod.ru');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (15, 'Dorice', 'Bear', 25, '335 Golf View Circle', 'Female', 'Aries', 'dbeare', 'y0O43ogmBOwc', 'dbeare@bloomberg.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (16, 'Juliann', 'Rhoades', 21, '34 Esch Point', 'Female', 'Virgo', 'jrhoadesf', 'uhnY3EF9', 'jrhoadesf@kickstarter.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (17, 'Bastian', 'Fancy', 20, '7 Briar Crest Pass', 'Male', 'Cancer', 'bfancyg', 'g4ARnZ', 'bfancyg@economist.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (18, 'Karel', 'Esmead', 20, '91288 Packers Trail', 'Male', 'Leo', 'kesmeadh', '1mxUxbRU', 'kesmeadh@printfriendly.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (19, 'Gianna', 'Trask', 18, '555 Straubel Alley', 'Female', 'Tauro', 'gtraski', 'eE3LW70Z59x', 'gtraski@gov.uk');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (20, 'Cornelius', 'Cuseck', 22, '089 Sundown Terrace', 'Male', 'Geminis', 'ccuseckj', 'Pe3ppXrF88aY', 'ccuseckj@whitehouse.gov');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (21, 'Tessie', 'Rapsey', 23, '31083 Melby Point', 'Female', 'Tauro', 'trapseyk', '4B9uTNGaRuB', 'trapseyk@fda.gov');
insert into usuarios  (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (22, 'Elysia', 'Skupinski', 18, '7 North Parkway', 'Female', 'Libra', 'eskupinskil', 'PzVWtCUOV4xr', 'eskupinskil@samsung.com');
insert into usuarios  (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (23, 'Linda', 'Tolland', 24, '62 Golden Leaf Center', 'Female', 'Virgo', 'ltollandm', 'xVvyDAcVh', 'ltollandm@about.me');
insert into usuarios  (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (24, 'Ninette', 'Jenicek', 30, '206 Hoffman Circle', 'Female', 'Virgo', 'njenicekn', 'vjExH4c', 'njenicekn@fastcompany.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (25, 'Beniamino', 'Hubble', 23, '0559 Mariners Cove Circle', 'Male', 'Piscis', 'bhubbleo', 'eOWyybq', 'bhubbleo@gov.uk');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (26, 'Marilee', 'Jaggers', 24, '548 Eastwood Place', 'Female', 'Acuario', 'mjaggersp', 'HWNrGSPT', 'mjaggersp@miitbeian.gov.cn');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (27, 'Aland', 'Eslemont', 22, '9 Truax Junction', 'Male', 'Libra', 'aeslemontq', 'b6l8l9m7', 'aeslemontq@goodreads.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (28, 'Minne', 'Fomichyov', 29, '0593 Sunnyside Point', 'Female', 'Virgo', 'mfomichyovr', '9Rdf7I', 'mfomichyovr@engadget.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (29, 'Alecia', 'Brice', 23, '507 Randy Way', 'Female', 'Sagitario', 'abrices', 'VfNV36N', 'abrices@indiegogo.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (30, 'Palmer', 'Pietruszka', 19, '3 Lukken Lane', 'Male', 'Cancer', 'ppietruszkat', '1744h1WQ4dR', 'ppietruszkat@facebook.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (31, 'Orran', 'Brounsell', 22, '382 Mayer Center', 'Male', 'Piscis', 'obrounsellu', 'BrIyfMb', 'obrounsellu@shop-pro.jp');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (32, 'Jillana', 'Lorans', 26, '3 Talisman Pass', 'Female', 'Piscis', 'jlorans18', '32yNBhqGU', 'jlorans18@disqus.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (33, 'Haskell', 'Henriques', 20, '6332 Pepper Wood Place', 'Male', 'Cancer', 'hhenriques19', 'L9IESgIhwrb', 'hhenriques19@mtv.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (34, 'Chery', 'Kaines', 20, '76 South Drive', 'Female', 'Geminis', 'ckaines1h', '7xc9C4GJ3', 'ckaines1h@msu.edu');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (35, 'Cissy', 'Medina', 30, '15190 Fairfield Point', 'Female', 'Acuario', 'cmedina1c', 'FbrZXpcwG', 'cmedina1c@about.com');
insert into usuarios (id, nombre, apellido, edad, direccion, genero, signo, usuario, contrasena, correo) values (36, 'Donia', 'Sanderson', 27, '268 Spaight Pass', 'Female', 'Tauro', 'dsanderson1w', '3iHUOdW32', 'dsanderson1w@mlb.com');






