<?foreach($albums as $album):?>

Name of albums <br>
<?=$album['title']?> <br>

<?if(!Yii::$app->user->isGuest):?>
Titles of photo <br>
<?=$album['titles']?> <br>

Photo <br>

<?=$album['url']?>



<?endif;?>

<?endforeach;?>