<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    public function list()
    {
        $i = 1;
        $data = Restaurant::all();
        return view('list', ['data' => $data, 'i' => 1]);
    }

    public function regester(Request $request)
    {
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->email = $request->email;
        $resto->address = $request->address;
        $resto->save();
        $request->session()->flash('regester', 'Restaurant regesterd successfully.');
        return redirect('list');
    }

    public function delete($id)
    {
        $data = Restaurant::find($id);
        $data->delete();
        return redirect('list');
    }

    public function find($id)
    {
        $data = Restaurant::find($id);
        session()->flash('find', 'We found your data successfully.');
        return view('update', ['data' => $data,]);
    }

    public function update(Request $request)
    {
        $data = Restaurant::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        return redirect('list');
    }

    public function redirect()
    {
        return redirect('regester');
    }

    public function search(Request $request)
    {
        $flash = 'No Data Found By "' . $request->search . '" .';
        $i = 1;
        $show = "view";
        $result = Restaurant::where('name', 'LIKE', '%' . $request->search . '%')->get();
        if ($result == '[]') {
            return view('list', ['data' => $result, 'i' => $i, 'show' => $show, 'flash' => $flash]);
        } else {
            return view('list', ['data' => $result, 'i' => $i, 'show' => $show]);
        }
    }
}
