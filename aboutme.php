<?php
$title = 'Polyakov lab3';

$today = date("d.m.y");
$time = date("H:i:s");

$s = date('s');
$os = $s % 2;
$photo1;
$photo2;
$name1;
$name2;

if ($os == 0) {
    $photo1 = "img/3.jpg";
    $photo2 = "img/cap.jpg";
    $name1 ="chet1";
    $name2 ="chet2";
} else {
    $photo1 = "img/pants.jpg";
    $photo2 = "img/tshirt.jpg";
    $name1 ="nechet1";
    $name2 ="nechet2";
}
$list = ["1", "2", "3"];
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
                <div class="photo1"><img src="<?php echo $photo1 ?>" alt="<?php echo $name1?>" width="200px"></div>
                <div class="photo2"><img src="<?php echo $photo2 ?>" alt="<?php echo $name2?>" width="200px"></div>
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