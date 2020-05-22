 @extends('admin.app')
 @section('title') Settings @endsection
 @section('content')
 <div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Settings</h1>
    <p>all Settings are Here</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Settings</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-3">
     <div class="tile p-0">
        <ul class="nav flex-column nav-tabs user-tabs">
            <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
            <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">Site Logo</a></li>
            <li class="nav-item"><a class="nav-link" href="#footer-seo" data-toggle="tab">Footer &amp; SEO</a></li>
            <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">Social Links</a></li>
            <li class="nav-item"><a class="nav-link" href="#analytics" data-toggle="tab">Analytics</a></li>
            <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">Payments</a></li>
        </ul>
    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content">
        <div class="tab-pane active" id="general">
            @include('admin.settings.general')
        </div>
        <div class="tab-pane fade" id="site-logo">
            @include('admin.settings.logo')
        </div>
        <div class="tab-pane fade" id="footer-seo">
            @include('admin.settings.footer_seo')
        </div>
        <div class="tab-pane fade" id="social-links">
            @include('admin.settings.social_links')
        </div>
        <div class="tab-pane fade" id="analytics">
            @include('admin.settings.analytics')
        </div>
        <div class="tab-pane fade" id="payments">
            @include('admin.settings.payments')
        </div>
    </div>
  </div>
</div>
@endsection