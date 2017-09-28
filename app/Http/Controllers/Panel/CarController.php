<?php

namespace App\Http\Controllers\Panel;

use App\Car;
use App\CarMark;
use Illuminate\Http\Request;
use App\Traits\Panel\CarTrait;
use App\Http\Requests\CarRequest;
use App\Http\Controllers\Controller;


class CarController extends Controller
{
    use CarTrait;

    /**
     * Car::class
     *
     * @var Car
     */
    public $car;

    /**
     * CarMark::class
     *
     * @var Car
     */
    public $marks;

    /**
     * CarController constructor.
     */
    public function __construct()
    {
        $this->car = new Car;
        $this->marks = new CarMark;
    }

    /**
     * Panel car page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cars = $this->car->with('mark')->latest()->paginate();

        return view('panel.car.index', compact('cars'));
    }

    /**
     * Panel create car
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $marks = $this->marks->pluck('name', 'id');

        return view('panel.car.create', compact('marks'));
    }

    /**
     * Panel store car
     *
     * @param CarRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarRequest $request)
    {
        $this->createOrUpdate();

        return redirect()->route('car.index');
    }

    /**
     * Panel edit car
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $car = $this->car->find($id);

        $marks = $this->marks->pluck('name', 'id');

        return view('panel.car.edit', compact('car', 'marks'));
    }

    /**
     * Panel update car
     *
     * @param $id
     * @param CarRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, CarRequest $request)
    {
        $this->createOrUpdate($id);

        return redirect()->route('car.index');
    }

}
