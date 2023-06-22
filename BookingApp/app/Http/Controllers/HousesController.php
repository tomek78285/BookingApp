<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Opinions;
use App\Models\Reservation;
use Illuminate\Contracts\View\View as View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('houses', [
            'houses' => House::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Test  $test
     * @return View
     */
    public function show(House $house): View
    {
        return view("houses.show", [
            'house' => $house,
            'opinions' => Opinions::all()->where('id_house', $house->id)
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('house.create', []);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  Request $request
    //  * @return RedirectResponse
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     $house = new House();

    //     $house->name = $request->name_House;
    //     $house->description = $request->description_House;
    //     $house->address = $request->address_House;
    //     $house->number_of_rooms = $request->rooms_House;
    //     $house->price = $request->price;
    //     $house->id_owner = Auth::user()->id;

    //     $house->save();

    //     return redirect(route('house.index'));
    // }

    public function rating(): View
    {
        return view('house.rating', []);
    }

    public function rate(Request $request, House $house): RedirectResponse
    {
        $opinion = new Opinions();

        $opinion->description = $request->description;
        $opinion->rating = $request->rating;
        $opinion->id_house = $house->id;
        $opinion->id_user = Auth::user()->id;
        $opinion->date = Carbon::now();

        $opinion->save();

        return redirect(route('house.index'));
    }

    public function reserving(): View
    {
        return view('house.reserving', []);
    }

    public function reserve(Request $request, House $house): RedirectResponse
    {
        $reservation = new Reservation();

        $reservation->start_date = $request->since;
        $reservation->end_date = $request->to;
        $reservation->id_house = $house->id;
        $reservation->price = $house->price;
        $reservation->id_user = Auth::user()->id;

        $reservation->save();

        return redirect(route('house.index'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  House $house
    //  * @return View
    //  */
    // public function edit(House $house)
    // {
    //     return view("house.edit", [
    //         'house' => $house
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  Request  $request
    //  * @param  House $house
    //  * @return RedirectResponse
    //  */
    // public function update(Request $request, House $house): RedirectResponse
    // {
    //     $house->name = $request->name_House;
    //     $house->description = $request->description_House;
    //     $house->address = $request->address_House;
    //     $house->number_of_rooms = $request->rooms_House;
    //     $house->price = $request->price;
    //     $house->id_owner = Auth::user()->id;

    //     $house->save();

    //     return redirect(route('house.index'));
    // }

    // public function delete($id)
    // {
    //     House::destroy($id);

    //     return redirect()->route('house.index');
    // }

}
