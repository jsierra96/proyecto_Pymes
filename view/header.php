</head>
<body>
    <?php
    if(isset($_SESSION['user'])){
        $id = $_SESSION['user'];
        ?>
        <section class="header-panel">
            <figure>
                <img src="<?php echo SERVERURL;?>images/tecnm.png" class="img1">
            </figure>
            <h2>Gestor de documentos para un sistema de gestion de calidad</h2>
            <figure class="img2">
                <img src="<?php echo SERVERURL;?>images/ito1.png">
            </figure>
        </section>
        <?php
    }else{
    ?>
        <section class="header-login">
            <figure>
                <img src="<?php echo SERVERURL;?>/images/sep.png" alt="Logotipo de la sep">
            </figure>
            <div>
                <h2>TECNOLÓGICO NACIONAL DE MÉXICO / INSTITUTO TECNOLÓGICO DE ORIZABA</h2>
                <h3>GESTOR DE DOCUMENTOS PARA UN SGC, PARA TU PyMe</h3>
            </div>
        </section>
    <?php
    }
    ?>
    