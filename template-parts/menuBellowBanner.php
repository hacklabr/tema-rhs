<nav class="navbar navbar-expand-md navbar-light bg-white px-0 border-bottom menu-belowheader" role="navigation">
    <div class="container mx-auto px-0">
        <a class="navbar-brand d-md-none" href="#"></a>
        <button class="navbar-toggler text-heavy-metal border-0 px-2 pt-2" type="button" data-toggle="collapse" data-target="#menubelowHeader" aria-controls="menubelowHeader" aria-expanded="false" aria-label="Toggle navigation">	
            <span class="navbar-toggler-icon"></span>	
        </button>
        <div class="collapse navbar-collapse" id="menubelowHeader">
            <?php if(!my_wp_is_mobile()){ ?>
                <form autocomplete="off" class="form-search-rhs navbar-form navbar-left" role="search" id="formSearchCollections">
                    <div class="form-group" style="display: inline;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquise em nosso acervo..." size="15" maxlength="128" name="s" id="search_collections" value="">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="mdi mdi-magnify"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            <?php
            }
            if(my_wp_is_mobile()):
                menuDropDownMobile();
            else :
                ?>

                <?php
                /*
                * SegundoMenu vem de um register feito nas functions onde o mesmo entra em contato com o menu do
                * Wordpress.
                * O mesmo é o que exibe os links para Contato e Ajuda.
                */
                navMenubelowHeader();
                ?>
                <ul class="nav navbar-nav navbar-right dropdown-menu-right dropdown-ipad">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="mdi mdi-menu"></span> Menu</a>
                        <?php
                        /*
                        * menuDropDown vem de um register feito nas functions onde o mesmo entra em contato com o menu do wordpress.
                        */
                        menuTopoDropDown();
                        ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>