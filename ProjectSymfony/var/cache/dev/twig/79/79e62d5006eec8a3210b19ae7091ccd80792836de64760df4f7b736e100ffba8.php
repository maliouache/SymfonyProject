<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebe63839c357bf2a4b4cc9e9d68b4fcc7649feb1c0308a19886e14668bc207ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe63839c357bf2a4b4cc9e9d68b4fcc7649feb1c0308a19886e14668bc207ef->enter($__internal_ebe63839c357bf2a4b4cc9e9d68b4fcc7649feb1c0308a19886e14668bc207ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_293857188b2fa124eb4691ea97d02513531486791dc9ab3eec5ebdb7bc16f1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293857188b2fa124eb4691ea97d02513531486791dc9ab3eec5ebdb7bc16f1d3->enter($__internal_293857188b2fa124eb4691ea97d02513531486791dc9ab3eec5ebdb7bc16f1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe63839c357bf2a4b4cc9e9d68b4fcc7649feb1c0308a19886e14668bc207ef->leave($__internal_ebe63839c357bf2a4b4cc9e9d68b4fcc7649feb1c0308a19886e14668bc207ef_prof);

        
        $__internal_293857188b2fa124eb4691ea97d02513531486791dc9ab3eec5ebdb7bc16f1d3->leave($__internal_293857188b2fa124eb4691ea97d02513531486791dc9ab3eec5ebdb7bc16f1d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fa2941a19d2caf73cf1eb95e7ca88f00645c734876242255d93d65b91bdf7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa2941a19d2caf73cf1eb95e7ca88f00645c734876242255d93d65b91bdf7d9->enter($__internal_0fa2941a19d2caf73cf1eb95e7ca88f00645c734876242255d93d65b91bdf7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31632dbe1ea6d6593fcc0041c9512b6e31a885659e76a45d48bd6ef3d4d89a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31632dbe1ea6d6593fcc0041c9512b6e31a885659e76a45d48bd6ef3d4d89a2a->enter($__internal_31632dbe1ea6d6593fcc0041c9512b6e31a885659e76a45d48bd6ef3d4d89a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_31632dbe1ea6d6593fcc0041c9512b6e31a885659e76a45d48bd6ef3d4d89a2a->leave($__internal_31632dbe1ea6d6593fcc0041c9512b6e31a885659e76a45d48bd6ef3d4d89a2a_prof);

        
        $__internal_0fa2941a19d2caf73cf1eb95e7ca88f00645c734876242255d93d65b91bdf7d9->leave($__internal_0fa2941a19d2caf73cf1eb95e7ca88f00645c734876242255d93d65b91bdf7d9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_871d4396b85e37a52383e4ecefc6b605b2ec99858b08c4a831c5d534618c1084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871d4396b85e37a52383e4ecefc6b605b2ec99858b08c4a831c5d534618c1084->enter($__internal_871d4396b85e37a52383e4ecefc6b605b2ec99858b08c4a831c5d534618c1084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a71be6f781d65e987af2aaaa2201715d2dc5822082e85e0bce7e977784f4b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a71be6f781d65e987af2aaaa2201715d2dc5822082e85e0bce7e977784f4b5b->enter($__internal_6a71be6f781d65e987af2aaaa2201715d2dc5822082e85e0bce7e977784f4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a71be6f781d65e987af2aaaa2201715d2dc5822082e85e0bce7e977784f4b5b->leave($__internal_6a71be6f781d65e987af2aaaa2201715d2dc5822082e85e0bce7e977784f4b5b_prof);

        
        $__internal_871d4396b85e37a52383e4ecefc6b605b2ec99858b08c4a831c5d534618c1084->leave($__internal_871d4396b85e37a52383e4ecefc6b605b2ec99858b08c4a831c5d534618c1084_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_050606792c0b1f719fdcb5d0965c59ea25bfc15a7f433377dd22f247b947cd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050606792c0b1f719fdcb5d0965c59ea25bfc15a7f433377dd22f247b947cd17->enter($__internal_050606792c0b1f719fdcb5d0965c59ea25bfc15a7f433377dd22f247b947cd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e540e29c5ebd7d801105799161b4982cf2242210b543a1769206797b544e92d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e540e29c5ebd7d801105799161b4982cf2242210b543a1769206797b544e92d5->enter($__internal_e540e29c5ebd7d801105799161b4982cf2242210b543a1769206797b544e92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e540e29c5ebd7d801105799161b4982cf2242210b543a1769206797b544e92d5->leave($__internal_e540e29c5ebd7d801105799161b4982cf2242210b543a1769206797b544e92d5_prof);

        
        $__internal_050606792c0b1f719fdcb5d0965c59ea25bfc15a7f433377dd22f247b947cd17->leave($__internal_050606792c0b1f719fdcb5d0965c59ea25bfc15a7f433377dd22f247b947cd17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
