<?php

	$acao = 'recuperar';
	require 'tarefa_controller.php';
?>

<!DOCTYPE html>
	
	<?php
		include("php/head.php");
	?>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

								<?php foreach($tarefas as $index => $tarefa) { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
											<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>

										<?php if($tarefa->status === 'pendente'){ ?>

											<i 
												class="fas fa-edit fa-lg text-info" 
												onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')">
											</i>
											<i 
												class="fas fa-check-square fa-lg text-success" 
												onclick="realizada(<?= $tarefa->id ?>)">		
											</i>

										<?php } ?>

										</div>
									</div>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/todas_tarefas.js"></script>
	</body>
</html>