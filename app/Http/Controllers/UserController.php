<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {

            $q = str_replace(" ", "%", $request->get('query'));

            $users = User::where(function ($query) use ($q) {
                if ($query) {
                    $query->where('username', 'like', '%' . $q . '%')
                        ->orWhere('name', 'like', '%' . $q . '%')
                        ->orWhere('email', 'like', '%' . $q . '%');
                }
            })->orderBy('name', 'asc')
                ->get();
            return response()->json([
                'success' => true,
                'message' => "List of users",
                'data' => $users
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => "Error",
                'error' => $th->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'success' => false,
            'message' => "Nothing has been implemented yet",
            'error' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'success' => false,
            'message' => "Nothing has been implemented yet",
            'error' => null
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json([
            'success' => false,
            'message' => "Nothing has been implemented yet",
            'error' => null
        ]);
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
        return response()->json([
            'success' => false,
            'message' => "Nothing has been implemented yet",
            'error' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'success' => false,
            'message' => "Nothing has been implemented yet",
            'error' => null
        ]);
    }
}
