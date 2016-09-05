-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2016 a las 21:28:02
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`idalbum` int(11) NOT NULL,
  `idcantante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `caractura` varchar(100) NOT NULL,
  `publicacion` date NOT NULL,
  `discografia` varchar(100) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantante`
--

CREATE TABLE IF NOT EXISTS `cantante` (
`idcantante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `edad` decimal(10,0) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_pelis`
--

CREATE TABLE IF NOT EXISTS `generos_pelis` (
`idGenerosPelis` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos_pelis`
--

INSERT INTO `generos_pelis` (`idGenerosPelis`, `nombre`) VALUES
(1, 'Comedia'),
(2, 'Acción'),
(3, 'Fantasía'),
(4, 'Ciencia Ficción'),
(5, 'Romanticas'),
(6, 'Familiar'),
(7, 'Aventuras'),
(8, 'Suspense'),
(9, 'Anime'),
(11, 'Drama'),
(12, 'Documental'),
(13, 'Animación'),
(14, 'Crimen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_series`
--

CREATE TABLE IF NOT EXISTS `generos_series` (
`idgeneros_series` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_musica`
--

CREATE TABLE IF NOT EXISTS `genero_musica` (
`idgenero_musica` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
`idmusica` int(11) NOT NULL,
  `idgenero` int(11) DEFAULT NULL,
  `idcantante` int(11) DEFAULT NULL,
  `idalbum` int(11) DEFAULT NULL,
  `cancion` varchar(100) DEFAULT NULL,
  `caractura` varchar(100) DEFAULT NULL,
  `formato` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `reproduciones` int(11) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais_peli`
--

CREATE TABLE IF NOT EXISTS `pais_peli` (
`idPais` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `escudo` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais_peli`
--

INSERT INTO `pais_peli` (`idPais`, `nombre`, `escudo`) VALUES
(1, 'España', 'españa.png'),
(3, 'Estados Unidos', 'bandera-de-estados-unidos.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
`idpeliculas` int(11) NOT NULL,
  `idgeneros_pelis` int(11) DEFAULT NULL,
  `idproductora` int(11) DEFAULT NULL,
  `idpais` int(11) NOT NULL,
  `caractura` varchar(200) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `banda_sonora` varchar(500) NOT NULL,
  `titulo_peli` varchar(200) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `director` varchar(250) NOT NULL,
  `musica` varchar(100) NOT NULL,
  `guion` varchar(100) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `reparto` varchar(1000) DEFAULT NULL,
  `link_web` varchar(200) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`idpeliculas`, `idgeneros_pelis`, `idproductora`, `idpais`, `caractura`, `trailer`, `banda_sonora`, `titulo_peli`, `ano`, `duracion`, `director`, `musica`, `guion`, `fotografia`, `reparto`, `link_web`, `sinopsis`) VALUES
(2, 2, 10, 3, 'Spider-man.jpg', 'https://www.youtube.com/embed/zWT32yFM8bU?showinfo=0', 'https://www.youtube.com/embed/6qcJS_e2_hY?showinfo=0', 'Spider-man', '2002', '121 min.', 'Sam Raimi', 'Danny Elfman', 'David Koepp (Cómic: Stan Lee, Steve Ditko)', 'Don Burgess', 'Tobey Maguire, Kirsten Dunst, Willem Dafoe, James Franco, Rosemary Harris, Cliff Robertson, J.K. Simmons, Michael Papajohn, Jack Betts, Joe Manganiello, Gerry Becker, Bill Nunn, Randy Savage, Bruce Campbell, Stanley Anderson, Elizabeth Banks', 'http://www.sonypictures.com/movies/spider-man/', 'Tras la muerte de sus padres, Peter Parker, un tímido estudiante, vive con su tía May y su tío Ben. Precisamente debido a su retraimiento no es un chico muy popular en el instituto. Un día le muerde una araña que ha sido modificada genéticamente; a la mañana siguiente, descubre estupefacto que posee la fuerza y la agilidad de ese insecto. Las aventuras del hombre araña se basan en el famoso cómic de Stan Lee y Steve Ditko. (FILMAFFINITY)'),
(3, 2, 5, 3, 'Deadpool.jpg', 'https://www.youtube.com/embed/7evoYlgMmoY?showinfo=0', 'https://www.youtube.com/embed/ABoM3PbXxlQ?showinfo=0', 'Deadpool', '2016', '106 min.', 'Tim Miller', 'Junkie XL', 'Rhett Reese, Paul Wernick (Personajes: Rob Liefeld, Fabian Nicieza)', 'Ken Seng', 'Ryan Reynolds, Morena Baccarin, Ed Skrein, Gina Carano, T.J. Miller, Rachel Sheen, Brianna Hildebrand, Paul Lazenby, Sean Quan, Ben Wilkinson, Naika Toussaint, Olesia Shewchuk, Kyle Cassie, Style Dayne, Fabiola Colmenero, Stan Lee', 'http://www.foxmovies.com/movies/deadpool', 'Basado en el anti-héroe menos convencional de la Marvel, Deadpool narra el origen de un ex-operativo de la fuerzas especiales llamado Wade Wilson, reconvertido a mercenario, y que tras ser sometido a un cruel experimento adquiere poderes de curación rápida, adoptando Wade entonces el alter ego de Deadpool. Armado con sus nuevas habilidades y un oscuro y retorcido sentido del humor, Deadpool intentará dar caza al hombre que casi destruye su vida. (FILMAFFINITY)'),
(4, 7, 4, 3, 'El libro de la Selva.jpg', 'https://www.youtube.com/embed/fCGgfrRApCs?showinfo=0', 'https://www.youtube.com/embed/X1uCTDFRUHU?showinfo=0', 'El libro de la Selva', '2016', '105 min.', 'Jon Favreau', 'John Debney', 'Justin Marks (Novela: Rudyard Kipling)', 'Bill Pope', 'Neel Sethi, Bill Murray, Ben Kingsley, Idris Elba, Lupita Nyong''o, Scarlett Johansson, Giancarlo Esposito, Christopher Walken, Garry Shandling', 'http://peliculas.disney.es/dvd/libro-de-la-selva', 'Mowgli (Neel Sethi), un niño criado en la selva por una manada de lobos, emprende un fascinante viaje de autodescubrimiento cuando se ve obligado a abandonar el único hogar que ha conocido en toda su vida. Nueva adaptación de la novela de Rudyard Kipling. (FILMAFFINITY)'),
(5, 7, 4, 3, 'Malefica.jpg', 'https://www.youtube.com/embed/guZJMgCatiM?showinfo=0', 'https://www.youtube.com/embed/8waJ7W3QcJc?showinfo=0', 'Maléfica', '2014', '97 min.', 'Robert Stromberg', 'James Newton Howard', 'Linda Woolverton, Paul Dini, John Lee Hancock', 'Dean Semler', 'Angelina Jolie, Elle Fanning, Juno Temple, Sharlto Copley, Kenneth Cranham, Lesley Manville, Imelda Staunton, Sam Riley, Ella Purnell, Brenton Thwaites, Christian Wolf-La''Moy', 'http://www.disney.es/peliculas/malefica', 'Maléfica es una bella hada con un corazón puro y unas asombrosas alas negras. Crece en un entorno idílico, un apacible reino en el bosque limítrofe con el mundo de los hombres, hasta que un día un ejército de invasores humanos amenaza la armonía de su país. Maléfica se erige entonces en la protectora de su reino, pero un día es objeto de una despiadada e inesperada traición, un hecho triste y doloroso que endurecerá su corazón hasta convertirlo en piedra, y que la llevará a lanzar una temible maldición. (FILMAFFINITY)'),
(6, 11, 9, 3, 'Titanic.jpg', 'https://www.youtube.com/embed/FiRVcExwBVA?showinfo=0', 'https://www.youtube.com/embed/nXOE6EQtKcU?showinfo=0', 'Titanic 1', '1997', '195 min.', 'James Cameron', 'James Horner', 'James Cameron', 'Russell Carpenter', 'Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates, Frances Fisher, Gloria Stuart, Bill Paxton, Bernard Hill, David Warner, Victor Garber, Jonathan Hyde, Suzy Amis, Danny Nucci, Jason Barry, Ewan Stewart, Ioan Gruffudd', 'http://www.titanicmovie.com', 'Jack (DiCaprio), un joven artista, gana en una partida de cartas un pasaje para viajar a América en el Titanic, el transatlántico más grande y seguro jamás construido. A bordo conoce a Rose (Kate Winslet), una joven de una buena familia venida a menos que va a contraer un matrimonio de conveniencia con Cal (Billy Zane), un millonario engreído a quien sólo interesa el prestigioso apellido de su prometida. Jack y Rose se enamoran, pero el prometido y la madre de ella ponen todo tipo de trabas a su relación. Mientras, el gigantesco y lujoso transatlántico se aproxima hacia un inmenso iceberg. (FILMAFFINITY)'),
(7, 7, 4, 3, 'alicia en el pais de las maravillas - 2010.jpg', 'https://www.youtube.com/embed/Gyu7zvy8leg?showinfo=0', 'https://www.youtube.com/embed/V_j-r6krxe4?showinfo=0', 'Alicia en el país de las maravillas (Disney - 2010)', '2010', '108 min.', 'Tim Burton', 'Danny Elfman', 'Linda Woolverton (Novela: Lewis Carroll)', 'Dariusz Wolski', 'Mia Wasikowska, Johnny Depp, Helena Bonham Carter, Anne Hathaway, Crispin Glover, Matt Lucas, Marton Csokas, Tim Pigott-Smith, Lindsay Duncan, Geraldine James, Frances de la Tour, Jemma Powell, John Hopkins, Eleanor Gecks, Eleanor Tomlinson', 'http://disney.go.com/disneypictures/aliceinwonderland/', 'Inspirada en la obra homónima de Lewis Carroll. Alicia (Mia Wasikowska), una joven de 19 años, acude a una mansión victoriana para asistir a una fiesta de la alta sociedad. Cuando está a punto de recibir públicamente una propuesta de matrimonio, sale corriendo tras un conejo blanco y va a parar al País de las Maravillas, un lugar que había visitado diez años antes, aunque ya no lo recuerda. Ese país era un reino pacífico hasta que la Reina Roja (Helena Bonham Carter) derrocó a su hermana, la Reina Blanca (Anne Hathaway), pero las criaturas que viven en él, dispuestas a rebelarse, esperan contar con el apoyo de Alicia, a la que ayudan a recordar su primera visita al fantástico reino. (FILMAFFINITY)'),
(8, 2, 6, 3, 'batman_v_superman.jpg', 'https://www.youtube.com/embed/kof_CxLtri0?showinfo=0', 'https://www.youtube.com/embed/OBd4RVzrWcQ?showinfo=0', 'Batman v Superman: El Amanecer de la Justicia', '2016', '153 min.', 'Zack Snyder', 'Hans Zimmer, Junkie XL', 'David S. Goyer, Chris Terrio (Historia: David S. Goyer, Zack Snyder)', 'Larry Fong', 'Ben Affleck, Henry Cavill, Amy Adams, Jesse Eisenberg, Gal Gadot, Diane Lane, Laurence Fishburne, Jeremy Irons, Holly Hunter, Scoot McNairy, Jena Malone, Callan Mulvey, Tao Okamoto, Brandon Spink, Lauren Cohan, Hugh Maguire, Jason Momoa, Ezra Miller, Ray Fisher, Kevin Costner, Jeffrey Dean Morgan, Joe Morton', 'http://batmanvsuperman.dccomics.com/', 'Ante el temor de las acciones que pueda llevar a cabo Superman, el vigilante de Gotham City aparece para poner a raya al superhéroe de Metrópolis, mientras que la opinión pública debate cuál es realmente el héroe que necesitan. El hombre de acero y Batman se sumergen en una contienda territorial, pero las cosas se complican cuando una nueva y peligrosa amenaza surge rápidamente, poniendo en jaque la existencia de la humanidad. (FILMAFFINITY)'),
(9, 7, 9, 3, 'Star Wars 1.jpg', 'https://www.youtube.com/embed/n1CUHjrc9Sc?showinfo=0', 'https://www.youtube.com/embed/C2XUJ5PWg-8?showinfo=0', 'Star Wars. Episodio I: La amenaza fantasma', '1999', '130 min.', 'George Lucas', 'John Williams', 'George Lucas', 'David Tattersall', 'Liam Neeson, Ewan McGregor, Natalie Portman, Jake Lloyd, Samuel L. Jackson, Ian McDiarmid, Ray Park, Anthony Daniels, Kenny Baker, Pernilla August, Hugh Quarshie, Ahmed Best, Andy Secombe, Frank Oz, Terence Stamp, Keira Knightley, Oliver Ford Davies, Ralph Brown, Warwick Davis, Sofia Coppola, Dominic West,', 'http://www.starwars.com', 'Ambientada treinta años antes que "La guerra de las galaxias" (1977), muestra la infancia de Darth Vader, el pasado de Obi-Wan Kenobi y el resurgimiento de los Sith, los caballeros Jedi dominados por el Lado Oscuro. La Federación de Comercio ha bloqueado el pequeño planeta de Naboo, gobernado por la joven Reina Amidala; se trata de un plan ideado por Sith Darth Sidious, que, manteniéndose en el anonimato, dirige a los neimoidianos, que están al mando de la Federación. El Jedi Qui-Gon Jinn y su aprendiz Obi-Wan Kenobi convencen a Amidala para que vaya a Coruscant, la capital de la República y sede del Consejo Jedi, y trate de neutralizar esta amenaza. Pero, al intentar esquivar el bloqueo, la nave real resulta averiada, viéndose así obligada la tripulación a aterrizar en el desértico y remoto planeta de Tatooine... (FILMAFFINITY)'),
(10, 7, 9, 3, 'Star Wars 2.jpg', 'https://www.youtube.com/embed/DywnxIuPtUs?showinfo=0', 'https://www.youtube.com/embed/mn2b4Gx2b-4?showinfo=0', 'Star Wars. Episodio II: El ataque de los clones', '2002', '136 min.', 'George Lucas', 'John Williams', 'George Lucas, Jonathan Hales', 'David Tattersall', 'Hayden Christensen, Ewan McGregor, Natalie Portman, Ian McDiarmid, Samuel L. Jackson, Christopher Lee, Temuera Morrison, Pernilla August, Jimmy Smits, Anthony Daniels, Kenny Baker, Frank Oz, Andy Secombe, Rose Byrne, Oliver Ford Davies, Jack Thompson, Joel Edgerton, Ahmed Best, Silas Carson', 'http://www.starwars.com', 'Corren tenebrosos tiempos para la República, que continúa envuelta en luchas y sumida en el caos. Un movimiento separatista, formado por centenares de planetas y poderosas alianzas encabezadas por el misterioso conde Dooku, amenaza la galaxia. Ni siquiera los Jedi parecen capaces de conjurar el peligro. Este movimiento provoca el estallido de las guerras clones, que representa el principio del fin de la República. Para allanar el camino, los separatistas intentan asesinar a la senadora Padme Amidala. Para evitar futuros atentados, su seguridad es encomendada a dos caballeros Jedi... (FILMAFFINITY)'),
(11, 7, 9, 3, 'Star Wars 3.jpg', 'https://www.youtube.com/embed/kqkfjBKmWc4?showinfo=0', 'https://www.youtube.com/embed/uYKhjBDk38o?showinfo=0', 'Star Wars. Episodio III: La venganza de los Sith', '2005', '135 min.', 'George Lucas', 'John Williams', 'George Lucas', 'David Tattersall', 'Hayden Christensen, Ewan McGregor, Natalie Portman, Ian McDiarmid, Samuel L. Jackson, Jimmy Smits, Anthony Daniels, Kenny Baker, Frank Oz, Christopher Lee, Peter Mayhew, Andrew Secombe, Silas Carson, Keisha Castle-Hughes, Temuera Morrison, Trisha Noble, Bruce Spence, Ahmed Best, Joel Edgerton, George Lucas', 'http://www.starwars.com', 'Último capítulo de la trilogía de precuelas de Star Wars, en el que Anakin Skywalker definitivamente se pasa al lado oscuro. En el Episodio III aparece el General Grievous, un ser implacable mitad-alien mitad-robot, el líder del ejército separatista Droid. Los Sith son los amos del lado oscuro de la Fuerza y los enemigos de los Jedi. Fueron prácticamente exterminados por los Jedi hace mil años, pero esta orden del mal sobrevivió en la clandestinidad. (FILMAFFINITY)'),
(12, 7, 9, 3, 'Star Wars 4.jpg', 'https://www.youtube.com/embed/beAH5vea99k?showinfo=0', 'https://www.youtube.com/embed/HcZ9kQ1h-ZY?showinfo=0', 'Star Wars. Episodio IV: Una nueva esperanza', '1977', '121 min.', 'George Lucas', 'John Williams', 'George Lucas', 'Gilbert Taylor', 'Mark Hamill, Harrison Ford, Carrie Fisher, Alec Guinness, Peter Cushing, David Prowse, Peter Mayhew, Anthony Daniels, Kenny Baker, Phil Brown, Shelagh Fraser, Garrick Hagon, Denis Lawson, Alex McCrindle, Richard LeParmentier, Drewe Henley, Jack Purvis, Don Henderson, William Hootkins, Malcolm Tierney', 'http://www.starwars.com', 'La princesa Leia, líder del movimiento rebelde que desea reinstaurar la República en la galaxia en los tiempos ominosos del Imperio, es capturada por las Fuerzas Imperiales, capitaneadas por el implacable Darth Vader, el sirviente más fiel del Emperador. El intrépido y joven Luke Skywalker, ayudado por Han Solo, capitán de la nave espacial "El Halcón Milenario", y los androides, R2D2 y C3PO, serán los encargados de luchar contra el enemigo e intentar rescatar a la princesa para volver a instaurar la justicia en el seno de la galaxia. (FILMAFFINITY)'),
(13, 7, 9, 3, 'Star Wars 5.jpg', 'https://www.youtube.com/embed/xr3hPFJAHO4?showinfo=0', 'https://www.youtube.com/embed/_D0ZQPqeJkk?showinfo=0', 'Star Wars. Episodio V: El imperio contraataca', '1980', '124 min.', 'Irvin Kershner', 'John Williams', 'Leigh Brackett, Lawrence Kasdan (Historia: George Lucas)', 'Peter Suschitzky', 'Mark Hamill, Harrison Ford, Carrie Fisher, Frank Oz, Billy Dee Williams, David Prowse, Alec Guinness, Anthony Daniels, Kenny Baker, Peter Mayhew, Jeremy Bulloch, Kenneth Colley, Bruce Boa, Julian Glover, Denis Lawson, Michael Culver, John Ratzenberger, Michael Sheard', 'http://www.starwars.com', 'Tras un ataque sorpresa de las tropas imperiales a las bases camufladas de la alianza rebelde, Luke Skywalker, en compañía de R2D2, parte hacia el planeta Dagobah en busca de Yoda, el último maestro Jedi, para que le enseñe los secretos de la Fuerza. Mientras, Han Solo, la princesa Leia, Chewbacca, y C3PO esquivan a las fuerzas imperiales y piden refugio al antiguo propietario del Halcón Milenario, Lando Calrissian, en la ciudad minera de Bespin, donde les prepara una trampa urdida por Darth Vader. (FILMAFFINITY)'),
(14, 7, 9, 3, 'Star Wars 6.jpg', 'https://www.youtube.com/embed/yhuKapE-Bio?showinfo=0', 'https://www.youtube.com/embed/6vDwqpzSrRU?showinfo=0', 'Star Wars. Episodio VI: El retorno del Jedi', '1983', '133 min.', 'Richard Marquand', 'John Williams', 'Lawrence Kasdan, George Lucas', 'Alan Hume', 'Mark Hamill, Harrison Ford, Carrie Fisher, David Prowse, Ian McDiarmid, Billy Dee Williams, Frank Oz, Alec Guinness, Anthony Daniels, Kenny Baker, Peter Mayhew, Sebastian Shaw, Warwick Davis, Caroline Blakiston, Dermot Crowley, Kenneth Colley, Denis Lawson, Michael Pennington', 'http://www.starwars.com', 'Para ir a Tatooine y liberar a Han Solo, Luke Skywalker y la princesa Leia deben infiltrarse en la peligrosa guarida de Jabba the Hutt, el gángster más temido de la galaxia. Una vez reunidos, el equipo recluta a tribus de Ewoks para combatir a las fuerzas imperiales en los bosques de la luna de Endor. Mientras tanto, el Emperador y Darth Vader conspiran para atraer a Luke al lado oscuro, pero el joven está decidido a reavivar el espíritu del Jedi en su padre. La guerra civil galáctica termina con un último enfrentamiento entre las fuerzas rebeldes unificadas y una segunda Estrella de la Muerte, indefensa e incompleta, en una batalla que decidirá el destino de la galaxia. (FILMAFFINITY)'),
(15, 13, 2, 3, 'Mascotas.jpg', 'https://www.youtube.com/embed/kxdVCO9EOKg?showinfo=0', 'https://www.youtube.com/embed/CrZEd1F4OqA?showinfo=0', 'Mascotas', '2016', '90 min.', 'Chris Renaud, Yarrow Cheney', 'Alexandre Desplat', 'Ken Daurio, Cinco Paul', 'Animation', 'Sin Reparto', 'http://www.mascotaslapelicula.es/', 'En un edificio de apartamentos de Manhattan, la vida de Max como mascota favorita corre peligro cuando su dueña trae a casa a un otro perro llamado Duke, con quien Max pronto tiene sus diferencias. Pero ambas mascotas tienen que dejar atrás su rivalidad cuando se enteran de que un adorable conejito blanco llamado Snowball está reclutando a un ejército de animales domésticos que han sido abandonados, decididos a vengarse de todos los animales domésticos felices y de sus dueños. (FILMAFFINITY)'),
(16, 2, 10, 3, 'spiderman-2.jpg', 'https://www.youtube.com/embed/-i872T2OJ1E?showinfo=0', 'https://www.youtube.com/embed/Y0Gox3X6yvM?showinfo=0', 'Spider-man 2', '2004', '127 min.', 'Sam Raimi', 'Danny Elfman', 'Alvin Sargent (Historia: David Koepp, Alfred Gough, Miles Millar. Cómic: Stan Lee, Steve Ditko)', 'Bill Pope', 'Tobey Maguire, Kirsten Dunst, Alfred Molina, Rosemary Harris, James Franco, J.K. Simmons, Donna Murphy, Daniel Gillies, Dylan Baker, Bill Nunn, Aasif Mandvi, Cliff Robertson, Elya Baskin, Mageina Tovah, Elizabeth Banks, Ted Raimi, Bruce Campbell, Willem Dafoe, Vanessa Ferlito', 'http://www.sonypictures.com/movies/spider-man2/', 'Han pasado dos años desde que el tranquilo Peter Parker dejó a Mary Jane Watson, su gran amor, y decidió seguir asumir sus responsabilidades como Spider-Man. Peter debe afrontar nuevos desafíos mientras lucha contra el don y la maldición de sus poderes equilibrando sus dos identidades: el escurridizo superhéroe Spider-Man y el estudiante universitario. Las relaciones con las personas que más aprecia están ahora en peligro de ser descubiertas con la aparición del poderoso villano de múltiples tentáculos Doctor Octopus, "Doc Ock". (FILMAFFINITY)'),
(17, 2, 10, 3, 'Spider-Man-3.jpg', 'https://www.youtube.com/embed/rTflCf1gKzM?showinfo=0', 'https://www.youtube.com/embed/g2ZRwMgtR0A?showinfo=0', 'Spider-man 3', '2007', '140 min.', 'Sam Raimi', 'Christopher Young', 'Alvin Sargent (Historia: Sam Raimi, Ivan Raimi. Cómic: Stan Lee, Steve Ditko)', 'Bill Pope', 'Tobey Maguire, Kirsten Dunst, James Franco, Thomas Haden Church, Topher Grace, James Cromwell, Bryce Dallas Howard, Rosemary Harris, J.K. Simmons, Theresa Russell, Cliff Robertson, Bruce Campbell, Dylan Baker, Bill Nunn, Lucy Gordon, Elizabeth Banks, Stan Lee', 'http://www.sonypictures.com/movies/spider-man3/', 'Tercera entrega de las aventuras del joven Peter Parker (Maguire). Parece que Parker ha conseguido por fin el equilibrio entre su devoción por Mary Jane y sus deberes como superhéroe. Pero, de repente, su traje se vuelve negro y adquiere nuevos poderes; también él se transforma, mostrando el lado más oscuro y vengativo de su personalidad. Bajo la influencia del nuevo traje, Peter se convierte en un ser egoísta que sólo se preocupa por sí mismo. Tiene, pues, que afrontar un dilema: disfrutar de sus nuevos poderes o seguir siendo un héroe compasivo. Mientras tanto, sobre él se cierne la amenaza de dos temibles enemigos: Venom y el Hombre de Arena. (FILMAFFINITY)'),
(18, 4, 4, 3, 'Star Wars 7.jpg', 'https://www.youtube.com/embed/FHbnQ5DUUF4?showinfo=0', 'https://www.youtube.com/embed/e7EO5z6cRjg?showinfo=0', 'Star Wars. Episodio VII: El despertar de la Fuerza', '2015', '135 min.', 'J.J. Abrams', 'John Williams', 'J.J. Abrams, Lawrence Kasdan, Michael Arndt (Personajes: George Lucas)', 'Daniel Mindel', 'Daisy Ridley, John Boyega, Harrison Ford, Adam Driver, Oscar Isaac, Carrie Fisher, Peter Mayhew, Domhnall Gleeson, Max von Sydow, Gwendoline Christie, Lupita Nyong''o, Andy Serkis, Anthony Daniels, Mark Hamill, Greg Grunberg, Kenny Baker, Simon Pegg, Christina Chong, Miltos Yerolemou, Thomas Brodie-Sangster, Ken Leung, Harriet Walter, Iko Uwais, Yayan Ruhian, Warwick Davis, Jessica Henwick, Daniel Craig, Billie Lourd, Judah Friedlander, Kevin Smith', 'http://www.starwars.com/news/category/star-wars-episode-vii-the-force-awakens', 'Treinta años después de la victoria de la Alianza Rebelde sobre la segunda Estrella de la Muerte (hechos narrados en el Episodio VI: El retorno del Jedi), la galaxia está todavía en guerra. Una nueva República se ha constituido, pero una siniestra organización, la Primera Orden, ha resurgido de las cenizas del Imperio Galáctico. A los héroes de antaño, que luchan ahora en la Resistencia, se suman nuevos héroes: Poe Dameron, un piloto de caza, Finn, un desertor de la Primera Orden, Rey, una joven chatarrera, y BB-8, un androide rodante. Todos ellos luchan contra las fuerzas del Mal: el Capitán Phasma, de la Primera Orden, y Kylo Ren, un temible y misterioso personaje que empuña un sable de luz roja. (FILMAFFINITY)'),
(19, 2, 13, 3, 'Titanic 2.jpg', 'https://www.youtube.com/embed/lxyjuT7-k9E?showinfo=0', 'https://www.youtube.com/embed/LlrF9Ytqtq4?showinfo=0', 'Titanic 2', '2010', '90 min.', 'Shane Van Dyke', 'Chris Cano, Chris Ridenhour', 'Shane Van Dyke', 'Alexander Yellen', 'Bruce Davison, Shane Van Dyke, Marie Westbrook, Brooke Burns, Michelle Glavan, Dylan Vox, Erica Duke, Myles Cranford, D.C. Douglas, Carey Van Dyke', 'http://www.theasylum.cc/product.php?id=174', 'En el 100º aniversario del viaje del Titanic, un moderno crucero de lujo bautizado como Titanic 2, sigue la ruta de su homónimo. Pero cuando un tsunami lanza un iceberg en la trayectoria del nuevo buque, los pasajeros y la tripulación deben luchar para evitar un destino similar. (FILMAFFINITY)'),
(20, 1, 14, 1, 'ocho apellidos vascos.jpg', 'https://www.youtube.com/embed/YfopzNHLp4o?showinfo=0', 'https://www.youtube.com/embed/Bgzwm8iE4Kk?showinfo=0', 'Ocho apellidos vascos', '2014', '98 min.', 'Emilio Martínez-Lázaro', 'Fernando Velázquez', 'Borja Cobeaga, Diego San José', 'Gonzalo F. Berridi, Juan Molina', 'Dani Rovira, Clara Lago, Carmen Machi, Karra Elejalde, Alfonso Sánchez, Alberto López, Aitor Mazo, Lander Otaola', '#', 'Rafa (Dani Rovira) es un joven señorito andaluz que no ha tenido que salir jamás de su Sevilla natal para conseguir lo único que le importa en la vida: el fino, la gomina, el Betis y las mujeres. Todo cambia cuando conoce una mujer que se resiste a sus encantos: es Amaia (Clara Lago), una chica vasca. Decidido a conquistarla, se traslada a un pueblo de las Vascongadas, donde se hace pasar por vasco para vencer su resistencia. Adopta el nombre de Antxon y varios apellidos vascos: Arguiñano, Igartiburu, Erentxun, Gabilondo, Urdangarín, Otegi, Zubizarreta... y Clemente. (FILMAFFINITY)'),
(21, 1, 14, 1, 'ocho apellidos catalanes.jpg', 'https://www.youtube.com/embed/9YsiE7ezjOs?showinfo=0', 'https://www.youtube.com/embed/6Es8xTB551Y?showinfo=0', 'Ocho apellidos catalanes', '2015', '99 min.', 'Emilio Martínez-Lázaro', 'Roque Baños', 'Borja Cobeaga, Diego San José', 'Juan Molina', 'Dani Rovira, Clara Lago, Karra Elejalde, Carmen Machi, Berto Romero, Belén Cuesta, Rosa María Sardà, Alfonso Sánchez, Alberto López, Agustín Jiménez, Esperanza Pedreño', '#', 'Las alarmas de Koldo (Karra Elejalde) se encienden cuando se entera de que su hija Amaia (Clara Lago), tras romper con Rafa (Dani Rovira), se ha enamorado de un catalán (Berto Romero). Decide entonces poner rumbo a Sevilla para convencer a Rafa de que lo acompañe a Cataluña para rescatar a Amaia de los brazos del joven y de su ambiente. Secuela de "Ocho apellidos vascos". (FILMAFFINITY)'),
(22, 1, 14, 1, 'las_aventuras_de_tadeo_jones_tadeo_jones_y_el_tesoro_de_los_incas.jpg', 'https://www.youtube.com/embed/9v7li8YED2M?showinfo=0', 'https://www.youtube.com/embed/TneI5ca9J58?showinfo=0', 'Las aventuras de Tadeo Jones (Tadeo Jones y el tesoro de los Incas)', '2012', '90 min.', 'Enrique Gato', 'Zacarías M. de la Riva', 'Neil Landau (Personaje: Enrique Gato)', 'Animation', 'Sin Reparto', '#', 'Debido a un malentendido, a Tadeo, un albañil soñador, lo confunden con un famoso arqueólogo y lo envían en una expedición al Perú. Con la ayuda de su fiel perro Jeff, una intrépida profesora, un loro mudo y un buscavidas, intentará salvar la mítica ciudad perdida de los Incas de una malvada empresa de cazatesoros. Adaptación del corto que ganó un Goya en 2004. (FILMAFFINITY)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productora`
--

CREATE TABLE IF NOT EXISTS `productora` (
`idProductora` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `web` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productora`
--

INSERT INTO `productora` (`idProductora`, `logo`, `nombre`, `web`) VALUES
(2, 'Universal_logo.jpg', 'Universal Studio', 'https://www.universalpictures.com/?__source=USMN.GNAV'),
(3, 'Warner_Bros.jpg', 'Warner Bros', 'http://www.warnerbros.es/'),
(4, 'walt-disney.jpg', 'Walt Disney Pictures', 'http://peliculas.disney.es/'),
(5, 'marvel-studios-logo.jpg', 'Marvel Studio', 'http://marvel.com/movies'),
(6, 'dc-comics-logo-725x725.jpg', 'DC Comics', 'http://www.dccomics.com/'),
(7, 'dreamworks-logo.jpg', 'Dreamworks', 'https://dreamworkspictures.com/'),
(8, 'dreamworks animation.jpg', 'Dreamworks Animation Home Entertainment', 'http://www.dreamworksanimation.com/'),
(9, '20th Century Fox Home Entertainment .jpg', '20th Century Fox Home Entertainment ', 'http://www.foxmovies.com/'),
(10, 'columbia.jpg', 'Columbia Pictures', 'http://www.sonypictures.com/movies/'),
(11, 'MGM.jpg', 'Metro Goldwyn Mayer ', 'http://www.mgm.com/'),
(12, 'paramount pictures.svg', 'Paramount Pictures', 'http://www.paramountpictures.es/'),
(13, 'AsylumLogo.jpg', 'Asylum', 'http://www.theasylum.cc/index.php'),
(14, 'telecinco cinema.jpg', 'Telecinco Cinema', 'http://www.telecinco.es/t5cinema/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE IF NOT EXISTS `series` (
`idseries` int(11) NOT NULL,
  `idgeneros_series` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `portada` varchar(200) NOT NULL,
  `temporadas_series` varchar(20) NOT NULL,
  `sinopsis` varchar(400) NOT NULL,
  `formato` varchar(100) NOT NULL,
  `duracion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`idalbum`), ADD KEY `fk_cantante_idx` (`idcantante`);

--
-- Indices de la tabla `cantante`
--
ALTER TABLE `cantante`
 ADD PRIMARY KEY (`idcantante`);

--
-- Indices de la tabla `generos_pelis`
--
ALTER TABLE `generos_pelis`
 ADD PRIMARY KEY (`idGenerosPelis`);

--
-- Indices de la tabla `generos_series`
--
ALTER TABLE `generos_series`
 ADD PRIMARY KEY (`idgeneros_series`);

--
-- Indices de la tabla `genero_musica`
--
ALTER TABLE `genero_musica`
 ADD PRIMARY KEY (`idgenero_musica`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
 ADD PRIMARY KEY (`idmusica`);

--
-- Indices de la tabla `pais_peli`
--
ALTER TABLE `pais_peli`
 ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`idpeliculas`), ADD KEY `fk_generos_pelis_idx` (`idgeneros_pelis`);

--
-- Indices de la tabla `productora`
--
ALTER TABLE `productora`
 ADD PRIMARY KEY (`idProductora`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
 ADD PRIMARY KEY (`idseries`), ADD KEY `fk_generos_series_idx` (`idgeneros_series`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
MODIFY `idalbum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cantante`
--
ALTER TABLE `cantante`
MODIFY `idcantante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `generos_pelis`
--
ALTER TABLE `generos_pelis`
MODIFY `idGenerosPelis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `generos_series`
--
ALTER TABLE `generos_series`
MODIFY `idgeneros_series` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `genero_musica`
--
ALTER TABLE `genero_musica`
MODIFY `idgenero_musica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
MODIFY `idmusica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais_peli`
--
ALTER TABLE `pais_peli`
MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `idpeliculas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `productora`
--
ALTER TABLE `productora`
MODIFY `idProductora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
MODIFY `idseries` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
ADD CONSTRAINT `fk_cantante` FOREIGN KEY (`idcantante`) REFERENCES `cantante` (`idcantante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
ADD CONSTRAINT `fk_generos_pelis` FOREIGN KEY (`idgeneros_pelis`) REFERENCES `generos_pelis` (`idGenerosPelis`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `series`
--
ALTER TABLE `series`
ADD CONSTRAINT `fk_generos_series` FOREIGN KEY (`idgeneros_series`) REFERENCES `generos_series` (`idgeneros_series`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
