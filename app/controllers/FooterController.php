<?php

use Sefa\Repositories\Footer\FooterRepository as Footer;
use Sefa\Repositories\Article\ArticleRepository as Article;

class FooterController extends BaseController

                {
                protected $footer;
                protected $article;
                public function __construct(Article $article, footer $footer)

                                {
                                $this->footer = $footer;
                                $this->article = $article;
                                }
                /**
                 * Display a listing of the resource.
                 *
                 * @return Response
                 */
                public function index()

                                {
                                $footer = $this->footer->paginate();
                                $articles = $this->article->paginate_footer();
                                return View::make('frontend.footer.index', compact('footer', 'articles'));
                                }
                /**
                 * @param $id
                 * @return \Illuminate\View\View
                 */
                public function show($id, $slug = null)

                                {
                                $footer = $this->footer->find($id);
                                $articles = $this->article->paginate_footer();
                                return View::make('frontend.footer.show', compact('footer', 'articles'));
                                }
                }

