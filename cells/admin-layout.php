<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */

helper(['admin_icon']);
?><!doctype html>
<html lang="<?= esc($lang ?? 'en'); ?>">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?? 'AdminLTE 4';?></title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="<?= $title ?? 'AdminLTE 4';?>" />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('assets/adminlte4/css/adminlte.css');?>" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte4/css/adminlte.css');?>" />
    <!--end::Required Plugin(AdminLTE)-->
    <?= $styles;?>
  </head>
  <!--end::Head-->
  <!--
    Top-nav layout: there is NO <aside class="app-sidebar"> on this page, so the
    app-wrapper grid's sidebar column (grid-template-columns: auto 1fr) collapses
    to zero width on its own — header, main, and footer span the full viewport.
    The primary navigation lives in the app-header as a plain Bootstrap
    navbar-expand-lg (Collapse + toggler on mobile). No PushMenu, and therefore
    no sidebar-expand-* class on <body>.
  -->
  <!--begin::Body-->
  <body class="bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand-lg bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Brand-->
          <a href="<?= site_url('admin');?>" class="navbar-brand d-flex align-items-center">
            <?php
            /*
            <img
              src="<?= base_url('assets/AdminLte4/assets/img/AdminLTELogo.png');?>"
              alt="AdminLTE Logo"
              width="30"
              height="30"
              class="opacity-75 shadow me-2"
            />
            */?>
            <span class="fw-light"><?= $appName ?? 'AdminKit';?></span>
          </a>
          <!--end::Brand-->
          <!--begin::Toggler (plain Bootstrap collapse, not PushMenu)-->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#topNavMenu"
            aria-controls="topNavMenu"
            aria-expanded="false"
            aria-label="<?= lang('Admin.Toggle navigation');?>"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--end::Toggler-->
          <!--begin::Collapsible Menu-->
          <div class="collapse navbar-collapse" id="topNavMenu">
            <ul class="navbar-nav">
                <?php
                /*
                <li class="nav-item">
                    <a class="nav-link active" 
                        aria-current="page" 
                        href="<?= site_url('admin');?>"><?= lang('Admin.Home');?></a>
                </li>
                */?>
                <?php foreach($menu as $label => $items):?>
                    <?php

                        $active = false;

                        foreach($items as $key => $item)
                        {
                            if ($key == $activeMenu)
                            {
                                $active = true;
                            }
                        }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= $active ? ' active' : '';?>"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"><?= $label;?></a>
                        <ul class="dropdown-menu">
                            <?php foreach($items as $key => $item):?>
                                <li>
                                    <a class="dropdown-item<?= $key == $activeMenu 
                                        ? ' active' 
                                        : '';?>" 
                                        href="<?= $item['url'];?>">
                                        <?php if(!empty($item['icon'])):?>
                                            <?= admin_icon($item['icon']);?>
                                        <?php endif;?>
                                        <?= $item['label'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                      </li>
                <?php endforeach;?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        

                        <?php $avatarUrl = $user->getAdminAvatarImageUrl(/*'assets/adminlte4/assets/img/user2-160x160.jpg'*/);?>
                        
                        <?php if($avatarUrl):?>
                            <img src="<?= $avatarUrl;?>" 
                                class="user-image rounded-circle shadow me-2" 
                                style="object-fit: cover; float: left; width: 2rem; height: 2rem; margin-top: -2px;"
                                alt="">
                        <?php else:?>
                            <i class="bi bi-person-circle me-1" aria-hidden="true"></i>
                        <?php endif;?>
                        <?= $user->getAdminName();?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php foreach($user->getAdminAccountMenu() as $key => $item):?>
                            <li>
                                <a class="dropdown-item<?= $key == $activeMenu 
                                    ? ' active' 
                                    : '';?>" 
                                    href="<?= $item['url'];?>">
                                        <?php if(!empty($item['icon'])):?>
                                            <?= admin_icon($item['icon']);?>
                                        <?php endif;?>
                                        <?= $item['label'];?>
                                    </a>
                            </li>
                        <?php endforeach;?>

                        <li>
                            <form method="post" 
                                action="<?= $user->getAdminLogoutUrl();?>">
                                <button class="dropdown-item" type="submit"><?= lang('Admin.Log Out');?></button>
                            </form>
                        </li>
                    </ul>
                </li>
                <?php
                /*

              <li class="nav-item">
                <a class="nav-link" href="../docs/introduction.html">
                  <i class="bi bi-person-circle me-1" aria-hidden="true"></i>
                  <?= $user->getAdminName();?>
                </a>
              </li>
              */?>
            </ul>
          </div>
          <!--end::Collapsible Menu-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3"><?= $h1 ?? $title;?></h1>
                </div>
                <div class="col-sm-6">
                <?php if(!empty($breadcrumbs)):?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-sm-end">
                            <?php foreach($breadcrumbs as $key => $value):?>
                                <?php if(is_integer($key)):?>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $value;?></li>
                                <?php else:?>
                                    <li class="breadcrumb-item"><a href="<?= $value;?>"><?= $key;?></a></li>
                                <?php endif;?>
                            <?php endforeach;?>
                        </ol>
                    </nav>
                <?php endif;?>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <div class="row g-4">
                <div class="col-12">

                    <?php foreach($messages as $type => $message):?>
                        <?php foreach((array) $message as $text):?>
                            <?= view_cell('AdminAlert', [
                                'message' => $text, 
                                'type' => $type
                            ]);?>
                        <?php endforeach;?>
                    <?php endforeach;?>

                <!--begin::Card-->
                <div class="card">
                  <?php if($description || $actions):?>
                    <div class="card-header">
                        <h3 class="card-title" style="line-height: 1.8;"><?= $description;?></h3>
                        <div class="card-tools">
                            <?php foreach($actions as $item):?>
                                <?= view_cell('AdminGridButton', $item);?>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endif;?>
                  <!-- /.card-header -->
                  <div class="card-body"><?= $content;?></div>
                    <?php
                    /*   
                  <!-- /.card-body -->
                  <div class="card-footer">The footer of the card</div>
                  <!-- /.card-footer -->
                    */?>
                </div>
                <!--end::Card-->
              </div>
            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">
            <?php if($footerMenu):?>
                <?php $i=0;?>
                <?php foreach($footerMenu as $item):?>
                    <?php if($i > 0):?> | <?php endif;?>
                    <a class="text-muted" href="<?= $item['url'];?>"><?= $item['label'];?></a>
                    <?php $i++;?>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <?= $copyright ?? '<strong>Copyright &copy; 2014-2026 <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.</strong>';?>
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url('assets/adminlte4/js/adminlte.js');?>"></script>
    <!--end::Required Plugin(AdminLTE)-->
    <!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
    <?= $scripts;?>
  </body>
  <!--end::Body-->
</html>
