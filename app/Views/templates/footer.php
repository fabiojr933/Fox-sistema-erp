<footer class="page-footer bg-gray-100">
   <div class="pd-y-10 pd-x-25">
      <span class="tx-italic text-muted">Copyright&copy; 2019</span>
   </div>
</footer>
</div>
</div>
<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
<script src="<?php echo base_url('theme/assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/jquery-ui/jquery-ui.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/popper/popper.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/pace/pace.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/js/jquery.slimscroll.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/js/highlight.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/js/adminify.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/formatter/jquery.formatter.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/footable/footable.all.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/steps/jquery.steps.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/parsleyjs/parsley.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('theme/assets/plugins/toastr/toastr.min.js') ?>"></script>



<?php
$session = session();
$alert = $session->get('alert');
?>
<script>
   $('#foo-row-toggler').footable();

   // Accordion
   $('#foo-accordion').footable().on('footable_row_expanded', function(e) {
      $('#foo-accordion tbody tr.footable-detail-show').not(e.row).each(function() {
         $('#foo-accordion').data('footable').toggleDetail(this);
      });
   });
   // Filtering
   var filtering = $('#foo-filtering');
   filtering.footable().on('footable_filtering', function(e) {
      var selected = $('#foo-filter-status').find(':selected').val();
      e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
      e.clear = !e.filter;
   });

   // Filter status
   $('#foo-filter-status').change(function(e) {
      e.preventDefault();
      filtering.trigger('footable_filter', {
         filter: $(this).val()
      });
   });

   // Search input
   $('#foo-search').on('input', function(e) {
      e.preventDefault();
      filtering.trigger('footable_filter', {
         filter: $(this).val()
      });
   });
</script>
<script>
   // Percentage Input
   $('#percentage-input').formatter({
      'pattern': '{{99}}.{{99}}%',
      'persistent': true
   });
</script>

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


</body>

</html>