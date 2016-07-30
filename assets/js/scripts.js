$(document).ready(function(){
  //Define a URL para obtenção dos dados para gerar o gráfico
  var url_data = window.location.href+"/data";

  //Renderização do gráfico com mapa
  if($('#geochart-container').length > 0)
  {
    //Define a variável que irá receber as regiões a serem marcadas no mapa
    var regioes;

    //Requisição AJAX ao servidor para obtenção dos dados
    $.ajax({
      type: 'GET',
      url: url_data,
      dataType: 'json',
      success: function(data) {
        regioes = json2array(data.regioes);
      },
      error: function() {
        alert("Ocorreu um erro ao processar a solicitação.");
      }
    });

    //Define qual é o pacote de gráficos que será utilizado
    google.charts.load('current', {'packages':['geochart']});

    //Operações executadas ao iniciar o processamento da biblioteca
    google.charts.setOnLoadCallback(function(){
      //Formata os dados para o padrão de exibição do gráfico
      data = google.visualization.arrayToDataTable(regioes);

      //Estrutura o gráfico para exibição
      var chart = new google.visualization.GeoChart(document.getElementById('geochart-container'));
      var options = {};

      //Exibe o gráfico na tela
      chart.draw(data, options);
    });
  }
  // Renderização do gráfico em formato de donnut
  else if($('#donnutchart-container').length > 0)
  {
    var container = $('#donnutchart-container');
    var tarefas;
    //Define a variável que irá receber as opções de configuração do gráfico
    var options;
    $.ajax({
      type: 'GET',
      url: url_data,
      dataType: 'json',
      success: function(data) {
        console.log(data.tarefas);
        var myDonnutChart = new Chart(container, {
          type: 'doughnut',
          data: data.tarefas,
          options: data.opcoes
        });
      },
      error: function() {
        alert("Ocorreu um erro ao processar a solicitação.");
        return false;
      }
    });

  }
  // Renderização do gráfico em formato pizza
  else if($('#piechart-container').length > 0)
  {
    var container = $('#piechart-container');
    var tarefas;
    //Define a variável que irá receber as opções de configuração do gráfico
    var options;
    $.ajax({
      type: 'GET',
      url: url_data,
      dataType: 'json',
      success: function(data) {
        var myPieChart = new Chart(container, {
          type: 'pie',
          data: data.tarefas,
          options: data.opcoes
        });
      },
      error: function() {
        alert("Ocorreu um erro ao processar a solicitação.");
        return false;
      }
    });
  }
  // Renderização do gráfico de barras
  else if($('#barchart-container').length > 0)
  {
    var container = $('#barchart-container');
    var tarefas;
    //Define a variável que irá receber as opções de configuração do gráfico
    var options;
    $.ajax({
      type: 'GET',
      url: url_data,
      dataType: 'json',
      success: function(data) {
        var myBarChart = new Chart(container, {
          type: 'bar',
          data: data.tarefas,
          options: data.opcoes
        });
      },
      error: function() {
        alert("Ocorreu um erro ao processar a solicitação.");
        return false;
      }
    });

  }
  // Renderização do gráfico de linhas
  else if($('#linechart-container').length > 0)
  {
    var container = $('#linechart-container');
    var tarefas;
    //Define a variável que irá receber as opções de configuração do gráfico
    var options;
    $.ajax({
      type: 'GET',
      url: url_data,
      dataType: 'json',
      success: function(data) {

        var myBarChart = new Chart(container, {
          type: 'line',
          data: data.tarefas,
          options: data.opcoes
        });
      },
      error: function() {
        alert("Ocorreu um erro ao processar a solicitação.");
        return false;
      }
    });

  }


});