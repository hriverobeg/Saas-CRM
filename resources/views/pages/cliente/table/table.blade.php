<div class="card count-{{ @count($list) }}" id="table-wrapper">
  <div class="card-body">
      <div class="table-responsive list-table-wrapper">
          @if (@count($list) > 0)
          <table id="customer-list-table" class="table m-t-0 m-b-0 table-hover no-wrap tenant-list"
              data-page-size="10">
              <thead>
                  <tr>
                      <!--tenant_id-->
                      <th class="tenants_col_tenant_id">ID</th>
                      <th class="tenants_col_tenant_name">Nombre</th>
                      <th class="tenants_col_tenant_email">Email</th>
                      <th class="tenants_col_action"><a href="javascript:void(0)">Acciones</a></th>
                  </tr>
              </thead>
              <tbody id="customer-td-container">
                  <!--ajax content here-->
                  @include('pages.cliente.table.ajax')
                  <!--ajax content here-->
              </tbody>
              <tbody class="border-0">
                  <tr>
                      <td colspan="20">
                          <!--load more button-->
                          @include('misc.load-more-button')
                          <!--load more button-->
                      </td>
                  </tr>
              </tbody>
          </table>
          @endif @if (@count($list) == 0)
          <!--nothing found-->
          @include('notifications.no-results-found')
          <!--nothing found-->
          @endif
      </div>
  </div>
</div>