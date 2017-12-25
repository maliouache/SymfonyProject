<?php

/* IPSSymfonyProjectBundle::section.html.twig */
class __TwigTemplate_6ba9d530b1a05e6572ddb440ef6921f5f16a4610ef02a0e737eac2d558024e0b extends Twig_Template
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
        $__internal_0a1fcbb763b91e5b3bafe65dfa2b6106d0ec8e866f44fe3fa40c58fd6880d281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1fcbb763b91e5b3bafe65dfa2b6106d0ec8e866f44fe3fa40c58fd6880d281->enter($__internal_0a1fcbb763b91e5b3bafe65dfa2b6106d0ec8e866f44fe3fa40c58fd6880d281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::section.html.twig"));

        $__internal_3bb8616214f2c519eadb7b52ef9756b79c851428454b1b0e535de4f282c6d587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb8616214f2c519eadb7b52ef9756b79c851428454b1b0e535de4f282c6d587->enter($__internal_3bb8616214f2c519eadb7b52ef9756b79c851428454b1b0e535de4f282c6d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::section.html.twig"));

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
    <div class=\"col-sm-8 text-left\"> 
        <!-- here starts the main content -->
        <h1>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "NAME", array()), "html", null, true);
        echo "</h1>
        <table class=\"table\">
            <tbody>
                <tr>
                    <td width=\"45%\"><b>Project:</b></td>
                    <td width=\"55%\"><a href=\"/show/project/";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "ID", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "NAME", array()), "html", null, true);
        echo "</a></td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Importance:</b></td>
                    <td width=\"55%\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "IMPORTANCE", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Add date:</b></td>
                    <td width=\"55%\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["add"] ?? $this->getContext($context, "add")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>End date:</b></td>
                    <td width=\"55%\">";
        // line 100
        echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Progress:</b></td>
                    <td width=\"55%\">
                        ";
        // line 105
        if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) <= 24)) {
            // line 106
            echo "                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "%\">
                                ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "% Complete
                            </div>
                        </div>
                        ";
        }
        // line 113
        echo "                        ";
        if ((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) >= 24) && ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) <= 49))) {
            // line 114
            echo "                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "%\">
                                ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "% Complete
                            </div>
                        </div>
                        ";
        }
        // line 121
        echo "                        ";
        if ((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) <= 99) && ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) >= 50))) {
            // line 122
            echo "                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "%\">
                                ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "% Complete
                            </div>
                        </div>
                        ";
        }
        // line 129
        echo "                        ";
        if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()) == 100)) {
            // line 130
            echo "                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "%\">
                                ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "STATUT", array()), "html", null, true);
            echo "% Complete
                            </div>
                        </div>
                        ";
        }
        // line 137
        echo "                    </td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Content:</b></td>
                    <td width=\"55%\">";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "COMMENT", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Tasks:</b></td>
                    <td width=\"55%\">
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 147
            echo "                        <a href=\"/show/task/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "ID", array()), "html", null, true);
            echo "\" target=_blank>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "NAME", array()), "html", null, true);
            echo "</a></br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                        <a href=\"/add/task/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "ID", array()), "html", null, true);
        echo "\"><button class=\"btn btn-info\">Add tasks</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- here ends the main content -->
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
        
        $__internal_0a1fcbb763b91e5b3bafe65dfa2b6106d0ec8e866f44fe3fa40c58fd6880d281->leave($__internal_0a1fcbb763b91e5b3bafe65dfa2b6106d0ec8e866f44fe3fa40c58fd6880d281_prof);

        
        $__internal_3bb8616214f2c519eadb7b52ef9756b79c851428454b1b0e535de4f282c6d587->leave($__internal_3bb8616214f2c519eadb7b52ef9756b79c851428454b1b0e535de4f282c6d587_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 149,  249 => 147,  245 => 146,  237 => 141,  231 => 137,  224 => 133,  220 => 132,  216 => 131,  213 => 130,  210 => 129,  203 => 125,  199 => 124,  195 => 123,  192 => 122,  189 => 121,  182 => 117,  178 => 116,  174 => 115,  171 => 114,  168 => 113,  161 => 109,  157 => 108,  153 => 107,  150 => 106,  148 => 105,  140 => 100,  133 => 96,  126 => 92,  117 => 88,  109 => 83,  25 => 1,);
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
    <div class=\"col-sm-8 text-left\"> 
        <!-- here starts the main content -->
        <h1>{{section.NAME}}</h1>
        <table class=\"table\">
            <tbody>
                <tr>
                    <td width=\"45%\"><b>Project:</b></td>
                    <td width=\"55%\"><a href=\"/show/project/{{project.ID}}\">{{project.NAME}}</a></td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Importance:</b></td>
                    <td width=\"55%\">{{section.IMPORTANCE}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Add date:</b></td>
                    <td width=\"55%\">{{add}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>End date:</b></td>
                    <td width=\"55%\">{{end}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Progress:</b></td>
                    <td width=\"55%\">
                        {% if section.STATUT<=24 %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{section.STATUT}}\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{section.STATUT}}%\">
                                {{section.STATUT}}% Complete
                            </div>
                        </div>
                        {% endif %}
                        {% if section.STATUT>=24 and section.STATUT<=49 %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{section.STATUT}}\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{section.STATUT}}%\">
                                {{section.STATUT}}% Complete
                            </div>
                        </div>
                        {% endif %}
                        {% if section.STATUT<=99 and section.STATUT>=50 %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"{{section.STATUT}}\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{section.STATUT}}%\">
                                {{section.STATUT}}% Complete
                            </div>
                        </div>
                        {% endif %}
                        {% if section.STATUT==100 %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{section.STATUT}}\"
                            aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{section.STATUT}}%\">
                                {{section.STATUT}}% Complete
                            </div>
                        </div>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Content:</b></td>
                    <td width=\"55%\">{{section.COMMENT}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Tasks:</b></td>
                    <td width=\"55%\">
                        {% for task in tasks%}
                        <a href=\"/show/task/{{task.ID}}\" target=_blank>{{task.NAME}}</a></br>
                        {% endfor %}
                        <a href=\"/add/task/{{section.ID}}\"><button class=\"btn btn-info\">Add tasks</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- here ends the main content -->
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
", "IPSSymfonyProjectBundle::section.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/section.html.twig");
    }
}
