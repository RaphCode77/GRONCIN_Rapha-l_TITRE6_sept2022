<!-- templates/Articles/index.php -->

<h1>Tous les articles du Blog</h1>
<?= $this->Html->link('Ajouter un article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Créé le</th>
    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos $articles, et l'affichage des infos des articles -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>