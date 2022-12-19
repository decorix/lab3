<?php
$title = 'Polyakov lab3';

$today = date("d.m.y");
$time = date("H:i:s");

$list = ["One", "Two", "Three"];
$menu_list = ['Главная', 'Каталог', 'Обо мне'];
$menu_id = ['index.php', 'catalog.php', 'aboutme.php'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php require('components/head.php')?>
</head>

<body>
    <div class="page">
        
        <?php require('components/header.php')?>


        <div class="container">
            <div class="h1">
                <h1>Заголовок 1-го уровня</h1>
            </div>
            <div class="h2">
                <h2>Заголовок 2-го уровня</h2>
                <h2>Заголовок 2-го уровня</h2>
            </div>
            <div class="text">Привет, это 3 л/р. Осталось еще не мало работ, но я справлюсь. </br>
                Вперед к победе, вперед медведи, медведи - чемпион.
            </div>
            <div class="photo">
                <div class="photo1"><img src="img/pants.jpg" alt="штаны" width="200px"></div>
                <div class="photo2"><img src="img/tshirt.jpg" alt="футболка" width="200px"></div>
            </div>
            <div class="list">
                <p>List</p>
                <?php for ($i = 0; $i<count($list); $i++): ?>
                <ul>
                    <li><?php echo $list[$i] ?></li>
                </ul>
                <?php endfor?>
            </div>

        </div>

        <?php require('components/footer.php')?>
    </div>

</body>

</html>