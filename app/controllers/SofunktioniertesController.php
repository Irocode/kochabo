<?php

use Sefa\Repositories\Sofunktioniertes\SofunktioniertesRepository as Sofunktioniertes;

class SofunktioniertesController extends BaseController

                {
                protected $sofunktioniertes;
                public function __construct(Sofunktioniertes $sofunktioniertes)

                                {
                                $this->sofunktioniertes = $sofunktioniertes;
                                }
                /**
                 * Display a listing of the resource.
                 *
                 * @return Response
                 */
                public function index()

                                {
                                $sofunktioniertes = $this->sofunktioniertes->paginate();
                                return View::make('frontend.sofunktioniertes.index', compact('sofunktioniertes'));
                                }
                /**
                 * @param $id
                 * @return \Illuminate\View\View
                 */
                public function show($id, $slug = null)

                                {
                                $sofunktioniertes = $this->sofunktioniertes->find($id);
                                return View::make('frontend.sofunktioniertes.show', compact('sofunktioniertes'));
                                }
                }

