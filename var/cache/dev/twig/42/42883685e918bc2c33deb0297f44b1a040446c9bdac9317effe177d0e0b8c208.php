<?php

/* :internaute:edit.html.twig */
class __TwigTemplate_d27a4026e63cae22759c8d3b136ab364f846292c84fc44f0c8ac1300d6bc81dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":internaute:edit.html.twig", 1);
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
        $__internal_28de7efc26bf3f64e38bb6ede8d66becfc497f6402e5ed7a425053519f1c6df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28de7efc26bf3f64e38bb6ede8d66becfc497f6402e5ed7a425053519f1c6df6->enter($__internal_28de7efc26bf3f64e38bb6ede8d66becfc497f6402e5ed7a425053519f1c6df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":internaute:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28de7efc26bf3f64e38bb6ede8d66becfc497f6402e5ed7a425053519f1c6df6->leave($__internal_28de7efc26bf3f64e38bb6ede8d66becfc497f6402e5ed7a425053519f1c6df6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d928091b70de0ea375f28d67a1c18ad854a2976cabeef0d7623068449a5a4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d928091b70de0ea375f28d67a1c18ad854a2976cabeef0d7623068449a5a4b4->enter($__internal_3d928091b70de0ea375f28d67a1c18ad854a2976cabeef0d7623068449a5a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Internaute edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3d928091b70de0ea375f28d67a1c18ad854a2976cabeef0d7623068449a5a4b4->leave($__internal_3d928091b70de0ea375f28d67a1c18ad854a2976cabeef0d7623068449a5a4b4_prof);

    }

    public function getTemplateName()
    {
        return ":internaute:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Internaute edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('internaute_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":internaute:edit.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/edit.html.twig");
    }
}
