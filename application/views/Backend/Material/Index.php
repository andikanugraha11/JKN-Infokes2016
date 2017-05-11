<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view($header);?> <!--dikadika-->
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <?php $this->load->view('Backend/material/Sidebar');?> <!--dikadika-->
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <?php $this->load->view('Backend/material/Header');?> <!--dikadika-->
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <?php $this->load->view($content);?> <!--dikadika-->
                <!-- /page content -->
            </div>
        </div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        <?php $this->load->view($js);?> <!--dikadika-->
    </body>
</html>