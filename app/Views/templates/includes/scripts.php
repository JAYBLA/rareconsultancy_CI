<script src="<?= base_url('/assets/js/jquery.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/aos.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/appear.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/isotope.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.bootstrap-touchspin.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.easing.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.enllax.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.fancybox.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.mixitup.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.paroller.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.polyglot.language.switcher.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/map-script.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/nouislider.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/owl.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/validation.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/wow.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery.magnific-popup.min.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/slick.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/lazyload.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/scrollbar.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/jquery-ui.js' ) ?>"></script>
<script src="<?= base_url('/assets/js/knob.js' ) ?>"></script>
<!-- thm custom script -->
<script src="<?= base_url('/assets/js/custom.js') ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        <?php if(session()->getFlashdata('status')){?>
            swal({
                title: "<?= session()->getFlashdata('status') ?>",
                text: "<?= session()->getFlashdata('status_txt') ?>",
                icon: "<?= session()->getFlashdata('status_icon') ?>",
                button: "OK!",
            });
        <?php } ?>
    });
</script>