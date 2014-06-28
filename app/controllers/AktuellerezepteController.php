<?php

use Sefa\Repositories\Aktuellerezepte\AktuellerezepteRepository as Aktuellerezepte;

class AktuellerezepteController extends BaseController

                {
                protected $aktuellerezepte;
                public function __construct(Aktuellerezepte $aktuellerezepte)

                                {
                                $this->aktuellerezepte = $aktuellerezepte;
                                }
                /**
                 * Display a listing of the resource.
                 *
                 * @return Response
                 */
                public function index()

                                {
                                $aktuellerezepte = $this->aktuellerezepte->paginate();
                                return View::make('frontend.aktuellerezepte.index', compact('aktuellerezepte'));
                                }
                /**
                 * @param $id
                 * @return \Illuminate\View\View
                 */
                public function show($id, $slug = null)

                                {
                                $aktuellerezepte = $this->aktuellerezepte->find($id);
                                return View::make('frontend.aktuellerezepte.show', compact('aktuellerezepte'));
                                }
                }
