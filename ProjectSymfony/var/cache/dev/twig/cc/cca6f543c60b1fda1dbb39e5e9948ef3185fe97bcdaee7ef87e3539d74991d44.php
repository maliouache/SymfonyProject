<?php

/* IPSSymfonyProjectBundle::new_work.html.twig */
class __TwigTemplate_94072ace0075b48af9f13379ca2387736023e389c395f5c9d5b9c7b9be7f35c5 extends Twig_Template
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
        $__internal_34b580fb02ab65e8ef174399b0d6d89e42b5ee83001d4c9806e6c5701edce36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b580fb02ab65e8ef174399b0d6d89e42b5ee83001d4c9806e6c5701edce36b->enter($__internal_34b580fb02ab65e8ef174399b0d6d89e42b5ee83001d4c9806e6c5701edce36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_work.html.twig"));

        $__internal_9f7b8ebe950db6ae67c1ceec66be780f9fdbd9083b71b6819b53263b785339a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7b8ebe950db6ae67c1ceec66be780f9fdbd9083b71b6819b53263b785339a3->enter($__internal_9f7b8ebe950db6ae67c1ceec66be780f9fdbd9083b71b6819b53263b785339a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_work.html.twig"));

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
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/IPS/js/work.js"), "html", null, true);
        echo "\"></script>
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
        <h1>Submit a new work:</h1><a href=\"/show/task/";
        // line 84
        echo twig_escape_filter($this->env, ($context["task_parent"] ?? $this->getContext($context, "task_parent")), "html", null, true);
        echo "\" style=\"float:right;\"><button class=\"btn btn-default\">Go back to the task</button></a></br></br>
        <p style=\"color:green;\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "</p>
        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'errors');
        echo "
        <div class=\"form-group\">
        ";
        // line 90
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "cONTENT", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Content HTML:"));
        echo "
    
        ";
        // line 93
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "cONTENT", array()), 'errors');
        echo "
    
        <div class=\"col-sm-10\">
            ";
        // line 97
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "cONTENT", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "10")));
        echo "
        </div>
        </div>
        <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" onclick=\"decodeHtml_add()\" style=\"float:right;\">Construct HTML</button>
        </div>
    
        ";
        // line 105
        echo "        <div class=\"form-group\">
            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Or Upload a file:"));
        echo "
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'form_end');
        echo "
        </br>
        <div id=\"work_div\"></div>
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
        
        $__internal_34b580fb02ab65e8ef174399b0d6d89e42b5ee83001d4c9806e6c5701edce36b->leave($__internal_34b580fb02ab65e8ef174399b0d6d89e42b5ee83001d4c9806e6c5701edce36b_prof);

        
        $__internal_9f7b8ebe950db6ae67c1ceec66be780f9fdbd9083b71b6819b53263b785339a3->leave($__internal_9f7b8ebe950db6ae67c1ceec66be780f9fdbd9083b71b6819b53263b785339a3_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::new_work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 113,  172 => 112,  166 => 109,  161 => 107,  157 => 106,  154 => 105,  143 => 97,  136 => 93,  130 => 90,  125 => 87,  121 => 86,  117 => 85,  113 => 84,  36 => 10,  25 => 1,);
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
  <script src=\"{{asset(\"bundles/IPS/js/work.js\")}}\"></script>
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
        <h1>Submit a new work:</h1><a href=\"/show/task/{{task_parent}}\" style=\"float:right;\"><button class=\"btn btn-default\">Go back to the task</button></a></br></br>
        <p style=\"color:green;\">{{msg}}</p>
        {{ form_start(form_ref, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(form_ref) }}
        <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form_ref.cONTENT, \"Content HTML:\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    
        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form_ref.cONTENT) }}
    
        <div class=\"col-sm-10\">
            {# Génération de l'input. #}
            {{ form_widget(form_ref.cONTENT, {'attr': {'class': 'form-control','rows':'10'}}) }}
        </div>
        </div>
        <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" onclick=\"decodeHtml_add()\" style=\"float:right;\">Construct HTML</button>
        </div>
    
        {# Idem pour un autre champ. #}
        <div class=\"form-group\">
            {{ form_label(form_ref.file, \"Or Upload a file:\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form_ref.file) }}
            <div class=\"col-sm-10\">
                {{ form_widget(form_ref.file, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {{ form_widget(form_ref.save, {'attr': {'class': 'btn btn-primary'}}) }}
        {{ form_end(form_ref) }}
        </br>
        <div id=\"work_div\"></div>
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
", "IPSSymfonyProjectBundle::new_work.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/new_work.html.twig");
    }
}
