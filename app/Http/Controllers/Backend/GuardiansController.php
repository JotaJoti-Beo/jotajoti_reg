<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GuardiansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function index(Request $request): Factory|View|Application
    {
        if ($request->input('search') == null) {
            $guardians = Guardian::all();
        } else {
            $search_string = $request->input('search');
            $guardians = Guardian::where('first_name', 'LIKE', "%$search_string%")
                ->orWhere('last_name', 'LIKE', "%$search_string%")->get();
        }

        return view('backend.guardians.guardians', ['guardians' => $guardians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('backend.guardians.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $mail = $request->input('mail');
        $phone = $request->input('phone');

        Guardian::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'mail' => $mail,
            'phone' => $phone,
        ]);

        return redirect()->back()->with('message', 'Daten wurden gespeichert!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $gid
     * @return Application|Factory|View
     */
    public function edit($gid): View|Factory|Application
    {
        $guardian = Guardian::find($gid);

        return view('backend.guardians.edit', ['guardian' => $guardian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request, $guardid): RedirectResponse
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $mail = $request->input('mail');
        $phone = $request->input('phone');

        Guardian::where('reference', '=', $guardid)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'mail' => $mail,
            'phone' => $phone,
        ]);

        return redirect()->back()->with('message', 'Daten wurden gespeichert!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $gid
     * @return RedirectResponse
     */
    public function destroy($gid): RedirectResponse
    {
        Guardian::destroy($gid);

        return redirect()->back()->with('message', 'Notfallkontakt erfolgreich gelöscht');
    }
}
