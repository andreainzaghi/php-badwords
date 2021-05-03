<?php
 $nome= $_GET['nome'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       h1{
         color:red;
         font-size: 30px;
       }
       p{
         font-size: 15px;
       }
     </style>
   </head>
   <body>
     <!-- bad word senza ??filtro?? -->
       <p>frase senza filtro</p>
        <h1>ieri ho fatto la  <?php echo $nome; ?></h1>
        <!-- filtro -->
     <?php
        if ($nome == 'cacca')
        $nome = '***' ;
      ?>
      <p>frase con filtro</p>
     <h1>ieri ho fatto la <?php echo $nome; ?></h1>
   </body>
 </html>
