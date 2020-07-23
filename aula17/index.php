<?php 
//date - Formata a data e a hora local

echo "date de hoje: " . date("d/m/Y") . "<br>";
echo "horario: " . date("H:i") . "<br>";
if (date("H") <= 5) {
	echo "Boa madrugada<br>";
}else if(date("H") >= 6 && date("H") <= 12){
	echo "Bom dia<br>";
}else if(date("H") > 12 && date("H") < 18){
	echo "Boa Tarde<br>";
}else{
	echo "Boa Noite";
}

//dia
echo "Dia do mês: " . date("d") . "<br>"; //d - dia do mês com o zero a esqierda, 01 até 31
echo "Dia do mês: " . date("j") . "<br>"; //j - dia do mês sem o zero, 1 até 31
echo "Dia da Semana: " . date("D") . "<br>"; //D - os três primeiro digitos da semana em inglês
echo "Dia da Semana: " . date("l") . "<br>"; //l('L' minúsculo) - Sunday até Saturday
echo "Dia da Semana: " . date("N") . "<br>"; //N - Representação numérica ISO-8601 do dia da semana(1 para a segunda e 7 para domingo)
echo "Dia do Mês: " . date("S") . "<br>"; //S - Sufixo ordinal inglês para o dia do mês, 2 caracteres
echo "Dia da Semana: " . date("w") . "<br>"; //w - Representação numérica do dia da semana, 0 (para domingo) até 6 (para sábado)
echo "Dia do Ano: " . date("z") . "<br>"; //z	- O dia do ano (iniciando em 0)	0 até 365

//semana
echo "Número do ano da semana(42 é 42ª semana do ano):" . date("W") . "<br>"; //W - Número do ano da semana ISO-8601, começa na Segunda. Exemplo: 42 (a 42ª semana do ano)

// mês
echo "Mês: " . date("F") . "<br>"; //F - Um representação completa de um mês, como January ou March	January até December
echo "Mês: " . date("m") . "<br>"; //m - Representação numérica de um mês, com zero à esquerda	01 a 12
echo "Mês: " . date("M") . "<br>"; //M - Uma representação textual curta de um mês, três letras, Jan a Dec
echo "Mês: " . date("n") . "<br>"; //n - Representação numérica de um mês, sem zero à esquerda	1 a 12
echo "Total de dias desse mês: " . date("t") . "<br>"; //t - Número de dias de um dado mês	28 até 31

//ano
echo "Ano(ano bissexto é 1, caso contrário é 0): " . date("L") . "<br>"; //L - Se está em um ano bissexto 1 se está em ano bissexto, 0, caso contrário.
echo "Ano: " . date("o") . "<br>"; //o - Número do ano. Este tem o mesmo valor como Y, exceto que se o número da semana ISO (W) pertence ao anterior ou próximo ano, o ano é usado ao invés. Exemplos: 1999 ou 2003
echo "Ano(4 digitos): " . date("Y") . "<br>"; //Y - Uma representação de ano completa, 4 dígitos. Exemplos: 1999 ou 2003
echo "Ano(2 digitos): " . date("y") . "<br>"; //y - Uma representação do ano com dois dígitos	Exemplos: 99 ou 03

//tempo 
echo "Antes/Depois de meio-dia em minúsculo: " . date("a") . "<br>"; //a - Antes/Depois de meio-dia em minúsculo, am or pm
echo "Antes/Depois de meio-dia em maiúsculo: " . date("A") . "<br>"; //A - Antes/Depois de meio-dia em maiúsculo, AM or PM
echo "Swatch Internet time(000 até 999): " . date("B") . "<br>"; //B - Swatch Internet time, 000 até 999
echo "Formato 12-horas(1 até 12): " . date("g") . "<br>"; //g - Formato 12-horas de uma hora sem zero à esquerda, 1 até 12
echo "Formato 24-horas(0 atè 23): " . date("G") . "<br>"; //G - Formato 24-horas de uma hora sem zero à esquerda, 0 até 23
echo "Formato 12-horas(01 até 12): " . date("h") . "<br>"; //h - Formato 12-horas de uma hora com zero à esquerda, 01 até 12
echo "Formato 24-horas(00 atè 23): " . date("H") . "<br>"; //H - Formato 24-horas de uma hora com zero à esquerda, 00 até 23
echo "Minutos(00 até 59): " . date("i") . "<br>"; //i - Minutos com zero à esquerda, 00 até 59
echo "Segundos(00 até 59): " . date("s") . "<br>"; //s - Segundos, com zero à esquerda, 00 até 59
echo "Microssegundos: " . date("u") . "<br>"; //u - Microssegundos. Example: 654321 
//echo date();

/*
Fuso horário

e - Identificador do fuso horário. Exemplos: UTC, GMT, Atlantic/Azores
I('i' maiúsculo) - Se a data está ou não no horário de verão, 1 se horário de verão, 0, caso contrário.
O - Deslocamento ao Horário de Greenwish (GMT) em horas. Exemplo: +0200
P - Deslocamento ao Horário de Greenwish (GMT) com dois pontos entre horas e minutos. Exemplo: +02:00
T - Abreviação do fuso horário	Exemplos: EST, MDT ...
Z - Deslocamento, em segundos, do fuso horário. O deslocamento para fusos horários a oeste de UTC sempre será negativa, e para aqueles à leste de UTC sempre será positiva.	-43200 até 50400

Data/Hora completa

c - Data ISO 8601. Exemplo: 2004-02-12T15:19:21+00:00
r - » RFC 2822 formatted date. Exemplo: Thu, 21 Dec 2000 16:01:07 +0200
U - Segundos desde Unix Epoch (January 1 1970 00:00:00 GMT)	Veja também time()
*/