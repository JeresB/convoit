<?php

/* :ville:new.html.twig */
class __TwigTemplate_b688c2def2d3f0b12eef090b4aa74c023c07edaad89ed50bd865a07a9b5d7de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":ville:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3902bb4cc014a3099a5fa14166db33e8bf7838e2c59cdf02051c07c5721f9078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3902bb4cc014a3099a5fa14166db33e8bf7838e2c59cdf02051c07c5721f9078->enter($__internal_3902bb4cc014a3099a5fa14166db33e8bf7838e2c59cdf02051c07c5721f9078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3902bb4cc014a3099a5fa14166db33e8bf7838e2c59cdf02051c07c5721f9078->leave($__internal_3902bb4cc014a3099a5fa14166db33e8bf7838e2c59cdf02051c07c5721f9078_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d7cef81124d5c9bf646ce8a87d3b338afbc35bf2a59acdf288e32c1312f9300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7cef81124d5c9bf646ce8a87d3b338afbc35bf2a59acdf288e32c1312f9300->enter($__internal_7d7cef81124d5c9bf646ce8a87d3b338afbc35bf2a59acdf288e32c1312f9300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Ville creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7d7cef81124d5c9bf646ce8a87d3b338afbc35bf2a59acdf288e32c1312f9300->leave($__internal_7d7cef81124d5c9bf646ce8a87d3b338afbc35bf2a59acdf288e32c1312f9300_prof);

    }

    public function getTemplateName()
    {
        return ":ville:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle:Default:layout.html.twig' %}

{% block content %}
    <h1>Ville creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":ville:new.html.twig", "/home/ubuntu/convoit/app/Resources/views/ville/new.html.twig");
    }
}
