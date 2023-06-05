<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>Calculator</H1>
        </header>
       <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <br>
        <select name="oper">
            <label>Choose operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="div">Divide</option>
            <option value="times">Times</option>
            </select>
        <br>
            <input type="text" name="num02" placeholder="Number 2">
        <br>
            <button type="submit">Calculate!</button>
       </form>
       <h4>
       <?php
        echo "The date is: " . date('j-m-y');
        ?>
        <br>
        <?php
        echo "The time is: " . date('h:i:s');
        ?>
        </h4>
    </body>
</html>