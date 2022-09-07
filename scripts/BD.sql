create table ip(
id_ip int auto_increment PRIMARY KEY,
ip varchar(15),
id_pais int,
num_reporte int,
id_categoria int,
fecha_reporte datetime,
fecha_bloqueo datetime,
id_estado int,
fecha_desbloqueo datetime
);

create table paises(
id_pais int auto_increment PRIMARY KEY,
nomb_pais varchar(100),
continente_pais varchar(200));

create table categorias(
id_categoria int auto_increment PRIMARY KEY,
nomb_categoria varchar(100),
desc_categoria varchar(1000));

create table estados(
id_estado int auto_increment PRIMARY KEY,
estado varchar(25),
desc_estado varchar(250));


alter table ip add foreign key (id_pais) references paises (id_pais);
alter table ip add foreign key (id_categoria) references Categorias (id_categoria);
alter table ip add foreign key (id_estado) references Estados (id_estado);

insert into paises(nomb_pais,continente_pais) values('Albania','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Austria','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Belgica','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Bulgaria','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Chipre','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Dinamarca','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('España','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Finlandia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Francia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Grecia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Hungria','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Irlanda','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Islandia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Italia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Liechtenstein','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Luxemburgo','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Malta','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Monaco','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Noruega','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Holanda','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Polonia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Portugal','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Andorra','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Reino Unido','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Alemania','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Rumania','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('San Marino','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Santa Sede','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Suecia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Suiza','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Ucrania','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Letonia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Moldavia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Belarus','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Georgia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Estonia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Lituania','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Republica Checa','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Republica Eslovaca','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Bosnia Y Herzegovina','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Croacia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Eslovenia','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Armenia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Rusia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Macedonia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Serbia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Montenegro','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Guernesey','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Svalbard Y Jan Mayen','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Islas Feroe','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Isla De Man','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Gibraltar','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Islas Del Canal','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Jersey','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Islas Aland','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios De La Union Europea','Unión Europea');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios Del Resto De Europa','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Burkina Faso','Africa');
insert into paises(nomb_pais,continente_pais) values('Angola','Africa');
insert into paises(nomb_pais,continente_pais) values('Argelia','Africa');
insert into paises(nomb_pais,continente_pais) values('Benin','Africa');
insert into paises(nomb_pais,continente_pais) values('Botswana','Africa');
insert into paises(nomb_pais,continente_pais) values('Burundi','Africa');
insert into paises(nomb_pais,continente_pais) values('Cabo Verde','Africa');
insert into paises(nomb_pais,continente_pais) values('Camerun','Africa');
insert into paises(nomb_pais,continente_pais) values('Comores','Africa');
insert into paises(nomb_pais,continente_pais) values('Congo','Africa');
insert into paises(nomb_pais,continente_pais) values('Costa De Marfil','Africa');
insert into paises(nomb_pais,continente_pais) values('Djibouti','Africa');
insert into paises(nomb_pais,continente_pais) values('Egipto','Africa');
insert into paises(nomb_pais,continente_pais) values('Etiopia','Africa');
insert into paises(nomb_pais,continente_pais) values('Gabon','Africa');
insert into paises(nomb_pais,continente_pais) values('Gambia','Africa');
insert into paises(nomb_pais,continente_pais) values('Ghana','Africa');
insert into paises(nomb_pais,continente_pais) values('Guinea','Africa');
insert into paises(nomb_pais,continente_pais) values('Guinea-Bissau','Africa');
insert into paises(nomb_pais,continente_pais) values('Guinea Ecuatorial','Africa');
insert into paises(nomb_pais,continente_pais) values('Kenia','Africa');
insert into paises(nomb_pais,continente_pais) values('Lesotho','Africa');
insert into paises(nomb_pais,continente_pais) values('Liberia','Africa');
insert into paises(nomb_pais,continente_pais) values('Libia','Africa');
insert into paises(nomb_pais,continente_pais) values('Madagascar','Africa');
insert into paises(nomb_pais,continente_pais) values('Malawi','Africa');
insert into paises(nomb_pais,continente_pais) values('Mali','Africa');
insert into paises(nomb_pais,continente_pais) values('Marruecos','Africa');
insert into paises(nomb_pais,continente_pais) values('Mauricio','Africa');
insert into paises(nomb_pais,continente_pais) values('Mauritania','Africa');
insert into paises(nomb_pais,continente_pais) values('Mozambique','Africa');
insert into paises(nomb_pais,continente_pais) values('Namibia','Africa');
insert into paises(nomb_pais,continente_pais) values('Niger','Africa');
insert into paises(nomb_pais,continente_pais) values('Nigeria','Africa');
insert into paises(nomb_pais,continente_pais) values('Republica Centroafricana','Africa');
insert into paises(nomb_pais,continente_pais) values('Sudafrica','Africa');
insert into paises(nomb_pais,continente_pais) values('Ruanda','Africa');
insert into paises(nomb_pais,continente_pais) values('Santo Tome Y Principe','Africa');
insert into paises(nomb_pais,continente_pais) values('Senegal','Africa');
insert into paises(nomb_pais,continente_pais) values('Seychelles','Africa');
insert into paises(nomb_pais,continente_pais) values('Sierra Leona','Africa');
insert into paises(nomb_pais,continente_pais) values('Somalia','Africa');
insert into paises(nomb_pais,continente_pais) values('Sudan','Africa');
insert into paises(nomb_pais,continente_pais) values('Swazilandia','Africa');
insert into paises(nomb_pais,continente_pais) values('Tanzania','Africa');
insert into paises(nomb_pais,continente_pais) values('Chad','Africa');
insert into paises(nomb_pais,continente_pais) values('Togo','Africa');
insert into paises(nomb_pais,continente_pais) values('Tunez','Africa');
insert into paises(nomb_pais,continente_pais) values('Uganda','Africa');
insert into paises(nomb_pais,continente_pais) values('Rep.Democratica Del Congo','Africa');
insert into paises(nomb_pais,continente_pais) values('Zambia','Africa');
insert into paises(nomb_pais,continente_pais) values('Zimbabwe','Africa');
insert into paises(nomb_pais,continente_pais) values('Eritrea','Africa');
insert into paises(nomb_pais,continente_pais) values('Santa Helena','Africa');
insert into paises(nomb_pais,continente_pais) values('Reunion','Africa');
insert into paises(nomb_pais,continente_pais) values('Mayotte','Africa');
insert into paises(nomb_pais,continente_pais) values('Sahara Occidental','Africa');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios De Africa','Africa');
insert into paises(nomb_pais,continente_pais) values('Canada','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Estados Unidos','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Mexico','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Antigua Y Barbuda','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Bahamas','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Barbados','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Belice','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Costa Rica','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Cuba','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Dominica','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('El Salvador','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Granada','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Guatemala','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Haiti','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Honduras','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Jamaica','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Nicaragua','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Panama','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('San Vicente Y Las Granadinas','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Republica Dominicana','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Trinidad Y Tobago','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Santa Lucia','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('San Cristobal Y Nieves','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Argentina','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Bolivia','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Brasil','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Colombia','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Chile','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Ecuador','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Guyana','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Paraguay','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Peru','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Surinam','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Uruguay','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Venezuela','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('San Pedro Y Miquelon','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Groenlandia','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Islas Caimán','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Islas Turcas Y Caicos','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Islas Vírgenes De Los Estados Unidos','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Guadalupe','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Antillas Holandesas','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('San Martin (Parte Francesa)','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Aruba','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Montserrat','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Anguilla','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('San Bartolome','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Martinica','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Puerto Rico','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Bermudas','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Islas Virgenes Britanicas','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Guayana Francesa','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Islas Malvinas','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Otros Paises  O Territorios De America Del Norte','America Del Norte');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios Del Caribe Y America Central','Centro America Y Caribe');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios  De Sudamerica','Sudamerica');
insert into paises(nomb_pais,continente_pais) values('Afganistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Arabia Saudi','Asia');
insert into paises(nomb_pais,continente_pais) values('Bahrein','Asia');
insert into paises(nomb_pais,continente_pais) values('Bangladesh','Asia');
insert into paises(nomb_pais,continente_pais) values('Myanmar','Asia');
insert into paises(nomb_pais,continente_pais) values('China','Asia');
insert into paises(nomb_pais,continente_pais) values('Emiratos Arabes Unidos','Asia');
insert into paises(nomb_pais,continente_pais) values('Filipinas','Asia');
insert into paises(nomb_pais,continente_pais) values('India','Asia');
insert into paises(nomb_pais,continente_pais) values('Indonesia','Asia');
insert into paises(nomb_pais,continente_pais) values('Iraq','Asia');
insert into paises(nomb_pais,continente_pais) values('Iran','Asia');
insert into paises(nomb_pais,continente_pais) values('Israel','Asia');
insert into paises(nomb_pais,continente_pais) values('Japon','Asia');
insert into paises(nomb_pais,continente_pais) values('Jordania','Asia');
insert into paises(nomb_pais,continente_pais) values('Camboya','Asia');
insert into paises(nomb_pais,continente_pais) values('Kuwait','Asia');
insert into paises(nomb_pais,continente_pais) values('Laos','Asia');
insert into paises(nomb_pais,continente_pais) values('Libano','Asia');
insert into paises(nomb_pais,continente_pais) values('Malasia','Asia');
insert into paises(nomb_pais,continente_pais) values('Maldivas','Asia');
insert into paises(nomb_pais,continente_pais) values('Mongolia','Asia');
insert into paises(nomb_pais,continente_pais) values('Nepal','Asia');
insert into paises(nomb_pais,continente_pais) values('Oman','Asia');
insert into paises(nomb_pais,continente_pais) values('Pakistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Qatar','Asia');
insert into paises(nomb_pais,continente_pais) values('Corea','Asia');
insert into paises(nomb_pais,continente_pais) values('Corea Del Norte','Asia');
insert into paises(nomb_pais,continente_pais) values('Singapur','Asia');
insert into paises(nomb_pais,continente_pais) values('Siria','Asia');
insert into paises(nomb_pais,continente_pais) values('Sri Lanka','Asia');
insert into paises(nomb_pais,continente_pais) values('Tailandia','Asia');
insert into paises(nomb_pais,continente_pais) values('Turquia','Resto De Europa');
insert into paises(nomb_pais,continente_pais) values('Vietnam','Asia');
insert into paises(nomb_pais,continente_pais) values('Brunei','Asia');
insert into paises(nomb_pais,continente_pais) values('Islas Marshall','Asia');
insert into paises(nomb_pais,continente_pais) values('Yemen','Asia');
insert into paises(nomb_pais,continente_pais) values('Azerbaiyan','Asia');
insert into paises(nomb_pais,continente_pais) values('Kazajstan','Asia');
insert into paises(nomb_pais,continente_pais) values('Kirguistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Tadyikistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Turkmenistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Uzbekistan','Asia');
insert into paises(nomb_pais,continente_pais) values('Islas Marianas Del Norte','Asia');
insert into paises(nomb_pais,continente_pais) values('Palestina','Asia');
insert into paises(nomb_pais,continente_pais) values('Hong Kong','Asia');
insert into paises(nomb_pais,continente_pais) values('Bhután','Asia');
insert into paises(nomb_pais,continente_pais) values('Guam','Asia');
insert into paises(nomb_pais,continente_pais) values('Macao','Asia');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios De Asia','Asia');
insert into paises(nomb_pais,continente_pais) values('Australia','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Fiji','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Nueva Zelanda','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Papua Nueva Guinea','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Islas Salomon','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Samoa','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Tonga','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Vanuatu','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Micronesia','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Tuvalu','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Islas Cook','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Nauru','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Palaos','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Timor Oriental','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Polinesia Francesa','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Isla Norfolk','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Kiribati','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Niue','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Islas Pitcairn','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Tokelau','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Nueva Caledonia','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Wallis Y Fortuna','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Samoa Americana','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Otros Paises O Territorios De Oceania','Oceanía');
insert into paises(nomb_pais,continente_pais) values('Multiples','Multiples');

insert into categorias(nomb_categoria,desc_categoria) values('Abuso de privilegios','Uno o varios privilegios asignados han sido usados para un objetivo diferente al rol definido.');
insert into categorias(nomb_categoria,desc_categoria) values('Acceso no autorizado a información.','La información de un sistema o entidad informática o la misma información que transita por la red han sido accedidas por un tercero no autorizado.');
insert into categorias(nomb_categoria,desc_categoria) values('Aplicación comprometida','Compromiso exitoso de una aplicación Esto pudo haber sido realizado remotamente por una vulnerabilidad conocida o desconocida, pero también por un acceso local no autorizado.');
insert into categorias(nomb_categoria,desc_categoria) values('Ataque día cero','Intento de ataque usando un exploit desconocido');
insert into categorias(nomb_categoria,desc_categoria) values('Contenido no permitido','Acceso, transmisión o resguardo de información no autorizada por el ICBF (pornografía infantil, violencia, drogas, armas, pornografía)');
insert into categorias(nomb_categoria,desc_categoria) values('Cuente comprometida','Compromiso exitoso de un sistema por el uso de una cuenta privilegiada o no privilegiada comprometida. Esto pudo haber sido explotado remotamente por una vulnerabilidad conocida o desconocida, pero también por un acceso local no autorizado.');
insert into categorias(nomb_categoria,desc_categoria) values('Denegación de servicio (DoS)','Un sistema recibe una gran cantidad de peticiones a través de paquetes de tráfico desde un único origen malicioso, ocasionando que el servicio y/o operación sea degradado o el sistema bloquee (crash). Sin embargo, la disponibilidad puede ser también afectada por acciones locales (destrucción, bloqueo de energía, etc)');
insert into categorias(nomb_categoria,desc_categoria) values('Desastre natural','Aquellos incidentes causados por desastres naturales que estan fuera del cotrol humano.');
insert into categorias(nomb_categoria,desc_categoria) values('Explotación de vulnerabilidades','Intento de comprometer un sistema o bloquear cualquier servicio por la explotación de vulnerabilidades con un identificador definido como un nombre CVE*');
insert into categorias(nomb_categoria,desc_categoria) values('Falla infraestructura','Aquellos causados por fallas en los sistemas báSYCos, eje. daño de Hardware y/o Software');
insert into categorias(nomb_categoria,desc_categoria) values('Falso positivo','Los falsos positivos son alertas de seguridad mal etiquetadas, indicando que hay una amenaza cuando en realidad no la hay.');
insert into categorias(nomb_categoria,desc_categoria) values('Ingeniería social ','Obtener información de una entidad humana de una forma no técnica.');
insert into categorias(nomb_categoria,desc_categoria) values('Intentos de Logeo','Múltiples intentos de Login o Registro (uso de contraseñas prestadas o robadas, ataques de fuerza bruta, ataques de diccionario)');
insert into categorias(nomb_categoria,desc_categoria) values('Malware','Software que es intencionalmente incluido o insertado en un sistema con un propósito malicioso. Normalmente, es necesaria la interacción del usuario para activar el código.');
insert into categorias(nomb_categoria,desc_categoria) values('Modificación de autorizada de datos','La información guardada en un sistema o que es transmitida a través de un medio ha sido modificada sin autorización.');
insert into categorias(nomb_categoria,desc_categoria) values('Otros','Todos los incidentes que no pudieron ser categorizados basados en las categorías definidas.');
insert into categorias(nomb_categoria,desc_categoria) values('Phishing','El atacante se hace pasar por una entidad de confianza habitualmente accedida vía correo electrónico. Su objetivo es adquirir información confidencial de forma fraudulenta, como contraseñas o información detallada sobre tarjetas de crédito u otra información personal.');
insert into categorias(nomb_categoria,desc_categoria) values('Prueba','Usado cuando una prueba aprobada es ejecutada en cualquier plataforma, equipo o dispositivo del cliente.');
insert into categorias(nomb_categoria,desc_categoria) values('Sabotaje','Un sistema es afectado por acciones locales con fines maliciosos (destrucción, corte de energía, desconexión de red, etc)');
insert into categorias(nomb_categoria,desc_categoria) values('Scanning','Ataques que envía solicitudes a un sistema para descubrir puntos vulnerables como puertos y servicios. También se incluye algunas clases de pruebas a procesos para obtener información de los equipos, servicios y cuentas de usuarios.');
insert into categorias(nomb_categoria,desc_categoria) values('Sniffing','Observar y capturar paquetes del tráfico de red.');
insert into categorias(nomb_categoria,desc_categoria) values('Spam','El buzón de correo no ha otorgado un permiso verificable a el mensaje enviado y/o el mensaje enviado es parte de una alta cantidad de mensajes, todos con el mismo contenido');
insert into categorias(nomb_categoria,desc_categoria) values('Suplantación','Ataque en el cual una entidad ilegitima asume la identidad de otra con el objetivo de beneficiarse de ella');
insert into categorias(nomb_categoria,desc_categoria) values('Sustracción de información','La información de un sistema o entidad informática o la misma información que transita por la red han sido sustraídas por un tercero no autorizado.');
insert into categorias(nomb_categoria,desc_categoria) values('Uso no autorizado de recursos','Uso de recursos asignados para propósitos no autorizados incluyendo obtener ganancias de actividades ilícitas.');
insert into categorias(nomb_categoria,desc_categoria) values('Violación de políticas','Una o más políticas de Seguridad de la Información, Código de Conducta de la organización ha sido violada o registra un intento de violación.');
insert into categorias(nomb_categoria,desc_categoria) values('Violación de derechos de autor','Vender, instalar, compartir copias de software comercial no licenciado u otro tipo de materiales protegidos con derecho de autor.');
insert into categorias(nomb_categoria,desc_categoria) values('Website defacement','Modificación o cambio producido de manera intencionada en el contenido de una página web por un atacante que haya obtenido algún tipo de acceso a ella.');


insert into estados(estado,desc_estado) values('Bloqueada','Ip que se encuentra bloqueada por ataques ciberneticos recientes');
insert into estados(estado,desc_estado) values('Desbloqueada','Ip que ha sido desbloqueada por llevar más de 90 días bloqueada y no haber atacado de nuevo');

create table usuarios(
id_usuario int auto_increment PRIMARY KEY,
nomb_usuario varchar(50),
contraseña varchar(50),
id_rol_usuario int,
id_estado_usuario int);

create table roles(
id_rol int auto_increment PRIMARY KEY,
nomb_rol varchar(50));

create table estado_usuario(
id_estado_usr int auto_increment PRIMARY KEY,
nomb_estado_usr varchar(25));

alter table usuarios add foreign key (id_rol_usuario) references roles (id_rol);
alter table usuarios add foreign key (id_estado_usuario) references estado_usuario (id_estado_usr);

insert into roles(nomb_rol) values('administrador');
insert into roles(nomb_rol) values('usuario');

insert into estado_usuario(nomb_estado_usr) values('activo');
insert into estado_usuario(nomb_estado_usr) values('inactivo');

INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('30.234.185.187',14,162534,2,'2022-06-12','2022-06-20',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('227.76.201.56',173,162573,5,'2022-05-23','2022-06-23',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('32.250.232.246',84,164523,3,'2022-06-21','2022-06-30',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('221.143.250.188',7,162543,15,'2022-06-14','2022-06-23',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('209.115.149.113',114,16245,25,'2022-06-17','2022-06-24',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('41.225.204.101',235,162345,3,'2022-06-20','2022-06-25',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('85.180.165.143,42',200,162324,18,'2022-06-25','2022-06-23',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('253.54.49.23,109',2,162563,19,'2022-06-23','2022-06-19',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('136.134.97.81,182',16,163452,7,'2022-06-27','2022-06-19',1,NULL);
INSERT INTO ip(ip, id_pais, num_reporte, id_categoria, fecha_reporte, fecha_bloqueo, id_estado, fecha_desbloqueo)
VALUES('187.125.186.144',127,162324,2,'2022-06-30','2022-06-28',1,NULL);
