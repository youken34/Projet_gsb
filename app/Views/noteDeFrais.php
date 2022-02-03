<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        

                
                    foreach ($dataToDisplay as $fetch20) {
                        ?>
                        <table class="Liam">
                            <tr>
                                <td><?php echo $fetch20['nbr_km']; ?></td>
                                <td><?php echo $fetch20['cout_km']; ?></td>
                                <td><?php echo $fetch20['restauration']; ?></td>
                                <td><?php echo $fetch20['hotel']; ?></td>
                                <td><?php echo $fetch20['evenementiel']; ?></td>
                            </tr>
                        </table>
                        <?php
                        }
                ?>

          
                    
</body>
</html>