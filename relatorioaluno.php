<!DOCTYPE HTML>

<html>
	<head>
		<?php
session_start();
$escola = $_SESSION['cnpj'];
include_once("conexao.php");
$sql = mysqli_query($conn, "SELECT * FROM aluno WHERE escola='$escola' ORDER BY nome") or die( 
  mysqli_error($conn)  
);
?>
		<title>RELATÓRIO ALUNO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<style type="text/css">
    body {
      background-color: #000000;;
    }
.tg  {
	border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-986h{background-color:#c6dcf7;border-color:#cd9934;color:#000000;font-family:Impact, Charcoal, sans-serif !important;;
  font-size:26px;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg-0lax {border-color:black; text-align:left; vertical-align:top; background-color:white;color:black;}
</style>
</head>
<body>
<table class="tg" style="text-align: center;table-layout: fixed; width: 95%; border: none; margin: auto; margin-top: 70px">
<colgroup>
<col style="width: 186px">
<col style="width: 156px">
<col style="width: 250px">
</colgroup>
<thead>
  <tr align="center" bottom="middle">
    <th class="tg-986h"><span style="color:#FE0000">NOME</span></th>
    <th class="tg-986h"><span style="color:#FE0000">RA</span></th>
    <th class="tg-986h"><span style="color:#FE0000">E-MAIL</span></th>
  </tr>
</thead>


<?php 

while($aux = mysqli_fetch_assoc($sql)) { ?>
	
	
  <tr>
    <td class="tg-0lax"><?php echo $aux["nome"] ?> </td>
    <td class="tg-0lax"><?php echo $aux["ra"] ?> </td>
    <td class="tg-0lax"><?php echo $aux["email"] ?> </td>
  </tr>
<?php
}
?>
</table>
<br>
<br>
<br>
<div align="center">
  <input type="button" value="Voltar" onClick="history.go(-1)">
</div>
</body>

</html>