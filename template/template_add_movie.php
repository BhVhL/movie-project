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
    <?php include 'component/navbar.php'?>
    <main class="container"></h1>
        <h1>Ajouter un film</h1>
        <form action="" method="post">
            <input type="text" name="name_title" placeholder="Saisir le titre du film">
            <input type="text" name="name_description" placeholder="Saisir la description du film">
            <input type="date" name="name_publishAt" placeholder="Saisir la date de publication du film">
            <input type="number" name="name_duration" placeholder="Saisir la durée">
            <input type="file" name="name_cover" placeholder="">
            <input type="text" name="name_categories" placeholder="Saisir la ou les catégories">
            <input type="submit" value="Ajouter" name="submit">
        </form>
        <p><?= $data["error"] ?? "" ?></p>
        <p><?= $data["valid"] ?? "" ?></p>
    </main>
</body>
</html>