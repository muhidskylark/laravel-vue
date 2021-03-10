<?php

namespace App\Http\Controllers;

use App\Models\UserCreate;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = [
            (object)[
                'id' => 1,
                'name' => 'Abdullah Al Muhit'
            ],
            (object)[
                'id' => 2,
                'name' => 'Abeer'
            ],
            (object)[
                'id' => 3,
                'name' => 'muhit'
            ]
        ];
        return response([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = UserCreate::create([
            'email' => $request->email,
            'password' => $request->password,
            'c_password' => $request->c_password,
        ]);

        $data = [
            'data' => $user,
            'status' => (bool) $user,
            'message' => $user ? 'User Created!' : 'Error Creating User',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
