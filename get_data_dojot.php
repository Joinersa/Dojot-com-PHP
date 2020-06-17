<?php

/**
 * Função que faz uma requisição GET ao Dojot e traz dados de um dispositivo.
 * @return Json.
 */
function getData() {

	// Token de acesso ao Dojot
	$tokenJwt = "token_jwt";

	$baseUrl = "http://localhost:8000"; // Url do Dojot.
	$deviceId = "1ee77"; // Identificador de um dispositivo.
	$lastNumber = "1";    // Quantidade de registros obtidos do Dojot. 
	$attr = "posicao";    // Atributo a ser obtido do dispositivo.

	// Comando a ser executado via shell.
	$comand = 'curl -X GET -H "Authorization: Bearer ' . $tokenJwt . '" "' . $baseUrl . '/history/device/' . $deviceId . '/history?lastN=' . $lastNumber . '&attr=' . $attr . '"';

	$data = shell_exec($comand);

	return $data;
}
