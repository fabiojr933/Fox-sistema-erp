<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keyword" content="">
   <meta name="author" content="" />
   <title>FOX | SISTEMAS</title>
   <link href="<?php echo base_url('theme/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
   <link href="<?php echo base_url('theme/assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />
   <link href="<?php echo base_url('theme/assets/plugins/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('theme/assets/plugins/ionicons/css/ionicons.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('theme/assets/css/skin-turquoise.css') ?>" rel="stylesheet" id="style-colors">
   <link href="<?php echo base_url('theme/assets/css/app.min.css') ?>" rel="stylesheet" />
   <link href="<?php echo base_url('theme/assets/css/style.css') ?>" rel="stylesheet" />
   <link href="<?php echo base_url('theme/assets/plugins/toastr/toastr.min.css') ?>" rel="stylesheet">
   <link rel="icon" href="<?php echo base_url('theme/assets/images/favicon.ico') ?>" type="image/x-icon">
</head>

<body class="card-img-2">
   <div class="mg-y-120">
      <div class="card mx-auto wd-300 text-center pd-25 shadow-3">
         <h4 class="card-title mt-3 text-center">Login</h4>
         <p class="text-center">Entre com a sua conta</p>
         <p>

         </p>
         <p class="divider-text">
            <span class="bg-light"></span>
         </p>
         <form action="/login/autenticar" method="post">
            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text pd-x-9 text-muted"> <i class="fa fa-cog"></i> </span>
               </div>
               <input class="form-control form-control-sm" name="empresa" placeholder="CFP ou CNPJ" type="text" oninput="formatarCpfCnpj(this)">
            </div>
            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text pd-x-9 text-muted"> <i class="fa fa-envelope"></i> </span>
               </div>
               <input class="form-control form-control-sm" name="email" placeholder="Email" type="email">
            </div>
            <div class="form-group input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text text-muted"> <i class="fa fa-lock"></i> </span>
               </div>
               <input class="form-control form-control-sm" name="senha" placeholder="Senha" type="password">
            </div>
            <p class="text-center"><a href="page-password.html">Não sei a senha?</a></p>
            <div class="form-group">
               <button type="submit" class="btn btn-info btn-block tx-13 hover-white"> Login </button>
            </div>

         </form>
      </div>
   </div>
   <script src="<?php echo base_url('theme/assets/plugins/jquery/jquery.min.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/plugins/jquery-ui/jquery-ui.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/plugins/popper/popper.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/plugins/pace/pace.min.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/js/jquery.slimscroll.min.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/js/custom.js') ?>"></script>
   <script src="<?php echo base_url('theme/assets/plugins/toastr/toastr.min.js') ?>"></script>
   <?php
   $session = session();
   $alert = $session->get('alert');
   ?>
   <script>
      $(document).ready(function() {
         setTimeout(function() {
            toastr.options = {
               positionClass: 'toast-top-right',
               closeButton: true,
               progressBar: true,
               showMethod: 'slideDown',
               timeOut: 5000
            };
            toastr.<?php echo $alert['cor']; ?>('<?php echo $alert['tipo']; ?>', '<?php echo $alert['titulo']; ?>');
         }, 300);
      });
   </script>
   <script>
      function formatarCpfCnpj(input) {
         // Remove caracteres não numéricos
         var valor = input.value.replace(/\D/g, '');

         // Verifica se é CPF ou CNPJ
         if (valor.length <= 11) {
            // Formatar como CPF: 000.000.000-00
            input.value = valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
         } else {
            // Formatar como CNPJ: 00.000.000/0000-00
            input.value = valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
         }
      }
   </script>
</body>

</html>