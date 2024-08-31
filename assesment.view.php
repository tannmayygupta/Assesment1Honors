<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment 1 </title>
</head>

<link rel="stylesheet" href="/pico.min.css" >
<body>

<main>

    <?php if(!empty($_POST)): ?>
        
        <?php if ($_POST['choice'] == 'Paneer' ): ?> 

            <h2> <?php echo $greet ; ?> <?= $_POST['name'] ; ?>. Your Favorite food is <?= $_POST['choice'] ?> </h2>
            
        <?php elseif ($_POST['choice'] == 'Pulao' ): ?>

            <h2> <?php echo $greet ; ?> <?= $_POST['name'] ; ?>. Your Favorite food is <?= $_POST['choice'] ?> </h2>

        <?php elseif ($_POST['choice'] == 'c3' ): ?>

            <h2> <?php echo $greet ; ?> <?= $_POST['name'] ; ?>. Your Favorite food is <?= $_POST['choice'] ?> </h2>

    <?php endif; ?>
    

<?php endif; ?>

</main>
    <form method="post">

        <lable for = Name > Name: </lable>
        <input type="text" name ="name" >

        <lable for = FavoriteFood  > FavoriteFood : </lable><br>

        <input type = "radio" name="choice" id="Paneer" value="Paneer">         
        <lable for = Paneer  > Paneer </lable><br>

        <input type = "radio" name="choice" id="Pulao" value="Pulao" > 
        <lable for = Pulao  > Pulao </lable><br>

        <input type = "radio" name="choice" id="GarlicNaan" value="GarlicNaan" > 
        <lable for = Naan  > GarlicNaan </lable><br>


        <input type="submit">
    
    </form>
</body>
</html>