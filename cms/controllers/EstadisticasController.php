<?php
require_once "./models/Estadisticas.php";
class EstadisticasController{
    public function estadisticas(){
        require_once('./views/includes/cabecera.php');
        require_once('./views/admin/estadisticas.php');
        require_once('./views/includes/pie.php');
    }
    public function estadisticas2(){
        require_once('./views/includes/cabecera.php');
        require_once('./views/admin/estadisticas2.php');
        require_once('./views/includes/pie.php');
    }
    public function estadisticas3(){
        require_once('./views/includes/cabecera.php');
        require_once('./views/admin/estadisticas3.php');
        require_once('./views/includes/pie.php');
    }
    public function estadisticas4(){
        require_once('./views/includes/cabecera.php');
        require_once('./views/admin/estadisticas4.php');
        require_once('./views/includes/pie.php');
    }
    public function estadisticas5(){
        require_once("./views/includes/cabecera.php");
        require_once("./views/admin/estadisticas5.php");
        require_once("./views/includes/pie.php");
    }
    public function ctrListarTiempoProcesos(){
        $datos=new estadistica();
        return $datos->mdlListarTiempoProcesos();

    }
    public function ctrlListarCalificacionTiempo(){
        $datos=new estadistica();
        return $datos->mdlListarCalificacionTiempo();
    }
    public function ctrlListartiempocTiempoact(){
        $datos=new estadistica();
        return $datos->mdlListarTiempocTiempoact();
    }
    public function ctrlListarCalificacionActidComp(){
        $datos=new estadistica();
        return $datos->mdlListarCalificacionActidComp();
    }
    public function ctrlListarCalificacionMediaAct(){
        $datos=new estadistica();
        return $datos->mdlListarCalificacionMediaAct();
    }
}
?>