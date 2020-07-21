<?php $this->view('partials/head', array(
    "scripts" => array(
        "clients/client_list.js"
    )
)); ?>

<div class="container">

    <div class="row">

        <?php $widget->view($this, 'crowdstrike_sensor_versions'); ?>

    </div> <!-- /row -->

</div>  <!-- /container -->

<script src="<?php echo conf('subdirectory'); ?>assets/js/munkireport.autoupdate.js"></script>

<?php $this->view('partials/foot'); ?>
