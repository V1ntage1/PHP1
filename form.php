<?php if(!isset($_SESSION['m'])): ?>
<form action = "" method = 'post' >
    <div>Введие число от 1 до 20!</div>
    <div><?php var_dump( $_SESSION['rand'])?></div>
    <div> 
    <input type = "text" name = 'm'></div>
    <div>
        <input type = "submit" name = 'singin' value='Вход'>
    </div>
    </form>
    <?php else: ?>
        <?= ($_SESSION['m']) ? 'ok': 'nook' ?>
        <form action = "" method = 'post'>
        <div><input type = "submit" name = 'logout' value='Заново'></div>
    </form>
 

    <?php endif ?>