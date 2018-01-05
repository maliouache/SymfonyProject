<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ccb3f516b895db03a9ffe3999884a061529fb0c43b650ab016b8a36bc110562e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb3f516b895db03a9ffe3999884a061529fb0c43b650ab016b8a36bc110562e->enter($__internal_ccb3f516b895db03a9ffe3999884a061529fb0c43b650ab016b8a36bc110562e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_48befc237b320dd793039d0ba44fd81f765d60456faa24bb54f052080bd19f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48befc237b320dd793039d0ba44fd81f765d60456faa24bb54f052080bd19f76->enter($__internal_48befc237b320dd793039d0ba44fd81f765d60456faa24bb54f052080bd19f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccb3f516b895db03a9ffe3999884a061529fb0c43b650ab016b8a36bc110562e->leave($__internal_ccb3f516b895db03a9ffe3999884a061529fb0c43b650ab016b8a36bc110562e_prof);

        
        $__internal_48befc237b320dd793039d0ba44fd81f765d60456faa24bb54f052080bd19f76->leave($__internal_48befc237b320dd793039d0ba44fd81f765d60456faa24bb54f052080bd19f76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ed9c6350a849bb1323d539d8f176c52a5a8b690b9db189e3353f9e861c317ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed9c6350a849bb1323d539d8f176c52a5a8b690b9db189e3353f9e861c317ac->enter($__internal_4ed9c6350a849bb1323d539d8f176c52a5a8b690b9db189e3353f9e861c317ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bdd10c7ea6f3f6b037877ce5f7358bfab6c0f6da16d14a187ab550afafae05e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd10c7ea6f3f6b037877ce5f7358bfab6c0f6da16d14a187ab550afafae05e3->enter($__internal_bdd10c7ea6f3f6b037877ce5f7358bfab6c0f6da16d14a187ab550afafae05e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bdd10c7ea6f3f6b037877ce5f7358bfab6c0f6da16d14a187ab550afafae05e3->leave($__internal_bdd10c7ea6f3f6b037877ce5f7358bfab6c0f6da16d14a187ab550afafae05e3_prof);

        
        $__internal_4ed9c6350a849bb1323d539d8f176c52a5a8b690b9db189e3353f9e861c317ac->leave($__internal_4ed9c6350a849bb1323d539d8f176c52a5a8b690b9db189e3353f9e861c317ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_969ab98986262db66907a53c9bbaa23a83a7e481598fe1e89504d6dab866e388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969ab98986262db66907a53c9bbaa23a83a7e481598fe1e89504d6dab866e388->enter($__internal_969ab98986262db66907a53c9bbaa23a83a7e481598fe1e89504d6dab866e388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8293fa15971141c5d5eed5056b4bfc04af6d4b7d61413cdad6a1fa950cf1a0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8293fa15971141c5d5eed5056b4bfc04af6d4b7d61413cdad6a1fa950cf1a0d2->enter($__internal_8293fa15971141c5d5eed5056b4bfc04af6d4b7d61413cdad6a1fa950cf1a0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8293fa15971141c5d5eed5056b4bfc04af6d4b7d61413cdad6a1fa950cf1a0d2->leave($__internal_8293fa15971141c5d5eed5056b4bfc04af6d4b7d61413cdad6a1fa950cf1a0d2_prof);

        
        $__internal_969ab98986262db66907a53c9bbaa23a83a7e481598fe1e89504d6dab866e388->leave($__internal_969ab98986262db66907a53c9bbaa23a83a7e481598fe1e89504d6dab866e388_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ccdb5ade83514df43f978b51a08ec838e183278f1c2bea51bb1f5b4c97a3fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccdb5ade83514df43f978b51a08ec838e183278f1c2bea51bb1f5b4c97a3fb7->enter($__internal_4ccdb5ade83514df43f978b51a08ec838e183278f1c2bea51bb1f5b4c97a3fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f2ee22feef1c80659320987ea3b9c902f5d8416a117728500df08be74cffd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2ee22feef1c80659320987ea3b9c902f5d8416a117728500df08be74cffd7b->enter($__internal_4f2ee22feef1c80659320987ea3b9c902f5d8416a117728500df08be74cffd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4f2ee22feef1c80659320987ea3b9c902f5d8416a117728500df08be74cffd7b->leave($__internal_4f2ee22feef1c80659320987ea3b9c902f5d8416a117728500df08be74cffd7b_prof);

        
        $__internal_4ccdb5ade83514df43f978b51a08ec838e183278f1c2bea51bb1f5b4c97a3fb7->leave($__internal_4ccdb5ade83514df43f978b51a08ec838e183278f1c2bea51bb1f5b4c97a3fb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
