<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

.Liam{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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
    background-color: #2d87d1;
    color: white;
  }

</style>
                        <table class="Liam">
                            <tr>
                                <th>nbr_km</th>
                                <th>cout_km</th>
                                <th>restauration</th>
                                <th>hotel</th>
                                <th>evenementiel</th>
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