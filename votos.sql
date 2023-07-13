
CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nombre_cand` varchar(100) NOT NULL,
  `nombre_part` varchar(100) NOT NULL,
  `foto_cand` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Tipo_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `votante` (
  `id` int(11) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `edad` int(5) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `votante`
  ADD PRIMARY KEY (`id`);

/*ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;*/

ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `votante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `usuarios` (`id`, `Nombre`, `Usuario`, `Password`, `Tipo_usuario`) VALUES
(1, 'Administrador', 'admin', '123', 'Admin'),
(2, 'Votante', 'votante', '123', 'Usuario');

INSERT INTO `votante` (`id`, `cedula`, `edad`, `sexo`, `departamento`, `id_candidato`, `estado`) VALUES
(1, '111', 25, 'Masculino', 'Chuquisaca', 1, 'Nulo'),
(2, '124', 23, 'Femenino', 'Oruro', 1, 'Correcto'),
(3, '235', 21, 'Femenino', 'Potosi', 1, 'Correcto'),
(4, '451', 20, 'Masculino', 'Santa Cruz', 1, 'Correcto'),
(5, '789', 85, 'Femenino', 'Beni', 1, 'Correcto'),
(6, '512', 25, 'Masculino', 'Beni', 2, 'Correcto'),
(7, '365', 25, 'Masculino', 'Pando', 2, 'Correcto'),
(8, '486', 33, 'Masculino', 'Tarija', 2, 'Nulo'),
(9, '478', 33, 'Masculino', 'Cochabamba', 2, 'Nulo'),
(10, '241', 55, 'Femenino', 'La Paz', 3, 'Nulo'),
(11, '557', 22, 'Masculino', 'Tarija', 3, 'Correcto');