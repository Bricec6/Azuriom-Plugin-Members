<?php

namespace Azuriom\Plugin\Members\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\User;
use Carbon\Carbon;

class MembersHomeController extends MembersChoiceController
{

    /**
     * Show the home plugin page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members::index', [
            'settings' => $this->getSettings(),
        ]);
    }
}
