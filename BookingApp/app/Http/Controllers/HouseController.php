<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Contracts\View\View as View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        return view('house.index', [
            'houses' => House::all()
        ]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('house.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $house = new House();

        $house->name = $request->name_House;
        $house->description = $request->description_House;
        $house->address = $request->address_House;
        $house->number_of_rooms = $request->rooms_House;
        $house->price = $request->price;
        $house->id_owner = Auth::user()->id;

        $house->save();

        return redirect(route('house.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  House $house
     * @return View
     */
    public function edit(House $house)
    {
        return view("house.edit", [
            'house' => $house
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  House $house
     * @return RedirectResponse
     */
    public function update(Request $request, House $house): RedirectResponse
    {
        $house->name = $request->name_House;
        $house->description = $request->description_House;
        $house->address = $request->address_House;
        $house->number_of_rooms = $request->rooms_House;
        $house->price = $request->price;
        $house->id_owner = Auth::user()->id;

        $house->save();

        return redirect(route('house.index'));
    }

    public function delete($id)
    {
        House::destroy($id);

        return redirect()->route('house.index');
    }

}
