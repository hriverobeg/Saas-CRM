@foreach($list as $item)
<!--each row-->
<tr id="row_{{ $item->id }}">
    <!--id-->
    <td class="tenants_col_id" id="tenants_col_rate_{{ $item->id }}">
        {{ $item->id }}
    </td>

    <!--first_name-->
    <td class="tenants_col_name">
       {{ $item->nombre }}
    </td>

    <td class="tenants_col_name">
        {{ $item->email }}
     </td>


    <td class="tenants_col_action actions_column" id="tenants_col_action_{{ $item->id }}">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <button type="button" title="Eliminar"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="¿Eliminar?"
                data-confirm-text="¿Estás seguro que deseas eliminarlo?" data-ajax-type="DELETE"
                data-url="/cliente/{{ $item->id }}">
                <i class="sl-icon-trash"></i>
            </button>

            <button class="data-toggle-action-tooltip btn btn-outline-primary btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                        href="javascript:void(0)" data-toggle="modal" data-target="#commonModal"
                        data-modal-title="Editar"
                        data-url="/cliente/{{ $item->id }}/edit"
                        data-action-url="/cliente/{{ $item->id }}"
                        data-loading-target="commonModalBody" data-action-method="PUT">
                        <i class="sl-icon-pencil"></i>

        </span>
        <!--action button-->
    </td>
</tr>
@endforeach
<!--each row-->