<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a88fa791bc15bb1e4c84c6f6496702daaf6a064a6d2a5f782709f70a84c7d491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88fa791bc15bb1e4c84c6f6496702daaf6a064a6d2a5f782709f70a84c7d491->enter($__internal_a88fa791bc15bb1e4c84c6f6496702daaf6a064a6d2a5f782709f70a84c7d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88fa791bc15bb1e4c84c6f6496702daaf6a064a6d2a5f782709f70a84c7d491->leave($__internal_a88fa791bc15bb1e4c84c6f6496702daaf6a064a6d2a5f782709f70a84c7d491_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f1847205d8a7cf5463973bf70144d44f195d71d3b61b13d5b58664de11b2a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1847205d8a7cf5463973bf70144d44f195d71d3b61b13d5b58664de11b2a5f->enter($__internal_9f1847205d8a7cf5463973bf70144d44f195d71d3b61b13d5b58664de11b2a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f1847205d8a7cf5463973bf70144d44f195d71d3b61b13d5b58664de11b2a5f->leave($__internal_9f1847205d8a7cf5463973bf70144d44f195d71d3b61b13d5b58664de11b2a5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01263920b0af1e7567cecfdc753df751ac6ff174d879fa134f2ed318da2a19fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01263920b0af1e7567cecfdc753df751ac6ff174d879fa134f2ed318da2a19fe->enter($__internal_01263920b0af1e7567cecfdc753df751ac6ff174d879fa134f2ed318da2a19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_01263920b0af1e7567cecfdc753df751ac6ff174d879fa134f2ed318da2a19fe->leave($__internal_01263920b0af1e7567cecfdc753df751ac6ff174d879fa134f2ed318da2a19fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
