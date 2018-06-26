<?php

/* :voiture:index.html.twig */
class __TwigTemplate_0eadb86fe4c6ddedf160eb26769b81ce534f02a2aae64f7c3446c8d3bb0426eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":voiture:index.html.twig", 1);
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
        $__internal_7adaad57a8e59783f0cf1e62f77d3da53bb1accac3ca4d9a0e6407abe92c9d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adaad57a8e59783f0cf1e62f77d3da53bb1accac3ca4d9a0e6407abe92c9d26->enter($__internal_7adaad57a8e59783f0cf1e62f77d3da53bb1accac3ca4d9a0e6407abe92c9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":voiture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7adaad57a8e59783f0cf1e62f77d3da53bb1accac3ca4d9a0e6407abe92c9d26->leave($__internal_7adaad57a8e59783f0cf1e62f77d3da53bb1accac3ca4d9a0e6407abe92c9d26_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_979c6dd84cdd67a5326508571d10ebdbd5cc13a031331f1d08513856f0997f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979c6dd84cdd67a5326508571d10ebdbd5cc13a031331f1d08513856f0997f6c->enter($__internal_979c6dd84cdd67a5326508571d10ebdbd5cc13a031331f1d08513856f0997f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Liste Voiture
    </h1>

    <table class=\"ui selectable celled table\">
      <thead>
        <tr>
          <th>Id</th>
          <th>Voiture</th>
          <th>Nbplaces</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voitures"] ?? $this->getContext($context, "voitures")));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 22
            echo "        <tr>
          <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_show", array("id" => $this->getAttribute($context["voiture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "id", array()), "html", null, true);
            echo "</a></td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "voiture", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["voiture"], "nbPlaces", array()), "html", null, true);
            echo "</td>
          <td>
            <ul>
              <li>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_show", array("id" => $this->getAttribute($context["voiture"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
              </li>
              <li>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_edit", array("id" => $this->getAttribute($context["voiture"], "id", array()))), "html", null, true);
            echo "\">Edition</a>
              </li>
            </ul>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_new");
        echo "\">Créer une voiture</a>
  </section>
</main>
";
        
        $__internal_979c6dd84cdd67a5326508571d10ebdbd5cc13a031331f1d08513856f0997f6c->leave($__internal_979c6dd84cdd67a5326508571d10ebdbd5cc13a031331f1d08513856f0997f6c_prof);

    }

    public function getTemplateName()
    {
        return ":voiture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  101 => 38,  89 => 32,  83 => 29,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Liste Voiture
    </h1>

    <table class=\"ui selectable celled table\">
      <thead>
        <tr>
          <th>Id</th>
          <th>Voiture</th>
          <th>Nbplaces</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for voiture in voitures %}
        <tr>
          <td><a href=\"{{ path('voiture_show', { 'id': voiture.id }) }}\">{{ voiture.id }}</a></td>
          <td>{{ voiture.voiture }}</td>
          <td>{{ voiture.nbPlaces }}</td>
          <td>
            <ul>
              <li>
                <a href=\"{{ path('voiture_show', { 'id': voiture.id }) }}\">Détails</a>
              </li>
              <li>
                <a href=\"{{ path('voiture_edit', { 'id': voiture.id }) }}\">Edition</a>
              </li>
            </ul>
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"{{ path('voiture_new') }}\">Créer une voiture</a>
  </section>
</main>
{% endblock %}
", ":voiture:index.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/index.html.twig");
    }
}
