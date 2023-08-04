<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Polis812</title>
</head>

<?php require __DIR__ . '/JsonPlaceholder.php'; ?>


<body>

<form class="row g-3 mt-3 mb-3" role="form" method="post">
    <div class="col-auto">

        <p type="text" class="form-control-plaintext"> Pick a user: </p>
    </div>
    <div class="col-auto">
        <select class="form-control" name="user">
			<?php foreach ($users as $user): ?>
                <option id="<?= $user['id'] ?>" value="<?= $user['id'] ?>">
					<?= $user['name'] ?>
                </option>
			<?php endforeach; ?>
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Get user's posts</button>
    </div>
</form>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">post text</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($userPosts as $post): ?>
        <tr>
            <th scope="row"><?= $post['id'] ?></th>
            <td><?= $post['title'] ?></td>
            <td><?= $post['body'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script></html>






