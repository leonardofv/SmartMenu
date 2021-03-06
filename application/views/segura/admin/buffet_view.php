<?php 

/**
*  	PIZZARIA EXPRESSO AGENCIA07
* 
*	Sistema para Apresentação do Cardápio de Pizzarias Expresso e Padrão 
*	Desenvolvido para facilitar a apresentação do cardápio online. Em todas as plataformas.
*
* @package		Pizzaria Expresso 
* @version  	1.0
* @author   	Agência07
* @copyright 	Copyright (c) 2015, Agência Zero7 LTDA
* @link 		http://pizzaria.agencia07.com.br/
*
*
*/

?>
<section class="col-md-8">
		<div class="panel panel-success">
  			<div class="panel-heading">Buffets Cadastradas</div>
  			<div class="panel-body">
   				<table class="table">
   				<tr>
   				<td>Imagem</td>
				<td>ID</td>
				<td>Nome</td>
				<td>Estoque</td>
				<td>Edição</td>
				</tr>
				<?php foreach ($prato as $row) { ?>
				<tr>
				<td>
				<?php 
					$ext = array('.jpg', '.png', '.gif');
				?>
				<img src="<?php echo base_url(); ?>uploads/<?php echo $row->imagem; ?>.jpg" height="70px"/></td>
				<td><?php echo $row->ID; ?></td>
				<td><?php echo $row->titulo; ?></td>
				<td><?php echo $row->qntd; ?></td>
				<td><a href="<?php echo base_url(); ?>index.php/administracao/excluirBu/<?php echo $row->ID ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a> <a href="<?php echo base_url(); ?>index.php/administracao/editarBu/<?php echo $row->ID ?>"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
				</tr>
				<?php } ?>		 
  				</table>
  				
  			</div>
		</div>
</section>
<section class="col-md-4">
	<div class="panel panel-primary">
  		<div class="panel-heading">Buffet - Inserir</div>
  		<div class="panel-body">			
        		<?php echo form_open('administracao/buffet_form'); ?>
				    <label for="titulo">Buffet:</label>
				    	<input type="text" size="20" class="form-control" id="titulo" name="titulo"/>
				        <br/>
				    <label for="preco">Valor:</label>
				    	<input type="text" size="20" class="form-control" id="valor" name="preco"/>
				        <br/>
				     <label for="estoque">Estoque:</label>
				    	<input type="text" size="20" class="form-control" id="qntd" name="qntd"/>
				        <br/>
				    <label for="textarea">Detalhes (Restante: <span id="contador">200</span>):</label>
				        <textarea id="texto" onkeyup="limitaTextarea(this.value)" class="form-control" name="descricao"></textarea>				
				        <br/>
				    <input  class="btn btn-primary" type="submit" value="Cadastrar"/>
       			</form>
       			<div class="mensagem"></div>	  				
  		</div>
	</div>
	<div class="center">
		<a href="<?php echo base_url(); ?>index.php/administracao/entrarALC"><button class="btn btn-small btn-pizza"><i class="fa fa-cutlery"></i> NOVO PEDIDO</button></a>	
		<a href="<?php echo base_url(); ?>index.php/administracao/entrarPIZZA"><button class="btn btn-small btn-pizza"><i class="fa fa-cutlery"></i> NOVA PIZZA</button></a>	
		<div class="clearfix"> </div>
		<hr class="divisor" /> 
	</div>
	<p><code>Painel de Controle em desenvolvimento.</code></p>
	<p>A agência07 preza pela segurança de dados de nossos clientes, esse nosso diferencial é, fazer o que tem que ser feito, para maior segurança de toda a aplicação. Essa versão é a 1.0. Atualizaremos em breve.</p>
</section>
</body>

