<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Site do Ismael Strada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Este é um site exemplo para estudo de php, desenvolvido na disciplina Componente Curricular Complementar,
    	do curso de Tecnologia em Análise e desenvolvimento de Sistemas, da Unoesc Xanxerê" content="">
    <meta name="author" content="Ismael Strada - isma_xxe@hotmail.com">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">Ismael Strada</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="page1.php">Pagina 1</a></li>
              <li><a href="page2.php">Pagina 2</a></li>
              <li><a href="aboutme.php">About me</a></li>
              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
      	
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
		<div class="span9">
        	
          <div class="hero-unit">
            <h1>Contato</h1>
            
          </div>
          
          
          <form action="formulario.php" method="POST">
          	
          		<fieldset>
          			<legend>Formulário de Contato</legend>
          			
          			
          			<input type="hidden" name="pagina" value="contato">
          			
          			<label for="idNome">Nome: </label><br />
          			<input type="text" name="nome" id="idNome"/>
          			
          			<label for="idEmail">E-mail: </label><br />
          			<input type="email" name="email" id="idEmail"/>
          			
          			<label for="idMensagem">Mensagem: </label><br />
          			<textarea name="mensagem" id="idMensagem" rows="3"></textarea>
          			
          			<br />
          			
          			<button class="btn btn-primary">Enviar Informações</button>
          			
          		</fieldset>
          </form>
          
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>



