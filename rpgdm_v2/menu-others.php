<a class="<?php if (is_home()) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/">home</a><a class="<?php if ( in_category('artigos') ) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/category/artigos/">artigos</a><a class="<?php if ( in_category('fic')) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/category/fic/">contos</a><a class="<?php if ( in_category('podcasts')) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/category/podcast/">podcasts</a><a class="<?php if ( in_category('resenhas')) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/category/resenhas/">resenhas</a><a class="<?php if ( in_category('tiras')) : echo 'menuActive'; endif; ?>" href="<?php bloginfo("url"); ?>/category/tiras/">tiras</a>