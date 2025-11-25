<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title><?= $title ?></title>
</head>
<body>
    <main>
        <form action="" method="post">
            <select name="movie">
                <option>
                    Liste des films...
                </option>
                <?php foreach ($data["movies"] as $movie) :?>
                    <option value="<?= $movie["id"] ?>"><?= $movie["title"] ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="submit" value="Ajouter">
        </form>
    </main>
</body>
</html>