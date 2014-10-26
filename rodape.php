</div>

<script src="<?php echo $server;?>assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $server;?>assets/js/footable-0.1.js" type="text/javascript"></script>
<script src="<?php echo $server;?>assets/js/footable.sortable.js" type="text/javascript"></script>
<script src="<?php echo $server;?>assets/js/modal.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('table').footable();
    });
    function Dados(chave){
        $.ajax({
            type:"POST",
            url: "<?php echo $server;?>editar.php",
            data: {chave:chave},
            success: function(resultado){
                $('#conteudo').html(resultado);

            }
        });


    }
</script>
</body>
</html>