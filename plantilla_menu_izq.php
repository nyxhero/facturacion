<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="imagenes/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['nombre'] ; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> en linea</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <ul class="sidebar-menu">
            <?php if($_SESSION["tabla"] == "empresa"){ ?>
                <li class="header">ADMINISTRADOR </li>
                <?php if($_SESSION["superadmin"]) {?>
                    <li class="menu_opcion">
                        <a href="empresa" clase="adm">
                            <i class="fa fa-university"></i>
                            <span>Empresa</span>
                        </a>
                    </li>

                    <li class="menu_opcion">
                        <a href="categoriaProductos" clase="adm">
                            <i class="fa fa-graduation-cap"></i>
                            <span>Categorias y Productos</span>
                        </a>
                    </li>
                    <li class="menu_opcion">
                        <a href="curso" clase="adm">
                            <i class="fa fa-book"></i>
                            <span>sssssssssss</span>
                        </a>
                    </li>
                    <li class="menu_opcion">
                        <a href="curricula" clase="adm">
                            <i class="fa fa-file-text"></i>
                            <span>dddddddddddddd</span></a>
                    </li>
                    <li class="menu_opcion">
                        <a href="docente" clase="adm">
                            <i class="fa fa-users"></i>
                            <span>ffffffffffff</span>
                        </a>
                    </li>
                    <li class="menu_opcion">
                        <a href="unidad" clase="adm">
                            <i class="fa fa-cubes"></i>
                            <span>ffffffffffffff</span>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            <li class="header">dfdfdfdfdfdf</li>
            <li><a href="#"><i class="fa fa-bell"></i> <span>dfdfdfdfdf</span></a></li>
            <li><a href="#"><i class="fa fa-check"></i> <span>dfdfdf dfdfd</span></a></li>

            <li class="header">dfdfdf</li>

            <li><a href="#"><i class="fa fa-link"></i> <span>Exámdfdfenes</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>dfdf</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">dfdfdf</a></li>
                    <li><a href="#">dfdfd</a></li>
                    <li><a href="#">dfdfdf</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>


