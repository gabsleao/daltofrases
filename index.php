<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dalto Frases</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/main.css" rel="stylesheet">
    
  </head>
  <body class="text-center">


<?php
    $FraseGerada = 'Testando frase gerada em PHP!';
    
    if(isset($_POST['FraseGerada']) && strlen($FraseGerada) == 0)
      $FraseGerada = $_POST['FraseGerada'];

?>
    
<main class="form-signin">
    <img class="mb-4" src="./assets/imgs/dalto.svg" alt="" width="150" height="150">
    <p> que dia lindo pra uma desculpinha .. . . . . </p><br>
    <!-- <textarea readonly class="form-control" id="fraseDalto" rows="5" placeholder="aperte no botão ali embaixo pra gerar a desculpa rapaz"></textarea> -->
    <div class="row-buttons"><br>
        <a href="https://api.whatsapp.com/send?text=<?php echo $FraseGerada; ?>" class="botao-wpp">
            <!-- ícone -->
            <i class="fa fa-whatsapp"></i>
            mandar no zap
        </a>

        <button type="button" style= "float:right; height:58px;" class="btn btn-info btn-clipboard" onclick="copiar()">Copiar</button><br><br>
    
    </div>
    <br><br>
    <button class="w-100 btn btn-lg btn-primary align-self-cente" onclick="gerarFrase()">Gerar Frase</button>
</main>


    
  </body>
</html>

<script>
function copiar(){
    let textArea = document.getElementById("fraseDalto");
    textArea.select();
    document.execCommand('copy');
}

function gerarFrase(){

    // $.ajax({
    //     type : "POST",
    //     url  : "./fraseGerada.php",
    //     data : { email : email, operation : operation },
    //     success: function(response){
    //             var jsonResponse = JSON.parse(response).response;
    //             console.log(jsonResponse);

    //             if(jsonResponse.status == 200)
    //                 window.location.replace("./index.php");
    //             if(jsonResponse.status == 500)
    //                 return alert("Por favor, verifique seu e-mail inserido.");
    //     },
    //     error: function(){
    //         alert("Whoops! Algo deu errado.");
    //     }
    // });

}
</script>