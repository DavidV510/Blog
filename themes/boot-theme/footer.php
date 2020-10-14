<footer class="footer">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <?php dynamic_sidebar('footer_widget'); ?>
              </div>
            </div>
            <div class="col-sm-4">
            <h3>Follow Us</h3>
            <?php wp_nav_menu(array(
                            'theme_location'=>'social-menu',
                            'container'=>'div',
                            'container_id'=>'social-menu',
                            'container_class'=>'menu',
                            'menu_id'=>'social',
                            'menu_class'=>'menu-items',
                            'link_before'=>'<span class="sr-only">',
                            'link_after'=>'</span>',
                            'fallback_cb'=>'',
                            'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>'
                            )); ?>
            </div>
        </div>
      </div>
</footer>

<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>

</body>
</html>