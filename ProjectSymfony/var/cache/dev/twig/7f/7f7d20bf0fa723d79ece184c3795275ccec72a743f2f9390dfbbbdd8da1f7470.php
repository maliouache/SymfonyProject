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
        $__internal_60b6be710da4c324a78c53a9ba9bff69930168b9e478ac0938e72b30af2ad5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b6be710da4c324a78c53a9ba9bff69930168b9e478ac0938e72b30af2ad5a4->enter($__internal_60b6be710da4c324a78c53a9ba9bff69930168b9e478ac0938e72b30af2ad5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c3c9bc427fedc0cb31abd79b760df738f5b4963cdcb7b2800ba7068d827f1e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c9bc427fedc0cb31abd79b760df738f5b4963cdcb7b2800ba7068d827f1e78->enter($__internal_c3c9bc427fedc0cb31abd79b760df738f5b4963cdcb7b2800ba7068d827f1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b6be710da4c324a78c53a9ba9bff69930168b9e478ac0938e72b30af2ad5a4->leave($__internal_60b6be710da4c324a78c53a9ba9bff69930168b9e478ac0938e72b30af2ad5a4_prof);

        
        $__internal_c3c9bc427fedc0cb31abd79b760df738f5b4963cdcb7b2800ba7068d827f1e78->leave($__internal_c3c9bc427fedc0cb31abd79b760df738f5b4963cdcb7b2800ba7068d827f1e78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_807f2f6988c475c4e17695da02ad186b9b024891a27edda3745cba05854c4eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807f2f6988c475c4e17695da02ad186b9b024891a27edda3745cba05854c4eb6->enter($__internal_807f2f6988c475c4e17695da02ad186b9b024891a27edda3745cba05854c4eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_019c7d11c3520f602b065affd2b53571b57737fb361a2c426c07922839a5e122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c7d11c3520f602b065affd2b53571b57737fb361a2c426c07922839a5e122->enter($__internal_019c7d11c3520f602b065affd2b53571b57737fb361a2c426c07922839a5e122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_019c7d11c3520f602b065affd2b53571b57737fb361a2c426c07922839a5e122->leave($__internal_019c7d11c3520f602b065affd2b53571b57737fb361a2c426c07922839a5e122_prof);

        
        $__internal_807f2f6988c475c4e17695da02ad186b9b024891a27edda3745cba05854c4eb6->leave($__internal_807f2f6988c475c4e17695da02ad186b9b024891a27edda3745cba05854c4eb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c074c37916968777100502e7c1a87b6879eee855839937b477f33216c4dd02c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c074c37916968777100502e7c1a87b6879eee855839937b477f33216c4dd02c1->enter($__internal_c074c37916968777100502e7c1a87b6879eee855839937b477f33216c4dd02c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eab51b1c6618c6631dd7a2c820bf21fa3864d596c5daf4c9eddfcf3c29276949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab51b1c6618c6631dd7a2c820bf21fa3864d596c5daf4c9eddfcf3c29276949->enter($__internal_eab51b1c6618c6631dd7a2c820bf21fa3864d596c5daf4c9eddfcf3c29276949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eab51b1c6618c6631dd7a2c820bf21fa3864d596c5daf4c9eddfcf3c29276949->leave($__internal_eab51b1c6618c6631dd7a2c820bf21fa3864d596c5daf4c9eddfcf3c29276949_prof);

        
        $__internal_c074c37916968777100502e7c1a87b6879eee855839937b477f33216c4dd02c1->leave($__internal_c074c37916968777100502e7c1a87b6879eee855839937b477f33216c4dd02c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36e1d2df10f2053dcc42e382f6a33a41a6789149e241c18c15952343befafacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e1d2df10f2053dcc42e382f6a33a41a6789149e241c18c15952343befafacb->enter($__internal_36e1d2df10f2053dcc42e382f6a33a41a6789149e241c18c15952343befafacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04a4ea81f63dd837e28dd1d00fc1dd6c221c66eeed5f5204e9721c0eebcbc636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a4ea81f63dd837e28dd1d00fc1dd6c221c66eeed5f5204e9721c0eebcbc636->enter($__internal_04a4ea81f63dd837e28dd1d00fc1dd6c221c66eeed5f5204e9721c0eebcbc636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_04a4ea81f63dd837e28dd1d00fc1dd6c221c66eeed5f5204e9721c0eebcbc636->leave($__internal_04a4ea81f63dd837e28dd1d00fc1dd6c221c66eeed5f5204e9721c0eebcbc636_prof);

        
        $__internal_36e1d2df10f2053dcc42e382f6a33a41a6789149e241c18c15952343befafacb->leave($__internal_36e1d2df10f2053dcc42e382f6a33a41a6789149e241c18c15952343befafacb_prof);

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
