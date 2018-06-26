<?php

/* ville/index.html.twig */
class __TwigTemplate_808e8ca9363d58a33d90980b0f809dcd53d568bf26767a1a6a8835c2e6e51e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "ville/index.html.twig", 1);
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
        $__internal_8d37b60dda8648fced1423d28bd5d0d18f9ec77e013a8eadd30dc1534c86d48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d37b60dda8648fced1423d28bd5d0d18f9ec77e013a8eadd30dc1534c86d48d->enter($__internal_8d37b60dda8648fced1423d28bd5d0d18f9ec77e013a8eadd30dc1534c86d48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d37b60dda8648fced1423d28bd5d0d18f9ec77e013a8eadd30dc1534c86d48d->leave($__internal_8d37b60dda8648fced1423d28bd5d0d18f9ec77e013a8eadd30dc1534c86d48d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_967f404888a34fbe496f1eb4fac513f3ceba129e3ea247a515d2c5b49b4628b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967f404888a34fbe496f1eb4fac513f3ceba129e3ea247a515d2c5b49b4628b5->enter($__internal_967f404888a34fbe496f1eb4fac513f3ceba129e3ea247a515d2c5b49b4628b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Liste Ville
    </h1>

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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 22
            echo "        <tr>
          <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "</a></td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "cp", array()), "html", null, true);
            echo "</td>
          <td>
            <ul>
              <li>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
              </li>
              <li>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">Edition</a>
              </li>
            </ul>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_new");
        echo "\">Créer une nouvelle ville</a>
  </section>
</main>
";
        
        $__internal_967f404888a34fbe496f1eb4fac513f3ceba129e3ea247a515d2c5b49b4628b5->leave($__internal_967f404888a34fbe496f1eb4fac513f3ceba129e3ea247a515d2c5b49b4628b5_prof);

    }

    public function getTemplateName()
    {
        return "ville/index.html.twig";
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
      <i class=\"home icon\"></i>
      Liste Ville
    </h1>

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
                <a href=\"{{ path('ville_show', { 'id': ville.id }) }}\">Détails</a>
              </li>
              <li>
                <a href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">Edition</a>
              </li>
            </ul>
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"{{ path('ville_new') }}\">Créer une nouvelle ville</a>
  </section>
</main>
{% endblock %}
", "ville/index.html.twig", "/home/ubuntu/convoit/app/Resources/views/ville/index.html.twig");
    }
}
