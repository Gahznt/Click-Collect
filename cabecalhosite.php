<html>
<head><meta charset="utf-8">
	<title>	Painel VBLOG</title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coletas.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a  class="navbar-brand" href="painel.php"><img src="logo_vblog.png" width="250" height="55"></a>
		<div class="navbar nav">
			<ul class="navbar-nav me-auto mb-2 mb-md-0" >
			<li class="nav-item"> <a class="btn" href="painel.php">Painel</a></li>
			<li class="nav-item">
			<div class="dropdown">
    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
      Consultas
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="lista_recebimento.php">Relatorio recebimento FAST</a>
      <a class="dropdown-item" href="lista.php">Relatorio Click</a>
    </div>
  </div>
			</li>	
			<li class="nav-item"> <a class="btn text-danger" href="logout.php">Deslogar</a> </li>	
			<li class="nav-item"> <a class="btn btn-danger" href="painel_recebimento.php">Recebimento FAST</a> </li>	
			</ul>
		</div>
	</nav>
    <div class="container">
    <div class="principal">