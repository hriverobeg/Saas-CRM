<!--CRUMBS CONTAINER (LEFT)-->
<div class="col-md-12 col-lg-5 align-self-center list-pages-crumbs"
    id="breadcrumbs">
    <h3 class="text-themecolor">{{ $page['heading'] }}</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">PHI TOOLS</li>
        @if(isset($page['crumbs']))
        @foreach ($page['crumbs'] as $title)
        <li class="breadcrumb-item @if ($loop->last) active active-bread-crumb @endif">{{ $title ?? '' }}</li>
        @endforeach
        @endif
    </ol>
</div>