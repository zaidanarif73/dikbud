<script>
    //maps handler
    $(document).ready(function() {
        var mapContent = <?php echo json_encode($table_pengaturan->website_maps); ?>;
        $mapContent_big = mapContent.replace(/<iframe /, '<iframe style="height: 400px; width:100%;" ');
        $mapContent_mini = mapContent.replace(/<iframe /, '<iframe style="height: 90px; width:100%;" ');
        
        $('#maps_mini').replaceWith($mapContent_mini);
        $('#maps_big').replaceWith($mapContent_big);
    });
</script>