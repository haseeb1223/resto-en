<?php

namespace App\Repository;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Repository\BaseRepository;
use App\Http\Resources\RestoResource;
use App\Repository\Interfaces\RestoRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class RestoRepository extends BaseRepository implements RestoRepositoryInterface
{

    /**
     * ProfileRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Restaurant $model)
    {
        parent::__construct($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RestoResource::collection(Restaurant::all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::beginTransaction();
        try {

            $data = Restaurant::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }

        DB::commit();

        return new RestoResource($data);
    }



    public function show(User $user)
    {
        return new UserResource($user);
    }





    /**
     * @param  illuminate\Http\Request  $request
     *
     * @return bool
     * @throws \Throwable
     */
    public function update(Request $request, Patient $patient)
    {

        DB::beginTransaction();
        try {

            $data = $patient->update([
                'name' => $request->name,
                'shitSize' => $request->shitSize,
                'shitColor' => $request->shitColor,
                'shitType' => $request->shitType,
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return false;
        }

        DB::commit();
        return new PatientResource($patient);
    }


    public function destroy(Patient $patient)
    {
        $data = $patient->delete();
        return response()->json('campus and user successfully deleted');
    }
}
