<script src="<?php echo base_url("assets/Backend/js/bootstrap.min.js");?>"></script>
<!-- bootstrap progress js -->
<script src="<?php echo base_url("assets/Backend/js/progressbar/bootstrap-progressbar.min.js");?>"></script>
<!-- icheck -->
<script src="<?php echo base_url("assets/Backend/js/icheck/icheck.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/custom.js");?>"></script>

<!-- Datatables-->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url("assets/Backend/js/datatables/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.bootstrap.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.buttons.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/buttons.bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/jszip.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/pdfmake.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/vfs_fonts.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/buttons.html5.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/buttons.print.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.fixedHeader.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.keyTable.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.responsive.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/responsive.bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("assets/Backend/js/datatables/dataTables.scroller.min.js");?>"></script>

<!-- pace -->
<script src="<?php echo base_url("assets/Backend/js/pace/pace.min.js");?>"></script>
  <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>