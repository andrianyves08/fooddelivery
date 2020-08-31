        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
        <!-- Carousel -->
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
              loop:true,
              autoWidth:true,
              items:2
            })
            });
        </script>
        <script type="text/javascript">
          function add(groupId,val) {
            let inp = document.querySelector(`[name=numbergroup_${groupId}]`);
            inp.value= +inp.value + val;
            if(inp.value<+inp.min) inp.value=inp.min;
            if(inp.value>+inp.max) inp.value=inp.max;
          }
        </script>
        <!-- Unchecked radio button -->
        <script type="text/javascript">
            (function($) {
            $.fn.uncheckableRadio = function() {
              var $root = this;
              $root.each(function() {
                var $radio = $(this);
                if ($radio.prop('checked')) {
                  $radio.data('checked', true);
                } else {
                  $radio.data('checked', false);
                }
                $radio.click(function() {
                  var $this = $(this);
                  if ($this.data('checked')) {
                    $this.prop('checked', false);
                    $this.data('checked', false);
                    $this.trigger('change');
                  } else {
                    $this.data('checked', true);
                    $this.closest('form').find('[name="' + $this.prop('name') + '"]').not($this).data('checked', false);
                  }
                });
              });
              return $root;
            };
            }(jQuery));
            $('[type=radio]').uncheckableRadio();
            $('button').click(function() {
            $('[value=V2]').prop('checked', true).trigger('change').trigger('click');
            });
        </script>
    </body>
</html>