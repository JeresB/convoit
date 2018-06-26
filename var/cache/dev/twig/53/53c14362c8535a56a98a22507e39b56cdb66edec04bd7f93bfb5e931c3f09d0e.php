<?php

/* BackOfficeBundle:Default:stats.html.twig */
class __TwigTemplate_79f94c3b7442ef428c55485dd41b57c1186c1d090debd4599ba753702dd905fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "BackOfficeBundle:Default:stats.html.twig", 1);
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
        $__internal_045ac90169d83b38039e47d74f37894b79f930944d99d2009a2f761e11ca47c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045ac90169d83b38039e47d74f37894b79f930944d99d2009a2f761e11ca47c9->enter($__internal_045ac90169d83b38039e47d74f37894b79f930944d99d2009a2f761e11ca47c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:stats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045ac90169d83b38039e47d74f37894b79f930944d99d2009a2f761e11ca47c9->leave($__internal_045ac90169d83b38039e47d74f37894b79f930944d99d2009a2f761e11ca47c9_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d6ad64679a36e48d6338214a3fae323dc7f9685b2dd553103293d7f2ee22d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6ad64679a36e48d6338214a3fae323dc7f9685b2dd553103293d7f2ee22d84->enter($__internal_5d6ad64679a36e48d6338214a3fae323dc7f9685b2dd553103293d7f2ee22d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h4 class=\"ui horizontal divider header\">
      <i class=\"bar chart icon\"></i>
      Statistiques
    </h4>
    <div class=\"ui grid\">
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes</span>
            <div class=\"description\">
              ";
        // line 15
        echo twig_escape_filter($this->env, ($context["nb_internaute"] ?? $this->getContext($context, "nb_internaute")), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes à plus de 2 trajets</span>
            <div class=\"description\">
              ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["nb_internaute_trajet_2"] ?? $this->getContext($context, "nb_internaute_trajet_2")));
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes de départs</span>
            <div class=\"description\">
              ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["top_depart"] ?? $this->getContext($context, "top_depart")));
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes d'arrivées</span>
            <div class=\"description\">
              ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["top_arrivee"] ?? $this->getContext($context, "top_arrivee")));
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_5d6ad64679a36e48d6338214a3fae323dc7f9685b2dd553103293d7f2ee22d84->leave($__internal_5d6ad64679a36e48d6338214a3fae323dc7f9685b2dd553103293d7f2ee22d84_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 45,  80 => 35,  67 => 25,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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
    <h4 class=\"ui horizontal divider header\">
      <i class=\"bar chart icon\"></i>
      Statistiques
    </h4>
    <div class=\"ui grid\">
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes</span>
            <div class=\"description\">
              {{ nb_internaute }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes à plus de 2 trajets</span>
            <div class=\"description\">
              {{ dump(nb_internaute_trajet_2) }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes de départs</span>
            <div class=\"description\">
              {{ dump(top_depart) }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes d'arrivées</span>
            <div class=\"description\">
              {{ dump(top_arrivee) }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "BackOfficeBundle:Default:stats.html.twig", "/home/ubuntu/convoit/src/BackOfficeBundle/Resources/views/Default/stats.html.twig");
    }
}
