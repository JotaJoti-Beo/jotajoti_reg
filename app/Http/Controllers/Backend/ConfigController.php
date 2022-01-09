<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $config = Config::all();

        return view('backend.config.index', ['config' => $config]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $cid
     *
     * @return Application|Factory|View
     */
    public function edit($cid)
    {
        $config = Config::find($cid);

        return view('backend.config.edit', ['config' => $config]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $cid
     *
     * @return RedirectResponse
     */
    public function update(Request $request, $cid)
    {
        $reg_start = $request->input('reg_start');
        $jojo_start = $request->input('jojo_start');
        $jojo_start_pio = $request->input('jojo_start_pio');
        $jojo_end = $request->input('jojo_end');
        $quota = $request->input('quota');

        Config::updateOrCreate([
            'id' => $cid,
        ], [
            'reg_start' => $reg_start,
            'jojo_start' => $jojo_start,
            'jojo_start_pio' => $jojo_start_pio,
            'jojo_end' => $jojo_end,
            'quota' => $quota,
        ]);

        return redirect()->back()->with('message', 'Die Konfiguration wurde aktualisiert.');
    }
}
