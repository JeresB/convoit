<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_55e1140b0cd88ec9500d891ea309288d15484a3ab5d478d2a8d15320e3aaeec7 extends Twig_Template
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
        $__internal_8e1c37289dc0228b322b8e6fb7d2fc231fd72419d9147f0c17571a29deee0d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1c37289dc0228b322b8e6fb7d2fc231fd72419d9147f0c17571a29deee0d4b->enter($__internal_8e1c37289dc0228b322b8e6fb7d2fc231fd72419d9147f0c17571a29deee0d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1c37289dc0228b322b8e6fb7d2fc231fd72419d9147f0c17571a29deee0d4b->leave($__internal_8e1c37289dc0228b322b8e6fb7d2fc231fd72419d9147f0c17571a29deee0d4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfde982020ceae29bf8454ca07d58f895dc2dc64d828967cffeb82e06a5e4479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfde982020ceae29bf8454ca07d58f895dc2dc64d828967cffeb82e06a5e4479->enter($__internal_cfde982020ceae29bf8454ca07d58f895dc2dc64d828967cffeb82e06a5e4479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cfde982020ceae29bf8454ca07d58f895dc2dc64d828967cffeb82e06a5e4479->leave($__internal_cfde982020ceae29bf8454ca07d58f895dc2dc64d828967cffeb82e06a5e4479_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be9a1409e1fbfd0432aa4f712758eecf060b339029b65f90630fdc23856b23e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9a1409e1fbfd0432aa4f712758eecf060b339029b65f90630fdc23856b23e0->enter($__internal_be9a1409e1fbfd0432aa4f712758eecf060b339029b65f90630fdc23856b23e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be9a1409e1fbfd0432aa4f712758eecf060b339029b65f90630fdc23856b23e0->leave($__internal_be9a1409e1fbfd0432aa4f712758eecf060b339029b65f90630fdc23856b23e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9825cc90e5eb83e2f9e9ecf37acea6a36d3b05210e8fd70ab4e4ecd7540eac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9825cc90e5eb83e2f9e9ecf37acea6a36d3b05210e8fd70ab4e4ecd7540eac2->enter($__internal_c9825cc90e5eb83e2f9e9ecf37acea6a36d3b05210e8fd70ab4e4ecd7540eac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c9825cc90e5eb83e2f9e9ecf37acea6a36d3b05210e8fd70ab4e4ecd7540eac2->leave($__internal_c9825cc90e5eb83e2f9e9ecf37acea6a36d3b05210e8fd70ab4e4ecd7540eac2_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
