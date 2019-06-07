



<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      SIGE MKT
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fontes e icones     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Arquivos CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="assets/css/home.css" rel="stylesheet"/>


</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="120">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="SIGE MARKETING E VENDAS" data-placement="bottom" target="_blank">
          SigeMKT
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        @if (Route::has('login'))
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i>Home</a>
            </li>
          @auth
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link"><i class="fas fa-chart-pie"></i>Relatórios</a>
          </li>
          <li class="nav-item">
                <a href="{{ url('guideapi') }}" class="nav-link"><i class="fa fa-code" aria-hidden="true"></i>API</a>
              </li>
          @else 
          <li class="nav-item">
                <a href="{{ url('guideapi') }}" class="nav-link"><i class="fa fa-code" aria-hidden="true"></i>API</a>
              </li>
          <li class="nav-item">
            <a href="{{ url('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i>Login</a>
          </li>
          @endauth
        </ul>
         @endif
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" data-parallax="true" style="background-image: url(assets/img/bg03.jpg);">
    <div class="filter"></div>
    <div class="container space-nav">
      <div class="motto title-brand">
        <h2 class="presentation-subtitle">Guia API Marketing e Vendas</h2>
        <br/>
      
      </div>
    </div>
  </div>
    <div class="section landing-section">
      <div class="container">
          <div class="tim-title">
                <h4> Lista de Códigos de Sucesso</h4>
                <p>A API usa o seguinte código HTTP para indicar retornos de sucesso comuns:</p>
            </div>
            <div class="row plan">
                <div class="table-responsive no-padding">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Status HTTP</th>
                                <th>Descrição</th>
                                <th>Método HTTP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>200</td>
                                <td>Indica que o processamento foi realizado corretamente e o retorno poderá ser consultado no corpo do HTTP Response</td>
                                <td>GET</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

      <div class="section landing-section">
      <div class="container">
          <div class="tim-title">
                <h4>Lista de Códigos de Erro</h4>
                <p>A API usa os seguintes códigos HTTP para indicar erros comuns:</p>
            </div>
            <div class="row plan">
                <div class="table-responsive no-padding">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Status HTTP</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>422</td>
                                    <td>Exceções de negócio</td>
                                </tr>
                                <tr>
                                    <td>400</td>
                                    <td>Requisição Mal Formada</td>
                                </tr>
                                <tr>
                                    <td>401</td>
                                    <td>Requisição Requer Autenticação</td>
                                </tr>
                                <tr>
                                    <td>403</td>
                                    <td>Requisição Negada</td>
                                </tr>
                                <tr>
                                    <td>404/4040</td>
                                    <td>Recurso não Encontrado</td>
                                </tr>
                                <tr>
                                    <td>405</td>
                                    <td>Método não Permitido</td>
                                </tr>
                                <tr>
                                    <td>408</td>
                                    <td>Tempo esgotado para a requisição</td>
                                </tr>
                                <tr>
                                    <td>413</td>
                                    <td>Requisição excede o tamanho máximo permitido</td>
                                </tr>
                                <tr>
                                    <td>415</td>
                                    <td>Tipo de mídia inválida (falta de informar o content-type correto, ver JSON)</td>
                                </tr>
                                <tr>
                                    <td>429</td>
                                    <td>Requisição excede a quantidade máxima de chamadas permitidas à API</td>
                                </tr>
                                <tr>
                                    <td>500/1010</td>
                                    <td>Erro de servidor</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-lg-12 text-center">
                    <h5>Os erros citados acima serão retornados no seguinte padrão:</h5>
                    <div class="text-left">
                        <div class="">
                            <pre class="prettyprint">
                                {
                                "errors": [
                                        {
                                            "msg": "Você não tem permissão para acessar o recurso desejado",
                                            "code": "401",
                                        }
                                    ]
                                }
                            </pre>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  <div class="section landing-section">
      <div class="container">
          <div class="tim-title">
                <h4> Lista de Endpoints </h4>
                <p>A API retorna os seguintes Endpoints:</p>
            </div>
            <div class="row plan">
                <div class="table-responsive no-padding">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Endpoints</th>
                                <th>Nome</th>
                                <th>O que Retorna</th>
                                <th>Método HTTP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/api/campanhas">http://sigemv.ml/api/campanhas</td>
                                <td><p>Campanhas</p></td>
                                <td><p>'ID'</p>
                                    <p>'DATA_INICIO'</p>
                                    <p>'DATA_TERMINO'</p>
                                    <p>'MIDIA'</p>
                                    <p>'FINALIZADA'</p>
                                    <p>'VARIAÇÃO_DE_VENDAS'</p>
                                    </td>
                                <td>GET</td>
                            </tr>
                                <tr>
                                    <td><a href="/api/melhoriacontinuas">http://sigemv.ml/api/melhoriacontinuas</td>
                                <td><p>Melhoria Contínua</p></td>
                                <td><p>'ID'</p>
                                    <p>'COD_MELHORIA'</p>
                                    <p>'MELHORIA_REQ'</p>
                                    <p>'AREA_FUNCIONAL'</p>
                                <td>GET</td>
                           {{--  </tr>
                                <tr>
                                    <td><a href="/api/analisevendas">http://sigemv.ml/api/analisevendas</td>
                                <td><p>Análise de Vendas</p></td>
                                <td><p>'ID'</p>
                                    <p>'COD_PROD'</p>
                                    <p>'NOME_PROD'</p>
                                    <p>'QUANT_VEND_ATUAL'</p>
                                    <p>'QUANT_VEND_ANTERIOR'</p>
                                    <p>'VARIACAO_VENDAS'</p>
                                    <p>'ANUNCIADO'</p></td>
                                <td>GET</td>--}}
                           {{-- </tr>
                                <tr>
                                    <td><a href="api/vendas">http://sigemv.ml/api/vendas</td>
                                <td><p>Vendas</p></td>
                                <td><p>'ID'</p>
                                    <p>'COD_PROD'</p>
                                    <p>'NOME_PROD'</p>
                                    <p>'QUANT_VEND_ATUAL'</p>
                                    <p>'QUANT_VEND_ANTERIOR'</p>
                                    <p>'VARIACAO_VENDAS'</p>
                                    <p>'ANUNCIADO'</p></td>
                                <td>GET</td>
                            </tr>--}}
                                <tr>
                                    <td><a href="api/integracoes">http://sigemv.ml/api/integracoes</td>
                                <td><p>Integração</p></td>
                                <td><p>'ID'</p>
                                    <p>'PROD_MAIS_VEND'</p>
                                    <p>'ITENS_EM_ANUNCIO'</p>
                                    <p>'NOME_PROMOCAO'</p>
                                    <p>'CUSTO_CAMPANHA'</p>
                                    <p>'VALOR_GASTO'</p>
                                    <p>'VALOR_PREVISTO'</p>
                                    <p>'QNT_VENDIDO'</p></td>
                                <td>GET</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



  <footer class="footer">
      <div class="container">
          <div class="row">
              <nav class="footer-nav">

              </nav>
              <div class="credits ml-auto">
                  <span class="copyright">
                      © <script>document.write(new Date().getFullYear())</script>, feito com <i class="fa fa-heart heart"></i> por <a href="/">SigeMKT</a>
                  </span>
              </div>
          </div>
      </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
</body>

</html>