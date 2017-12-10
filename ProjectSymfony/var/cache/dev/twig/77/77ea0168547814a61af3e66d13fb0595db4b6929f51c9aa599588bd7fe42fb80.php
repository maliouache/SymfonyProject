<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cda6224ef91578a97ec9ee12edff9b40db610c091c00d3fa14c8af6cd12b94a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda6224ef91578a97ec9ee12edff9b40db610c091c00d3fa14c8af6cd12b94a4->enter($__internal_cda6224ef91578a97ec9ee12edff9b40db610c091c00d3fa14c8af6cd12b94a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d8ae94d5f39909dc3accd1c7c8c8797fa73ae34dc729cb0296610fff2d92f57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ae94d5f39909dc3accd1c7c8c8797fa73ae34dc729cb0296610fff2d92f57f->enter($__internal_d8ae94d5f39909dc3accd1c7c8c8797fa73ae34dc729cb0296610fff2d92f57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cda6224ef91578a97ec9ee12edff9b40db610c091c00d3fa14c8af6cd12b94a4->leave($__internal_cda6224ef91578a97ec9ee12edff9b40db610c091c00d3fa14c8af6cd12b94a4_prof);

        
        $__internal_d8ae94d5f39909dc3accd1c7c8c8797fa73ae34dc729cb0296610fff2d92f57f->leave($__internal_d8ae94d5f39909dc3accd1c7c8c8797fa73ae34dc729cb0296610fff2d92f57f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6fbee25eafef1bbb121f026a1dc40440798405ed7e97de8697e1e2b7b9aa549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fbee25eafef1bbb121f026a1dc40440798405ed7e97de8697e1e2b7b9aa549->enter($__internal_a6fbee25eafef1bbb121f026a1dc40440798405ed7e97de8697e1e2b7b9aa549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16648395281fe5cc0b2899731e6d22ea51abd56a70ff41a346a334d1cf66d6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16648395281fe5cc0b2899731e6d22ea51abd56a70ff41a346a334d1cf66d6b7->enter($__internal_16648395281fe5cc0b2899731e6d22ea51abd56a70ff41a346a334d1cf66d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16648395281fe5cc0b2899731e6d22ea51abd56a70ff41a346a334d1cf66d6b7->leave($__internal_16648395281fe5cc0b2899731e6d22ea51abd56a70ff41a346a334d1cf66d6b7_prof);

        
        $__internal_a6fbee25eafef1bbb121f026a1dc40440798405ed7e97de8697e1e2b7b9aa549->leave($__internal_a6fbee25eafef1bbb121f026a1dc40440798405ed7e97de8697e1e2b7b9aa549_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab9cae4227ad524d2ecfe46a1a03726c12d4d301e9c95649ce707caca40d7e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9cae4227ad524d2ecfe46a1a03726c12d4d301e9c95649ce707caca40d7e91->enter($__internal_ab9cae4227ad524d2ecfe46a1a03726c12d4d301e9c95649ce707caca40d7e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6236672264d4ae6ce606f14cd190f4508e889b5061925083db0017ced615e00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6236672264d4ae6ce606f14cd190f4508e889b5061925083db0017ced615e00e->enter($__internal_6236672264d4ae6ce606f14cd190f4508e889b5061925083db0017ced615e00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6236672264d4ae6ce606f14cd190f4508e889b5061925083db0017ced615e00e->leave($__internal_6236672264d4ae6ce606f14cd190f4508e889b5061925083db0017ced615e00e_prof);

        
        $__internal_ab9cae4227ad524d2ecfe46a1a03726c12d4d301e9c95649ce707caca40d7e91->leave($__internal_ab9cae4227ad524d2ecfe46a1a03726c12d4d301e9c95649ce707caca40d7e91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5228c43be430c7ec3e61110d4d30dc790e808660f16f521f54664f968355c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5228c43be430c7ec3e61110d4d30dc790e808660f16f521f54664f968355c5c->enter($__internal_a5228c43be430c7ec3e61110d4d30dc790e808660f16f521f54664f968355c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7b7ce7553ebcfa4a9bf719c95ec25b3679e8abc4a9d349f885192412bb9e473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b7ce7553ebcfa4a9bf719c95ec25b3679e8abc4a9d349f885192412bb9e473->enter($__internal_b7b7ce7553ebcfa4a9bf719c95ec25b3679e8abc4a9d349f885192412bb9e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7b7ce7553ebcfa4a9bf719c95ec25b3679e8abc4a9d349f885192412bb9e473->leave($__internal_b7b7ce7553ebcfa4a9bf719c95ec25b3679e8abc4a9d349f885192412bb9e473_prof);

        
        $__internal_a5228c43be430c7ec3e61110d4d30dc790e808660f16f521f54664f968355c5c->leave($__internal_a5228c43be430c7ec3e61110d4d30dc790e808660f16f521f54664f968355c5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/maliouache/1/ProjectSymphony/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
