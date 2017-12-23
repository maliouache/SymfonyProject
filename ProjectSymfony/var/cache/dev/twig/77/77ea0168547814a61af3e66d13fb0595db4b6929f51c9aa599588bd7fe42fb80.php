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
        $__internal_cbca9ec87cba4839647838460e67fef5b1df39466ed70f58de620f9ef20c78f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbca9ec87cba4839647838460e67fef5b1df39466ed70f58de620f9ef20c78f1->enter($__internal_cbca9ec87cba4839647838460e67fef5b1df39466ed70f58de620f9ef20c78f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7260d164a740a3c1c02362d940299ae7776914d47658d9e49716e82a4a0fdc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7260d164a740a3c1c02362d940299ae7776914d47658d9e49716e82a4a0fdc24->enter($__internal_7260d164a740a3c1c02362d940299ae7776914d47658d9e49716e82a4a0fdc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbca9ec87cba4839647838460e67fef5b1df39466ed70f58de620f9ef20c78f1->leave($__internal_cbca9ec87cba4839647838460e67fef5b1df39466ed70f58de620f9ef20c78f1_prof);

        
        $__internal_7260d164a740a3c1c02362d940299ae7776914d47658d9e49716e82a4a0fdc24->leave($__internal_7260d164a740a3c1c02362d940299ae7776914d47658d9e49716e82a4a0fdc24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e500524111f6d5d7e67aff6f8f59f5b545b58fa23f643add476bbe4d0a0ddb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e500524111f6d5d7e67aff6f8f59f5b545b58fa23f643add476bbe4d0a0ddb0->enter($__internal_9e500524111f6d5d7e67aff6f8f59f5b545b58fa23f643add476bbe4d0a0ddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_446ed47e619b2676ded4bbeb327ecbb3bf367ef01cc7d5146302680dcea4a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446ed47e619b2676ded4bbeb327ecbb3bf367ef01cc7d5146302680dcea4a3db->enter($__internal_446ed47e619b2676ded4bbeb327ecbb3bf367ef01cc7d5146302680dcea4a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_446ed47e619b2676ded4bbeb327ecbb3bf367ef01cc7d5146302680dcea4a3db->leave($__internal_446ed47e619b2676ded4bbeb327ecbb3bf367ef01cc7d5146302680dcea4a3db_prof);

        
        $__internal_9e500524111f6d5d7e67aff6f8f59f5b545b58fa23f643add476bbe4d0a0ddb0->leave($__internal_9e500524111f6d5d7e67aff6f8f59f5b545b58fa23f643add476bbe4d0a0ddb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17b23749ecbb0a3006ec161f5e7c69e8e54b6f278d4e9cf80d5622ec0ef5e4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b23749ecbb0a3006ec161f5e7c69e8e54b6f278d4e9cf80d5622ec0ef5e4f1->enter($__internal_17b23749ecbb0a3006ec161f5e7c69e8e54b6f278d4e9cf80d5622ec0ef5e4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_42ad2089285ea5c70ab4b49b388b9ef0bdbc92b4c5c9bcb9423ce4e99b9dab9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ad2089285ea5c70ab4b49b388b9ef0bdbc92b4c5c9bcb9423ce4e99b9dab9e->enter($__internal_42ad2089285ea5c70ab4b49b388b9ef0bdbc92b4c5c9bcb9423ce4e99b9dab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42ad2089285ea5c70ab4b49b388b9ef0bdbc92b4c5c9bcb9423ce4e99b9dab9e->leave($__internal_42ad2089285ea5c70ab4b49b388b9ef0bdbc92b4c5c9bcb9423ce4e99b9dab9e_prof);

        
        $__internal_17b23749ecbb0a3006ec161f5e7c69e8e54b6f278d4e9cf80d5622ec0ef5e4f1->leave($__internal_17b23749ecbb0a3006ec161f5e7c69e8e54b6f278d4e9cf80d5622ec0ef5e4f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0de3b1eb8a5c9a5e23273ae1361b859fa76020a6d33ab3f366277b7ed1d9cdf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de3b1eb8a5c9a5e23273ae1361b859fa76020a6d33ab3f366277b7ed1d9cdf3->enter($__internal_0de3b1eb8a5c9a5e23273ae1361b859fa76020a6d33ab3f366277b7ed1d9cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ad41272be51b799ca7439bba57e1984d0a95b210c26f06b673aef6a68630f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad41272be51b799ca7439bba57e1984d0a95b210c26f06b673aef6a68630f8f->enter($__internal_1ad41272be51b799ca7439bba57e1984d0a95b210c26f06b673aef6a68630f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ad41272be51b799ca7439bba57e1984d0a95b210c26f06b673aef6a68630f8f->leave($__internal_1ad41272be51b799ca7439bba57e1984d0a95b210c26f06b673aef6a68630f8f_prof);

        
        $__internal_0de3b1eb8a5c9a5e23273ae1361b859fa76020a6d33ab3f366277b7ed1d9cdf3->leave($__internal_0de3b1eb8a5c9a5e23273ae1361b859fa76020a6d33ab3f366277b7ed1d9cdf3_prof);

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
