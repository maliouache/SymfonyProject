<?php
namespace IPS\SymfonyProjectBundle\Controller\Entity;

class Project {
    var $id=-1;
    var $name="";
    var $importance="";
    var $deadline="";
    var $domain="";
    var $comment="";

    function __construct($idProject = -1)
	{	// construct a project
		global $BD;
		$this->id = $idProject;
		if ($this->id != -1 && is_numeric($this->id)){
			$this->load();
		}
	}
    
    function isLoaded(){
		return ($this->id != -1);
    }
    
    function load()
	{
		global $BD, $bdStages, $bdStageParcours;

		// retrieve the project
		$sql = "SELECT * FROM PROJECT WHERE ID = " . $this->id;
		$res = $BD->query($sql);
		if ( $BD->numRows == 0 )
		{
			$this->id = -1;
			return null;
        }
        else {
            $BD->next($res);
            $row = $BD->result;
            $this->init($row->ID, $row->NAME, $row->IMPORTANCE, $row->DEADLINE, $row->DOMAIN, $row->COMMENT);
        }
    }
    
    function init($name,$importance,$deadline,$domain,$comment){
        // $this->id=$id;
        $this->name=$name;
        $this->importance=$importance;
        $this->deadline=$deadline;
        $this->domain=$domain;
        $this->comment=$comment;
    }

    function save(){
        global $BD, $bdStages;
		$sql="";
		if($this->id==-1)
		{
			$sql.="INSERT INTO PROJECT(NAME,IMPORTANCE,DEADLINE,DOMAIN,COMMENT) VALUES
            (".$this->id.",
            ".$this->name.",
            ".$this->importance.",
            ".$this->deadline.",
            ".$this->domain.",
            ".$this->comment.")";
		}
		else
		{
			$sql.="UPDATE PROJECT SET "
				. "ID=".$this->id.", "
				. "NAME=".$this->name.", "
				. "IMPORTANCE=".$this->importance.", "
				. "DEADLINE=".$this->deadline.", "
				. "DOMAIN=".$this->domain.", "
				. "COMMENT='".$this->comment."' WHERE ID = " . $this->id;
		}
		$BD->query($sql);
		if ($BD->insertId != 0)
			$this->id = $BD->insertId;
		return $sql;
    }

}