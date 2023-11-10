<script>
    $('.preview-img').on('click', function() {
        let currentImg = $(this).attr('src');
        $('.preview-img').removeClass('first-img');
        $(this).addClass('first-img');
        $('#main-preview-img').attr('src', currentImg);
    });
</script>