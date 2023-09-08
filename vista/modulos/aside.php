 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vista/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">San Antonio de Padua</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vista/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ivan Alvarado Quispe</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/menu_principal.php','content-wrapper')">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Menú Principal
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/cliente.php','content-wrapper')">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Cliente
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/proveedor.php','content-wrapper')">
              <i class="nav-icon fab fa-supple"></i>
              <p>
                Proveedor
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/ventas.php','content-wrapper')">
              <i class="nav-icon fab fa-adversal"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/productos.php','content-wrapper')">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Productos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" onclick="CargarContenido('vista/usuarios.php','content-wrapper')">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>