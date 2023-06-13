<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AdminStoreRequest;
use App\Models\Admin;
use App\Traits\WebTrait;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use WebTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $this->pageSettings();

        $admin = Admin::when($request->has('search_query'), function ($query) use ($request) {
            $query->where('nombre', 'LIKE', '%' . $request->search_query . '%');
        })->get();

        if ($request->has('action')) {
            $template = 'pages/admin/table/table';
            $html = view($template, compact('page', 'admin'))->render();

            return $this->jsonSearch($html);
        }

        return view('pages.admin.wrapper', ['page' => $page, 'admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('pages.admin.modal.add-edit-inc')->render();

        $jsondata['dom_html'][] = [
            'selector' => '#commonModalBody',
            'action' => 'replace',
            'value' => $html,
        ];

        //postrun
        $jsondata['postrun_functions'][] = [
            'value' => 'NXCustomerChangePlan',
        ];

        //render
        return response()->json($jsondata);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreRequest $request)
    {
        Admin::create([
            Admin::NOMBRE => $request->nombre,
            Admin::EMAIL => $request->email,
            Admin::PASSWORD => Hash::make($request->password)
        ]);

        $jsondata['redirect_url'] = url('admin');

        return response()->json($jsondata);
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
        $html = view('pages.admin.modal.add-edit-inc', compact('admin'))->render();

        $jsondata['dom_html'][] = [
            'selector' => '#commonModalBody',
            'action' => 'replace',
            'value' => $html,
        ];

        $jsondata['postrun_functions'][] = [
            'value' => 'NXCustomerBasicEdit',
        ];

        return response()->json($jsondata);
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
        $admin->delete();

        $jsondata['dom_visibility'][] = array(
            'selector' => '#row' . $admin->id,
            'action' => 'slideup-slow-remove',
        );

        $jsondata['notification'] = array('type' => 'success', 'value' => 'Se ha eliminado exitosamente');

        $jsondata['redirect_url'] = url('admin');

        return response()->json($jsondata);
    }

    private function pageSettings() {

        $page = [
            'crumbs' => [
                'Administradores',
            ],
            'meta_title' => 'Administradores',
            'heading' => 'Administradores',
            'page' => 'admin',
            'mainmenu_admin' => 'active',
        ];

        return $page;
    }
}
