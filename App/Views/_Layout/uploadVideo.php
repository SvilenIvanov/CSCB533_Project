<?php $this->view("_Layout/header",$data); ?>
<?php $this->view("_Layout/footer"); ?>

<script src="<?=ASSETS?>Theme/js/plugins.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>
