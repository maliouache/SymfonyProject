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
        $__internal_3d9eb85a308c6b2fd6bf83a9f8f56b6513abcb2e9f836c5c36355c066b80465a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9eb85a308c6b2fd6bf83a9f8f56b6513abcb2e9f836c5c36355c066b80465a->enter($__internal_3d9eb85a308c6b2fd6bf83a9f8f56b6513abcb2e9f836c5c36355c066b80465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bbaedb423512d405dc0e9002093990435f53160894936b002a4fa1faf5214c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbaedb423512d405dc0e9002093990435f53160894936b002a4fa1faf5214c86->enter($__internal_bbaedb423512d405dc0e9002093990435f53160894936b002a4fa1faf5214c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9eb85a308c6b2fd6bf83a9f8f56b6513abcb2e9f836c5c36355c066b80465a->leave($__internal_3d9eb85a308c6b2fd6bf83a9f8f56b6513abcb2e9f836c5c36355c066b80465a_prof);

        
        $__internal_bbaedb423512d405dc0e9002093990435f53160894936b002a4fa1faf5214c86->leave($__internal_bbaedb423512d405dc0e9002093990435f53160894936b002a4fa1faf5214c86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58814dc936553b7addc52d4191193cede206d7e2efecc9348b9dc7888bb4fe8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58814dc936553b7addc52d4191193cede206d7e2efecc9348b9dc7888bb4fe8c->enter($__internal_58814dc936553b7addc52d4191193cede206d7e2efecc9348b9dc7888bb4fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f4a41dca5f67c174aa7ebbcc77e61fbe9ce74baf3c1190a562939c063c8e035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4a41dca5f67c174aa7ebbcc77e61fbe9ce74baf3c1190a562939c063c8e035->enter($__internal_9f4a41dca5f67c174aa7ebbcc77e61fbe9ce74baf3c1190a562939c063c8e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9f4a41dca5f67c174aa7ebbcc77e61fbe9ce74baf3c1190a562939c063c8e035->leave($__internal_9f4a41dca5f67c174aa7ebbcc77e61fbe9ce74baf3c1190a562939c063c8e035_prof);

        
        $__internal_58814dc936553b7addc52d4191193cede206d7e2efecc9348b9dc7888bb4fe8c->leave($__internal_58814dc936553b7addc52d4191193cede206d7e2efecc9348b9dc7888bb4fe8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a4c6ea19780532fbbdd5bd638718304423f5ea7df15a3118a8ec2648067317b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4c6ea19780532fbbdd5bd638718304423f5ea7df15a3118a8ec2648067317b->enter($__internal_2a4c6ea19780532fbbdd5bd638718304423f5ea7df15a3118a8ec2648067317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4d241f1e828cbbc912d567719e42b6f4017cdf89b5ecca1e8b196f112148b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d241f1e828cbbc912d567719e42b6f4017cdf89b5ecca1e8b196f112148b86->enter($__internal_d4d241f1e828cbbc912d567719e42b6f4017cdf89b5ecca1e8b196f112148b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d4d241f1e828cbbc912d567719e42b6f4017cdf89b5ecca1e8b196f112148b86->leave($__internal_d4d241f1e828cbbc912d567719e42b6f4017cdf89b5ecca1e8b196f112148b86_prof);

        
        $__internal_2a4c6ea19780532fbbdd5bd638718304423f5ea7df15a3118a8ec2648067317b->leave($__internal_2a4c6ea19780532fbbdd5bd638718304423f5ea7df15a3118a8ec2648067317b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7299e732a5745b37a6e1730a88b15d87404f4a0312737b8376f4473db3872492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7299e732a5745b37a6e1730a88b15d87404f4a0312737b8376f4473db3872492->enter($__internal_7299e732a5745b37a6e1730a88b15d87404f4a0312737b8376f4473db3872492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d4f660b127893caa4e238e8e065a06eae664af7887d15b76afcc14324f1b30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4f660b127893caa4e238e8e065a06eae664af7887d15b76afcc14324f1b30c->enter($__internal_9d4f660b127893caa4e238e8e065a06eae664af7887d15b76afcc14324f1b30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9d4f660b127893caa4e238e8e065a06eae664af7887d15b76afcc14324f1b30c->leave($__internal_9d4f660b127893caa4e238e8e065a06eae664af7887d15b76afcc14324f1b30c_prof);

        
        $__internal_7299e732a5745b37a6e1730a88b15d87404f4a0312737b8376f4473db3872492->leave($__internal_7299e732a5745b37a6e1730a88b15d87404f4a0312737b8376f4473db3872492_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/maliouache/1/ProjectSymphony/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
