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
        $__internal_a142530aa224a38fc4e3962706343b666e29860bd2c4dd8a1f5f462e1e9ddd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a142530aa224a38fc4e3962706343b666e29860bd2c4dd8a1f5f462e1e9ddd98->enter($__internal_a142530aa224a38fc4e3962706343b666e29860bd2c4dd8a1f5f462e1e9ddd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a96f274571076ae361acc40fd53b1e87cdb70e3902e0415476b4f272c5556e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96f274571076ae361acc40fd53b1e87cdb70e3902e0415476b4f272c5556e23->enter($__internal_a96f274571076ae361acc40fd53b1e87cdb70e3902e0415476b4f272c5556e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a142530aa224a38fc4e3962706343b666e29860bd2c4dd8a1f5f462e1e9ddd98->leave($__internal_a142530aa224a38fc4e3962706343b666e29860bd2c4dd8a1f5f462e1e9ddd98_prof);

        
        $__internal_a96f274571076ae361acc40fd53b1e87cdb70e3902e0415476b4f272c5556e23->leave($__internal_a96f274571076ae361acc40fd53b1e87cdb70e3902e0415476b4f272c5556e23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a431cfb0120d5e6262621b3a97bcc981f9ef25efc528a79f93afa1f3453676f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a431cfb0120d5e6262621b3a97bcc981f9ef25efc528a79f93afa1f3453676f6->enter($__internal_a431cfb0120d5e6262621b3a97bcc981f9ef25efc528a79f93afa1f3453676f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eebd304032683d1021e2237fa5b56947b98030b0da092fb2e37b8988097ff138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebd304032683d1021e2237fa5b56947b98030b0da092fb2e37b8988097ff138->enter($__internal_eebd304032683d1021e2237fa5b56947b98030b0da092fb2e37b8988097ff138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eebd304032683d1021e2237fa5b56947b98030b0da092fb2e37b8988097ff138->leave($__internal_eebd304032683d1021e2237fa5b56947b98030b0da092fb2e37b8988097ff138_prof);

        
        $__internal_a431cfb0120d5e6262621b3a97bcc981f9ef25efc528a79f93afa1f3453676f6->leave($__internal_a431cfb0120d5e6262621b3a97bcc981f9ef25efc528a79f93afa1f3453676f6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6caacc14160098285ab79009fbe3e75104c7efea90aab58d0a3b409f4d2df9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6caacc14160098285ab79009fbe3e75104c7efea90aab58d0a3b409f4d2df9a->enter($__internal_b6caacc14160098285ab79009fbe3e75104c7efea90aab58d0a3b409f4d2df9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa183cc038aff4e8b701ddebce51d0bfcd18743c3c1076dbd0470d4b39754fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa183cc038aff4e8b701ddebce51d0bfcd18743c3c1076dbd0470d4b39754fdb->enter($__internal_aa183cc038aff4e8b701ddebce51d0bfcd18743c3c1076dbd0470d4b39754fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa183cc038aff4e8b701ddebce51d0bfcd18743c3c1076dbd0470d4b39754fdb->leave($__internal_aa183cc038aff4e8b701ddebce51d0bfcd18743c3c1076dbd0470d4b39754fdb_prof);

        
        $__internal_b6caacc14160098285ab79009fbe3e75104c7efea90aab58d0a3b409f4d2df9a->leave($__internal_b6caacc14160098285ab79009fbe3e75104c7efea90aab58d0a3b409f4d2df9a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_df57f078678cc40dec6a85c074c722d00a037f18be9bf93f1685c67cff11a5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df57f078678cc40dec6a85c074c722d00a037f18be9bf93f1685c67cff11a5d9->enter($__internal_df57f078678cc40dec6a85c074c722d00a037f18be9bf93f1685c67cff11a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e039638a2ceaa8740ad68b6f773a4e90f9b49b0acb29cf8c267ed52baaf4c482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e039638a2ceaa8740ad68b6f773a4e90f9b49b0acb29cf8c267ed52baaf4c482->enter($__internal_e039638a2ceaa8740ad68b6f773a4e90f9b49b0acb29cf8c267ed52baaf4c482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e039638a2ceaa8740ad68b6f773a4e90f9b49b0acb29cf8c267ed52baaf4c482->leave($__internal_e039638a2ceaa8740ad68b6f773a4e90f9b49b0acb29cf8c267ed52baaf4c482_prof);

        
        $__internal_df57f078678cc40dec6a85c074c722d00a037f18be9bf93f1685c67cff11a5d9->leave($__internal_df57f078678cc40dec6a85c074c722d00a037f18be9bf93f1685c67cff11a5d9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/maliouache/1/ProjectSymphony/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
