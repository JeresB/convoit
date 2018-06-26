<?php

/* :internaute:show.html.twig */
class __TwigTemplate_81f47cadfa64f9917a9446b83acf1e56d3697fe7d616cb06a2896f6d959549a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":internaute:show.html.twig", 1);
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
        $__internal_2f599f33e61edae9bdb3b318a3b6b812bcd1d2986fdc6a54c58884b1f7262aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f599f33e61edae9bdb3b318a3b6b812bcd1d2986fdc6a54c58884b1f7262aaa->enter($__internal_2f599f33e61edae9bdb3b318a3b6b812bcd1d2986fdc6a54c58884b1f7262aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":internaute:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f599f33e61edae9bdb3b318a3b6b812bcd1d2986fdc6a54c58884b1f7262aaa->leave($__internal_2f599f33e61edae9bdb3b318a3b6b812bcd1d2986fdc6a54c58884b1f7262aaa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cac5fa5c960c4e7a016654803ab18d5309fdd44823df5740849575da1dacada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cac5fa5c960c4e7a016654803ab18d5309fdd44823df5740849575da1dacada->enter($__internal_1cac5fa5c960c4e7a016654803ab18d5309fdd44823df5740849575da1dacada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Internaute</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_edit", array("id" => $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1cac5fa5c960c4e7a016654803ab18d5309fdd44823df5740849575da1dacada->leave($__internal_1cac5fa5c960c4e7a016654803ab18d5309fdd44823df5740849575da1dacada_prof);

    }

    public function getTemplateName()
    {
        return ":internaute:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Internaute</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ internaute.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ internaute.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ internaute.prenom }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ internaute.tel }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ internaute.mail }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('internaute_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('internaute_edit', { 'id': internaute.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":internaute:show.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/show.html.twig");
    }
}
