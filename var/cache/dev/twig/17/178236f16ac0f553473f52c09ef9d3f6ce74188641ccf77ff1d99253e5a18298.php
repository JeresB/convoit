<?php

/* :internaute:index.html.twig */
class __TwigTemplate_e833374b90cbf494c9cdd2b00fc46ca43cca55951c0a2be2ed1b51a2644af20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":internaute:index.html.twig", 1);
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
        $__internal_bc8d8d91d7cba4d319403f10aa608651100cdfffdde54cf6f8df7f250a4f7252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d8d91d7cba4d319403f10aa608651100cdfffdde54cf6f8df7f250a4f7252->enter($__internal_bc8d8d91d7cba4d319403f10aa608651100cdfffdde54cf6f8df7f250a4f7252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":internaute:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8d8d91d7cba4d319403f10aa608651100cdfffdde54cf6f8df7f250a4f7252->leave($__internal_bc8d8d91d7cba4d319403f10aa608651100cdfffdde54cf6f8df7f250a4f7252_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb360d55d3fd7d2f2591f487bafb1afb2c26ee3736af6946580fa9ed3836ffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb360d55d3fd7d2f2591f487bafb1afb2c26ee3736af6946580fa9ed3836ffbc->enter($__internal_eb360d55d3fd7d2f2591f487bafb1afb2c26ee3736af6946580fa9ed3836ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Internautes list</h1>

    <table class=\"ui selectable celled table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["internautes"] ?? $this->getContext($context, "internautes")));
        foreach ($context['_seq'] as $context["_key"] => $context["internaute"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_show", array("id" => $this->getAttribute($context["internaute"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "mail", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_show", array("id" => $this->getAttribute($context["internaute"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_edit", array("id" => $this->getAttribute($context["internaute"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internaute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_new");
        echo "\">Create a new internaute</a>
        </li>
    </ul>
";
        
        $__internal_eb360d55d3fd7d2f2591f487bafb1afb2c26ee3736af6946580fa9ed3836ffbc->leave($__internal_eb360d55d3fd7d2f2591f487bafb1afb2c26ee3736af6946580fa9ed3836ffbc_prof);

    }

    public function getTemplateName()
    {
        return ":internaute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Internautes list</h1>

    <table class=\"ui selectable celled table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for internaute in internautes %}
            <tr>
                <td><a href=\"{{ path('internaute_show', { 'id': internaute.id }) }}\">{{ internaute.id }}</a></td>
                <td>{{ internaute.nom }}</td>
                <td>{{ internaute.prenom }}</td>
                <td>{{ internaute.tel }}</td>
                <td>{{ internaute.mail }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('internaute_show', { 'id': internaute.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('internaute_edit', { 'id': internaute.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('internaute_new') }}\">Create a new internaute</a>
        </li>
    </ul>
{% endblock %}
", ":internaute:index.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/index.html.twig");
    }
}
