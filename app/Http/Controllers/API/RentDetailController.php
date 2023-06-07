<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RentDetail;
use Illuminate\Http\Request;

class RentDetailController extends Controller
{
    public function CreateRentDetail(Request $request)
    {
        $data_rent_detail = RentDetail::create([
            "tenant_name" => $request->tenant_name,
            "address" => $request->address,
            "no_hp" => $request->no_hp,
            "car_id" => $request->car_id,
        ]);

        return response()->json(["message" => "Anda Berhasil Menyewa", "data" => $data_rent_detail]);
    }

    public function GetAllRentDetail()
    {
        $data_rent_detail = RentDetail::with("car")->get();

        return response()->json(["message" => "Success Get All Data", "data" => $data_rent_detail]);
    }
}
