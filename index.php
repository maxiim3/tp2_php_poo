<?php
    include_once 'Person.php';
//instanciation d'une personne
    $unePersonne = new Person("De La Fontaine", "Jean");
//instanciation d'une personne
    $uneAutre = new Person("Curie", "Marie");
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Fabrique a personne</title>
</head>
<body>
    <div class="container">
        <main>
            <section id="page1">
                <h1>CONSTRUCTEUR DE PERSONNES</h1>
                <h2>Nous avons créé deux personnes</h2>
                <form action="">
                        <table>
                            <thead>
                                <th>Nom 1 </th>
                                <th>Prenom 1</th>
                                <th>Nouveau Nom 1</th>
                                <th>Nouveau Prenom 1</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?=  (isset($_GET["change_nom1"])&&($_GET["change_nom1"]!==""))
                                            ? $unePersonne->setNom($_GET["change_nom1"]).$unePersonne->getNom()
                                            :$unePersonne->getNom()?></td>
                                    <td>
                                        <input type="text" min="2" max="25"
                                            <?= "placeholder=\"Changer ".$unePersonne->getNom()."\""?> name="change_nom1">
                                    </td>
                                    <td><?=  (isset($_GET["change_prenom1"])&&($_GET["change_prenom1"]!==""))
                                            ? $unePersonne->setPrenom($_GET["change_prenom1"]).$unePersonne->getPrenom()
                                            :$unePersonne->getPrenom()?></td>
                                    <td>
                                        <input type="text" min="2" max="25"
                                         <?= "placeholder=\"Changer ".$unePersonne->getPrenom()."\""?> name="change_prenom1">
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <th>Nom 2</th>
                                <th>Prenom 2</th>
                                <th>Nouveau Nom 2</th>
                                <th>Nouveau Prenom 2</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?=  (isset($_GET["change_nom2"])&&($_GET["change_nom2"]!==""))
                                            ? $uneAutre->setNom($_GET["change_nom2"]).$uneAutre->getNom()
                                            :$uneAutre->getNom()?></td>
                                    <td>
                                        <input type="text" min="2" max="25"
                                            <?= "placeholder=\"Changer ".$uneAutre->getNom()."\""?> name="change_nom2">
                                    </td>
                                    <td><?=  (isset($_GET["change_prenom2"])&&($_GET["change_prenom2"]!==""))
                                            ? $uneAutre->setPrenom($_GET["change_prenom2"]).$uneAutre->getPrenom()
                                            :$uneAutre->getPrenom()?></td>
                                    <td>
                                        <input type="text" min="2" max="25"
                                            <?= "placeholder=\"Changer ".$uneAutre->getPrenom()."\""?> name="change_prenom2">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <button>Change</button>
                    <button><a href="?=restart" tabindex="-1">Reload</a></button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
