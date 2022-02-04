<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "menu.php"; ?> 

<style>

.Liam{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    text-align: center ;
    margin: auto;
  }
  
  .Liam td, .Liam th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  .Liam tr:nth-child(even){background-color: #f2f2f2;}
  
  .Liam tr:hover {background-color: #ddd;}
  
  .Liam th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #5D54A4;
    color: white;
  }

</style>
                        <table class="Liam">
                            <tr>
                                <th>Nombre de Kilomètres</th>
                                <th>Indémnité kilométrique</th>
                                <th>Restauration</th>
                                <th>Hôtel</th>
                                <th>Evènementiel</th>
                            </tr>
    <?php        

                
                    foreach ($dataToDisplay as $fetch20) {
                        ?>
                            <tr>
                                <td><?php echo $fetch20['nbr_km']; ?></td>
                                <td><?php echo $fetch20['cout_km']; ?></td>
                                <td><?php echo $fetch20['restauration']; ?></td>
                                <td><?php echo $fetch20['hotel']; ?></td>
                                <td><?php echo $fetch20['evenementiel']; ?></td>
                            </tr>
                        <?php
                        }
                ?>
                </table>

          
                    
</body>
</html>