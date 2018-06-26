<?php

/* internaute/show.html.twig */
class __TwigTemplate_d274def871c67a8e981f0e3b6659808e97b2f724fc87386c5d8b8a40955e8919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "internaute/show.html.twig", 1);
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
        $__internal_3a2e426970f0ae09fe47e542226b569b34bfb872b799931b0beabb9877eb13c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2e426970f0ae09fe47e542226b569b34bfb872b799931b0beabb9877eb13c0->enter($__internal_3a2e426970f0ae09fe47e542226b569b34bfb872b799931b0beabb9877eb13c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "internaute/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2e426970f0ae09fe47e542226b569b34bfb872b799931b0beabb9877eb13c0->leave($__internal_3a2e426970f0ae09fe47e542226b569b34bfb872b799931b0beabb9877eb13c0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4d0bf7e22f70faad753d4d509c96c4fd40a6c8a8bb62e7c3bfeea98697ace99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d0bf7e22f70faad753d4d509c96c4fd40a6c8a8bb62e7c3bfeea98697ace99->enter($__internal_c4d0bf7e22f70faad753d4d509c96c4fd40a6c8a8bb62e7c3bfeea98697ace99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"user icon\"></i>
      Internaute
    </h1>

    <table class=\"ui selectable celled table\">
      <tbody>
          <tr>
              <th>Id</th>
              <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "id", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Nom</th>
              <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "nom", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Prenom</th>
              <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "prenom", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Tel</th>
              <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "tel", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Mail</th>
              <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "mail", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Voiture</th>
              <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "voiture", array()), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <th>Ville</th>
              <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "cp", array()), "html", null, true);
        echo "</td>
          </tr>
      </tbody>
    </table>

    ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <a class=\"ui primary button\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_index");
        echo "\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_edit", array("id" => $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
  </section>
</main>
";
        
        $__internal_c4d0bf7e22f70faad753d4d509c96c4fd40a6c8a8bb62e7c3bfeea98697ace99->leave($__internal_c4d0bf7e22f70faad753d4d509c96c4fd40a6c8a8bb62e7c3bfeea98697ace99_prof);

    }

    public function getTemplateName()
    {
        return "internaute/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 48,  114 => 47,  110 => 46,  105 => 44,  95 => 39,  88 => 35,  81 => 31,  74 => 27,  67 => 23,  60 => 19,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
      Internaute
    </h1>

    <table class=\"ui selectable celled table\">
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
          <tr>
              <th>Voiture</th>
              <td>{{ voiture.voiture }}</td>
          </tr>
          <tr>
              <th>Ville</th>
              <td>{{ ville.ville }} - {{ ville.cp }}</td>
          </tr>
      </tbody>
    </table>

    {{ form_start(delete_form) }}
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
    <a class=\"ui primary button\" href=\"{{ path('internaute_index') }}\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"{{ path('internaute_edit', { 'id': internaute.id }) }}\">Edition</a>
  </section>
</main>
{% endblock %}
", "internaute/show.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/show.html.twig");
    }
}
