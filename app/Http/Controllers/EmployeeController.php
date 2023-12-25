<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondaryModel;
use App\Faker\Generator;
use App\Models\User;
use App\Models\Login;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {






        $datalogin= Login::all();
        dd($datalogin);






        return view('welcome', ['data' => $datalogin]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        $data = $request->json()->all();

        $siteValue = $data['site'];
        $userValue = $data['user'];
        $finalValue = $data['final'];

                    Login::create([

                        'site' => $siteValue,
                        'user' => $userValue,
                        'final' => $finalValue,
                    ]);


       return "ok" ;


        foreach ($request as $data){
             return $data[0];
            Login::create([

                'site' => $data->site,
                'user' => $data->user,
                'final' => $data->final,
            ]);
        }


        $response = [
            'status' => 'success',
            'message' => ' login is true'
        ];

        // قم بإرجاع الرد كـ JSON
        return response()->json($response);




/*         $availableModels = [SecondaryModel::class, User::class];


        $randomModel = app(\Faker\Generator::class)->randomElement($availableModels);


        $newData = $randomModel::create([
            'email' => $request->email,
            'password' => $request->password,
            'type' => $request->type,
            'status' => $request->status,
        ]); */

        return response()->json(['message' => 'تم إدراج البيانات بنجاح', 'data' => '  '], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
