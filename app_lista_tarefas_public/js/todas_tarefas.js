
function editar(id, textTarefa){
	
	let form = document.createElement("form");
	form.action = "tarefa_controller.php?acao=atualizar";
	form.method = "post";
	form.className = "d-flex flex-row"

	let input = document.createElement("input");
	input.type = "text";
	input.name = "tarefa";
	input.className = "form-control";
	input.value = textTarefa;

	let inputHidden = document.createElement("input");
	inputHidden.type = "hidden";
	inputHidden.name = "id";
	inputHidden.value = id;

	let btn = document.createElement("button");
	btn.type = "submit";
	btn.className = "btn btn-info";
	btn.innerHTML = "Atualizar";

	form.appendChild(input);
	form.appendChild(inputHidden);
	form.appendChild(btn);

	let tarefa = document.getElementById("tarefa_"+id);

	tarefa.innerHTML = "";
	tarefa.insertBefore(form, tarefa[0]);

}

function remover(id){
	location.href = "todas_tarefas.php?acao=remover&id="+id;
}

function realizada(id){
	location.href = "todas_tarefas.php?acao=realizada&id="+id;
}