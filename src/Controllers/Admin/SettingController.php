<?php

namespace Azuriom\Plugin\Members\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Setting;
use Azuriom\Plugin\Members\Controllers\MembersChoiceController;
use Illuminate\Http\Request;

class SettingController extends MembersChoiceController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members::admin.settings', [
            'settings' => $this->getSettings(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Azuriom\Plugin\staff\Requests\SettingRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'mode' => ['nullable', 'string'],
            'show_id' => ['nullable', 'string'],
            'show_avatar' => ['nullable', 'string'],
            'show_role' => ['nullable', 'string'],
            'show_name' => ['nullable', 'string'],
            'show_votes' => ['nullable', 'string'],
            'show_money' => ['nullable', 'string'],
            'show_createdAt' => ['nullable', 'string']
        ]);

        Setting::updateSettings([
            'members.mode' => $request->input('mode'),
            'members.show_id' => $request->input('show_id'),
            'members.show_avatar' => $request->input('show_avatar'),
            'members.show_role' => $request->input('show_role'),
            'members.show_name' => $request->input('show_name'),
            'members.show_votes' => $request->input('show_votes'),
            'members.show_money' => $request->input('show_money'),
            'members.show_createdAt' => $request->input('show_createdAt')
        ]);

        return redirect()->route('members.admin.settings')->with('success', trans('admin.settings.updated'));
    }
}
