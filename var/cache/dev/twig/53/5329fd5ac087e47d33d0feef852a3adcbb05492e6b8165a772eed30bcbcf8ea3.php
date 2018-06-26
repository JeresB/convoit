<?php

/* :ville:show.html.twig */
class __TwigTemplate_dd8c9716e56d7b254c2ea9422d969e5d6ca728c72ef79defd263bd9d91aa352f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":ville:show.html.twig", 1);
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
        $__internal_9788fd238cc4a905ccf932c91481caa2abd104746e7b9f818dc27137d13d047b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9788fd238cc4a905ccf932c91481caa2abd104746e7b9f818dc27137d13d047b->enter($__internal_9788fd238cc4a905ccf932c91481caa2abd104746e7b9f818dc27137d13d047b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9788fd238cc4a905ccf932c91481caa2abd104746e7b9f818dc27137d13d047b->leave($__internal_9788fd238cc4a905ccf932c91481caa2abd104746e7b9f818dc27137d13d047b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f354bfefdf70f6fc2961c4854506f172365acc05ea532527c622f18aff699601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f354bfefdf70f6fc2961c4854506f172365acc05ea532527c622f18aff699601->enter($__internal_f354bfefdf70f6fc2961c4854506f172365acc05ea532527c622f18aff699601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Ville</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "cp", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f354bfefdf70f6fc2961c4854506f172365acc05ea532527c622f18aff699601->leave($__internal_f354bfefdf70f6fc2961c4854506f172365acc05ea532527c622f18aff699601_prof);

    }

    public function getTemplateName()
    {
        return ":ville:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Ville</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ville.id }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ ville.ville }}</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>{{ ville.cp }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":ville:show.html.twig", "/home/ubuntu/convoit/app/Resources/views/ville/show.html.twig");
    }
}
