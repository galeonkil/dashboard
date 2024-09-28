<?php
require_once "ModeloBase.php";
class Estadistica extends ModeloBase{
    public function mdlListarTiempoProcesos(){
        $db= new ModeloBase();
        $query="select sum(TiempEnCursosHrs) as TiempEnCursosHrs,sum(TiempEnActividadesHrs) as TiempEnActividadesHrs,(case 
        when Curso like '%GA' then 'Natural Sciences'
        when Curso like '%GB' then 'mathematics'
        when Curso like '%GC' then 'Languages'
        when Curso like '%GD' then 'Educational informatics'
        when Curso like '%GE' then 'social sciences'
        when Curso like '%GF' then 'initial education'
        when Curso like '%GG' then 'language and literature'
        when Curso like '%GH' then 'primary education'
        when Curso like '%GI' then 'physical education'
        
        else 'others'
        end) as especialidad from tablageneral group by especialidad";

        return $respuesta=$db->obtenerDatos($query);

    }
    public function mdlListarCalificacionTiempo(){
        $db=new ModeloBase();
        $query="select correo,CalificaciónMedia,round(TiempEnCursosHrs) as TiempEnCursosHrs from tablageneral group by correo";
        return $respuesta=$db->obtenerDatos($query);
    }
    public function mdlListarTiempocTiempoact(){
        $db=new ModeloBase();
        $query="select format(TiempEnCursosHrs,2) as TiempEnCursosHrs ,format(TiempEnActividadesHrs,3) as TiempEnActividadesHrs from tablageneral group by TiempEnActividadesHrs";
        return $respuesta=$db->obtenerDatos($query);
    }
    public function mdlListarCalificacionActidComp(){
        $db=new ModeloBase();
        $query="select avg(ActividadesCompletadas),avg(CalificaciónMedia),(case
        when CalificaciónMedia<50 then 'beginning'
        when CalificaciónMedia>50 and CalificaciónMedia<71 then 'process'
        when CalificaciónMedia>=71 and CalificaciónMedia<=80 then 'featured'
        when CalificaciónMedia>81 then 'expected'
        else 'missing'
        
        
        
        end) as categoria from tablageneral group by categoria";
        return $respuesta=$db->obtenerDatos($query);
    }
    public function mdlListarCalificacionMediaAct(){
        $db=new ModeloBase();
        $query="select correo,CalificaciónMedia,ActividadesCompletadas,(case
        when TareasTot = 0 then 'nada'
        when TareasTot > 0 and TareasTot<=200  then 'poco'
        when TareasTot >200 and TareasTot<=500 then  'medio'
        when TareasTot >500 and TareasTot<=700 then 'alto'
        when TareasTot >700 and TareasTot <=1000 then  'Muy alto'
        
        end) as categoria from tablageneral group by correo 	
        ";
        return $repuesta=$db->obtenerDatos($query);
    }

}
?>