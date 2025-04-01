$(document).ready(() => {
	
	$('#documentacao').on('click', () => {

		$.get('documentacao.html', data => { 
			$('#pagina').html(data)
		})
	})

	$('#suporte').on('click', () => {

		$.get('suporte.html', data => { 
			$('#pagina').html(data)
		})
	})

	//ajax
	$('#competencia').on('change', e => {

		let competencia = $(e.target).val()
		
		$.ajax({
			type: 'GET',
			url: 'app.php',
			data: `competencia=${competencia}`, //x-www-form-urlencoded
			dataType: 'json',
			success: dados => { 
				$('#numeroVendas').html(dados.numeroVendas)
				$('#totalVendas').html(dados.totalVendas)
				$('#clientesAtivos').html(dados.clientesAtivos)
				$('#clientesInativos').html(dados.clientesInativos)
				$('#despesas').html(dados.despesas)
			},
			error: erro => { console.log(erro) }
		})

		//método, url, dados, sucesso, erro
	})
})