<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d690bb4fd86a345657d753839857a934ce276e7a0460e9fc39144ec7c748268b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d690bb4fd86a345657d753839857a934ce276e7a0460e9fc39144ec7c748268b->enter($__internal_d690bb4fd86a345657d753839857a934ce276e7a0460e9fc39144ec7c748268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d690bb4fd86a345657d753839857a934ce276e7a0460e9fc39144ec7c748268b->leave($__internal_d690bb4fd86a345657d753839857a934ce276e7a0460e9fc39144ec7c748268b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9eba81036c443f5e4d0eb22c165c858cc64f3f085765c8e9782231a80b17648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9eba81036c443f5e4d0eb22c165c858cc64f3f085765c8e9782231a80b17648->enter($__internal_f9eba81036c443f5e4d0eb22c165c858cc64f3f085765c8e9782231a80b17648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9eba81036c443f5e4d0eb22c165c858cc64f3f085765c8e9782231a80b17648->leave($__internal_f9eba81036c443f5e4d0eb22c165c858cc64f3f085765c8e9782231a80b17648_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc03d996edf1f65cdeaa2ef68ba4040d8520a1a92313b7fe79a9c3d87d89b720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc03d996edf1f65cdeaa2ef68ba4040d8520a1a92313b7fe79a9c3d87d89b720->enter($__internal_fc03d996edf1f65cdeaa2ef68ba4040d8520a1a92313b7fe79a9c3d87d89b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc03d996edf1f65cdeaa2ef68ba4040d8520a1a92313b7fe79a9c3d87d89b720->leave($__internal_fc03d996edf1f65cdeaa2ef68ba4040d8520a1a92313b7fe79a9c3d87d89b720_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_01d96307056fda499b9fc2d82150291a1f8ca3cb62d97616fb81cffdd084da39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d96307056fda499b9fc2d82150291a1f8ca3cb62d97616fb81cffdd084da39->enter($__internal_01d96307056fda499b9fc2d82150291a1f8ca3cb62d97616fb81cffdd084da39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_01d96307056fda499b9fc2d82150291a1f8ca3cb62d97616fb81cffdd084da39->leave($__internal_01d96307056fda499b9fc2d82150291a1f8ca3cb62d97616fb81cffdd084da39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
