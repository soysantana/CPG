<?php
  require_once('../config/load.php');
  $page_title = 'Page: Register';
  $groups = find_all('user_groups');
  page_require_level(1);
?>

<?php include_once('../components/header.php');  ?>

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
        <?php echo display_msg($msg); ?>
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img width="80" height="80" src="<?php echo $logo; ?>" />
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">La aventura comienza aquí 🚀</h4>
          <p class="mb-4">Por favor crea una cuenta</p>

          <form id="formAuthentication" class="mb-3" method="post" action="register.php">
          <div class="mb-3">
              <label for="fullname" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ingrese su nombre completo" />
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su nombre de usuario" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Contraseña</label>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <label for="user_level" class="form-label">Nivel de usuario</label>
              <select class="form-select" id="user_level" name="user_level">
                <option selected="">Selecione un nivel</option>
                <?php foreach ($groups as $group ):?>
                  <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                <?php endforeach;?>
              </select>
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                <label class="form-check-label" for="terms-conditions">
                  Estoy de acuerdo con
                  <a href="javascript:void(0);">política de privacidad y términos</a>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary d-grid w-100" name="add_user">Regístrate</button>
          </form>

          <p class="text-center">
            <span>¿Ya tienes una cuenta?</span>
            <a href="auth-login.php">
              <span>Inicia sesión en su lugar</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
<!-- / Content -->

<?php include_once('../components/footer-second.php');  ?>