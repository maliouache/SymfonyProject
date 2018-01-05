<?php

/* ResearchLabUserBundle::login.html.twig */
class __TwigTemplate_eaabd813fcf61338780cf29bf9a37ef67165151d6c4d0790f8ca0f1f40141b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f35337ed455ea1c2974648d679be647e263a511b6f55145e10523375e52e1b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35337ed455ea1c2974648d679be647e263a511b6f55145e10523375e52e1b2b->enter($__internal_f35337ed455ea1c2974648d679be647e263a511b6f55145e10523375e52e1b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ResearchLabUserBundle::login.html.twig"));

        $__internal_ba7299fb1d0eabdc28f7b7ea7213ce1a5fdd8036291f69471eaa8329e921c97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7299fb1d0eabdc28f7b7ea7213ce1a5fdd8036291f69471eaa8329e921c97f->enter($__internal_ba7299fb1d0eabdc28f7b7ea7213ce1a5fdd8036291f69471eaa8329e921c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ResearchLabUserBundle::login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f35337ed455ea1c2974648d679be647e263a511b6f55145e10523375e52e1b2b->leave($__internal_f35337ed455ea1c2974648d679be647e263a511b6f55145e10523375e52e1b2b_prof);

        
        $__internal_ba7299fb1d0eabdc28f7b7ea7213ce1a5fdd8036291f69471eaa8329e921c97f->leave($__internal_ba7299fb1d0eabdc28f7b7ea7213ce1a5fdd8036291f69471eaa8329e921c97f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b9cf5dd121771684462400bc533e2cb2d462de30f5b1371fd358ab8df65dd314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cf5dd121771684462400bc533e2cb2d462de30f5b1371fd358ab8df65dd314->enter($__internal_b9cf5dd121771684462400bc533e2cb2d462de30f5b1371fd358ab8df65dd314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ceae92511498a9d0c69484eaa64f6bc17f9031aecc6922c527e031bf74b9fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceae92511498a9d0c69484eaa64f6bc17f9031aecc6922c527e031bf74b9fb5->enter($__internal_9ceae92511498a9d0c69484eaa64f6bc17f9031aecc6922c527e031bf74b9fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "  <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_9ceae92511498a9d0c69484eaa64f6bc17f9031aecc6922c527e031bf74b9fb5->leave($__internal_9ceae92511498a9d0c69484eaa64f6bc17f9031aecc6922c527e031bf74b9fb5_prof);

        
        $__internal_b9cf5dd121771684462400bc533e2cb2d462de30f5b1371fd358ab8df65dd314->leave($__internal_b9cf5dd121771684462400bc533e2cb2d462de30f5b1371fd358ab8df65dd314_prof);

    }

    public function getTemplateName()
    {
        return "ResearchLabUserBundle::login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  63 => 11,  60 => 9,  54 => 7,  51 => 6,  48 => 4,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block body %}

  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

  {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
  <form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

{% endblock %}", "ResearchLabUserBundle::login.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/src/ResearchLabUserBundle/Resources/views/login.html.twig");
    }
}
