<?php

/* IPSSymfonyProjectBundle::edit_project.html.twig */
class __TwigTemplate_b402a665304a60f38d524e14370387b39e64dbab3dd4a35a801f0124e47dcfd1 extends Twig_Template
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
        $__internal_79e769087568086949c54443da6e7ba4a366b87f9fd0ace82e6a756af75ce9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e769087568086949c54443da6e7ba4a366b87f9fd0ace82e6a756af75ce9e5->enter($__internal_79e769087568086949c54443da6e7ba4a366b87f9fd0ace82e6a756af75ce9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::edit_project.html.twig"));

        $__internal_b3935702a3549d8d9a3fd3b515b42b6fc2b6ae90ad904a6a57998a26ab94d422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3935702a3549d8d9a3fd3b515b42b6fc2b6ae90ad904a6a57998a26ab94d422->enter($__internal_b3935702a3549d8d9a3fd3b515b42b6fc2b6ae90ad904a6a57998a26ab94d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::edit_project.html.twig"));

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
      <a class=\"navbar-brand\" href=\"/\">Logo</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Home</a></li>
        <li><a href=\"#\">About</a></li>
        <li><a href=\"/projects\">Projects</a></li>
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
      <p><a href=\"/edit/projects\">Edit Existing projects</a></p>
      <p><a href=\"#\">Link</a></p>
    </div>
    <!-- here starts the main content -->
    <div class=\"col-sm-8 text-left\"> 
        <h1>Create a new project:</h1>
        <form method=\"post\" class=\"form-horizontal\" action=\"/update/project/";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "ID", array()), "html", null, true);
        echo "\">
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Project: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "NAME", array()), "html", null, true);
        echo "\"
                        name=\"name\" id=\"name\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"importance\">Importance: </label>
                <div class=\"col-sm-10\">
                    <select name=\"importance\" id=\"importance\" class=\"form-control\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "IMPORTANCE", array()), "html", null, true);
        echo "\">
                        <option value=\"very-high\" ";
        // line 96
        echo twig_escape_filter($this->env, ($context["vhigh"] ?? $this->getContext($context, "vhigh")), "html", null, true);
        echo ">Very High</option>
                        <option value=\"high\" ";
        // line 97
        echo twig_escape_filter($this->env, ($context["high"] ?? $this->getContext($context, "high")), "html", null, true);
        echo ">High</option>
                        <option value=\"medium\" ";
        // line 98
        echo twig_escape_filter($this->env, ($context["medium"] ?? $this->getContext($context, "medium")), "html", null, true);
        echo ">Medium</option>
                        <option value=\"low\" ";
        // line 99
        echo twig_escape_filter($this->env, ($context["low"] ?? $this->getContext($context, "low")), "html", null, true);
        echo ">Low</option>
                        <option value=\"very-low\" ";
        // line 100
        echo twig_escape_filter($this->env, ($context["vlow"] ?? $this->getContext($context, "vlow")), "html", null, true);
        echo ">Very Low</option>
                        
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"deadline\">Deadline if existed: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["DEADLINE"] ?? $this->getContext($context, "DEADLINE")), "html", null, true);
        echo "\"
                        name=\"deadline\" id=\"deadline\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"domain\">Choose a domain: </label>
                <div class=\"col-sm-10\">
                    <select name=\"domain\" id=\"domain\" class=\"form-control\" selected=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "DOMAIN", array()), "html", null, true);
        echo "\">
                        <option value=\"fluid-mechanics\" ";
        // line 116
        echo twig_escape_filter($this->env, ($context["fm"] ?? $this->getContext($context, "fm")), "html", null, true);
        echo ">Fluid Mechanics</option>
                        <option value=\"geology\" ";
        // line 117
        echo twig_escape_filter($this->env, ($context["g"] ?? $this->getContext($context, "g")), "html", null, true);
        echo ">Geology</option>
                        <option value=\"environment\" ";
        // line 118
        echo twig_escape_filter($this->env, ($context["e"] ?? $this->getContext($context, "e")), "html", null, true);
        echo ">Environment</option>
                        <option value=\"mathematics\" ";
        // line 119
        echo twig_escape_filter($this->env, ($context["m"] ?? $this->getContext($context, "m")), "html", null, true);
        echo ">Mathematics</option>
                        <option value=\"physics\" ";
        // line 120
        echo twig_escape_filter($this->env, ($context["p"] ?? $this->getContext($context, "p")), "html", null, true);
        echo ">Physics</option>
                        <option value=\"chemistry\" ";
        // line 121
        echo twig_escape_filter($this->env, ($context["c"] ?? $this->getContext($context, "c")), "html", null, true);
        echo ">Chemistry</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"comment\">Comment:</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"comment\" class=\"form-control\" rows=\"7\" id=\"comment\" >";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "COMMENT", array()), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"/edit/projects\"><button type=\"button\" class=\"btn btn-default\">Cancel</button></a>
                </div>
            </div>
        </form>

    </div>
    <!-- here ends the main content -->
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
  <p>First Try of the website</p>
