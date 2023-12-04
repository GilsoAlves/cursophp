<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
    <style>
        body {
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // {0x= é hexadecimal} [0b= é binario] (0= é Octal)
        //$num = 0x1A;
        //echo "O valor da variavel é $num";

        // $v = "Gilson";
        // var_dump($v); //mostra que tipo é a variavel (int, float ou string , e conta as letras no caso de string)

        //$num = 3e2; //  é a mesma coisa de 3 x 10²
        // echo "O valor é $num";
        //var_dump($num);
        
        // $num = (int) 3e2; //  é a mesma coisa de 3 x 10² forçando ser inteiro entre () coerção
        //var_dump($num);

        // $num = (int)"950";
        //  var_dump($num);

        //$vet = [6, 2.5, "Maria", 3, false];
        //var_dump($vet)

       // class Pessoa {
       //     private string $nome;
        
       // $p = new Pessoa;
       // var_dump($p);

      # $nome= 'Gilson';
      # echo "$nome ";

      //const CANAL = "Curso em Video \u{1F499}";
      //echo "Eu adoro o " . CANAL;

      # echo "Estamos no ano de " . date('Y'); //para pegar ano atual 

     // var_dump(); é muito util para testar tipos primitivos , para saber qual tipo que é ,(string, int,float)
    ?>
    
</body>
</html>