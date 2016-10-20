<!-- footer -->
<div class="footer-principal">
 <div class="container footer">
  <div class="row">
    
    <!-- sobre-rodape -->
    <div class="col-md-4 sobre-rodape">
    <div class="title-box">
    <h4>Sobre</h4>
    </div>
    <?php 
     if ( is_active_sidebar('sobre-nos-rodape') ) {
     dynamic_sidebar('sobre-nos-rodape');
     }
    ?>
      
    </div>
    <!-- fim-sobre-rodape -->

    <!-- links-rodape -->
    <div class="col-md-4">
     <div class="title-box">
      <h4>Links</h4>
    </div>
    <?php 
    wp_nav_menu( array(
      'theme_location' => 'links-uteis',
      'container' => '',
    ));
    ?>
    </div>

    <!-- fim-links-rodape -->
    
    <!-- hospedagem-rodape -->
    <div class="col-md-4 hospedagem-rodape">
    <div class="title-box">
    <h4>Hospedagem</h4>
    </div>
    <?php 
     if ( is_active_sidebar('hospedagem-rodape') ) {
     dynamic_sidebar('hospedagem-rodape');
     }
    ?>  
    </div>
    <!-- fim-hospedagem-rodape -->

  </div>
</div>

<div class="footer-copy">
 <div class="container">
  <div class="row">
   <div class="col-md-12"><p class="text-center">&copy; 2016 - <b>Portal PXG</b> - Todos os direitos reservados. <!-- | O Jogo PXG e seus conteúdos relacionados são propriedade de <b>PokeXGames</b> --> | Deveveloped by <b>Raul Neiva</b></a></p></div>
   </div>  
  </div>
 </div>
</div>
<!--final-footer-->


<!-- modal cadastro/login -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Minha Conta</h4>
      </div>

      <div class="modal-body">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Logar</a></li>
          <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Regras do Portal</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content minha-conta">
          
          <div role="tabpanel" class="tab-pane active" id="login">
            
            <?php 
              if ( is_active_sidebar('sidebar-login') ) {
                  dynamic_sidebar('sidebar-login');
              }
             ?>

          </div>

          <div role="tabpanel" class="tab-pane" id="cadastro">
            <?php 
              if ( is_active_sidebar('sidebar-regras') ) {
                  dynamic_sidebar('sidebar-regras');
              }
             ?>
          </div>
        </div>

      </div>          

    </div>
  </div>
</div>

<!-- login-fim -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>