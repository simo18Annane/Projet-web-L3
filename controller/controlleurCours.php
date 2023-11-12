<?php

class ControlleurCours
{

    private $model;

    function __construct()
    {
        $this->model = new ModelBDD();
    }

    function recupAllCours()
    {
        $req = $this->model->execute_query("SELECT * FROM cours");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursDev()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE categorie = 'developpement'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursLang()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE categorie = 'langues'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursDes()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE categorie = 'design'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursFit()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE categorie = 'fitness'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursDebutant()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE niveau = 'Débutant'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCoursIntermediaire()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE niveau = 'Intermédiaire'");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recupCours($arrayCourses)
    {
        shuffle($arrayCourses);
        for($i = 0; $i < count($arrayCourses); $i++)
        {
            $courseId = "course" . $i;
            $GLOBALS[$courseId] = new Cours($arrayCourses[$i]['id'], $arrayCourses[$i]['titre'], $arrayCourses[$i]['categorie'], $arrayCourses[$i]['niveau'], $arrayCourses[$i]['image'], $arrayCourses[$i]['prix'], $arrayCourses[$i]['note'],  $arrayCourses[$i]['description'], $arrayCourses[$i]['contenu']);
        }
    }

    function recupCoursNoShuffle($arrayCourses)
    {
        for($i = 0; $i < count($arrayCourses); $i++)
        {
            $courseId = "course" . $i;
            $GLOBALS[$courseId] = new Cours($arrayCourses[$i]['id'], $arrayCourses[$i]['titre'], $arrayCourses[$i]['categorie'], $arrayCourses[$i]['niveau'], $arrayCourses[$i]['image'], $arrayCourses[$i]['prix'], $arrayCourses[$i]['note'],  $arrayCourses[$i]['description'], $arrayCourses[$i]['contenu']);
        }
    }
    
}

?>