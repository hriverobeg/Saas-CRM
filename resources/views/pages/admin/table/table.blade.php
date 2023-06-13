<div class="card count-{{ @count($admin) }}" id="table-wrapper">
  <div class="card-body">
      <div class="table-responsive list-table-wrapper">
          @if (@count($admin) > 0)
          <table id="customer-list-table" class="table m-t-0 m-b-0 table-hover no-wrap tenant-list"
              data-page-size="10">
              <thead>
                  <tr>
                      <!--tenant_id-->
                      <th class="tenants_col_tenant_id"><a class="js-ajax-ux-request js-list-sorting"
                              id="sort_tenant_id" href="javascript:void(0)"
                              data-url="/admin?action=sort&orderby=id&sortorder=asc">ID<span
                                  class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                      <!--tenant_name-->
                      <th class="tenants_col_tenant_name"><a class="js-ajax-ux-request js-list-sorting"
                              id="sort_tenant_name" href="javascript:void(0)"
                              data-url="/admin?action=sort&orderby=nombre&sortorder=asc">Nombre<span
                                  class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>
                      <th class="tenants_col_action"><a href="javascript:void(0)">Acciones</a></th>
                  </tr>
              </thead>
              <tbody id="customer-td-container">
                  <!--ajax content here-->
                  @include('pages.admin.table.ajax')
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
          @endif @if (@count($admin) == 0)
          <!--nothing found-->
          @include('notifications.no-results-found')
          <!--nothing found-->
          @endif
      </div>
  </div>
</div>