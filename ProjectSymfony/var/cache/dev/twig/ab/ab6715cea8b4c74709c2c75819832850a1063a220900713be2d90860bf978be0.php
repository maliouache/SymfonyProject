<?php

/* IPSSymfonyProjectBundle::task.html.twig */
class __TwigTemplate_abe9ac2aeb921ee6f7342232966d8fe5c863d283b1433611da032f0e1336ebff extends Twig_Template
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
        $__internal_131d680bf914c4077ee1667717ae993ad9795fa2a365819f2f1af26c1ab04df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131d680bf914c4077ee1667717ae993ad9795fa2a365819f2f1af26c1ab04df3->enter($__internal_131d680bf914c4077ee1667717ae993ad9795fa2a365819f2f1af26c1ab04df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::task.html.twig"));

        $__internal_681f5923bdd4b5a14bf7c9d2e247a0ef8202aac74547a249b7bcc0ba8b9b6df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681f5923bdd4b5a14bf7c9d2e247a0ef8202aac74547a249b7bcc0ba8b9b6df6->enter($__internal_681f5923bdd4b5a14bf7c9d2e247a0ef8202aac74547a249b7bcc0ba8b9b6df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::task.html.twig"));

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
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "NAME", array()), "html", null, true);
        echo "</h1>";
        if (($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "STATUT", array()) == 0)) {
            echo "<a href=\"/end/task/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "ID", array()), "html", null, true);
            echo "\" style=\"float:right;\"><button class=\"btn btn-success\">Validate</button></a></br></br>";
        } else {
            echo "<a href=\"\" style=\"float:right;\"><button class=\"btn btn-seccess disabled\">Validate</button></a></br></br>";
        }
        // line 84
        echo "        <table class=\"table\">
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
                    <td width=\"45%\"><b>Section:</b></td>
                    <td width=\"55%\"><a href=\"/show/section/";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "ID", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "NAME", array()), "html", null, true);
        echo "</a></td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Importance:</b></td>
                    <td width=\"55%\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "IMPORTANCE", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>In charge:</b></td>
                    <td width=\"55%\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "INCHARGE", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Add date:</b></td>
                    <td width=\"55%\">";
        // line 104
        echo twig_escape_filter($this->env, ($context["ADDDATE"] ?? $this->getContext($context, "ADDDATE")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>End date:</b></td>
                    <td width=\"55%\">";
        // line 108
        echo twig_escape_filter($this->env, ($context["ENDDATE"] ?? $this->getContext($context, "ENDDATE")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Progress:</b></td>
                    <td width=\"55%\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "STATUT", array()), "html", null, true);
        echo "%</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Content:</b></td>
                    <td width=\"55%\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "COMMENT", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>References:</b></td>
                    <td width=\"55%\">
                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["references"] ?? $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 122
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["reference"], "URL", array())), "html", null, true);
            echo "\" target=_blank>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "URL", array()), "html", null, true);
            echo "</a></br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        <a href=\"/add/reference/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "ID", array()), "html", null, true);
        echo "\"><button class=\"btn btn-info\">Add references</button></a>
                    </td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Works:</b></td>
                    <td width=\"55%\">
                        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? $this->getContext($context, "works")));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 131
            echo "                        ";
            if (($this->getAttribute($context["work"], "TYPE", array()) == "file")) {
                // line 132
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["work"], "URL", array())), "html", null, true);
                echo "\" target=_blank>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "URL", array()), "html", null, true);
                echo "</a></br>
                        ";
            } else {
                // line 134
                echo "                        <a href=\"/show/work/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "ID", array()), "html", null, true);
                echo "\" target=_blank>See Work</a></br>
                        ";
            }
            // line 136
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                        <a href=\"/add/work/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "ID", array()), "html", null, true);
        echo "\"><button class=\"btn btn-info\">Submit works</button></a>
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
        
        $__internal_131d680bf914c4077ee1667717ae993ad9795fa2a365819f2f1af26c1ab04df3->leave($__internal_131d680bf914c4077ee1667717ae993ad9795fa2a365819f2f1af26c1ab04df3_prof);

        
        $__internal_681f5923bdd4b5a14bf7c9d2e247a0ef8202aac74547a249b7bcc0ba8b9b6df6->leave($__internal_681f5923bdd4b5a14bf7c9d2e247a0ef8202aac74547a249b7bcc0ba8b9b6df6_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 137,  232 => 136,  226 => 134,  218 => 132,  215 => 131,  211 => 130,  201 => 124,  190 => 122,  186 => 121,  178 => 116,  171 => 112,  164 => 108,  157 => 104,  150 => 100,  143 => 96,  134 => 92,  125 => 88,  119 => 84,  109 => 83,  25 => 1,);
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
        <h1>{{task.NAME}}</h1>{% if task.STATUT==0 %}<a href=\"/end/task/{{task.ID}}\" style=\"float:right;\"><button class=\"btn btn-success\">Validate</button></a></br></br>{% else %}<a href=\"\" style=\"float:right;\"><button class=\"btn btn-seccess disabled\">Validate</button></a></br></br>{% endif %}
        <table class=\"table\">
            <tbody>
                <tr>
                    <td width=\"45%\"><b>Project:</b></td>
                    <td width=\"55%\"><a href=\"/show/project/{{project.ID}}\">{{project.NAME}}</a></td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Section:</b></td>
                    <td width=\"55%\"><a href=\"/show/section/{{section.ID}}\">{{section.NAME}}</a></td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Importance:</b></td>
                    <td width=\"55%\">{{task.IMPORTANCE}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>In charge:</b></td>
                    <td width=\"55%\">{{task.INCHARGE}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Add date:</b></td>
                    <td width=\"55%\">{{ADDDATE}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>End date:</b></td>
                    <td width=\"55%\">{{ENDDATE}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Progress:</b></td>
                    <td width=\"55%\">{{task.STATUT}}%</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Content:</b></td>
                    <td width=\"55%\">{{task.COMMENT}}</td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>References:</b></td>
                    <td width=\"55%\">
                        {% for reference in references%}
                        <a href=\"{{asset(reference.URL)}}\" target=_blank>{{reference.URL}}</a></br>
                        {% endfor %}
                        <a href=\"/add/reference/{{task.ID}}\"><button class=\"btn btn-info\">Add references</button></a>
                    </td>
                </tr>
                <tr>
                    <td width=\"45%\"><b>Works:</b></td>
                    <td width=\"55%\">
                        {% for work in works %}
                        {% if work.TYPE=='file' %}
                        <a href=\"{{asset(work.URL)}}\" target=_blank>{{work.URL}}</a></br>
                        {% else %}
                        <a href=\"/show/work/{{work.ID}}\" target=_blank>See Work</a></br>
                        {% endif %}
                        {% endfor %}
                        <a href=\"/add/work/{{task.ID}}\"><button class=\"btn btn-info\">Submit works</button></a>
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
", "IPSSymfonyProjectBundle::task.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/task.html.twig");
    }
}
