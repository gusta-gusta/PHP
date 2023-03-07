<!DOCTYPE html>
<html>
<head>
	<title>Tempo Decrescente em Tempo Real</title>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1"> <!-- Atualiza a página a cada 1 segundo -->
</head>
<body>
	<h1>Tempo Decrescente em Tempo Real</h1>
	<p id="tempo"><?php echo calculaTempoRestante(); ?></p>

	<?php
	// Função para calcular o tempo restante em segundos
	function calculaTempoRestante() {
		$horaInicial = strtotime("2023-03-02 00:00:00"); // Substitua pela hora em que as 4 horas começaram
		$horaAtual = time();
		$tempoRestante = $horaInicial + 14400 - $horaAtual; // 4 horas em segundos

		// Converte os segundos para horas, minutos e segundos
		$horas = floor($tempoRestante / 3600);
		$minutos = floor(($tempoRestante % 3600) / 60);
		$segundosRestantes = $tempoRestante % 60;

		// Formata a hora para exibição
		$hora = sprintf("%02d:%02d:%02d", $horas, $minutos, $segundosRestantes);

		return $hora;
	}
	?>
</body>
</html>