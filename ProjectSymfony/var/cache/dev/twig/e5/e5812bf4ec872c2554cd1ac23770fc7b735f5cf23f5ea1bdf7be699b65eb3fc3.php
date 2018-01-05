<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_815a4121bf0b04d68c404164b75a62e52ea439673b089b7618b9305f1564ca3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815a4121bf0b04d68c404164b75a62e52ea439673b089b7618b9305f1564ca3f->enter($__internal_815a4121bf0b04d68c404164b75a62e52ea439673b089b7618b9305f1564ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3374e7681feb51aac7dfcdbe0beaba30ecc25e98619df5519b8c6f29905fee9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3374e7681feb51aac7dfcdbe0beaba30ecc25e98619df5519b8c6f29905fee9b->enter($__internal_3374e7681feb51aac7dfcdbe0beaba30ecc25e98619df5519b8c6f29905fee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_815a4121bf0b04d68c404164b75a62e52ea439673b089b7618b9305f1564ca3f->leave($__internal_815a4121bf0b04d68c404164b75a62e52ea439673b089b7618b9305f1564ca3f_prof);

        
        $__internal_3374e7681feb51aac7dfcdbe0beaba30ecc25e98619df5519b8c6f29905fee9b->leave($__internal_3374e7681feb51aac7dfcdbe0beaba30ecc25e98619df5519b8c6f29905fee9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_323204f87c07eefbaa99859962656ddc578aacccc861f3ff55aaeddca8f2bd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323204f87c07eefbaa99859962656ddc578aacccc861f3ff55aaeddca8f2bd53->enter($__internal_323204f87c07eefbaa99859962656ddc578aacccc861f3ff55aaeddca8f2bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94678b8a02d929e5198dcb3e144ace0d9c8608db584fbacfb9cdaa60b8c7fb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94678b8a02d929e5198dcb3e144ace0d9c8608db584fbacfb9cdaa60b8c7fb1c->enter($__internal_94678b8a02d929e5198dcb3e144ace0d9c8608db584fbacfb9cdaa60b8c7fb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_94678b8a02d929e5198dcb3e144ace0d9c8608db584fbacfb9cdaa60b8c7fb1c->leave($__internal_94678b8a02d929e5198dcb3e144ace0d9c8608db584fbacfb9cdaa60b8c7fb1c_prof);

        
        $__internal_323204f87c07eefbaa99859962656ddc578aacccc861f3ff55aaeddca8f2bd53->leave($__internal_323204f87c07eefbaa99859962656ddc578aacccc861f3ff55aaeddca8f2bd53_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5a5be9b4b7de1e718b92ef5485dafae3cb02d10e1519abd3e379de659166160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a5be9b4b7de1e718b92ef5485dafae3cb02d10e1519abd3e379de659166160->enter($__internal_a5a5be9b4b7de1e718b92ef5485dafae3cb02d10e1519abd3e379de659166160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe6a1509357b2bd45f070810d1b2856044095bcc2b2673273828708c087538a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6a1509357b2bd45f070810d1b2856044095bcc2b2673273828708c087538a0->enter($__internal_fe6a1509357b2bd45f070810d1b2856044095bcc2b2673273828708c087538a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fe6a1509357b2bd45f070810d1b2856044095bcc2b2673273828708c087538a0->leave($__internal_fe6a1509357b2bd45f070810d1b2856044095bcc2b2673273828708c087538a0_prof);

        
        $__internal_a5a5be9b4b7de1e718b92ef5485dafae3cb02d10e1519abd3e379de659166160->leave($__internal_a5a5be9b4b7de1e718b92ef5485dafae3cb02d10e1519abd3e379de659166160_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_67abd79d0c94207994ef2ac545b84ac6a3531b7ec17f3cf7d03039c3e2d54274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67abd79d0c94207994ef2ac545b84ac6a3531b7ec17f3cf7d03039c3e2d54274->enter($__internal_67abd79d0c94207994ef2ac545b84ac6a3531b7ec17f3cf7d03039c3e2d54274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7771354f59d472e1efcac8bdce3a08992ac38c9437de7062ea48abe72251a6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7771354f59d472e1efcac8bdce3a08992ac38c9437de7062ea48abe72251a6e7->enter($__internal_7771354f59d472e1efcac8bdce3a08992ac38c9437de7062ea48abe72251a6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7771354f59d472e1efcac8bdce3a08992ac38c9437de7062ea48abe72251a6e7->leave($__internal_7771354f59d472e1efcac8bdce3a08992ac38c9437de7062ea48abe72251a6e7_prof);

        
        $__internal_67abd79d0c94207994ef2ac545b84ac6a3531b7ec17f3cf7d03039c3e2d54274->leave($__internal_67abd79d0c94207994ef2ac545b84ac6a3531b7ec17f3cf7d03039c3e2d54274_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/maliouache/1/ProjectSymphony/SymfonyProject/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
