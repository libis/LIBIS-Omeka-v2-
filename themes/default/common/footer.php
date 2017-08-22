    <footer role="contentinfo">
        <div class="container footer-container">
            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <img src="<?php echo img("libis_gray.png");?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <ul>
                            <li><a href="">Menu item 1</a></li>
                            <li><a href="">Menu item 1</a></li>
                            <li><a href="">Menu item 1</a></li>
                            <li><a href="">Menu item 1</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <div class="copyright">© test</div>
                    </div>
                </div>
            </div>


              <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
        </div>
    </footer><!-- end footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>

      jQuery('.navbar-toggler').click(function(e) {
        e.preventDefault();
        jQuery('.navbar-toggler').toggleClass('toggled');
        if(jQuery('.navbar-toggler').hasClass('toggled')){
          jQuery('.navbar-toggler').html("<i class='material-icons'>&#xE5CD;</i>");
        }else{
          jQuery('.navbar-toggler').html("<i class='material-icons'>&#xE5D2;</i>");
        }
      });

      jQuery(function () {
        jQuery('a[href="#search"]').on('click', function(event) {
            event.preventDefault();
            jQuery('#search').addClass('open');
            jQuery('#search > form > input[type="search"]').focus();
        });

        jQuery('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });

    });

    </script>
</body>

</html>