<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cliente\ClienteStoreRequest;
use App\Models\Cliente;
use App\Traits\WebTrait;
use Illuminate\Http\Request;
use Response;

class ClienteController extends Controller
{

    use WebTrait;

    protected $url = 'cliente';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $this->pageSettings();

        $list = Cliente::when($request->has('search_query'), function ($query) use ($request) {
            $query->where('nombre', 'LIKE', '%' . $request->search_query . '%');
        })->get();

        if ($request->has('action')) {
            $template = "pages/cliente/table/table";
            $html = view($template, compact('page', 'cliente'))->render();

            return $this->jsonSearch($html);
        }

        return view('pages.cliente.wrapper', compact('page', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('pages.cliente.modal.add-edit-inc')->render();

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
    public function store(ClienteStoreRequest $request)
    {
        Cliente::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono
        ]);

        $this->showSuccessCreate();

        $jsondata['redirect_url'] = url($this->url);

        return response()->json($jsondata);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $html = view('pages.cliente.modal.add-edit-inc', compact('cliente'))->render();

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
    public function update(Request $request, Cliente $cliente)
    {
        if($request->has('nombre')){
            $cliente->nombre = $request->nombre;
        }

        if($request->has('email')){
            $cliente->email = $request->email;
        }

        if($request->has('telefono')){
            $cliente->telefono = $request->telefono;
        }

        if (!$cliente->isDirty()) {
           return $this->responseDirty();
        }

        $cliente->save();

        $this->showSuccessUpdate();
        $jsondata['redirect_url'] = url($this->url);

        return Response::json($jsondata);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        $this->showSuccessDelete();

        $jsondata['redirect_url'] = url($this->url);

        return response()->json($jsondata);
    }

    private function pageSettings() {

        $page = [
            'crumbs' => [
                'Clientes',
            ],
            'meta_title' => 'Clientes',
            'heading' => 'Clientes',
            'page' => 'cliente',
            'mainmenu_cliente' => 'active',
        ];

        return $page;
    }
}
