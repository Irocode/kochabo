<?php

use Sefa\Repositories\Offer\OfferRepository as Offer;

class OfferController extends BaseController

                {
                protected $offer;
                public function __construct(Offer $offer)

                                {
                                $this->offer = $offer;
                                }
                /**
                 * Display a listing of the resource.
                 *
                 * @return Response
                 */
                public function index()

                                {
                                $offer = $this->offer->paginate();
                                return View::make('frontend.offer.index', compact('offer'));
                                }
                /**
                 * @param $id
                 * @return \Illuminate\View\View
                 */
                public function show($id, $slug = null)

                                {
                                $offer = $this->offer->find($id);
                                return View::make('frontend.offer.show', compact('offer'));
                                }
                }

