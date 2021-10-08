<?foreach($users as $user):?>

<div>User id</div><br>

<?=$user['id'];?><br>

<div>User firstname</div><br>
<?=$user['firstname'];?><br>
<div>User lastname</div><br>
<?=$user['lastname'];?><br>

<?if(!Yii::$app->user->isGuest && $user['id'] == Yii::$app->user->id):?>
  
Albums of registered users

<a href="/site/albums?id=<?=$user['id']?>">Albums</a>

<?endif;?>

<?endforeach;?>