<?php
$nome = $_POST['nome'];
$opcao = $_POST['cliente'];
$score = $_POST['score'];
$emprestimo = $_POST['emprestimo'];
$parcela = $_POST['parcela'];
$seguro = $_POST['seguro'];
$valorParcela;




    if($opcao == 'NAO'){
        if($score  == 0 || $score < 299){
              $emprestimo   = ($emprestimo * 1.2 *1.0038)  + 35;
             
    
           
              }
            
        else if($score > 299  && $score <= 499){
            $emprestimo   =  ($emprestimo * 1.15 *1.0038) + 35;
           
         
         
        }
        else if ($score  > 499  &&  $score  <=  699){
            $emprestimo =  ($emprestimo*1.1*1.0038) + 35;
         
       
           
    
        }
        else{
            $emprestimo  = ($emprestimo *  1.05*1.0038) + 35;
            
        
         
        }         
                 
            
    
    }
    else{

        $emprestimo  = $emprestimo *  1.03*1.0038 + 35;
        
      
        if (isset($_POST['seguro'])) {
            $emprestimo = $emprestimo + 49.99;
          } else {
            $emprestimo = $emprestimo ;
            
          }

        
        
    }

    
    
    
  

$valorParcela = $emprestimo/$parcela;


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resultado.css">
    <title>Resultado da simulação:</title>
</head>
<body>

    <fieldset>
         <form action="simuladorEmprestimo.html" method="POST">
            <h1>Resultado da Operação</h1>
        <p><label>Nome:</label><?= $nome; ?></p>
        <p><label>Valor das parcelas:</label><?= number_format($valorParcela,2); ?></p>
        <p><label>Custo efetivo total:</label><?=number_format( $emprestimo,2); ?></p>
        <p><label>Quantidade de parcelas:</label><?= $parcela; ?></p>
      
            <label for="simular">Clique aqui para simular novamente</label>
            <input type="radio" name="simular" id="simular" value="SIM">SIMULAR<BR><BR>
            <input class="envia" type="submit" value="ENVIAR">

        </form>
  


</p>

    </fieldset>

</body>
