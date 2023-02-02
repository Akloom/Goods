<header class="header">
    <div class="header-content">
      <div class="header-content__name">
        <h1>Главная</h1>
        <div class="header-content__name-breadcrump">
          <?php
          function breadcrumbs($separator = ' &raquo; ', $home = 'Главная')
          {
            $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

            $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

            $breadcrumbs = array("<a href=\"$base\">$home</a>");

            $crumbs = '';

            $last = end(array_keys($path));

            foreach ($path as $x => $crumb) {
              $title = ucwords(str_replace(array('.php', '_', '%20'), array('', ' ', ' '), $crumb));

              if ($x != $last) {
                $breadcrumbs[] = "<a href=\"$base$crumbs$crumb\">$title</a>";
                $crumbs .= $crumb . '/';
              } else {
                $breadcrumbs[] = $title;
              }
            }

            return implode($separator, $breadcrumbs);
          }

          ?>
          <?php
          echo breadcrumbs(' / ');
          ?>
        </div>
      </div>
      <a href="">
        <img src="./assets/img/icons/exit-icon.svg" alt="">
        <span>Выйти</span>
      </a>
    </div>
  </header>