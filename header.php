<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        
    <nav class="navbar navbar-expand-md navbar-light bg-white menu-shadow">
        <div class="container mx-auto px-0" id="topNavbar">
            <?php echo tainacan_get_logo(); ?>
            <div class="btn-group ml-auto"> 
                <?php if(!is_user_logged_in()) :?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Faça seu login
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <li class="login-box-container" style="width: 550px;">
                                <div class="col login-box-wrapper">
                                    <h3 class="text-center text-white font-weight-bold"> Acesse sua Conta </h3>
                                    <form id="login" action="wp-login.php" method="post" role="form" autocomplete="off" class="col" novalidate="novalidate">
                                        <div class="form-group text-white">
                                            <label for="username"> E-mail </label>
                                            <input type="email" placeholder="Digite seu e-mail cadastrado" name="log" id="log" tabindex="1" class="form-control" value="" autocomplete="off">
                                        </div>
                                
                                        <div class="form-group text-white">
                                            <label for="password"> Senha </label>
                                            <input type="password" name="pwd" id="pwd" tabindex="2" class="form-control" placeholder="Digite sua senha" autocomplete="off">
                                        </div>
                                
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-7 text-white">
                                                    <input id="rememberme" name="rememberme" type="checkbox" value="forever" tabindex="3">
                                                    <label for="rememberme"> Permanecer Logado </label>
                                                </div>
                                                <div class="col-5 float-right">
                                                    <input type="hidden" name="currentURL" value="/">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-rhs" value="Entrar">
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="text-center">
                                                        <a href="http://redehumanizasus.net/wp-login.php?action=lostpassword" tabindex="5" class="forgot-password text-white">Esqueceu sua senha?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </div>
                    </div>
                    <!-- <span class="navbar-text">ou</span>
                    <li class="nav-item d-flex">
                        <a class="nav-link cadastre-se" href="#">Cadastre-se</a>
                    </li> -->
                <?php endif; ?>
                <form class="form-horizontal my-2 my-md-0 tainacan-search-form d-none" [formGroup]="searchForm" role="form" (keyup.enter)="onSubmit()">
                    <div class="input-group">
                        <input type="text" name="s" placeholder="<?php _e('Search', 'tainacan-theme'); ?>" class="form-control" formControlName="searchText" size="50">
                        <span class="text-midnight-blue input-group-btn mdi mdi-magnify form-control-feedback"></span>
                    </div>
                </form>
                <div class="dropdown tainacan-form-dropdown d-md-none">
                    <a class="btn btn-link text-midnight-blue px-1 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-magnify"></i></a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <div class="input-group border">
                                <input class="form-control py-2 border-0" type="search" name="s" placeholder="<?php _e('Search', 'tainacan-theme'); ?>" id="tainacan-search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>