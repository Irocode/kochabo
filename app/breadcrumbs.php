<?php

Breadcrumbs::register('home', function ($breadcrumbs) {

    $breadcrumbs->push('Home', route('dashboard'));
});







Breadcrumbs::register('blog', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('dashboard.article'));
});



Breadcrumbs::register('login', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('dashboard.login'));
});



Breadcrumbs::register('blog.post.show', function ($breadcrumbs, $article) {

    $breadcrumbs->parent('blog');
    $breadcrumbs->push($article->title, route('dashboard.article.show', array($article->id, $article->slug)));
});

Breadcrumbs::register('page.show', function ($breadcrumbs, $page) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push($page->title, route('dashboard.page.show', $page->id));
});

Breadcrumbs::register('contact', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('dashboard.contact'));
});

Breadcrumbs::register('news', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('News', route('dashboard.news'));
});

Breadcrumbs::register('offer', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Offer', route('dashboard.offer'));
});


Breadcrumbs::register('footer', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Footer', route('dashboard.footer'));
});

Breadcrumbs::register('news.show', function ($breadcrumbs, $news) {

    $breadcrumbs->parent('news');
    $breadcrumbs->push($news->title, route('dashboard.news.show', array($news->id, $news->slug)));
});


Breadcrumbs::register('offer.show', function ($breadcrumbs, $offer) {

    $breadcrumbs->parent('offer');
    $breadcrumbs->push($offer->title, route('dashboard.offer.show', array($offer->id, $offer->slug)));
});




Breadcrumbs::register('sofunktioniertes', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('So funktionierts', route('dashboard.sofunktioniertes'));
});

Breadcrumbs::register('sofunktioniertes.show', function ($breadcrumbs, $sofunktioniertes) {

    $breadcrumbs->parent('sofunktioniertes');
    $breadcrumbs->push($sofunktioniertes->title, route('dashboard.sofunktioniertes.show', array($sofunktioniertes->id, $sofunktioniertes->slug)));
});




Breadcrumbs::register('kochabobox', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Kochabobox', route('dashboard.kochabobox'));
});

Breadcrumbs::register('kochabobox.show', function ($breadcrumbs, $kochabobox) {

    $breadcrumbs->parent('kochabobox');
    $breadcrumbs->push($kochabobox->title, route('dashboard.kochabobox.show', array($kochabobox->id, $kochabobox->slug)));
});





Breadcrumbs::register('aktuellerezepte', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Aktuelle Rezepte', route('dashboard.aktuellerezepte'));
});

Breadcrumbs::register('aktuellerezepte.show', function ($breadcrumbs, $aktuellerezepte) {

    $breadcrumbs->parent('aktuellerezepte');
    $breadcrumbs->push($aktuellerezepte->title, route('dashboard.aktuellerezepte.show', array($aktuellerezepte->id, $aktuellerezepte->slug)));
});





Breadcrumbs::register('obstbox', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Obstbox', route('dashboard.obstbox'));
});

Breadcrumbs::register('obstbox.show', function ($breadcrumbs, $obstbox) {

    $breadcrumbs->parent('obstbox');
    $breadcrumbs->push($obstbox->title, route('dashboard.obstbox.show', array($obstbox->id, $obstbox->slug)));
});





Breadcrumbs::register('beispielbox', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Beispiel-Box', route('dashboard.beispielbox'));
});

Breadcrumbs::register('beispielbox.show', function ($breadcrumbs, $beispielbox) {

    $breadcrumbs->parent('beispielbox');
    $breadcrumbs->push($beispielbox->title, route('dashboard.beispielbox.show', array($beispielbox->id, $beispielbox->slug)));
});





Breadcrumbs::register('gutschein', function ($breadcrumbs) {

    $breadcrumbs->parent('home');
    $breadcrumbs->push('Gutschein', route('dashboard.gutschein'));
});

Breadcrumbs::register('gutschein.show', function ($breadcrumbs, $gutschein) {

    $breadcrumbs->parent('gutschein');
    $breadcrumbs->push($gutschein->title, route('dashboard.gutschein.show', array($gutschein->id, $gutschein->slug)));
});









