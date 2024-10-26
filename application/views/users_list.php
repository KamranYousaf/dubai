<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
    <?php
   // print_r($users);

   foreach($users as $user):
    
    ?>

        
   <table>
    <tr>
        <td>
            <?= $user['firstname']?>
             <!-- $user->firstname   --> 
        </td>
         <td>
             <?= $user['lastname']?>
         </td>
    </tr>
    <?php endforeach; ?>
   </table>
    
</body>
</html>