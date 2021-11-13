<?php if ($posts) : ?>
  <section class="wrapper">
    <ul class="tweet-list">
      <?php foreach ($posts as $post) : ?>
        <li>
          <article class="tweet">
            <div class="row">
              <img class="avatar" src="<?= $post['avatar'] ?>" alt="Аватар пользователя <?= $post['login'] ?>">
              <div class="tweet__wrapper">
                <header class="tweet__header">
                  <h3 class="tweet-author"><?= $post['name'] ?>
                    <a href="<?= get_url("user_posts.php?id=" . $post['user_id']) ?>" class="tweet-author__add tweet-author__nickname">@<?= $post['login'] ?></a>
                    <time class="tweet-author__add tweet__date"><?= date('d M Y в H:i', strtotime($post['date'])) ?></time>
                  </h3>
                  <button class="tweet__delete-button chest-icon"></button>
                </header>
                <div class="tweet-post">
                  <p class="tweet-post__text"><?= $post['text'] ?></p>
                  <?php if ($post['image']) : ?>
                    <figure class="tweet-post__image">
                      <img src="<?= $post['image'] ?>" alt="<?= $post['text'] ?>">
                    </figure>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <footer>
              <button class="tweet__like">53</button>
            </footer>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php else : ?>
  <p>Постов нет</p>
<?php endif; ?>