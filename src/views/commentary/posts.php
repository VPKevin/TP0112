<div class="panel m-4">
    <div>
      <a class="btn btn-secondary" href="/post-add">Ajouter un Post</a>

    </div>
    <div class="list-post">
        <?php foreach($vars['posts'] as $post): ?>

            <div class="card mb-4">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="card-img-top" src="" alt="Card image cap">
                </div>
                <div class="col-md-8">
                  <div class="card-header">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-content"><?= $post['content'] ?></p>
                    <a href="/post/<?= $post['id'] ?>" class="btn btn-secondary">Voir plus</a>
                    <a href="/post-edit/<?= $post['id'] ?>" class="btn btn-primary">Editer</a>
                    <a onclick="confirm('Vous êtes sûr ?');" href="/post-delete/<?= $post['id'] ?>" class="btn btn-danger">Supprimer</a>
                  </div>
                </div>
              </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
