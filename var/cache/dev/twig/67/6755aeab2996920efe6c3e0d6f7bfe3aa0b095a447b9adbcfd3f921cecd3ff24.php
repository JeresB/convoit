<?php

/* FrontOfficeBundle:Default:details.html.twig */
class __TwigTemplate_380d3ec4912dd91ac3ee88632c40dbb2099a874c3d22e556b20f6194100c4e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle:Default:layout.html.twig", "FrontOfficeBundle:Default:details.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d715866dd9ae7b67386d3bd799dde4061d1fa24ec3cece4f749140e88bb27ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d715866dd9ae7b67386d3bd799dde4061d1fa24ec3cece4f749140e88bb27ba->enter($__internal_1d715866dd9ae7b67386d3bd799dde4061d1fa24ec3cece4f749140e88bb27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d715866dd9ae7b67386d3bd799dde4061d1fa24ec3cece4f749140e88bb27ba->leave($__internal_1d715866dd9ae7b67386d3bd799dde4061d1fa24ec3cece4f749140e88bb27ba_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5359d04185177f044f67176cd97df81dba79f6c23c2740bb45ebed122f2c71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5359d04185177f044f67176cd97df81dba79f6c23c2740bb45ebed122f2c71a->enter($__internal_c5359d04185177f044f67176cd97df81dba79f6c23c2740bb45ebed122f2c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"ui container\">
  <div class=\"ui hidden divider\"></div>
  <section class=\"ui raised segment\">
    <div class=\"ui fluid card\">
      <div class=\"content\">
        <i class=\"right floated fas fa-car\"></i>
        <div class=\"header\">
          Trajet ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["infos"] ?? $this->getContext($context, "infos")), "id", array()), "html", null, true);
        echo "
        </div>
        <div class=\"meta\">
          ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["infos"] ?? $this->getContext($context, "infos")), "date", array()), "m/d/Y H:i:s"), "html", null, true);
        echo "
        </div>
        <span class=\"right floated\">Distance : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["infos"] ?? $this->getContext($context, "infos")), "nbKm", array()), "html", null, true);
        echo " km</span>
        <div class=\"description\">
          ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "nom", array()), "html", null, true);
        echo "<br>
          Tél : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "tel", array()), "html", null, true);
        echo "<br>
          Mail : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "mail", array()), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"extra content\">
        Voiture ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "voitureId", array()), "voiture", array()), "html", null, true);
        echo "<br>
        Nombre de places : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "voitureId", array()), "nbPlaces", array()), "html", null, true);
        echo "
      </div>
      <div class=\"extra content\">
        <span class=\"right floated\">
          Arrivée : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["infos"] ?? $this->getContext($context, "infos")), "arrivee", array()), "html", null, true);
        echo "
        </span>
        <span>
          Départ : ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["infos"] ?? $this->getContext($context, "infos")), "depart", array()), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_c5359d04185177f044f67176cd97df81dba79f6c23c2740bb45ebed122f2c71a->leave($__internal_c5359d04185177f044f67176cd97df81dba79f6c23c2740bb45ebed122f2c71a_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  93 => 28,  86 => 24,  82 => 23,  75 => 19,  71 => 18,  65 => 17,  60 => 15,  55 => 13,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontOfficeBundle:Default:layout.html.twig' %}
{% block content %}
<main class=\"ui container\">
  <div class=\"ui hidden divider\"></div>
  <section class=\"ui raised segment\">
    <div class=\"ui fluid card\">
      <div class=\"content\">
        <i class=\"right floated fas fa-car\"></i>
        <div class=\"header\">
          Trajet {{ infos.id }}
        </div>
        <div class=\"meta\">
          {{ infos.date|date(\"m/d/Y H:i:s\") }}
        </div>
        <span class=\"right floated\">Distance : {{ infos.nbKm }} km</span>
        <div class=\"description\">
          {{ internaute.prenom }} {{ internaute.nom }}<br>
          Tél : {{ internaute.tel }}<br>
          Mail : {{ internaute.mail }}
        </div>
      </div>
      <div class=\"extra content\">
        Voiture {{ internaute.voitureId.voiture }}<br>
        Nombre de places : {{ internaute.voitureId.nbPlaces }}
      </div>
      <div class=\"extra content\">
        <span class=\"right floated\">
          Arrivée : {{ infos.arrivee }}
        </span>
        <span>
          Départ : {{ infos.depart }}
        </span>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "FrontOfficeBundle:Default:details.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/FrontOfficeBundle/Resources/views/Default/details.html.twig");
    }
}
