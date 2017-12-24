<?php

/* IPSSymfonyProjectBundle::new_section.html.twig */
class __TwigTemplate_7ba66e2ccd894799028cfd8f3eca0d8bcc209695a7ecae8dc45a2a856ad324a4 extends Twig_Template
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
        $__internal_1af3bb4aa2cf78a871c3378dd8a9ad9eaaf6bad48ee21db98f4ffa478c38d510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af3bb4aa2cf78a871c3378dd8a9ad9eaaf6bad48ee21db98f4ffa478c38d510->enter($__internal_1af3bb4aa2cf78a871c3378dd8a9ad9eaaf6bad48ee21db98f4ffa478c38d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_section.html.twig"));

        $__internal_5ecf89c28d77d9da01517de4d373eb385395303cc7aba21d3e1b003cd9911ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecf89c28d77d9da01517de4d373eb385395303cc7aba21d3e1b003cd9911ec6->enter($__internal_5ecf89c28d77d9da01517de4d373eb385395303cc7aba21d3e1b003cd9911ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_section.html.twig"));

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
        <h1>Create a new section:</h1>
        <p style=\"color:green;\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "</p>
        <form method=\"post\" class=\"form-horizontal\" action=\"/save/section\">
            <div class=\"form-group\">
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"hidden\" 
                        name=\"proj\" id=\"proj\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["proj"] ?? $this->getContext($context, "proj")), "html", null, true);
        echo "\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Section: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" 
                        name=\"name\" id=\"name\" required/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"importance\">Importance: </label>
                <div class=\"col-sm-10\">
                    <select name=\"importance\" id=\"importance\" class=\"form-control\">
                        <option value=\"very-high\">Very High</option>
                        <option value=\"high\">High</option>
                        <option value=\"medium\" selected>Medium</option>
                        <option value=\"low\">Low</option>
                        <option value=\"very-low\">Very Low</option>
                        
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"comment\">Comment:</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"comment\" class=\"form-control\" rows=\"7\" id=\"comment\" required></textarea>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
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
        
        $__internal_1af3bb4aa2cf78a871c3378dd8a9ad9eaaf6bad48ee21db98f4ffa478c38d510->leave($__internal_1af3bb4aa2cf78a871c3378dd8a9ad9eaaf6bad48ee21db98f4ffa478c38d510_prof);

        
        $__internal_5ecf89c28d77d9da01517de4d373eb385395303cc7aba21d3e1b003cd9911ec6->leave($__internal_5ecf89c28d77d9da01517de4d373eb385395303cc7aba21d3e1b003cd9911ec6_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::new_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 90,  111 => 85,  25 => 1,);
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
        <h1>Create a new section:</h1>
        <p style=\"color:green;\">{{msg}}</p>
        <form method=\"post\" class=\"form-horizontal\" action=\"/save/section\">
            <div class=\"form-group\">
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"hidden\" 
                        name=\"proj\" id=\"proj\" value=\"{{proj}}\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Section: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" 
                        name=\"name\" id=\"name\" required/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"importance\">Importance: </label>
                <div class=\"col-sm-10\">
                    <select name=\"importance\" id=\"importance\" class=\"form-control\">
                        <option value=\"very-high\">Very High</option>
                        <option value=\"high\">High</option>
                        <option value=\"medium\" selected>Medium</option>
                        <option value=\"low\">Low</option>
                        <option value=\"very-low\">Very Low</option>
                        
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"comment\">Comment:</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"comment\" class=\"form-control\" rows=\"7\" id=\"comment\" required></textarea>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
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
", "IPSSymfonyProjectBundle::new_section.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/new_section.html.twig");
    }
}
