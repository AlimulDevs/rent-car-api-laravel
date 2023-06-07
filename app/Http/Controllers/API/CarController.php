<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function GetCar()
    {
        $data_car = Car::all();

        return response()->json(["message" => "Success Get All Data", "data" => $data_car], 200);
    }
    public function GetCarByID($id)
    {
        $data_car = Car::where("id", $id)->first();

        return response()->json(["message" => "Success Get By ID", "data" => $data_car], 200);
    }

    public function CreateCar(Request $request)
    {

        $image = $request->file("image");
        $image_url = time() . $image->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';

        // upload file
        $image->move($tujuan_upload, $image_url);

        $image_url = url("/" . $tujuan_upload . "/" . $image_url);
        $data_car = Car::create([
            "name" => $request->name,
            "rent_price" => $request->rent_price,
            "image_url" => $image_url,
        ]);

        return response()->json(['message' => "Success Create Car", "data" => $data_car], 200);
    }
}
