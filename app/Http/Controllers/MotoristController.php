<?php

namespace App\Http\Controllers;

use App\Motorist;
use Illuminate\Http\Request;

class MotoristController extends Controller
{
    /**
     * Motorist::class
     *
     * @var Motorist
     */
    public $motorist;

    /**
     * MotoristController constructor.
     */
    public function __construct()
    {
        $this->motorist = new Motorist();
    }

    /**
     * Motorist page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $motorists = $this->motorist->withCount('cars')->latest()->paginate();

        return view('motorist.index', compact('motorists'));
    }

    /**
     * Motorist show
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $motorist = $this->motorist->whereId($id)->with('cars.mark')->first();

        return view('motorist.show', compact('motorist'));
    }
}
