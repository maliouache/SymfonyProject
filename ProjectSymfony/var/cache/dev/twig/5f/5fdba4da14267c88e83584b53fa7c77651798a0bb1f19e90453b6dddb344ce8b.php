<?php

/* IPSSymfonyProjectBundle::projects.html.twig */
class __TwigTemplate_a775df4bdb582ef69a1d22486004383441d1cb0322b57931552bdacbc3ccf960 extends Twig_Template
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
        $__internal_03202541ef9435a802f4b8a0c1c6f4c121faf9cc14c23a3f239fbbbe7c6c9af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03202541ef9435a802f4b8a0c1c6f4c121faf9cc14c23a3f239fbbbe7c6c9af0->enter($__internal_03202541ef9435a802f4b8a0c1c6f4c121faf9cc14c23a3f239fbbbe7c6c9af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::projects.html.twig"));

        $__internal_e94649337cb2fcc102a45ac67bff1e3ece77698bbed7577b412af93c47f24a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94649337cb2fcc102a45ac67bff1e3ece77698bbed7577b412af93c47f24a71->enter($__internal_e94649337cb2fcc102a45ac67bff1e3ece77698bbed7577b412af93c47f24a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::projects.html.twig"));

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

        .row.content {
            height: 650px;
        }

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
            .row.content {
                height: auto;
            }
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
                    <li class=\"active\">
                        <a href=\"#\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"/projects\">Projects</a>
                    </li>
                    <li>
                        <a href=\"#\">Profile</a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"#\">
                            <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid text-center\">
        <div class=\"row content\">
            <div class=\"col-sm-2 sidenav\">
                <p>
                    <a href=\"/create/project\">Create new project</a>
                </p>
                <p>
                    <a href=\"/edit/projects\">Edit Existing projects</a>
                </p>
                <p>
                    <a href=\"#\">Link</a>
                </p>
            </div>
            <div class=\"col-sm-8 text-left\">

                <!-- here starts the main content -->
                <h1>List of the projects</h1>
                <!-- here ends the main content -->

                <div class=\"panel-group\">
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 118
            echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><a href=\"/show/project/";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\"><b style=\"color:black;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "NAME", array()), "html", null, true);
            echo "</b></a></div>
                        <div class=\"panel-body\">
                                <table class=\"table\">
                                  <tbody>
                                    <tr>
                                        <td width=\"70%\">
                                            <b>Total Progress: </b>
                                            ";
            // line 126
            if (($this->getAttribute($context["project"], "progress", array()) <= 24)) {
                // line 127
                echo "                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "%\">
                                                    ";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "% Complete
                                                </div>
                                            </div>
                                            ";
            }
            // line 134
            echo "                                            ";
            if ((($this->getAttribute($context["project"], "progress", array()) >= 24) && ($this->getAttribute($context["project"], "progress", array()) <= 49))) {
                // line 135
                echo "                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "%\">
                                                    ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "% Complete
                                                </div>
                                            </div>
                                            ";
            }
            // line 142
            echo "                                            ";
            if ((($this->getAttribute($context["project"], "progress", array()) <= 99) && ($this->getAttribute($context["project"], "progress", array()) >= 50))) {
                // line 143
                echo "                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "%\">
                                                    ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "% Complete
                                                </div>
                                            </div>
                                            ";
            }
            // line 150
            echo "                                            ";
            if (($this->getAttribute($context["project"], "progress", array()) == 100)) {
                // line 151
                echo "                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "%\">
                                                    ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "progress", array()), "html", null, true);
                echo "% Complete
                                                </div>
                                            </div>
                                            ";
            }
            // line 157
            echo "</br>
                                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "COMMENT", array()), "html", null, true);
            echo "
                                        </td>
                                      <td width=\"30%\">
                                          <a href=\"/add/section/";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\">Add a new section</a></br>
                                          <a href=\"/show/project/";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\">See the details of the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"/project/references/";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\">References/Bibliography</a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div>
                    </div>
                    </br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                </div>
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

</html>";
        
        $__internal_03202541ef9435a802f4b8a0c1c6f4c121faf9cc14c23a3f239fbbbe7c6c9af0->leave($__internal_03202541ef9435a802f4b8a0c1c6f4c121faf9cc14c23a3f239fbbbe7c6c9af0_prof);

        
        $__internal_e94649337cb2fcc102a45ac67bff1e3ece77698bbed7577b412af93c47f24a71->leave($__internal_e94649337cb2fcc102a45ac67bff1e3ece77698bbed7577b412af93c47f24a71_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 175,  265 => 166,  258 => 162,  254 => 161,  248 => 158,  245 => 157,  238 => 154,  234 => 153,  230 => 152,  227 => 151,  224 => 150,  217 => 146,  213 => 145,  209 => 144,  206 => 143,  203 => 142,  196 => 138,  192 => 137,  188 => 136,  185 => 135,  182 => 134,  175 => 130,  171 => 129,  167 => 128,  164 => 127,  162 => 126,  150 => 119,  147 => 118,  143 => 117,  25 => 1,);
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

        .row.content {
            height: 650px;
        }

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
            .row.content {
                height: auto;
            }
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
                    <li class=\"active\">
                        <a href=\"#\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"/projects\">Projects</a>
                    </li>
                    <li>
                        <a href=\"#\">Profile</a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"#\">
                            <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container-fluid text-center\">
        <div class=\"row content\">
            <div class=\"col-sm-2 sidenav\">
                <p>
                    <a href=\"/create/project\">Create new project</a>
                </p>
                <p>
                    <a href=\"/edit/projects\">Edit Existing projects</a>
                </p>
                <p>
                    <a href=\"#\">Link</a>
                </p>
            </div>
            <div class=\"col-sm-8 text-left\">

                <!-- here starts the main content -->
                <h1>List of the projects</h1>
                <!-- here ends the main content -->

                <div class=\"panel-group\">
                    {% for project in projects %}
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><a href=\"/show/project/{{project.ID}}\"><b style=\"color:black;\">{{project.NAME}}</b></a></div>
                        <div class=\"panel-body\">
                                <table class=\"table\">
                                  <tbody>
                                    <tr>
                                        <td width=\"70%\">
                                            <b>Total Progress: </b>
                                            {% if project.progress<=24 %}
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{{project.progress}}\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{project.progress}}%\">
                                                    {{project.progress}}% Complete
                                                </div>
                                            </div>
                                            {% endif %}
                                            {% if project.progress>=24 and project.progress<=49 %}
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{{project.progress}}\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{project.progress}}%\">
                                                    {{project.progress}}% Complete
                                                </div>
                                            </div>
                                            {% endif %}
                                            {% if project.progress<=99 and project.progress>=50 %}
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"{{project.progress}}\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{project.progress}}%\">
                                                    {{project.progress}}% Complete
                                                </div>
                                            </div>
                                            {% endif %}
                                            {% if project.progress==100 %}
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{{project.progress}}\"
                                                aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{project.progress}}%\">
                                                    {{project.progress}}% Complete
                                                </div>
                                            </div>
                                            {% endif %}</br>
                                            {{project.COMMENT}}
                                        </td>
                                      <td width=\"30%\">
                                          <a href=\"/add/section/{{project.ID}}\">Add a new section</a></br>
                                          <a href=\"/show/project/{{project.ID}}\">See the details of the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"/project/references/{{project.ID}}\">References/Bibliography</a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div>
                    </div>
                    </br>
                    {% endfor %}
                </div>
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

</html>", "IPSSymfonyProjectBundle::projects.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/projects.html.twig");
    }
}
