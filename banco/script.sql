create database ar_condicionado;

use ar_condicionado;

CREATE TABLE `tbprodutos` (
  `id_produto` int(11) NOT NULL,
  `descri_produto` varchar(100) NOT NULL,
  `resumo_produto` varchar(1000) DEFAULT NULL,
  `imagem_produto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbprodutos` (`id_produto`, `descri_produto`, `resumo_produto`, `imagem_produto`) VALUES
(1, 'Ar-condicionado', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'ar condicionado.jpg'),
(2, 'Ar-condicionado', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'ar condicionado.jpg'),
(3, 'Ar-condicionado', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'ar condicionado.jpg'),
(4, 'Ar-condicionado', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'ar condicionado.jpg'),
(5, 'Ar-condicionado', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'ar condicionado.jpg'),
(6, 'Ar-condicionado Inverter', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Ar-condicionado Inverter.jpg'),
(7, 'Ar-condicionado Inverter', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Ar-condicionado Inverter.jpg'),
(8, 'Ar-condicionado Inverter', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Ar-condicionado Inverter.jpg'),
(9, 'Ar-condicionado Inverter', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Ar-condicionado Inverter.jpg'),
(10, 'Ar-condicionado Inverter', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Ar-condicionado Inverter.jpg'),
(11, 'Multi Split', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'multi split.jpg'),
(12, 'Multi Split', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'multi split.jpg'),
(13, 'Multi Split', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'multi split.jpg'),
(14, 'Multi Split', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'multi split.jpg'),
(15, 'Multi Split', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'multi split.jpg'),
(16, 'Energia Solar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Energia Solar.jpg'),
(17, 'Energia Solar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Energia Solar.jpg'),
(18, 'Energia Solar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Energia Solar.jpg'),
(19, 'Energia Solar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Energia Solar.jpg'),
(20, 'Energia Solar', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, blanditiis veniam? Veniam maiores, earum eum rem aut, dicta unde quas corporis repudiandae amet suscipit magnam beatae. Dolor cum neque quos.', 'Energia Solar.jpg');
