<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Criando gráficos com ChartJS e CodeIgniter</h1>
		</div>
	</div>
	<div class="col-md-12">
		<p class="lead">Escolha nas opções abaixo o gráfico que deseja visualizar:</p>
		<p class="text-center">
			<a href="<?=base_url('donnutchart')?>" class="btn btn-success">DonnutChart</a>
			<a href="<?=base_url('piechart')?>" class="btn btn-warning">PieChart</a>
			<a href="<?=base_url('linechart')?>" class="btn btn-default">LineChart</a>
			<a href="<?=base_url('barchart')?>" class="btn btn-info">BarChart</a>
		</p>
	</div>
	<canvas class="col-md-12" id="<?=$chart?>-container" style="height:600px;">

	</canvas>
</div>

<?php $this->load->view('commons/rodape'); ?>
