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
        $__internal_1138e839038dfa92f803b763c3d6470ddf23450a91b012ab154485b2b36b9274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1138e839038dfa92f803b763c3d6470ddf23450a91b012ab154485b2b36b9274->enter($__internal_1138e839038dfa92f803b763c3d6470ddf23450a91b012ab154485b2b36b9274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::projects.html.twig"));

        $__internal_62982dd7ea517ae9db1acf01b295e959e2447c7f1952795a5a3f1f7c88831f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62982dd7ea517ae9db1acf01b295e959e2447c7f1952795a5a3f1f7c88831f81->enter($__internal_62982dd7ea517ae9db1acf01b295e959e2447c7f1952795a5a3f1f7c88831f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::projects.html.twig"));

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
                <a class=\"navbar-brand\" href=\"/\">Logo</a>
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
                        <div class=\"panel-heading\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "NAME", array()), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                                <table class=\"table\">
                                  <tbody>
                                    <tr>
                                      <td width=\"70%\">";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "COMMENT", array()), "html", null, true);
            echo "</td>
                                      <td width=\"30%\">
                                          <a href=\"/add/section/";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\">Add a new section</a></br>
                                          <a href=\"#\">See the details of the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a>
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
        // line 140
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
        
        $__internal_1138e839038dfa92f803b763c3d6470ddf23450a91b012ab154485b2b36b9274->leave($__internal_1138e839038dfa92f803b763c3d6470ddf23450a91b012ab154485b2b36b9274_prof);

        
        $__internal_62982dd7ea517ae9db1acf01b295e959e2447c7f1952795a5a3f1f7c88831f81->leave($__internal_62982dd7ea517ae9db1acf01b295e959e2447c7f1952795a5a3f1f7c88831f81_prof);

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
        return array (  183 => 140,  163 => 126,  158 => 124,  150 => 119,  147 => 118,  143 => 117,  25 => 1,);
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
                <a class=\"navbar-brand\" href=\"/\">Logo</a>
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
                        <div class=\"panel-heading\">{{project.NAME}}</div>
                        <div class=\"panel-body\">
                                <table class=\"table\">
                                  <tbody>
                                    <tr>
                                      <td width=\"70%\">{{project.COMMENT}}</td>
                                      <td width=\"30%\">
                                          <a href=\"/add/section/{{project.ID}}\">Add a new section</a></br>
                                          <a href=\"#\">See the details of the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a></br>
                                          <a href=\"#\">Here a new option to do in the project</a>
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
