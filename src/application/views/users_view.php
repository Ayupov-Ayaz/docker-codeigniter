<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
</head>
<body>
    <h2>Hello</h2>

    <?php if(!empty($users)):?>
        <ul>
            <?php foreach ($users as $user):?>
                <li><?=$user['name'];?></li>
            <?php endforeach; ?>
        </ul>
        <?elseif(!empty($user)):?>
            <?php foreach($user as $current):?>
                <p>Hello, <?=$current['name'];?></p>
            <?php endforeach;?>
    <?else:?>
        <p>Ничего нет</p>
    <?php endif;?>
</body>
</html>