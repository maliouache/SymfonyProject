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
        $__internal_47e3f67b6c861e1c9a02b2ab7acad92b4db7988182e605152a47fbe4da2360c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e3f67b6c861e1c9a02b2ab7acad92b4db7988182e605152a47fbe4da2360c8->enter($__internal_47e3f67b6c861e1c9a02b2ab7acad92b4db7988182e605152a47fbe4da2360c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ae97ea7cdb838dee6e13d6dd81072211375b39694417df02c48bc11c5e5f6140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae97ea7cdb838dee6e13d6dd81072211375b39694417df02c48bc11c5e5f6140->enter($__internal_ae97ea7cdb838dee6e13d6dd81072211375b39694417df02c48bc11c5e5f6140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e3f67b6c861e1c9a02b2ab7acad92b4db7988182e605152a47fbe4da2360c8->leave($__internal_47e3f67b6c861e1c9a02b2ab7acad92b4db7988182e605152a47fbe4da2360c8_prof);

        
        $__internal_ae97ea7cdb838dee6e13d6dd81072211375b39694417df02c48bc11c5e5f6140->leave($__internal_ae97ea7cdb838dee6e13d6dd81072211375b39694417df02c48bc11c5e5f6140_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d422b9a9d642b95613115d0eace6905f908e7ca3f78f352d31455d876159dc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d422b9a9d642b95613115d0eace6905f908e7ca3f78f352d31455d876159dc6c->enter($__internal_d422b9a9d642b95613115d0eace6905f908e7ca3f78f352d31455d876159dc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_496c942d9add14ff293169c93e4cf84c6d4dfebc38d7600f4fcc9b30f86dac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496c942d9add14ff293169c93e4cf84c6d4dfebc38d7600f4fcc9b30f86dac7b->enter($__internal_496c942d9add14ff293169c93e4cf84c6d4dfebc38d7600f4fcc9b30f86dac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_496c942d9add14ff293169c93e4cf84c6d4dfebc38d7600f4fcc9b30f86dac7b->leave($__internal_496c942d9add14ff293169c93e4cf84c6d4dfebc38d7600f4fcc9b30f86dac7b_prof);

        
        $__internal_d422b9a9d642b95613115d0eace6905f908e7ca3f78f352d31455d876159dc6c->leave($__internal_d422b9a9d642b95613115d0eace6905f908e7ca3f78f352d31455d876159dc6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6573a0b9d8b66eb848a0ff204fa135c515f1ca646c2b5048ae9ab0100c56d308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6573a0b9d8b66eb848a0ff204fa135c515f1ca646c2b5048ae9ab0100c56d308->enter($__internal_6573a0b9d8b66eb848a0ff204fa135c515f1ca646c2b5048ae9ab0100c56d308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c1772e02a0e2a99626b93709a2dd419a7556e1b49a0173779543db1e3e330dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1772e02a0e2a99626b93709a2dd419a7556e1b49a0173779543db1e3e330dd->enter($__internal_7c1772e02a0e2a99626b93709a2dd419a7556e1b49a0173779543db1e3e330dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c1772e02a0e2a99626b93709a2dd419a7556e1b49a0173779543db1e3e330dd->leave($__internal_7c1772e02a0e2a99626b93709a2dd419a7556e1b49a0173779543db1e3e330dd_prof);

        
        $__internal_6573a0b9d8b66eb848a0ff204fa135c515f1ca646c2b5048ae9ab0100c56d308->leave($__internal_6573a0b9d8b66eb848a0ff204fa135c515f1ca646c2b5048ae9ab0100c56d308_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39b61c93c0c90b1fd3c948146dbb04a7870e69449eccedfd9500e87ec036f5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b61c93c0c90b1fd3c948146dbb04a7870e69449eccedfd9500e87ec036f5dd->enter($__internal_39b61c93c0c90b1fd3c948146dbb04a7870e69449eccedfd9500e87ec036f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a129846ac9fcf3ba0efa7b02ddd5e1ac412c9d7ab2bcf6da5ab9d7ca365e87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a129846ac9fcf3ba0efa7b02ddd5e1ac412c9d7ab2bcf6da5ab9d7ca365e87f->enter($__internal_4a129846ac9fcf3ba0efa7b02ddd5e1ac412c9d7ab2bcf6da5ab9d7ca365e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a129846ac9fcf3ba0efa7b02ddd5e1ac412c9d7ab2bcf6da5ab9d7ca365e87f->leave($__internal_4a129846ac9fcf3ba0efa7b02ddd5e1ac412c9d7ab2bcf6da5ab9d7ca365e87f_prof);

        
        $__internal_39b61c93c0c90b1fd3c948146dbb04a7870e69449eccedfd9500e87ec036f5dd->leave($__internal_39b61c93c0c90b1fd3c948146dbb04a7870e69449eccedfd9500e87ec036f5dd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
