<?php
  require '../config.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=animali', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM lignecommande ORDER BY idcommande ASC ');
  $executeIsOK = $pdoStat->execute();
  $produit= $pdoStat->fetchAll();

 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>shop animali</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste de Facture
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    

    <!-- Table row -->
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_commande</th>
      <th scope="col">prix </th>
      <th scope="col">quantite</th>
      <th scope="col">tauxTVA</th>
      <th scope="col">etat</th>
      <th scope="col">id_produit</th>
      <th scope="col">idcmd</th>
    </tr>
  </thead>
  <tbody>
          <?php foreach ($produit as $produit): ?> 
              <tr>
                <td><?PHP echo $produit['idcommande']; ?></td>
                <td><?PHP echo $produit['prix']; ?></td>
                <td><?PHP echo $produit['quantite']; ?></td>
                <td><?PHP echo $produit['tauxTVA']; ?></td>
                <td><?PHP echo $produit['etat']; ?></td>
                <td><?PHP echo $produit['id_produit']; ?></td>
                <td><?PHP echo $produit['idcmd']; ?></td>

                <td>
      
                </td>
                
              </tr>
                  <?php endforeach; 
                  ?>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
