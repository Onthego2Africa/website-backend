<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

/**
 * @group Event Package APIs
 *
 * Apis for managing event package resource
 * @return \Illuminate\Http\Response
 */


class PackageController extends Controller
{
    /**
     * GET /packages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();

        $response = [
            'packages' => $packages
        ];

        return response($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * GET /packages/id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::find($id);

        if (!$package) {
            abort(404, 'Not Found');
        }

        $response = [
            'package' => $package
        ];

        return response($response, 200);

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
