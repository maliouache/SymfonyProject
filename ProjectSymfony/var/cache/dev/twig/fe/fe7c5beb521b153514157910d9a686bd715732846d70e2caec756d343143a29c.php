<?php

/* IPSSymfonyProjectBundle::new_reference.html.twig */
class __TwigTemplate_ef156c3a66126127dad57b0533256264c3f46eced61a91c43e04d7bee7923df4 extends Twig_Template
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
        $__internal_bc962e284fc8a18ed91ae45864af18bd6afe4fe49927f0c3b8c38d2d4cc9f157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc962e284fc8a18ed91ae45864af18bd6afe4fe49927f0c3b8c38d2d4cc9f157->enter($__internal_bc962e284fc8a18ed91ae45864af18bd6afe4fe49927f0c3b8c38d2d4cc9f157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_reference.html.twig"));

        $__internal_70a736b9859270757070576a70a99b0917be5798acec8735e8f8947809f2282f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a736b9859270757070576a70a99b0917be5798acec8735e8f8947809f2282f->enter($__internal_70a736b9859270757070576a70a99b0917be5798acec8735e8f8947809f2282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IPSSymfonyProjectBundle::new_reference.html.twig"));

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
        <h1>Add a new reference:</h1><a href=\"/show/task/";
        // line 83
        echo twig_escape_filter($this->env, ($context["task_parent"] ?? $this->getContext($context, "task_parent")), "html", null, true);
        echo "\" style=\"float:right;\"><button class=\"btn btn-default\">Go back to the task</button></a></br></br>
        <p style=\"color:green;\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "</p>
        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'errors');
        echo "
        <div class=\"form-group\">
        ";
        // line 89
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "uRL", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "URL:"));
        echo "
    
        ";
        // line 92
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "uRL", array()), 'errors');
        echo "
    
        <div class=\"col-sm-10\">
            ";
        // line 96
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "uRL", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        </div>

        
    
        ";
        // line 103
        echo "        <div class=\"form-group\">
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Or Upload a file:"));
        echo "
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form_ref"] ?? $this->getContext($context, "form_ref")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form_ref"] ?? $this->getContext($context, "form_ref")), 'form_end');
        echo "
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
        
        $__internal_bc962e284fc8a18ed91ae45864af18bd6afe4fe49927f0c3b8c38d2d4cc9f157->leave($__internal_bc962e284fc8a18ed91ae45864af18bd6afe4fe49927f0c3b8c38d2d4cc9f157_prof);

        
        $__internal_70a736b9859270757070576a70a99b0917be5798acec8735e8f8947809f2282f->leave($__internal_70a736b9859270757070576a70a99b0917be5798acec8735e8f8947809f2282f_prof);

    }

    public function getTemplateName()
    {
        return "IPSSymfonyProjectBundle::new_reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 111,  167 => 110,  161 => 107,  156 => 105,  152 => 104,  149 => 103,  139 => 96,  132 => 92,  126 => 89,  121 => 86,  117 => 85,  113 => 84,  109 => 83,  25 => 1,);
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
        <h1>Add a new reference:</h1><a href=\"/show/task/{{task_parent}}\" style=\"float:right;\"><button class=\"btn btn-default\">Go back to the task</button></a></br></br>
        <p style=\"color:green;\">{{msg}}</p>
        {{ form_start(form_ref, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(form_ref) }}
        <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form_ref.uRL, \"URL:\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    
        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form_ref.uRL) }}
    
        <div class=\"col-sm-10\">
            {# Génération de l'input. #}
            {{ form_widget(form_ref.uRL, {'attr': {'class': 'form-control'}}) }}
        </div>
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
", "IPSSymfonyProjectBundle::new_reference.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/IPS/SymfonyProjectBundle/Resources/views/new_reference.html.twig");
    }
}
