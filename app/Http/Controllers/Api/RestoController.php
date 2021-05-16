<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\RestoResource;
use App\Repository\RestoRepository;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RestoResource::collection(Restaurant::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->sendResponse($this->restoRepository->store($request), []);
        $data = Restaurant::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ]);

        return "Data Submited !.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $resto)
    {
        return new RestoResource($resto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $resto)
    {
        $data = $resto->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ]);

        return "Data Updated!.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $resto)
    {
        $resto->delete();
        return "Data Deleted!.";
    }
}
