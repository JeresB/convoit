<?php

/* :ville:index.html.twig */
class __TwigTemplate_c0333b0127879e5d66aeba57f2b75898b3a015aec7303260a1d2e2159c8b2508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":ville:index.html.twig", 1);
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
        $__internal_ae8c53d2d90cd340eed14db6c4299e65d25fbabb5aa8ae4f289accf172518e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8c53d2d90cd340eed14db6c4299e65d25fbabb5aa8ae4f289accf172518e8f->enter($__internal_ae8c53d2d90cd340eed14db6c4299e65d25fbabb5aa8ae4f289accf172518e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8c53d2d90cd340eed14db6c4299e65d25fbabb5aa8ae4f289accf172518e8f->leave($__internal_ae8c53d2d90cd340eed14db6c4299e65d25fbabb5aa8ae4f289accf172518e8f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_84fabb6b1b9a3804eceb9c03f8469f0885daadf1e6e7e91dc2202ddf0d2f4229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fabb6b1b9a3804eceb9c03f8469f0885daadf1e6e7e91dc2202ddf0d2f4229->enter($__internal_84fabb6b1b9a3804eceb9c03f8469f0885daadf1e6e7e91dc2202ddf0d2f4229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Villes list</h1>

    <table class=\"ui selectable celled table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ville</th>
                <th>Cp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "cp", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_new");
        echo "\">Create a new ville</a>
        </li>
    </ul>
";
        
        $__internal_84fabb6b1b9a3804eceb9c03f8469f0885daadf1e6e7e91dc2202ddf0d2f4229->leave($__internal_84fabb6b1b9a3804eceb9c03f8469f0885daadf1e6e7e91dc2202ddf0d2f4229_prof);

    }

    public function getTemplateName()
    {
        return ":ville:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Villes list</h1>

    <table class=\"ui selectable celled table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ville</th>
                <th>Cp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ville in villes %}
            <tr>
                <td><a href=\"{{ path('ville_show', { 'id': ville.id }) }}\">{{ ville.id }}</a></td>
                <td>{{ ville.ville }}</td>
                <td>{{ ville.cp }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ville_show', { 'id': ville.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ville_new') }}\">Create a new ville</a>
        </li>
    </ul>
{% endblock %}
", ":ville:index.html.twig", "/home/ubuntu/convoit/app/Resources/views/ville/index.html.twig");
    }
}
