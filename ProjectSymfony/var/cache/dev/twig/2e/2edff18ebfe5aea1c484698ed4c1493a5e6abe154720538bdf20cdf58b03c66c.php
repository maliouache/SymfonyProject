<?php

/* IPSSymfonyProjectBundle::edit_projects.html.twig */
class __TwigTemplate_8c50e7c09312ef0292b16bec1005598597cb9a2d8c8067ce5783c09cdcc7e940 extends Twig_Template
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
        $__internal_28e18d207e297df0b0812dd230818f558c6af95bff07a47c92c926477cf0769d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e18d207e297df0b0812dd230818f558c6af95bff07a47c92c926477cf0769d->enter($__internal_28e18d207e297df0b0812dd230818f558c6af95bff07a47c92c926477cf0769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::edit_projects.html.twig"));

        $__internal_9e23d573a148394052570590e49602253c7849f201a3bd1677ebdd9d694603ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e23d573a148394052570590e49602253c7849f201a3bd1677ebdd9d694603ac->enter($__internal_9e23d573a148394052570590e49602253c7849f201a3bd1677ebdd9d694603ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::edit_projects.html.twig"));

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
        .edit_btn{
            float: right;
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
                

                <div class=\"panel-group\">
                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 121
            echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "NAME", array()), "html", null, true);
            echo "<a href=\"/delete/project/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\" class=\"edit_btn\"><button class=\"btn btn-danger btn-sm\">Delete</button></a><a href=\"/edit/project/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "ID", array()), "html", null, true);
            echo "\" class=\"edit_btn\"><button class=\"btn btn-warning btn-sm\">Edit</button></a></div>
                        <div class=\"panel-body\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "COMMENT", array()), "html", null, true);
            echo "</div>
                    </div>
                    </br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </div>

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

</html>";
        
        $__internal_28e18d207e297df0b0812dd230818f558c6af95bff07a47c92c926477cf0769d->leave($__internal_28e18d207e297df0b0812dd230818f558c6af95bff07a47c92c926477cf0769d_prof);

        
        $__internal_9e23d573a148394052570590e49602253c7849f201a3bd1677ebdd9d694603ac->leave($__internal_9e23d573a148394052570590e49602253c7849f201a3bd1677ebdd9d694603ac_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::edit_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 127,  161 => 123,  153 => 122,  150 => 121,  146 => 120,  25 => 1,);
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
        .edit_btn{
            float: right;
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
                

                <div class=\"panel-group\">
                    {% for project in projects %}
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">{{project.NAME}}<a href=\"/delete/project/{{project.ID}}\" class=\"edit_btn\"><button class=\"btn btn-danger btn-sm\">Delete</button></a><a href=\"/edit/project/{{project.ID}}\" class=\"edit_btn\"><button class=\"btn btn-warning btn-sm\">Edit</button></a></div>
                        <div class=\"panel-body\">{{project.COMMENT}}</div>
                    </div>
                    </br>
                    {% endfor %}
                </div>

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

</html>", "IPSSymfonyProjectBundle::edit_projects.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/edit_projects.html.twig");
    }
}
