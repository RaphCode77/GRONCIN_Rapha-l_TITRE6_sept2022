<!-- Fichier: templates/Articles/view.php -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <section>
        <button class="like__btn">
            <span id="icon"><i class="far fa-thumbs-up"></i></span>
            <span id="count">0</span> Like
        </button>
    </section>
    <section id="comments_container">
        <h2>Commentaires</h2>

        <form method="post">
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" id="Pseudo" />
            </div>
            
            <div>
                <textarea id="commentaire" cols="30" rows="10">Votre Commentaire</textarea>
            </div>

            <button type="submit">Publier</button>

        </form>
    </section>

    <!-- Script JS récupération des données -->
    <script>

        document.querySelector('#comments_container form button')
        .addEventListener('click', function (event){
            event.preventDefault()

            let pseudoInput = document.getElementById('Pseudo')
            console.log(pseudoInput.value)
            console.log(pseudoInput.value.match(/^[\s]{1,50}$/))

        })

    </script>

    <!-- Script JS système likes/dislikes -->

    <script>
        const likeBtn = document.querySelector(".like__btn");
        let likeIcon = document.querySelector("#icon"),
        count = document.querySelector("#count");

        let clicked = false;


        likeBtn.addEventListener("click", () => {
            if (!clicked) {
            clicked = true;
            likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
            count.textContent++;
            } else {
            clicked = false;
            likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
            count.textContent--;
            }
        });
    </script>
<body>    
</body>
</html>