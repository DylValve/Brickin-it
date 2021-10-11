<?php

namespace App\Http\Controllers;

use App\Models\Set;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::whereNull('theme_id')
            ->with('childrenThemes')
            ->get();

        $id = Auth::id();

        $id;
        $all_Themes = Theme::all();
        return view('admin.theme.index', compact('themes', 'all_Themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Theme::all();

        return view('admin.theme.create', compact('themes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $theme = new Theme();
        $theme->fill($request->all());
        $theme->save();
        return redirect(route('themes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        $sets = Set::all();
        return view('admin.theme.show ', compact('theme', 'sets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        $all_Themes = Theme::all();
        return view('admin.theme.edit', compact('theme', 'all_Themes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $theme->update($request->all());
        $theme->save();
        return redirect(route('themes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('themes.index');
    }
}
