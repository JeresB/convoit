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
        $__internal_b164aee1791b6ed03cad409d0f605ea64ada8903a66298ae168e77766b82abe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b164aee1791b6ed03cad409d0f605ea64ada8903a66298ae168e77766b82abe2->enter($__internal_b164aee1791b6ed03cad409d0f605ea64ada8903a66298ae168e77766b82abe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":internaute:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b164aee1791b6ed03cad409d0f605ea64ada8903a66298ae168e77766b82abe2->leave($__internal_b164aee1791b6ed03cad409d0f605ea64ada8903a66298ae168e77766b82abe2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee26bdc10cea9c10df1a7a870c27565e64ac13a60bc7236b1dcc9076d45395e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee26bdc10cea9c10df1a7a870c27565e64ac13a60bc7236b1dcc9076d45395e2->enter($__internal_ee26bdc10cea9c10df1a7a870c27565e64ac13a60bc7236b1dcc9076d45395e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"user icon\"></i>
      Liste Internaute
    </h1>

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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["internautes"] ?? $this->getContext($context, "internautes")));
        foreach ($context['_seq'] as $context["_key"] => $context["internaute"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_show", array("id" => $this->getAttribute($context["internaute"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["internaute"], "mail", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_show", array("id" => $this->getAttribute($context["internaute"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
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
        // line 42
        echo "      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_new");
        echo "\">Créer un nouvel internaute</a>
  </section>
</main>
";
        
        $__internal_ee26bdc10cea9c10df1a7a870c27565e64ac13a60bc7236b1dcc9076d45395e2->leave($__internal_ee26bdc10cea9c10df1a7a870c27565e64ac13a60bc7236b1dcc9076d45395e2_prof);

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
        return array (  116 => 45,  111 => 42,  99 => 36,  93 => 33,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
      <i class=\"user icon\"></i>
      Liste Internaute
    </h1>

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

    <a class=\"ui primary button\" href=\"{{ path('internaute_new') }}\">Créer un nouvel internaute</a>
  </section>
</main>
{% endblock %}
", ":internaute:index.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/internaute/index.html.twig");
    }
}
