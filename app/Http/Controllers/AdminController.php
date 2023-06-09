<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AdminStoreRequest;
use App\Models\Admin;
use App\Traits\WebTrait;
use Hash;
use Illuminate\Http\Request;
use Response;

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
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $this->showSuccessCreate();

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
        if($request->has('nombre')){
            $admin->nombre = $request->nombre;
        }

        if($request->has('email')){
            $admin->email = $request->email;
        }

        if($request->has('password') && !empty($request->password)){
            $admin->password = Hash::make($request->password);
        }

        if (!$admin->isDirty()) {
           return $this->responseDirty();
        }

        $admin->save();

        $this->showSuccessUpdate();
        $jsondata['redirect_url'] = url('admin');

        return Response::json($jsondata);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        $this->showSuccessDelete();
        
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
