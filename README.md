# pmil
Prueba para software milenium

La base de datos se llama pmil

La tabla se llama user, columnas id,Name,LName respectivamente son id único, nombre y apellido

# query
id es llave primaria autoincremental y se genera automáticamente

"CREATE TABLE IF NO EXISTS `pmil`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(100) NOT NULL , `LName` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

