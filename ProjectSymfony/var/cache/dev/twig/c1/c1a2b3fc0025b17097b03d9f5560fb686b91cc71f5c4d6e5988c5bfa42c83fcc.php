<?php

/* IPSSymfonyProjectBundle::new_task.html.twig */
class __TwigTemplate_53c6ff2317f3e38a8ef3a4e7092cba152702a192638468a0ac3f431cc40893f0 extends Twig_Template
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
        $__internal_fc0171b8fea88260827dc82cd5a318270a79658f9548a0de69504449db90ca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0171b8fea88260827dc82cd5a318270a79658f9548a0de69504449db90ca0b->enter($__internal_fc0171b8fea88260827dc82cd5a318270a79658f9548a0de69504449db90ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_task.html.twig"));

        $__internal_973ce64b588b94d34bbbf5b90aca29bab7d6730e1951912224b782ec54639253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973ce64b588b94d34bbbf5b90aca29bab7d6730e1951912224b782ec54639253->enter($__internal_973ce64b588b94d34bbbf5b90aca29bab7d6730e1951912224b782ec54639253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_task.html.twig"));

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
        <h1>Create a new section:</h1>
        <p style=\"color:green;\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "</p>
        <form method=\"post\" class=\"form-horizontal\" action=\"/save/task\">
            <div class=\"form-group\">
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"hidden\" 
                        name=\"sect\" id=\"sect\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["sect"] ?? $this->getContext($context, "sect")), "html", null, true);
        echo "\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Task: </label>
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
                <label class=\"control-label col-sm-2\" for=\"incharge\">Who's in charge?: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" 
                        name=\"incharge\" id=\"incharge\" required/>
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
        
        $__internal_fc0171b8fea88260827dc82cd5a318270a79658f9548a0de69504449db90ca0b->leave($__internal_fc0171b8fea88260827dc82cd5a318270a79658f9548a0de69504449db90ca0b_prof);

        
        $__internal_973ce64b588b94d34bbbf5b90aca29bab7d6730e1951912224b782ec54639253->leave($__internal_973ce64b588b94d34bbbf5b90aca29bab7d6730e1951912224b782ec54639253_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::new_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 89,  110 => 84,  25 => 1,);
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
        <h1>Create a new section:</h1>
        <p style=\"color:green;\">{{msg}}</p>
        <form method=\"post\" class=\"form-horizontal\" action=\"/save/task\">
            <div class=\"form-group\">
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"hidden\" 
                        name=\"sect\" id=\"sect\" value=\"{{sect}}\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"name\">Name of the Task: </label>
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
                <label class=\"control-label col-sm-2\" for=\"incharge\">Who's in charge?: </label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" type=\"text\" 
                        name=\"incharge\" id=\"incharge\" required/>
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
", "IPSSymfonyProjectBundle::new_task.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/new_task.html.twig");
    }
}
