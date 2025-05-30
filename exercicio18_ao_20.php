<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>02</title>
  <style>
    body {
      margin: 0px;
      height: 100vh;
      display: flex;
      justify-content: center;
      text-align: center;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

   
  </style>
</head>

<body>
  <div class="centro">
    
    <?php

   // 18
    print("<h3> 18 - Preferencia de Cor: </h3> <br>");
        $cor = strtolower("ciano"); 

        switch($cor){
            case "vermelho":
                print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "azul":
               print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "verde":
              print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            case "amarelo":
                  print("<p> Você escolheu a cor: ".$cor."!</p>");
                break;
            default:
                print("<p> Você não escolheu uma opção valida, a padrão é Azul! </p>");
        }

     // 19
    print("<h3> 19 - Calculo de Salario: </h3> <br>");
        $cargo = strtolower("gerente"); 
        switch($cargo){
            case "desenvolvedor":
                print("<p> O cargo: ". $cargo. ", ganha R$ 7mil! </p>");
                break;
            case "designer":
             print("<p> O cargo: ". $cargo. ", ganha R$ 6mil! </p>");
                break;
            case "gerente":
               print("<p> O cargo: ". $cargo. ", ganha R$ 12mil! </p>");
                break;
            default:
                print("<p> Você não escolheu um cargo valido! </p>");
        }
        

        //20
    print("<h3> 20 - Verificar Acesso: </h3> <br>");
        $ativo = true; 
        $adm = true; 

        if($ativo && $adm){
            print("<p> Acesso total!");
        }
        elseif($ativo && !$adm){
            print("<P> Acesso, porem como usuario! </p>"); 

        }
        else{
            print("<p> Usuario Inativo! </p>");
        }



   
?>
  </div>


</body>

</html>