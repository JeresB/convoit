<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_7f2e3c0b530367439deeb9a616ac126120bd43aa2f05a73a2a61014a594d2f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2e3c0b530367439deeb9a616ac126120bd43aa2f05a73a2a61014a594d2f1a->enter($__internal_7f2e3c0b530367439deeb9a616ac126120bd43aa2f05a73a2a61014a594d2f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7f2e3c0b530367439deeb9a616ac126120bd43aa2f05a73a2a61014a594d2f1a->leave($__internal_7f2e3c0b530367439deeb9a616ac126120bd43aa2f05a73a2a61014a594d2f1a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_411edf3c1fa8031bbdccd55453399716c7f5f63db4ff2524bf1215ced7c6573c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411edf3c1fa8031bbdccd55453399716c7f5f63db4ff2524bf1215ced7c6573c->enter($__internal_411edf3c1fa8031bbdccd55453399716c7f5f63db4ff2524bf1215ced7c6573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_411edf3c1fa8031bbdccd55453399716c7f5f63db4ff2524bf1215ced7c6573c->leave($__internal_411edf3c1fa8031bbdccd55453399716c7f5f63db4ff2524bf1215ced7c6573c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_feb7c7fe73c2eff0a93e9e60c9326d70be1e5843727bcaed6283fbb2c6b38e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb7c7fe73c2eff0a93e9e60c9326d70be1e5843727bcaed6283fbb2c6b38e54->enter($__internal_feb7c7fe73c2eff0a93e9e60c9326d70be1e5843727bcaed6283fbb2c6b38e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_feb7c7fe73c2eff0a93e9e60c9326d70be1e5843727bcaed6283fbb2c6b38e54->leave($__internal_feb7c7fe73c2eff0a93e9e60c9326d70be1e5843727bcaed6283fbb2c6b38e54_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fd3eb7f3f93abf28ca168977d3ed0df961db2bf71f6dc424608855d4084fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fd3eb7f3f93abf28ca168977d3ed0df961db2bf71f6dc424608855d4084fdd->enter($__internal_84fd3eb7f3f93abf28ca168977d3ed0df961db2bf71f6dc424608855d4084fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84fd3eb7f3f93abf28ca168977d3ed0df961db2bf71f6dc424608855d4084fdd->leave($__internal_84fd3eb7f3f93abf28ca168977d3ed0df961db2bf71f6dc424608855d4084fdd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9590914cbd8707adde3b78ed044dd95fa5b97b0011f2a37d55ac830c549cca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9590914cbd8707adde3b78ed044dd95fa5b97b0011f2a37d55ac830c549cca6->enter($__internal_f9590914cbd8707adde3b78ed044dd95fa5b97b0011f2a37d55ac830c549cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9590914cbd8707adde3b78ed044dd95fa5b97b0011f2a37d55ac830c549cca6->leave($__internal_f9590914cbd8707adde3b78ed044dd95fa5b97b0011f2a37d55ac830c549cca6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "::base.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/base.html.twig");
    }
}
