<?php $titre = 'Mon Blog -'. $billet['titre']; ?>

          <article>
            <header>
              <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
              <time><?= $billet['date'] ?></time>
            </header>
            <p><?= $billet['contenu'] ?></p>
          </article>
          <hr />
          <header>
            <h1 id="titreReponses"><?= 'Commentaires à ' .$billet['titre'] ?></h1>
            <?php foreach ($commentaires as $commentaire): ?>
              <p class="auteur"><?= $commentaire['auteur'] ?> dit :</p>
              <p><?= $commentaire['contenu'] ?></p>
            <?php endforeach; ?>
            <hr />
            <h2> Poster un commentaire</h2>
            <form action="index.php?action=commenter" method="post">
              <input id="auteur" name="auteur" type="text" placeholder="Votre Nom" />
                <br/><br/>
                <textarea id="txtCommentaire" name="contenu" rows="4"
              placeholder="Votre commentaire" required></textarea>
                <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
               <br/>
                <input type="submit" value ="Envoyer votre commentaire" />
            </form>
          </header>
