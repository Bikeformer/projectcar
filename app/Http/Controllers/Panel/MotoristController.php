<?php

namespace App\Http\Controllers\Panel;

use App\Car;
use App\Motorist;
use Illuminate\Http\Request;
use App\Traits\Panel\MotoristTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\MotoristRequest;

class MotoristController extends Controller
{
    use MotoristTrait;

    /**
     * Motorist::class
     *
     * @var Motorist
     */
    public $motorist;

    /**
     * Car::class
     *
     * @var Car
     */
    public $cars;

    /**
     * MotoristController constructor.
     */
    public function __construct()
    {
        $this->motorist = new Motorist();
        $this->cars = new Car();
    }

    /**
     * Panel motorists page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $motorists = $this->motorist->withCount('cars')->latest()->paginate();

        return view('panel.motorist.index', compact('motorists'));
    }

    /**
     * Panel create motorist
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $cars = $this->getCars();

        return view('panel.motorist.create', compact('cars'));
    }

    /**
     * Panel store motorist
     *
     * @param MotoristRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MotoristRequest $request)
    {
        $this->createOrUpdate();

        return redirect()->route('motorist.index');
    }

    /**
     * Panel motorist edit
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $motorist = $this->motorist->whereId($id)->first();
        $cars = $this->getCars();
        return view('panel.motorist.edit', compact('motorist', 'cars'));
    }

    /**
     * Panel update motorist
     *
     * @param $id
     * @param MotoristRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, MotoristRequest $request)
    {
        $this->createOrUpdate($id);

        return redirect()->route('motorist.index');
    }

}
