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
        $__internal_a725ac77549cc0d5ef7415ea6974c1bad39bf94ea003f1fa6fdf87b20bf8dc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a725ac77549cc0d5ef7415ea6974c1bad39bf94ea003f1fa6fdf87b20bf8dc9d->enter($__internal_a725ac77549cc0d5ef7415ea6974c1bad39bf94ea003f1fa6fdf87b20bf8dc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_abfbbb1141fd3f27fa068e8080989ccd83d8b2d827c50f12150625237071c634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfbbb1141fd3f27fa068e8080989ccd83d8b2d827c50f12150625237071c634->enter($__internal_abfbbb1141fd3f27fa068e8080989ccd83d8b2d827c50f12150625237071c634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a725ac77549cc0d5ef7415ea6974c1bad39bf94ea003f1fa6fdf87b20bf8dc9d->leave($__internal_a725ac77549cc0d5ef7415ea6974c1bad39bf94ea003f1fa6fdf87b20bf8dc9d_prof);

        
        $__internal_abfbbb1141fd3f27fa068e8080989ccd83d8b2d827c50f12150625237071c634->leave($__internal_abfbbb1141fd3f27fa068e8080989ccd83d8b2d827c50f12150625237071c634_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ab2be36b28ea8979b8580f148b1257fb6e1337c7afc90c8b41de0a19c4fbb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab2be36b28ea8979b8580f148b1257fb6e1337c7afc90c8b41de0a19c4fbb3e->enter($__internal_6ab2be36b28ea8979b8580f148b1257fb6e1337c7afc90c8b41de0a19c4fbb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c359bdf55d2de42c8d985b806afa1c2ca81d05c9b6ea474d55f050d8e845dcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c359bdf55d2de42c8d985b806afa1c2ca81d05c9b6ea474d55f050d8e845dcf1->enter($__internal_c359bdf55d2de42c8d985b806afa1c2ca81d05c9b6ea474d55f050d8e845dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c359bdf55d2de42c8d985b806afa1c2ca81d05c9b6ea474d55f050d8e845dcf1->leave($__internal_c359bdf55d2de42c8d985b806afa1c2ca81d05c9b6ea474d55f050d8e845dcf1_prof);

        
        $__internal_6ab2be36b28ea8979b8580f148b1257fb6e1337c7afc90c8b41de0a19c4fbb3e->leave($__internal_6ab2be36b28ea8979b8580f148b1257fb6e1337c7afc90c8b41de0a19c4fbb3e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_882155ef27f109193d00297a40ef8a2f3a5ac4e3a934776f3bfb7a311497aa0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882155ef27f109193d00297a40ef8a2f3a5ac4e3a934776f3bfb7a311497aa0a->enter($__internal_882155ef27f109193d00297a40ef8a2f3a5ac4e3a934776f3bfb7a311497aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f55a35b3b661de9fd616e2dea9e94f1c14d1e0781ed295b4c88d1d6c0ea2841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f55a35b3b661de9fd616e2dea9e94f1c14d1e0781ed295b4c88d1d6c0ea2841->enter($__internal_0f55a35b3b661de9fd616e2dea9e94f1c14d1e0781ed295b4c88d1d6c0ea2841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0f55a35b3b661de9fd616e2dea9e94f1c14d1e0781ed295b4c88d1d6c0ea2841->leave($__internal_0f55a35b3b661de9fd616e2dea9e94f1c14d1e0781ed295b4c88d1d6c0ea2841_prof);

        
        $__internal_882155ef27f109193d00297a40ef8a2f3a5ac4e3a934776f3bfb7a311497aa0a->leave($__internal_882155ef27f109193d00297a40ef8a2f3a5ac4e3a934776f3bfb7a311497aa0a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_68086e556cb25c76b9de952f9da1b55f753b1d68fbab26e905a7434e9ec7d632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68086e556cb25c76b9de952f9da1b55f753b1d68fbab26e905a7434e9ec7d632->enter($__internal_68086e556cb25c76b9de952f9da1b55f753b1d68fbab26e905a7434e9ec7d632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc7f1cd66c44e594009dd9178e305abf40454261c012a366504cd8b1612d7792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7f1cd66c44e594009dd9178e305abf40454261c012a366504cd8b1612d7792->enter($__internal_dc7f1cd66c44e594009dd9178e305abf40454261c012a366504cd8b1612d7792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc7f1cd66c44e594009dd9178e305abf40454261c012a366504cd8b1612d7792->leave($__internal_dc7f1cd66c44e594009dd9178e305abf40454261c012a366504cd8b1612d7792_prof);

        
        $__internal_68086e556cb25c76b9de952f9da1b55f753b1d68fbab26e905a7434e9ec7d632->leave($__internal_68086e556cb25c76b9de952f9da1b55f753b1d68fbab26e905a7434e9ec7d632_prof);

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
", "@Twig/layout.html.twig", "/home/maliouache/1/ProjectSymphony/ProjectSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
