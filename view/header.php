</head>
<body>
    <?php
    if(isset($_SESSION['user'])){
        $id = $_SESSION['user'];
        $pymeMX = $_SESSION['pyme'];
        ?>
        <section class="header-panel">
            <figure>
                <img src="<?php echo SERVERURL.$pymeMX['logo'];?>" class="img1">
            </figure>
            <h2>Gestor de documentos para un sistema de gestion de calidad de la empresa <?php echo $pymeMX['nombre'] ?></h2>
           
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
    