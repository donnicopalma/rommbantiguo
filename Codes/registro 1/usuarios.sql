CREATE TABLE `usuarios` (
`id` INT( 4 ) NOT NULL AUTO_INCREMENT ,
`user` VARCHAR( 255 ) NOT NULL ,
`pass` VARCHAR( 255 ) NOT NULL ,
`nivel` INT( 4 ) NOT NULL ,
`fecha_registro` VARCHAR( 255 ) NOT NULL ,
`hora_registro` VARCHAR( 255 ) NOT NULL ,
`IP` TINYTEXT NOT NULL ,
INDEX ( `id` )
) ENGINE = MYISAM ;