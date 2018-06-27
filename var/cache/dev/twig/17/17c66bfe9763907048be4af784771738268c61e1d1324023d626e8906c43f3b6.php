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
        $__internal_fc8475de47c278f6a4da2927dabbc95f24651ff3f3be8dd506752390567df2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8475de47c278f6a4da2927dabbc95f24651ff3f3be8dd506752390567df2b4->enter($__internal_fc8475de47c278f6a4da2927dabbc95f24651ff3f3be8dd506752390567df2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc8475de47c278f6a4da2927dabbc95f24651ff3f3be8dd506752390567df2b4->leave($__internal_fc8475de47c278f6a4da2927dabbc95f24651ff3f3be8dd506752390567df2b4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba46197513b9135b51f5a518869478dc2e0c7448f25fcbf0e04a6185a18b64fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba46197513b9135b51f5a518869478dc2e0c7448f25fcbf0e04a6185a18b64fd->enter($__internal_ba46197513b9135b51f5a518869478dc2e0c7448f25fcbf0e04a6185a18b64fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ba46197513b9135b51f5a518869478dc2e0c7448f25fcbf0e04a6185a18b64fd->leave($__internal_ba46197513b9135b51f5a518869478dc2e0c7448f25fcbf0e04a6185a18b64fd_prof);

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
", ":ville:index.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/ville/index.html.twig");
    }
}
