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
        $__internal_72bcf53646a7e9088eae1018fce3c929c36cd364cba924cd61259f3ffb709ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bcf53646a7e9088eae1018fce3c929c36cd364cba924cd61259f3ffb709ad9->enter($__internal_72bcf53646a7e9088eae1018fce3c929c36cd364cba924cd61259f3ffb709ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_703da64a3b1cfc48b6dd9ef2beec5a618be70aa18f7c4c5132e77955286bc06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703da64a3b1cfc48b6dd9ef2beec5a618be70aa18f7c4c5132e77955286bc06c->enter($__internal_703da64a3b1cfc48b6dd9ef2beec5a618be70aa18f7c4c5132e77955286bc06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_72bcf53646a7e9088eae1018fce3c929c36cd364cba924cd61259f3ffb709ad9->leave($__internal_72bcf53646a7e9088eae1018fce3c929c36cd364cba924cd61259f3ffb709ad9_prof);

        
        $__internal_703da64a3b1cfc48b6dd9ef2beec5a618be70aa18f7c4c5132e77955286bc06c->leave($__internal_703da64a3b1cfc48b6dd9ef2beec5a618be70aa18f7c4c5132e77955286bc06c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d26c610426717a7017137e5b54b100bbea9430d75b27ae41332577c95c9891ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26c610426717a7017137e5b54b100bbea9430d75b27ae41332577c95c9891ad->enter($__internal_d26c610426717a7017137e5b54b100bbea9430d75b27ae41332577c95c9891ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7130e5874020777309bd68f358af38d3db720d7e1e43d82e7beb6b9e0b4663d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7130e5874020777309bd68f358af38d3db720d7e1e43d82e7beb6b9e0b4663d9->enter($__internal_7130e5874020777309bd68f358af38d3db720d7e1e43d82e7beb6b9e0b4663d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7130e5874020777309bd68f358af38d3db720d7e1e43d82e7beb6b9e0b4663d9->leave($__internal_7130e5874020777309bd68f358af38d3db720d7e1e43d82e7beb6b9e0b4663d9_prof);

        
        $__internal_d26c610426717a7017137e5b54b100bbea9430d75b27ae41332577c95c9891ad->leave($__internal_d26c610426717a7017137e5b54b100bbea9430d75b27ae41332577c95c9891ad_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fe6a2f2e3c0e53c6a68dbb5a2289f4844e65b2f5c7b8056874d7ae0b0315aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe6a2f2e3c0e53c6a68dbb5a2289f4844e65b2f5c7b8056874d7ae0b0315aea->enter($__internal_6fe6a2f2e3c0e53c6a68dbb5a2289f4844e65b2f5c7b8056874d7ae0b0315aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e179acddd3dc2ebc9e60e5bfa25492566deaa6b19ccecf98394467254a8d69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e179acddd3dc2ebc9e60e5bfa25492566deaa6b19ccecf98394467254a8d69f->enter($__internal_4e179acddd3dc2ebc9e60e5bfa25492566deaa6b19ccecf98394467254a8d69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4e179acddd3dc2ebc9e60e5bfa25492566deaa6b19ccecf98394467254a8d69f->leave($__internal_4e179acddd3dc2ebc9e60e5bfa25492566deaa6b19ccecf98394467254a8d69f_prof);

        
        $__internal_6fe6a2f2e3c0e53c6a68dbb5a2289f4844e65b2f5c7b8056874d7ae0b0315aea->leave($__internal_6fe6a2f2e3c0e53c6a68dbb5a2289f4844e65b2f5c7b8056874d7ae0b0315aea_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd595e13fbf65d8fe1005c163c1848a5da27b8605abeb71ab69a203fd04f2a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd595e13fbf65d8fe1005c163c1848a5da27b8605abeb71ab69a203fd04f2a92->enter($__internal_dd595e13fbf65d8fe1005c163c1848a5da27b8605abeb71ab69a203fd04f2a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1d11ab523ee44e8a189134ee5f5720ff7278f118c801a4817b0ebaa65880234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d11ab523ee44e8a189134ee5f5720ff7278f118c801a4817b0ebaa65880234->enter($__internal_b1d11ab523ee44e8a189134ee5f5720ff7278f118c801a4817b0ebaa65880234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1d11ab523ee44e8a189134ee5f5720ff7278f118c801a4817b0ebaa65880234->leave($__internal_b1d11ab523ee44e8a189134ee5f5720ff7278f118c801a4817b0ebaa65880234_prof);

        
        $__internal_dd595e13fbf65d8fe1005c163c1848a5da27b8605abeb71ab69a203fd04f2a92->leave($__internal_dd595e13fbf65d8fe1005c163c1848a5da27b8605abeb71ab69a203fd04f2a92_prof);

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
