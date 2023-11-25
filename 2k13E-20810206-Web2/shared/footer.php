<footer class="tm-footer text-right">
    <p>Copyright &copy; <span class="tm-current-year">2018</span> Your Company

        - Designed by <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
</footer>

</div> <!-- container-fluid -->

<!-- load JS files -->

<script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
<script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->
<script src="js/masonry.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->

<!-- Templatemo scripts -->
<script>
    $(document).ready(function() {

        // init Masonry
        // https://codepen.io/craigwheeler/pen/MYjBga
        var $grid = $('.grid').masonry({

            // set itemSelector so .grid-sizer is not used in layout
            // itemSelector: '.grid-item',
            // use element for option
            // columnWidth: '.grid-sizer',
            // percentPosition: true

            itemSelector: '.grid-item',
            isFitWidth: true,
            columnWidth: 1
        });
        // layout Masonry after each image loads
        $grid.imagesLoaded().progress(function() {
            $grid.masonry('layout');
        });

        // Update the current year in copyright
        $('.tm-current-year').text(new Date().getFullYear());
    });
</script>
</body>