CREATE DATABASE manjares;
USE manjares;

-- Tabla de Proveedores
CREATE TABLE Proveedores (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Direccion VARCHAR(255),
    RTN VARCHAR(20) UNIQUE,
    Ciudad VARCHAR(255)
);

INSERT INTO Proveedores(id, Nombre, Direccion, RTN, Ciudad)
VALUES (1,"Dimasa", "Bo el centro", "0001","Tegucigalpa")
,(2,"Maseca", "1ra calle, 2da avenida", "0010","San Pedro Sula")
, (3,"La Mundial", "Bo el centro", "0011","Tegucigalpa")
,(4,"CAMOSA", "Bo el centro", "0100","San Pedro Sula")
,(5,"La Blanquita", "Bo el centro", "0101","San Pedro Sula");


-- Tabla de Telefonos
CREATE TABLE Telefonos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ProveedorID INT,
    NumeroTelefono VARCHAR(20) UNIQUE,
    FOREIGN KEY (ProveedorID) REFERENCES Proveedores(id)
);

INSERT INTO Telefonos(ProveedorID, NumeroTelefono)
VALUES (1,"944368"),
(2,"573523"),
(3,"970925"),
(4,"300119"),
(5,"687301"),
(5,"690494");


-- Tabla de Productos
CREATE TABLE Productos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NombreProducto VARCHAR(255),
    UbicacionBodega VARCHAR(255),
    CantidadExistencia INT,
    PrecioCosto DECIMAL(10, 2),
    PrecioVenta DECIMAL(10, 2)
);

INSERT INTO Productos(ID,NombreProducto,UbicacionBodega,CantidadExistencia,PrecioCosto,PrecioVenta)
VALUES (1,"Tomates","A01",100,10.5,15),
(2,"Arroz","A15",100,10.5,15),
(3,"Leche","A98",100,10.5,15),
(4,"Papas","B01",100,10.5,15),
(5,"Cebolla","B10",100,10.5,15),
(6,"Azucar","B10",100,10.5,15);


-- Tabla intermedia para relacionar Proveedores y Productos
CREATE TABLE ProveedoresProductos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ProveedorID INT,
    ProductoID INT,
    FOREIGN KEY (ProveedorID) REFERENCES Proveedores(ID),
    FOREIGN KEY (ProductoID) REFERENCES Productos(ID)
);

INSERT INTO ProveedoresProductos(ProveedorID,ProductoID)
VALUES (1,1),(2,2),(3,3),(4,4),(4,5),(5,6);



-- Tabla de Acompañantes
CREATE TABLE Acompanantes (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Precio DECIMAL(10, 2)
);

INSERT INTO Acompanantes(ID, Nombre, Precio)
VALUES (1, "puré",10.50),
(2, "Arroz Blanco",16.50),
(3, "Yuca Frita",20.00),
(4, "Tortillas fritas",1.50),
(5, "Frijoles Salteados",8.75),
(6, "Bolognesa",6.32);



-- Tabla de Relación entre Productos y Acompañantes
CREATE TABLE ProductosAcompanantes (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ProductoID INT,
    AcompananteID INT,
    CantidadUtilizada INT,
    FOREIGN KEY (ProductoID) REFERENCES Productos(ID),
    FOREIGN KEY (AcompananteID) REFERENCES Acompanantes(ID)
);

INSERT INTO ProductosAcompanantes(ProductoID, AcompananteID, CantidadUtilizada)
VALUES (1, 1,4),(2, 1,5),(2, 2,3),(3, 6,3),(3, 4,1),(3, 5,2),(4, 3,2),(6, 1,6),(5, 1,3),(5, 6,2);



-- Tabla de Platos
CREATE TABLE Platos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Precio DECIMAL(10, 2),
    FechaModificacion DATETIME,
    FechaCreacion DATETIME
);

INSERT INTO Platos(ID, Nombre, Precio, FechaModificacion, FechaCreacion)
VALUES (1,"Especial",100.00,"2023-01-01","2023-01-01"),
(2,"Pollo chuco",75.00,"2023-01-01","2023-01-01"),
(3,"Pastelitos",60.00,"2023-01-01","2023-01-01"),
(4,"Enchiladas",50.00,"2023-01-01","2023-01-01"),
(5,"Panqueques",50.00,"2023-01-01","2023-01-01");



-- Tabla de Relación entre Acompañantes y Platos
CREATE TABLE AcompanantesPlatos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
	PlatoID INT,
    AcompananteID INT,    
    CantidadUtilizada INT,
    FOREIGN KEY (AcompananteID) REFERENCES Acompanantes(ID),
    FOREIGN KEY (PlatoID) REFERENCES Platos(ID)
);

INSERT INTO AcompanantesPlatos(PlatoID, AcompananteID, CantidadUtilizada)
VALUES (1,1,1),(1,2,1),(2,3,2),(2,4,1),(3,5,2),(3,6,2),(4,6,3),(4,4,1),(5,3,1);



-- Tabla de Menú Diario
CREATE TABLE MenuDiario (
    ID INT AUTO_INCREMENT PRIMARY KEY,    
    Descripcion VARCHAR(255),
	FechaElaboracion DATE,
    FechaModificacion DATETIME,
    FechaCreacion DATETIME
);

INSERT INTO MenuDiario(ID, Descripcion, FechaElaboracion, FechaModificacion, FechaCreacion)
VALUES (1,"lunes","2023-10-10","2023-10-10","2023-10-10"),
(2,"martes","2023-10-11","2023-10-11","2023-10-11"),
(3,"miercoles","2023-10-12","2023-10-12","2023-10-12"),
(4,"jueves","2023-10-13","2023-10-13","2023-10-13"),
(5,"viernes","2023-10-14","2023-10-14","2023-10-14"),
(6,"sabado","2023-10-15","2023-10-15","2023-10-15");


-- Tabla intermedia para relacionar Platos y MenuDiario
CREATE TABLE PlatosMenuDiario (
    ID INT AUTO_INCREMENT PRIMARY KEY,
	MenuDiarioID INT,
    PlatoID INT,    
    FOREIGN KEY (PlatoID) REFERENCES Platos(ID),
    FOREIGN KEY (MenuDiarioID) REFERENCES MenuDiario(ID)
);

INSERT INTO PlatosMenuDiario(MenuDiarioID, PlatoID)
VALUES (1,1),(1,2),(1,3),(2,4),(2,5),(2,1),(3,1),(4,2),(4,3),(5,4),(6,4);



-- Tabla de Bitácoras de Menús
CREATE TABLE BitacoraMenus (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR(50),
	MenuID INT,
    DescripcionOperacion VARCHAR(255),
    FechaHoraOperacion DATETIME,    
    FOREIGN KEY (MenuID) REFERENCES MenuDiario(ID)
);


INSERT INTO BitacoraMenus(Usuario, MenuID, DescripcionOperacion, FechaHoraOperacion)
VALUES ("A",1,"Creacion","2023-10-1"),
("A",2,"Creacion","2023-10-2"),
("B",3,"Creacion","2023-10-3"),
("B",4,"Creacion","2023-10-4"),
("B",5,"Creacion","2023-10-5"),
("B",6,"Creacion","2023-10-6");

