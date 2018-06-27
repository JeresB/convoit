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
        $__internal_debe90122993ff28d9f57b00fd471f9c0f6cc1560a304df7a288e8d295168d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debe90122993ff28d9f57b00fd471f9c0f6cc1560a304df7a288e8d295168d3c->enter($__internal_debe90122993ff28d9f57b00fd471f9c0f6cc1560a304df7a288e8d295168d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_debe90122993ff28d9f57b00fd471f9c0f6cc1560a304df7a288e8d295168d3c->leave($__internal_debe90122993ff28d9f57b00fd471f9c0f6cc1560a304df7a288e8d295168d3c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_738af99b2d354bedb9f44a3c53323b5f42f237fb12e40317f21ea0817f1f02a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738af99b2d354bedb9f44a3c53323b5f42f237fb12e40317f21ea0817f1f02a5->enter($__internal_738af99b2d354bedb9f44a3c53323b5f42f237fb12e40317f21ea0817f1f02a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Ville
    </h1>

    <table class=\"ui selectable celled table\">
      <tbody>
          <tr>
              <th>Id</th>
              <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Ville</th>
              <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "ville", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Cp</th>
              <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "cp", array()), "html", null, true);
        echo "</td>
          </tr>
      </tbody>
    </table>

    ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <a class=\"ui primary button\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
  </section>
</main>
";
        
        $__internal_738af99b2d354bedb9f44a3c53323b5f42f237fb12e40317f21ea0817f1f02a5->leave($__internal_738af99b2d354bedb9f44a3c53323b5f42f237fb12e40317f21ea0817f1f02a5_prof);

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
        return array (  88 => 32,  84 => 31,  80 => 30,  75 => 28,  67 => 23,  60 => 19,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
      Ville
    </h1>

    <table class=\"ui selectable celled table\">
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

    {{ form_start(delete_form) }}
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
    <a class=\"ui primary button\" href=\"{{ path('ville_index') }}\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">Edition</a>
  </section>
</main>
{% endblock %}
", ":ville:show.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/ville/show.html.twig");
    }
}
