<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = $this->pageSettings();
        return view('pages.admin.wrapper', ['page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    private function pageSettings() {

        //common settings
        $page = [
            'crumbs' => [
                'Administradores',
            ],
            'crumbs_special_class' => 'list-pages-crumbs',
            'meta_title' => 'Administradores',
            'heading' => 'Administradores',
            'page' => 'customers',
            'mainmenu_customers' => 'active',
        ];

        //return
        return $page;
    }
}
