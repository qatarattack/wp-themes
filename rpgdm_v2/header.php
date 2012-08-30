<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Blog de RPG brasileiro com conte&uacute;do di&aacute;rio escrito de forma a ser utilizado em qualquer sistema de RPG existente. Com v&aacute;rios autores de v&aacute;rias localidades o Brasil, o RPG do Mestre tenta mostrar as v&aacute;rias caras que o hobby tem.">
        <meta name="keywords" content="rpg, roleplay, roleplaying, game, video, videogame, role, play, d&amp;d, dnd, dungeon, dragon, dungeons&amp;dragons, world, darkness, world of darkness, wod, nwod, vampiro, vampire, mago, mage, lobisomen, werewolf, fada, changeling, daemon, gurps, cthulhu, steve, jackson, mark, rein, gen&eacute;rico, generic, tabletop, mesa, computador, pc, rpgdm, rpg do mestre, erick, patrick, fernando, del, angeles, del angeles, @erickpatrick, @delAngeles, papo de mestre, podcast, cast, papo, mestre, master, player, jogador, npc, pdm, 3d&t, daemon, storyteller, storytelling, opera">
        <meta name="author" content="Erick Patrick">
        <meta name="generator" content="Espresso by Macrabbit">
        <meta name="framework" content="978gs CSS">
        <meta name="robots" content="index,nofollow">
        <title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) )	echo " | $site_description"; if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nrpgdm' ), max( $paged, $page ) ); ?></title>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        
        <link rel="alternate" type="application/rss+xml" title="RPG do Mestre Feed RSS" href="http://rpgdomestre.com/feed/" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="http://feeds.feedburner.com/RpgDoMestre" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://feeds.feedburner.com/RpgDoMestre" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-7464869-2']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);})();</script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper">
            <header class="full">
                <form id="searchform" action="<?php bloginfo( 'url' ); ?>" method="get">
                    <a href="http://feeds.feedburner.com/RpgDoMestre"><img src="<?php bloginfo("template_url"); ?>/images/rss.gif" id="rss" width="26" height="26" alt="" /></a>
                    <input type="text" name="s" id="s" value="Faça sua pesquisa" />
                </form>
                <nav id="main">
                    <?php if (is_home() || is_search() || is_tag()) : ?>
                        <?php include ('menu-home.php'); ?>
                    <?php else : ?>
                        <?php include ('menu-others.php'); ?>
                    <?php endif; ?>
                </nav>
            </header>
            <section class="full">