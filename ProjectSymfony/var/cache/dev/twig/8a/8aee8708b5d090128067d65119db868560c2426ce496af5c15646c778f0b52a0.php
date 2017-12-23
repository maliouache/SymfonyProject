<?php

/* IPSSymfonyProjectBundle::home.html.twig */
class __TwigTemplate_d48b0b8a56afa672c7539fc5bb1c43af7e159c152812fd982481138a2c164f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dd78003913fdcde76dbd288306db0e5bee531cd97a4775a8bc3535d87fd4139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd78003913fdcde76dbd288306db0e5bee531cd97a4775a8bc3535d87fd4139->enter($__internal_3dd78003913fdcde76dbd288306db0e5bee531cd97a4775a8bc3535d87fd4139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::home.html.twig"));

        $__internal_44ec8b25b989d24c851fd4631bfc2aa0198b6550ddf8fdc9bf80748afdd458f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec8b25b989d24c851fd4631bfc2aa0198b6550ddf8fdc9bf80748afdd458f0->enter($__internal_44ec8b25b989d24c851fd4631bfc2aa0198b6550ddf8fdc9bf80748afdd458f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      position: fixed;
      background-color: #555;
      color: white;
      padding: 15px;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" href=\"#\">Logo</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Home</a></li>
        <li><a href=\"#\">About</a></li>
        <li><a href=\"#\">Projects</a></li>
        <li><a href=\"#\">Profile</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\">
    <div class=\"col-sm-2 sidenav\">
      <p><a href=\"/create/project\">Create new project</a></p>
      <p><a href=\"#\">Edit Existing projects</a></p>
      <p><a href=\"#\">Link</a></p>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Welcome</h1>
      <p>here we go for the new symfony project to go beyond research !!!!!</p>
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class=\"container-fluid text-center\">
  <p>Footer Text</p>
</footer>

</body>
</html>
";
        
        $__internal_3dd78003913fdcde76dbd288306db0e5bee531cd97a4775a8bc3535d87fd4139->leave($__internal_3dd78003913fdcde76dbd288306db0e5bee531cd97a4775a8bc3535d87fd4139_prof);

        
        $__internal_44ec8b25b989d24c851fd4631bfc2aa0198b6550ddf8fdc9bf80748afdd458f0->leave($__internal_44ec8b25b989d24c851fd4631bfc2aa0198b6550ddf8fdc9bf80748afdd458f0_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      position: fixed;
      background-color: #555;
      color: white;
      padding: 15px;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" href=\"#\">Logo</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Home</a></li>
        <li><a href=\"#\">About</a></li>
        <li><a href=\"#\">Projects</a></li>
        <li><a href=\"#\">Profile</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class=\"container-fluid text-center\">    
  <div class=\"row content\">
    <div class=\"col-sm-2 sidenav\">
      <p><a href=\"/create/project\">Create new project</a></p>
      <p><a href=\"#\">Edit Existing projects</a></p>
      <p><a href=\"#\">Link</a></p>
    </div>
    <div class=\"col-sm-8 text-left\"> 
      <h1>Welcome</h1>
      <p>here we go for the new symfony project to go beyond research !!!!!</p>
    </div>
    <div class=\"col-sm-2 sidenav\">
      <div class=\"well\">
        <p>ADS</p>
      </div>
      <div class=\"well\">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class=\"container-fluid text-center\">
  <p>Footer Text</p>
</footer>

</body>
</html>
", "IPSSymfonyProjectBundle::home.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/home.html.twig");
    }
}
