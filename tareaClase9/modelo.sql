-- Modelos académicos independientes, sin datos personales.
-- Una localidad puede estar asociada a varios empleados (relación N:1).
CREATE TABLE IF NOT EXISTS regiones (
    codigo INT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS provincias (
    codigo INT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    region_codigo INT NOT NULL,
    FOREIGN KEY (region_codigo) REFERENCES regiones(codigo)
);
CREATE TABLE IF NOT EXISTS localidades (
    codigo INT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    provincia_codigo INT NOT NULL,
    FOREIGN KEY (provincia_codigo) REFERENCES provincias(codigo)
);
CREATE TABLE IF NOT EXISTS empleados_geografia (
    legajo INT PRIMARY KEY,
    dni VARCHAR(20) NOT NULL UNIQUE,
    nombre VARCHAR(120) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    telefono VARCHAR(30),
    salario DECIMAL(12,2) NOT NULL CHECK (salario >= 0),
    localidad_codigo INT NOT NULL,
    FOREIGN KEY (localidad_codigo) REFERENCES localidades(codigo)
);

-- Segundo modelo: empleados por departamento y jefe opcional.
CREATE TABLE IF NOT EXISTS departamentos (
    codigo INT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    localizacion VARCHAR(150) NOT NULL,
    jefe_legajo INT NULL UNIQUE
);
CREATE TABLE IF NOT EXISTS empleados_departamento (
    legajo INT PRIMARY KEY,
    dni VARCHAR(20) NOT NULL UNIQUE,
    nombre VARCHAR(120) NOT NULL,
    telefono VARCHAR(30),
    salario DECIMAL(12,2) NOT NULL CHECK (salario >= 0),
    departamento_codigo INT NOT NULL,
    UNIQUE (legajo, departamento_codigo),
    FOREIGN KEY (departamento_codigo) REFERENCES departamentos(codigo)
);
-- El jefe debe ser un empleado del mismo departamento.
-- Crear primero el departamento sin jefe, luego el empleado y finalmente asignarlo.
ALTER TABLE departamentos
    ADD CONSTRAINT fk_jefe_del_departamento
    FOREIGN KEY (jefe_legajo, codigo)
    REFERENCES empleados_departamento(legajo, departamento_codigo);
