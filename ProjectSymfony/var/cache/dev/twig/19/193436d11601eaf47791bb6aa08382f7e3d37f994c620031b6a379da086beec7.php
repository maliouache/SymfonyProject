<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_677fcf8a40cd9c0bec4b254a1e8996e89056d420f08f29ec7a956bfbb92db10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21d53f453c0af5d6ce7a471d1bf13878c0085b5379f550cf16e59217f638a0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d53f453c0af5d6ce7a471d1bf13878c0085b5379f550cf16e59217f638a0a1->enter($__internal_21d53f453c0af5d6ce7a471d1bf13878c0085b5379f550cf16e59217f638a0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_00ceed8b3c88abba181e9690408f9c1da685b30e239a682c625147c2e7a8be62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ceed8b3c88abba181e9690408f9c1da685b30e239a682c625147c2e7a8be62->enter($__internal_00ceed8b3c88abba181e9690408f9c1da685b30e239a682c625147c2e7a8be62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d53f453c0af5d6ce7a471d1bf13878c0085b5379f550cf16e59217f638a0a1->leave($__internal_21d53f453c0af5d6ce7a471d1bf13878c0085b5379f550cf16e59217f638a0a1_prof);

        
        $__internal_00ceed8b3c88abba181e9690408f9c1da685b30e239a682c625147c2e7a8be62->leave($__internal_00ceed8b3c88abba181e9690408f9c1da685b30e239a682c625147c2e7a8be62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bba4b0802a9076a4d00d2db6c7675833119bb8d5540d32088ef976ae190333f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bba4b0802a9076a4d00d2db6c7675833119bb8d5540d32088ef976ae190333f->enter($__internal_0bba4b0802a9076a4d00d2db6c7675833119bb8d5540d32088ef976ae190333f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_923f6906a4d7daca29c33831053e91f41d1458420b110933d8c23a9f4670918e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923f6906a4d7daca29c33831053e91f41d1458420b110933d8c23a9f4670918e->enter($__internal_923f6906a4d7daca29c33831053e91f41d1458420b110933d8c23a9f4670918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_923f6906a4d7daca29c33831053e91f41d1458420b110933d8c23a9f4670918e->leave($__internal_923f6906a4d7daca29c33831053e91f41d1458420b110933d8c23a9f4670918e_prof);

        
        $__internal_0bba4b0802a9076a4d00d2db6c7675833119bb8d5540d32088ef976ae190333f->leave($__internal_0bba4b0802a9076a4d00d2db6c7675833119bb8d5540d32088ef976ae190333f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8994e58b7771aaa19ccaf46ffd7f4d2ffeef9ce323402c2b0a56c5b3bb7858e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8994e58b7771aaa19ccaf46ffd7f4d2ffeef9ce323402c2b0a56c5b3bb7858e5->enter($__internal_8994e58b7771aaa19ccaf46ffd7f4d2ffeef9ce323402c2b0a56c5b3bb7858e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b2367a536d40009f4486a78fdeae0a606b9882e90ec811be582ca987894a80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2367a536d40009f4486a78fdeae0a606b9882e90ec811be582ca987894a80a->enter($__internal_9b2367a536d40009f4486a78fdeae0a606b9882e90ec811be582ca987894a80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9b2367a536d40009f4486a78fdeae0a606b9882e90ec811be582ca987894a80a->leave($__internal_9b2367a536d40009f4486a78fdeae0a606b9882e90ec811be582ca987894a80a_prof);

        
        $__internal_8994e58b7771aaa19ccaf46ffd7f4d2ffeef9ce323402c2b0a56c5b3bb7858e5->leave($__internal_8994e58b7771aaa19ccaf46ffd7f4d2ffeef9ce323402c2b0a56c5b3bb7858e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
