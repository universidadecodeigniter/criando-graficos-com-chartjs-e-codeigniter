<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index()
	{
		$data['chart'] = $this->uri->segment(1);
		$this->load->view('home',$data);
	}

	public function Donnutchart()
	{
		$dados['tarefas'] = array(
			"labels" => array("Trabalho","Escrever livro e tutoriais","Redes Sociais","Assistir TV","Dormir"),
			"datasets" => array(
				array(
					"label" => "Tempo gasto em tarefas diárias",
					"data" => array(6,4,2,4,8),
					"backgroundColor" => array('rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)'),
					"borderColor" => array('rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
					"borderWidth" => 1
				)
			)
		);
		$dados['opcoes'] = array(
			"title" => array(
				"display" => true,
				"text" => "DonnutChart"
			)
		);

		echo json_encode($dados);
	}

	public function Piechart()
	{
		$dados['tarefas'] = array(
			"labels" => array("Trabalho","Escrever livro e tutoriais","Redes Sociais","Assistir TV","Dormir"),
			"datasets" => array(
				array(
					"label" => "Tempo gasto em tarefas diárias",
					"data" => array(6,4,2,4,8),
					"backgroundColor" => array('rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)'),
					"borderColor" => array('rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
					"borderWidth" => 1
				)
			)
		);
		$dados['opcoes'] = array(
			"title" => array(
				"display" => true,
				"text" => "PieChart"
			)
		);

		echo json_encode($dados);
	}

	public function Linechart()
	{
		$dados['tarefas'] = array(
			"labels" => array("Trabalho","Escrever livro e tutoriais","Redes Sociais","Assistir TV","Dormir"),
			"datasets" => array(
				array(
					"label" => "Tempo gasto em tarefas diárias",
					"fill" => false,
					"lineTension" => 0.1,
					"backgroundColor" => "rgba(75,192,192,0.4)",
          "borderColor" => "rgba(75,192,192,1)",
          "borderCapStyle" => 'butt',
          "borderDashOffset" => 0.0,
          "borderJoinStyle" => 'miter',
          "pointBorderColor" => array('rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
          "pointBackgroundColor" => array('rgba(255, 99, 132, 0.5)','rgba(54, 162, 235, 0.5)','rgba(255, 206, 86, 0.5)','rgba(75, 192, 192, 0.5)','rgba(153, 102, 255, 0.5)','rgba(255, 159, 64, 0.5)'),
          "pointBorderWidth" => 1,
					"pointRadius" => 5,
          "pointHitRadius" => 10,
          "pointHoverRadius" => 10,
          "pointHoverBackgroundColor" => array('rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
          "pointHoverBorderColor" => array('rgba(255, 99, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
          "pointHoverBorderWidth" => 2,
					"data" => array(6,4,2,4,8),
					"spanGaps" => false
				)
			)
		);

		$dados['opcoes'] = array(
			"title" => array(
				"display" => true,
				"text" => "LineChart"
			)
		);


		echo json_encode($dados);
	}

	public function Barchart()
	{
		$dados['tarefas'] = array(
			"labels" => array("Trabalho","Escrever livro e tutoriais","Redes Sociais","Assistir TV","Dormir"),
			"datasets" => array(
				array(
					"label" => "Tempo gasto em tarefas diárias",
					"data" => array(6,4,2,4,8),
					"backgroundColor" => array('rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 0.2)','rgba(255, 206, 86, 0.2)','rgba(75, 192, 192, 0.2)','rgba(153, 102, 255, 0.2)','rgba(255, 159, 64, 0.2)'),
					"borderColor" => array('rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)','rgba(255, 159, 64, 1)'),
					"borderWidth" => 1
				)
			)
		);
		$dados['opcoes'] = array(
			"title" => array(
				"display" => true,
				"text" => "BarChart"
			)
		);

		echo json_encode($dados);
	}

}
