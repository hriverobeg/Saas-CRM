<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" id="meta-csrf" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Cotizador PHI TOOLS</title>

  <!--BASEURL-->
  <base href="{{ url('/') }}" target="_self">

  <!--JQUERY & OTHER HEADER JS-->
  <script src="/vendor/js/vendor.header.js"></script>

  <!--BOOTSTRAP-->
  <link href="/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="public/vendor/js/html5shiv/html5shiv.js"></script>
  <script src="public/vendor/js/respond/respond.min.js"></script>
  <![endif]-->

  <!--GOOGLE FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"
      type="text/css">


  <!--VENDORS CSS-->
  <link rel="stylesheet" href="/vendor/css/vendor.css">

  <!--ICONS-->
  <link rel="stylesheet" href="/vendor/fonts/growcrm-icons/styles.css">

  <!--THEME STYLE-->
  <link href="/themes/default/css/style.css" rel="stylesheet">

  <!--SAAS STYLE-->
  <link href="/themes/default/css/saas.css"rel="stylesheet">

  <link href="/css/custom.css" rel="stylesheet">

  <!--USERS CUSTON CSS FILE-->
  <link href="/themes/landlord/css/landlord.css" rel="stylesheet">

  <!-- Favicon icon -->

  <!--SET DYNAMIC VARIABLE IN JAVASCRIPT-->
  <script type="text/javascript">
    //name space & settings
    NX = (typeof NX == 'undefined') ? {} : NX;
    NXJS = (typeof NXJS == 'undefined') ? {} : NXJS;
    NXLANG = (typeof NXLANG == 'undefined') ? {} : NXLANG;
    NX.data = (typeof NX.data == 'undefined') ? {} : NX.data;

    //variables
    NX.system_type = "landlord";
    NX.site_url = "{{ url('/') }}";
    NX.app_admin_url = "/"; //including traling /
    NX.csrf_token = "{{ csrf_token() }}";
    NX.system_language = "spanish";
    NX.date_format = "d-m-Y";
    NX.date_picker_format = "dd-mm-yyyy";
    NX.date_moment_format = "DD-MM-YYYY";
    NX.upload_maximum_file_size = "5000";
    NX.settings_system_currency_symbol = "$";
    NX.settings_system_decimal_separator =  ".";
    NX.settings_system_thousand_separator = ",";
    NX.settings_system_currency_position = "left";
    NX.show_action_button_tooltips = "1";
    NX.notification_position = "bottomLeft";
    NX.notification_error_duration = "5000";
    NX.notification_success_duration = "3000";

    //javascript console debug modes
    NX.debug_javascript = "";

    //popover template
    NX.basic_popover_template = '<div class="popover card-popover" role="tooltip">' +
        '<span class="popover-close" onclick="$(this).closest(\'div.popover\').popover(\'hide\');" aria-hidden="true">' +
        '<i class="ti-close"></i></span>' +
        '<div class="popover-header"></div><div class="popover-body" id="popover-body"></div></div>';

    //lang - used in .js files
    NXLANG.delete_confirmation = "Confirmación de eliminado";
    NXLANG.are_you_sure_delete = "¿Estás segura de que quieres eliminar este artículo?";
    NXLANG.cancel = "Cancelar";
    NXLANG.continue = "Continuar";
    NXLANG.file_too_big = "File is too big";
    NXLANG.maximum = "Maximo";
    NXLANG.generic_error = "Se encontró un error al procesar su solicitud";
    NXLANG.drag_drop_not_supported = "Su navegador no admite arrastrar y soltar";
    NXLANG.use_the_button_to_upload = "Usa el botón para subir";
    NXLANG.file_type_not_allowed = "El tipo de archivo no está permitido";
    NXLANG.cancel_upload = "Cancelar carga";
    NXLANG.remove_file = "Remover archivo";
    NXLANG.maximum_upload_files_reached = "Maximum allowed files has been reached";
    NXLANG.upload_maximum_file_size = "lang.upload_maximum_file_size";
    NXLANG.upload_canceled = "Upload cancelled";
    NXLANG.are_you_sure = "Are you sure?";
    NXLANG.image_dimensions_not_allowed = "Images dimensions are not allowed";
    NXLANG.ok = "Ok";
    NXLANG.cancel = "Cancel";
    NXLANG.close = "Close";
    NXLANG.system_default_category_cannot_be_deleted =
        "This is a system default category and cannot be deleted";
    NXLANG.default_category = "Default Catagory";
    NXLANG.select_atleast_one_item = "You must select at least one item";
    NXLANG.invalid_discount = "The discount is not valid";
    NXLANG.add_lineitem_items_first = "First add invoice products";
    NXLANG.fixed = "Fixed";
    NXLANG.percentage = "Percentage";
    NXLANG.action_not_completed_errors_found = "The request could not be completed";
    NXLANG.selected_expense_is_already_on_invoice =
        "One of the selected expenses is already on the invoice";
    NXLANG.please_wait = "Please wait...";
    NXLANG.invoice_time_unit = "Time";
    //arrays to use generically
    NX.array_1 = [];
    NX.array_2 = [];
    NX.array_3 = [];
    NX.array_4 = [];
  </script>

  <!--boot js-->
  <script src="/js/core/head.js"></script>
</head>