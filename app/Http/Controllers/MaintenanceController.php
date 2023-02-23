<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MaintenanceController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {

   //get maintenances
   $maintenances = Maintenance::paginate(8);


   return view('maintenances.index', compact('maintenances'));
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenances.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'type' => '',
                'department' => '',

            ]);

            Maintenance::create($validatedData);

            Alert::success('Berhasil', "Maintenance berhasil ditambahkan");

            return redirect('/maintenance');

        }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintenance = Maintenance::where('id', $id)->first();
        return view('maintenances.show', compact('maintenance'));
    }


}