</footer>

</body>
</html>
";
        
        $__internal_79e769087568086949c54443da6e7ba4a366b87f9fd0ace82e6a756af75ce9e5->leave($__internal_79e769087568086949c54443da6e7ba4a366b87f9fd0ace82e6a756af75ce9e5_prof);

        
        $__internal_b3935702a3549d8d9a3fd3b515b42b6fc2b6ae90ad904a6a57998a26ab94d422->leave($__internal_b3935702a3549d8d9a3fd3b515b42b6fc2b6ae90ad904a6a57998a26ab94d422_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::edit_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 128,  192 => 121,  188 => 120,  184 => 119,  180 => 118,  176 => 117,  172 => 116,  168 => 115,  158 => 108,  147 => 100,  143 => 99,  139 => 98,  135 => 97,  131 => 96,  127 => 95,  117 => 88,  110 => 84,  25 => 1,);
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
      <a class=\"navbar-brand\" href=\"/\">Logo</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Home</a></li>
        <li><a href=\"#\">About</a></li>
        <li><a href=\"/projects\">Projects</a></li>
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
      <p><a href=\"/edit/projects\">Edit Existing projects</a></p>
      <p><a href=\"#\">Link</a></p>
    </div>
    <!-- here starts the main content -->
    <div class=\"col-sm-8 text-left\"> 
        <h1>Create a new project:</h1>
        <form method=\"post\" class=\"form-horizontal\" action=\"/update/project/{{project.ID}}\">
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Project: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" value=\"{{project.NAME}}\"
                        name=\"name\" id=\"name\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"importance\">Importance: </label>
                <div class=\"col-sm-10\">
                    <select name=\"importance\" id=\"importance\" class=\"form-control\" value=\"{{project.IMPORTANCE}}\">
                        <option value=\"very-high\" {{vhigh}}>Very High</option>
                        <option value=\"high\" {{high}}>High</option>
                        <option value=\"medium\" {{medium}}>Medium</option>
                        <option value=\"low\" {{low}}>Low</option>
                        <option value=\"very-low\" {{vlow}}>Very Low</option>
                        
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"deadline\">Deadline if existed: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" value=\"{{DEADLINE}}\"
                        name=\"deadline\" id=\"deadline\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"domain\">Choose a domain: </label>
                <div class=\"col-sm-10\">
                    <select name=\"domain\" id=\"domain\" class=\"form-control\" selected=\"{{project.DOMAIN}}\">
                        <option value=\"fluid-mechanics\" {{fm}}>Fluid Mechanics</option>
                        <option value=\"geology\" {{g}}>Geology</option>
                        <option value=\"environment\" {{e}}>Environment</option>
                        <option value=\"mathematics\" {{m}}>Mathematics</option>
                        <option value=\"physics\" {{p}}>Physics</option>
                        <option value=\"chemistry\" {{c}}>Chemistry</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"comment\">Comment:</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"comment\" class=\"form-control\" rows=\"7\" id=\"comment\" >{{project.COMMENT}}</textarea>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"/edit/projects\"><button type=\"button\" class=\"btn btn-default\">Cancel</button></a>
                </div>
            </div>
        </form>

    </div>
    <!-- here ends the main content -->
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
  <p>First Try of the website</p>
</footer>

</body>
</html>
", "IPSSymfonyProjectBundle::edit_project.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/edit_project.html.twig");
    }
}
