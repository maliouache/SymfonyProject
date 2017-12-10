<?php

/* base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01906ab3b5c272808be42b5e7ce314d50bc4d686d84266d8ac29fbbc05219a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01906ab3b5c272808be42b5e7ce314d50bc4d686d84266d8ac29fbbc05219a16->enter($__internal_01906ab3b5c272808be42b5e7ce314d50bc4d686d84266d8ac29fbbc05219a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ec3e5d473333b98a90d2c879552fdd5ccbeaf9a750e1807b6884ea4f1fd68f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3e5d473333b98a90d2c879552fdd5ccbeaf9a750e1807b6884ea4f1fd68f53->enter($__internal_ec3e5d473333b98a90d2c879552fdd5ccbeaf9a750e1807b6884ea4f1fd68f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_01906ab3b5c272808be42b5e7ce314d50bc4d686d84266d8ac29fbbc05219a16->leave($__internal_01906ab3b5c272808be42b5e7ce314d50bc4d686d84266d8ac29fbbc05219a16_prof);

        
        $__internal_ec3e5d473333b98a90d2c879552fdd5ccbeaf9a750e1807b6884ea4f1fd68f53->leave($__internal_ec3e5d473333b98a90d2c879552fdd5ccbeaf9a750e1807b6884ea4f1fd68f53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d753a325208340f414e5baf14091c08e9a32fa97e194ab6281ed806384fb10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d753a325208340f414e5baf14091c08e9a32fa97e194ab6281ed806384fb10a->enter($__internal_5d753a325208340f414e5baf14091c08e9a32fa97e194ab6281ed806384fb10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f50a9766a6438154907e84946aa79a1c4688a29e0aca80c7324ee06ba3749692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50a9766a6438154907e84946aa79a1c4688a29e0aca80c7324ee06ba3749692->enter($__internal_f50a9766a6438154907e84946aa79a1c4688a29e0aca80c7324ee06ba3749692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f50a9766a6438154907e84946aa79a1c4688a29e0aca80c7324ee06ba3749692->leave($__internal_f50a9766a6438154907e84946aa79a1c4688a29e0aca80c7324ee06ba3749692_prof);

        
        $__internal_5d753a325208340f414e5baf14091c08e9a32fa97e194ab6281ed806384fb10a->leave($__internal_5d753a325208340f414e5baf14091c08e9a32fa97e194ab6281ed806384fb10a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a899e524a1d2f95a488f42cc90ea96911afa312beb5f322e706fdfbba3b38986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a899e524a1d2f95a488f42cc90ea96911afa312beb5f322e706fdfbba3b38986->enter($__internal_a899e524a1d2f95a488f42cc90ea96911afa312beb5f322e706fdfbba3b38986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c30ce10ab16e8108ad3739d7fa8afa469ede78052e1131a685f685659ed30b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30ce10ab16e8108ad3739d7fa8afa469ede78052e1131a685f685659ed30b58->enter($__internal_c30ce10ab16e8108ad3739d7fa8afa469ede78052e1131a685f685659ed30b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c30ce10ab16e8108ad3739d7fa8afa469ede78052e1131a685f685659ed30b58->leave($__internal_c30ce10ab16e8108ad3739d7fa8afa469ede78052e1131a685f685659ed30b58_prof);

        
        $__internal_a899e524a1d2f95a488f42cc90ea96911afa312beb5f322e706fdfbba3b38986->leave($__internal_a899e524a1d2f95a488f42cc90ea96911afa312beb5f322e706fdfbba3b38986_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed1755d5cd948a08e0e26ef62d2f3d89a32e85c19966e1e93b5fa8ff35644d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed1755d5cd948a08e0e26ef62d2f3d89a32e85c19966e1e93b5fa8ff35644d0->enter($__internal_1ed1755d5cd948a08e0e26ef62d2f3d89a32e85c19966e1e93b5fa8ff35644d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe6011bba6c2487e9283016cdfb1131c5d0a68d55849d4374278e39169091739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6011bba6c2487e9283016cdfb1131c5d0a68d55849d4374278e39169091739->enter($__internal_fe6011bba6c2487e9283016cdfb1131c5d0a68d55849d4374278e39169091739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe6011bba6c2487e9283016cdfb1131c5d0a68d55849d4374278e39169091739->leave($__internal_fe6011bba6c2487e9283016cdfb1131c5d0a68d55849d4374278e39169091739_prof);

        
        $__internal_1ed1755d5cd948a08e0e26ef62d2f3d89a32e85c19966e1e93b5fa8ff35644d0->leave($__internal_1ed1755d5cd948a08e0e26ef62d2f3d89a32e85c19966e1e93b5fa8ff35644d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19a1b7d66ca71c552bb8778dd01f121ce7028eba914da963d472dcee83c854e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a1b7d66ca71c552bb8778dd01f121ce7028eba914da963d472dcee83c854e4->enter($__internal_19a1b7d66ca71c552bb8778dd01f121ce7028eba914da963d472dcee83c854e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86ffe599ed33da42af0be04418b112ae528f5301497a1874954e51dfab5b3eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ffe599ed33da42af0be04418b112ae528f5301497a1874954e51dfab5b3eac->enter($__internal_86ffe599ed33da42af0be04418b112ae528f5301497a1874954e51dfab5b3eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86ffe599ed33da42af0be04418b112ae528f5301497a1874954e51dfab5b3eac->leave($__internal_86ffe599ed33da42af0be04418b112ae528f5301497a1874954e51dfab5b3eac_prof);

        
        $__internal_19a1b7d66ca71c552bb8778dd01f121ce7028eba914da963d472dcee83c854e4->leave($__internal_19a1b7d66ca71c552bb8778dd01f121ce7028eba914da963d472dcee83c854e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/maliouache/1/ProjectSymphony/ProjectSymfony/app/Resources/views/base.html.twig");
    }
}
