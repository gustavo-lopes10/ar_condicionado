create database ar_condicionado;

use ar_condicionado;

CREATE TABLE `tbprodutos` (
  `id_produto` int(11) NOT NULL,
  `descri_produto` varchar(100) NOT NULL,
  `resumo_produto` varchar(1000) DEFAULT NULL,
  `imagem_produto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbprodutos` (`id_produto`, `descri_produto`, `resumo_produto`, `imagem_produto`) VALUES
(1, 'Ar-condicionado', 'Este modelo conta com um sistema de refrigeração adequado para clientes que querem economizar, ele refrigera o ambiente gastando pouca energia.', 'ar condicionado.jpg'),
(2, 'Ar-condicionado', 'Este modelo é o melhor para ambientes um pouco maiores. Pois ele ocupa um espaço maior que os modelos comuns existentes hoje em dia no mercado. Mas com um rendimento melhor do que eles.', 'ar condicionado.jpg'),
(3, 'Ar-condicionado', 'Este Ar Condicionado é o ideal para lugares pequenos, pois ele ocupa menos espaço, mas sem perder o rendimento de um ótimo Ar Condicionado.', 'ar condicionado.jpg'),
(4, 'Ar-condicionado', 'Este modelo é o melhor e mais moderno Ar Condicionado do mercado. Combina eficiência e ecônomia no mesmo produto.', 'ar condicionado.jpg'),
(5, 'Ar-condicionado', 'O redimento desse Ar Condicionado é muito bom. Conseguindo refrigerar ambientes grandes com muita eficiência e ecônomia.', 'ar condicionado.jpg'),
(6, 'Ar-condicionado Inverter', 'Este modelo conta com um sistema de refrigeração adequado para clientes que querem economizar, ele refrigera o ambiente gastando pouca energia.', 'Ar-condicionado Inverter.jpg'),
(7, 'Ar-condicionado Inverter', 'Este modelo é o melhor para ambientes um pouco maiores. Pois ele ocupa um espaço maior que os modelos comuns existentes hoje em dia no mercado. Mas com um rendimento melhor do que eles.', 'Ar-condicionado Inverter.jpg'),
(8, 'Ar-condicionado Inverter', 'Este Ar Condicionado Inverter é o ideal para lugares pequenos, pois ele ocupa menos espaço, mas sem perder o rendimento de um ótimo Ar Condicionado.', 'Ar-condicionado Inverter.jpg'),
(9, 'Ar-condicionado Inverter', 'Este modelo é o melhor e mais moderno Ar Condicionado Inverter do mercado. Combina eficiência e ecônomia no mesmo produto.', 'Ar-condicionado Inverter.jpg'),
(10, 'Ar-condicionado Inverter', 'O redimento desse Ar Condicionado Inverter é muito bom. Conseguindo refrigerar ambientes grandes com muita eficiência e ecônomia.', 'Ar-condicionado Inverter.jpg'),
(11, 'Multi Split', 'Este modelo conta com um sistema de refrigeração adequado para clientes que querem economizar, ele refrigera o ambiente gastando pouca energia.', 'multi split.jpg'),
(12, 'Multi Split', 'Este modelo é o melhor para ambientes um pouco maiores. Pois ele ocupa um espaço maior que os modelos comuns existentes hoje em dia no mercado. Mas com um rendimento melhor do que eles.', 'multi split.jpg'),
(13, 'Multi Split', 'Este Multi Split é o ideal para lugares pequenos, pois ele ocupa menos espaço, mas sem perder o rendimento de um ótimo Multi Split.', 'multi split.jpg'),
(14, 'Multi Split', 'Este modelo é o melhor e mais moderno Multi Split do mercado. Combina eficiência e ecônomia no mesmo produto', 'multi split.jpg'),
(15, 'Multi Split', 'O redimento desse Multi Split é muito bom. Conseguindo refrigerar ambientes grandes com muita eficiência e ecônomia.', 'multi split.jpg'),
(16, 'Energia Solar', 'Este modelo conta com um sistema de refrigeração adequado para clientes que querem economizar, ele refrigera o ambiente gastando pouca energia.', 'Energia Solar.jpg'),
(17, 'Energia Solar', 'Este modelo é o melhor para ambientes um pouco maiores. Pois ele ocupa um espaço maior que os modelos comuns existentes hoje em dia no mercado. Mas com um rendimento melhor do que eles.', 'Energia Solar.jpg'),
(18, 'Energia Solar', 'Este Ar Condicionado que usa a energia solar é o ideal para lugares pequenos, pois ele ocupa menos espaço, mas sem perder o rendimento de um ótimo produto.', 'Energia Solar.jpg'),
(19, 'Energia Solar', 'Este modelo é o melhor e mais moderno do mercado. Combina eficiência e ecônomia no mesmo produto.', 'Energia Solar.jpg'),
(20, 'Energia Solar', 'O redimento desse é muito bom. Conseguindo refrigerar ambientes grandes com muita eficiência e ecônomia.', 'Energia Solar.jpg');
