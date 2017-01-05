<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>
                    Copyright &copy; <?php echo $append; ?> <?php echo date("Y"); ?>. Skapad av <a href="https://www.facebook.com/jonathan.sundqvist.50">Jonathan Sundqvist</a>
                    <br>
                    <a href="http://validator.w3.org/check/referer" target="_blank">HTML5</a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a>
                    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance" target="_blank">Unicorn</a>
                </p>
            </div>
        </div>
    </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php
    if (isset($scripts_include) && is_array($scripts_include) && count($scripts_include) > 0) {
        foreach ($scripts_include as $script) {
            echo "<script src='js/".$script."'></script>";
        }
    }
    ?>
    <script>
        $(document).ready(function() {
            $('.navbar-nav').find('a[href="<?= $CURRENTFILE ?>"]').closest('li').addClass('active');
        });
    </script>
</body>
</html>