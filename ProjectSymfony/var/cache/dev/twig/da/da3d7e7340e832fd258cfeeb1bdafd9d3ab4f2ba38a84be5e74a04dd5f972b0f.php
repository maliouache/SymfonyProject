<?php

/* IPSSymfonyProjectBundle::project.html.twig */
class __TwigTemplate_3c5f81fad02f48ee856fd7810f00da4e4d6e421aed3ed4becc675debe4ad1516 extends Twig_Template
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
        $__internal_7eff61c38efe8d1c68cff80152e501a6c72506193f28dd25e08fec5d67ed4ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eff61c38efe8d1c68cff80152e501a6c72506193f28dd25e08fec5d67ed4ef1->enter($__internal_7eff61c38efe8d1c68cff80152e501a6c72506193f28dd25e08fec5d67ed4ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::project.html.twig"));

        $__internal_53d851b87bd61210359e2b43431d59522898b541beaf5889d63f55e836e7b2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d851b87bd61210359e2b43431d59522898b541beaf5889d63f55e836e7b2db->enter($__internal_53d851b87bd61210359e2b43431d59522898b541beaf5889d63f55e836e7b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::project.html.twig"));

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
      /* position: fixed; */
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
      <a class=\"navbar-brand\" href=\"/\">ResearchLab</a>
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
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "NAME", array()), "html", null, true);
        echo "</h1>
        <!-- <ul> -->
        <!-- <div class=\"btn-group-vertical\"> -->
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 89
            echo "            <!-- <li> -->
                <button type=\"button\" class=\"btn btn-default btn-block\" data-toggle=\"collapse\" data-target=\"#demo";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "ID", array()), "html", null, true);
            echo "\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td width=\"50%\"><b>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "NAME", array()), "html", null, true);
            echo "</b></td>
                                <td width=\"30%\">
                                    ";
            // line 96
            if (($this->getAttribute($context["section"], "STATUT", array()) <= 24)) {
                // line 97
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "\"
                                        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "%\">
                                            ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "% Complete
                                        </div>
                                    </div>
                                    ";
            }
            // line 104
            echo "                                    ";
            if ((($this->getAttribute($context["section"], "STATUT", array()) >= 24) && ($this->getAttribute($context["section"], "STATUT", array()) <= 49))) {
                // line 105
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "\"
                                        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "%\">
                                            ";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "% Complete
                                        </div>
                                    </div>
                                    ";
            }
            // line 112
            echo "                                    ";
            if ((($this->getAttribute($context["section"], "STATUT", array()) <= 99) && ($this->getAttribute($context["section"], "STATUT", array()) >= 50))) {
                // line 113
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "\"
                                        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "%\">
                                            ";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "% Complete
                                        </div>
                                    </div>
                                    ";
            }
            // line 120
            echo "                                    ";
            if (($this->getAttribute($context["section"], "STATUT", array()) == 100)) {
                // line 121
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "\"
                                        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "%\">
                                            ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
                echo "% Complete
                                        </div>
                                    </div>
                                    ";
            }
            // line 128
            echo "                                </td>
                                <td width=\"20%\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "IMPORTANCE", array()), "html", null, true);
            echo "</td>
                            </tr>
                        </thead>
                    </table>
                </button>
                <div id=\"demo";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "ID", array()), "html", null, true);
            echo "\" class=\"collapse\">
                    
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <td width=\"50%\">Statut: <b>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "STATUT", array()), "html", null, true);
            echo "</b></br>
                                  ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "COMMENT", array()), "html", null, true);
            echo "</br>
                                  <a href=\"/add/task/";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "ID", array()), "html", null, true);
            echo "\">Add a new task</a></br>
                                  <a href=\"/show/section/";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "ID", array()), "html", null, true);
            echo "\">See the details of the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"/section/references/";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "ID", array()), "html", null, true);
            echo "\">References/Bibliography</a>
                                </td>
                                <td width=\"50%\"><b>Tasks list:</b></br>
                                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "tasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 150
                echo "                                  <a href=\"/show/task/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "ID", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "NAME", array()), "html", null, true);
                echo "</a>=>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "INCHARGE", array()), "html", null, true);
                echo "<div style=\"float:right;\"><img ";
                if (($this->getAttribute($context["task"], "STATUT", array()) == 0)) {
                    echo " src=\"https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/time_efficiency-512.png\"";
                }
                echo " ";
                if (($this->getAttribute($context["task"], "STATUT", array()) == 100)) {
                    echo " src=\"http://hddfhm.com/images/check-mark-clipart-9.png\"";
                }
                echo " height=\"15px\" width=\"15px\" alt=\"progress\"/></div></br>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- </li> -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        <!-- </div> -->
        <!-- </ul> -->

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
        
        $__internal_7eff61c38efe8d1c68cff80152e501a6c72506193f28dd25e08fec5d67ed4ef1->leave($__internal_7eff61c38efe8d1c68cff80152e501a6c72506193f28dd25e08fec5d67ed4ef1_prof);

        
        $__internal_53d851b87bd61210359e2b43431d59522898b541beaf5889d63f55e836e7b2db->leave($__internal_53d851b87bd61210359e2b43431d59522898b541beaf5889d63f55e836e7b2db_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 159,  288 => 152,  267 => 150,  263 => 149,  257 => 146,  250 => 142,  246 => 141,  242 => 140,  238 => 139,  230 => 134,  222 => 129,  219 => 128,  212 => 124,  208 => 123,  204 => 122,  201 => 121,  198 => 120,  191 => 116,  187 => 115,  183 => 114,  180 => 113,  177 => 112,  170 => 108,  166 => 107,  162 => 106,  159 => 105,  156 => 104,  149 => 100,  145 => 99,  141 => 98,  138 => 97,  136 => 96,  131 => 94,  124 => 90,  121 => 89,  117 => 88,  111 => 85,  25 => 1,);
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
      /* position: fixed; */
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
      <a class=\"navbar-brand\" href=\"/\">ResearchLab</a>
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

        <h1>{{project.NAME}}</h1>
        <!-- <ul> -->
        <!-- <div class=\"btn-group-vertical\"> -->
        {% for section in sections %}
            <!-- <li> -->
                <button type=\"button\" class=\"btn btn-default btn-block\" data-toggle=\"collapse\" data-target=\"#demo{{section.ID}}\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td width=\"50%\"><b>{{section.NAME}}</b></td>
                                <td width=\"30%\">
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
                                <td width=\"20%\">{{section.IMPORTANCE}}</td>
                            </tr>
                        </thead>
                    </table>
                </button>
                <div id=\"demo{{section.ID}}\" class=\"collapse\">
                    
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <td width=\"50%\">Statut: <b>{{section.STATUT}}</b></br>
                                  {{section.COMMENT}}</br>
                                  <a href=\"/add/task/{{section.ID}}\">Add a new task</a></br>
                                  <a href=\"/show/section/{{section.ID}}\">See the details of the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"#\">Here a new option to do in the section</a></br>
                                  <a href=\"/section/references/{{section.ID}}\">References/Bibliography</a>
                                </td>
                                <td width=\"50%\"><b>Tasks list:</b></br>
                                  {% for task in section.tasks %}
                                  <a href=\"/show/task/{{task.ID}}\">{{task.NAME}}</a>=>{{task.INCHARGE}}<div style=\"float:right;\"><img {% if task.STATUT==0 %} src=\"https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/time_efficiency-512.png\"{% endif %} {% if task.STATUT==100 %} src=\"http://hddfhm.com/images/check-mark-clipart-9.png\"{% endif %} height=\"15px\" width=\"15px\" alt=\"progress\"/></div></br>
                                  {% endfor %}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- </li> -->
        {% endfor %}
        <!-- </div> -->
        <!-- </ul> -->

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
", "IPSSymfonyProjectBundle::project.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/project.html.twig");
    }
}
