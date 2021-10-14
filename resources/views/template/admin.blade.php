<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Notícias</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>	
		<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet"/>
		<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet"/>
		<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
		<link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css') }}" rel="stylesheet" />
	</head>
	<body class="g-sidenav-show  bg-gray-100">
		<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
			<div class="sidenav-header">
				<a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
					<span class="ms-1 font-weight-bold">Admin Page</span>
				</a>
			</div>
			<hr class="horizontal dark mt-0"/>
			<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link  " href="/noticias">
							<span class="nav-link-text ms-1">Notícias</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="/usuarios">
							<span class="nav-link-text ms-1">Usuários</span>
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
			<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
				<div class="container-fluid py-1 px-3">
					<nav aria-label="breadcrumb">
						<h6 class="font-weight-bolder mb-0">@yield("titulo")</h6>
					</nav>
				</div>
			</nav>
			
			
			
			<div class="container-fluid py-4">
				
				@if (Session::get("status") == "salvo")
					<div class="alert alert-success" role="alert">
						<strong>Salvo com sucesso!</strong>
					</div>
				@endif
				
				@if (Session::get("status") == "excluido")
					<div class="alert alert-danger" role="alert">
						<strong>Excluído com sucesso!</strong>
					</div>
				@endif
				
				<div class="row">
					<div class="col-12">
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>Formulário</h6>
							</div>
							<div class="card-body pt-0 pb-2">
								@yield("formulario")
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>Tabela</h6>
							</div>
							<div class="card-body pt-0 pb-2">
								<div class="table-responsive p-0">
									@yield("tabela")
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
	<script src="{{ asset('js/popper.min.js'); }}"></script>
	<script src="{{ asset('js/bootstrap.min.js'); }}"></script>
	<script src="{{ asset('js/perfect-scrollbar.min.js'); }}"></script>
	<script src="{{ asset('js/smooth-scrollbar.min.js'); }}"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
		  var options = {
			damping: '0.5'
		  }
		  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="{{ asset('js/soft-ui-dashboard.js'); }}"></script>
</html>