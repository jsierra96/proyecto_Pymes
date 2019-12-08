<?php
    session_start();
    include 'core/confGeneral.php';
    include 'view/IniHtml.php';
    if(isset($_REQUEST['views']) && !empty($_REQUEST['views'])){
        
        if($_REQUEST['views'] == '/')
            require_once 'view/login.php';
        else if($_REQUEST['views'] == 'login')
            require_once 'view/login.php';
        else if($_REQUEST['views'] == 'registro')
            require_once 'view/registro.php';
        else if($_REQUEST['views'] == 'recupera')
            require_once 'view/recupera.php';
        else if($_REQUEST['views'] == 'panel' && isset($_REQUEST['op']) && isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            $opcion = $_REQUEST['op'];
            echo '<title>Pymes -:- Inicio</title>';
            include 'view/header.php';
            echo '<section class="main-panel">';
            include 'view/aside.php';
            echo '<section class="main"><div class="borde-1"><div class="borde-2"><div class="body">';
            if($_REQUEST['op'] == 'inicio'){
                include 'view/panel.php';
            }else if($_REQUEST['op'] == 'riesgos'){
                include 'view/riesgos.php';
            }else if($opcion=='cd4' || $opcion=='cd5' || $opcion=='cd6' || $opcion=='cd7' || $opcion=='cd8' || $opcion=='cd9' || $opcion== 'cd10'){
                if($opcion == 'cd4'){
                    $_SESSION['manual'] = 4;
                    require_once 'control/manual.php';
                    require_once 'view/cd4.php';
                }else if($opcion == 'cd5'){
                    $_SESSION['manual'] = 5;
                    require_once 'control/manual.php';
                    require_once 'view/cd5.php';
                }else if($opcion == 'cd6'){
                    $_SESSION['manual'] = 6;
                    require_once 'control/manual.php';
                    require_once 'view/cd6.php';
                }else if($opcion == 'cd7'){
                    $_SESSION['manual'] = 7;
                    require_once 'control/manual.php';
                    require_once 'view/cd7.php';
                }else if($opcion == 'cd8'){
                    $_SESSION['manual'] = 8;
                    require_once 'control/manual.php';
                    require_once 'view/cd8.php';
                }else if($opcion == 'cd9'){
                    $_SESSION['manual'] = 9;
                    require_once 'control/manual.php';
                    require_once 'view/cd9.php';
                }else if($opcion == 'cd10'){
                    $_SESSION['manual'] = 10;
                    require_once 'control/manual.php';
                    require_once 'view/cd10.php';
                }
                echo '<script type="text/javascript">
                var editorText = $("textarea").ckeditor(function(){
                  CKFinder.setupCKEditor(this, "'.SERVERURL.'libs/ckeditor/plugins/ckfinder/");
                });
                </script><script src="'.SERVERURL.'js/guardar.js"></script>';
            }else if($_REQUEST['op'] == 'gm'){
                require_once 'view/gm.php';
            }else if($_REQUEST['op'] == 'ds'){
                require_once 'view/ds.php';
            }else if($_REQUEST['op'] == 'dp'){
                require_once 'view/dp.php';
            }else if($_REQUEST['op'] == 'de'){
                require_once 'view/de.php';
            }else if($_REQUEST['op'] == 'cc'){
                require_once 'view/cc.php';
            }
            echo '</div></div></div></section>';
            echo '</section><script src="'.SERVERURL.'js/panel.js"></script>';
            
        }else{
            header('Location:'.SERVERURL);
        }
    }else{
        require_once 'view/login.php';
    }
    include 'view/footer.php';
?>