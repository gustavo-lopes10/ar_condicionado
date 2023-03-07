<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Ar Condicionado</title>
</head>
<body ng-app="meuApp" ng-controller="meuController">
    <div>
        <!-- inclusão do header  -->
        <?php include 'header.html';?>
        <!-- fim do header  -->
    </div>
    <a name="home"></a>
<div class="em_linha">
    <div>
        <img src="img/energia_solar.png" alt="imagem energia solar" class="imagem">
    </div>
    <div class="vertical">
        <h1 class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto qui amet harum.</h1>
        <img src="ícones/linha.svg" alt="linha" class="icone_texto">
    </div>
</div>
    <div class="visao_valores">
        <div><img src="img/visao1.jpg" alt="visao"><p>VISÃO<br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></div>
        <div><img src="img/visao2.png" alt="visao"><p>VISÃO<br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></div>
        <div><img src="img/valores.jpg" alt="valores"><p>VALORES<br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></div>
    </div><br><br>

<main>
<!-- começo de serviços -->
    <a name="servicos">&nbsp;</a>
<h1 class="titulo">Serviços</h1>
        <img src="ícones/linha.svg" alt="linha" class="icone_titulo"><br><br>
    <div class="linha_servicos fotos">
        <div><img src="img/controle_qualidade.jpg" alt="controle de qualidade"></div>

            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

        <div><img src="img/venda.jpg" alt="venda"></div>

            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

        <div><img src="img/transportes.jpg" alt="transportes"></div>

            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
    </div>
    <div class="linha_servicos fotos">
            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

        <div><img src="img/instalacao.jpg" alt="instalacao"></div>

            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

        <div><img src="img/conforto.jpg" alt="conforto"></div>

            <div class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

        <div><img src="img/clientes.jpg" alt="clientes"></div>
    </div>
    <!-- fim de serviços -->

    <!-- começo de sobre nós -->
    <a name="sobre">&nbsp;</a>
<div class="em_linha_sobre">
    <div><br><br><br><br>
        <h1 class="titulo">Sobre nós</h1>
        <img src="ícones/linha.svg" alt="linha" class="icone_titulo_sobre">
        <p class="texto_sobre">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nostrum soluta vero doloremque eos optio perferendis laudantium? 
            Eius et, esse voluptatibus impedit porro facilis molestias autem ipsum maiores. 
            Ducimus, veritatis fugiat! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Architecto, ad excepturi reiciendis earum consectetur aliquam fugit commodi velit, 
            vero blanditiis obcaecati praesentium? Eligendi delectus provident, saepe quibusdam iure voluptatem necessitatibus.</p>
    </div>
    <div class="vertical">
        <img src="img/logo.png" alt="logo" class="logo_sobre">
    </div>
</div>
<!-- fim de sobre nós -->

<!-- produtos ao passar o mouse -->
    <a name="produtos">&nbsp;</a>
<div>
<div><br>
    <h1 class="titulo">Produtos</h1>
    <img src="ícones/linha.svg" alt="linha" class="icone_titulo">
</div>
    <div class="linha w50">
        <div ng-mouseover="funcaoArcondicionado()">
            Ar-condicionado
        </div>
        <div ng-mouseover="funcaoInverter()">
            Ar-condicionado Inverter
        </div>
        <div ng-mouseover="funcaoMultisplit()">
            Multi Split
        </div>
        <div ng-mouseover="funcaoEnergiasolar()">
            Energia Solar
        </div>
    </div>

    <div class="linha w100" ng-show="arcondicionado"> 
        <div>
            <a href="produtos.php?id_produto=1">
                 <img src="img/air-conditioner-1.jpg" alt="ar condicionado" >
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=2">
                 <img src="img/air-conditioner-1.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=3">
                 <img src="img/air-conditioner-1.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=4">
                 <img src="img/air-conditioner-1.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=5">
                <img src="img/air-conditioner-1.jpg" alt="ar condicionado">
            </a>
        </div>
    </div>

    <div class="linha w100" ng-show="inverter">
        <div>
            <a href="produtos.php?id_produto=6">
                <img src="img/air-condiotioner-2.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=7">
                <img src="img/air-condiotioner-2.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=8">
                <img src="img/air-condiotioner-2.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=9">
                <img src="img/air-condiotioner-2.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=10">
                <img src="img/air-condiotioner-2.jpg" alt="ar condicionado">
            </a>
        </div>
    </div>

    <div class="linha w100" ng-show="multisplit">
        <div>
            <a href="produtos.php?id_produto=11">
                <img src="img/air-conditioner-3.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=12">
                <img src="img/air-conditioner-3.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=13">
                <img src="img/air-conditioner-3.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=14">
                <img src="img/air-conditioner-3.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=15">
                <img src="img/air-conditioner-3.jpg" alt="ar condicionado">
            </a>
        </div>
    </div>

    <div class="linha w100" ng-show="energiasolar">
        <div>
            <a href="produtos.php?id_produto=16">
                <img src="img/air-conditioner-4.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=17">
                <img src="img/air-conditioner-4.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=18">
                <img src="img/air-conditioner-4.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=19">
                <img src="img/air-conditioner-4.jpg" alt="ar condicionado">
            </a>
        </div>
        <div>
            <a href="produtos.php?id_produto=20">
                <img src="img/air-conditioner-4.jpg" alt="ar condicionado">
            </a>
        </div>
    </div>

    <script>
        var app = angular.module('meuApp', []);
        app.controller('meuController', function($scope){
            $scope.arcondicionado = true;
            $scope.inverter = false;
			$scope.multisplit = false;
            $scope.energiasolar = false;

            $scope.funcaoArcondicionado = function() {
				$scope.arcondicionado = true;
				$scope.inverter = false;
				$scope.multisplit = false;
                $scope.energiasolar = false;
			}

			$scope.funcaoInverter = function() {
				$scope.inverter = true;
				$scope.arcondicionado = false;
				$scope.multisplit = false;
                $scope.energiasolar = false;
			}

			$scope.funcaoMultisplit = function() {
				$scope.multisplit = true;
				$scope.arcondicionado = false;
				$scope.inverter = false;
                $scope.energiasolar = false;
			}

			$scope.funcaoEnergiasolar = function() {
				$scope.energiasolar = true;
				$scope.arcondicionado = false;
				$scope.inverter = false;
				$scope.multisplit = false;
			}
        });
    </script>
<!-- fim de produtos ao passar o mouse -->
</div>
</main>
    <!-- inclusão de rodapé  -->
    <a name="contato">&nbsp;</a>
    <?php include 'footer.html';?>
    <!-- fim do rodapé -->

    <!-- seta  -->
    <div class="seta">
        <a href="index.php">
            <img src="img/seta.png" alt="seta de atualizar página">
        </a>
    </div>
</body>
</html>