<h1>Acess Page</h1>

<h2>Simples page MVC</h2>

 <?php
    print_r( Yii::$app->user->isGuest?"Please log-in":"have a nice stay ;)");
 ?>

 