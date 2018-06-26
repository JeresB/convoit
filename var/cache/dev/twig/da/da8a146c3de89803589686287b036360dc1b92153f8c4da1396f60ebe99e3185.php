<?php

/* BackOfficeBundle:Default:navbar.html.twig */
class __TwigTemplate_7b127c82897646f7c7e204b57a02e39ec6ac2a5318e98b265e050f85488f292f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41eea95c1870966d6ae4c5c893e7bd9987120d4caa06aadfdbdfb582a70f399c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41eea95c1870966d6ae4c5c893e7bd9987120d4caa06aadfdbdfb582a70f399c->enter($__internal_41eea95c1870966d6ae4c5c893e7bd9987120d4caa06aadfdbdfb582a70f399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:navbar.html.twig"));

        // line 1
        echo "<div class=\"ui five item menu\">
  <a class=\"item\" href=\"/adminbo\">Accueil Admin</a>
  <a class=\"item\" href=\"/adminbo/voiture\"><i class=\"car icon\"></i> Voiture</a>
  <a class=\"item\" href=\"/adminbo/ville\"><i class=\"home icon\"></i> Ville</a>
  <a class=\"item\" href=\"/adminbo/internaute\"><i class=\"user icon\"></i> Internaute</a>
  <a class=\"item\" href=\"/adminbo/stats\"><i class=\"bar chart icon\"></i> Statistiques</a>
</div>
";
        
        $__internal_41eea95c1870966d6ae4c5c893e7bd9987120d4caa06aadfdbdfb582a70f399c->leave($__internal_41eea95c1870966d6ae4c5c893e7bd9987120d4caa06aadfdbdfb582a70f399c_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui five item menu\">
  <a class=\"item\" href=\"/adminbo\">Accueil Admin</a>
  <a class=\"item\" href=\"/adminbo/voiture\"><i class=\"car icon\"></i> Voiture</a>
  <a class=\"item\" href=\"/adminbo/ville\"><i class=\"home icon\"></i> Ville</a>
  <a class=\"item\" href=\"/adminbo/internaute\"><i class=\"user icon\"></i> Internaute</a>
  <a class=\"item\" href=\"/adminbo/stats\"><i class=\"bar chart icon\"></i> Statistiques</a>
</div>
", "BackOfficeBundle:Default:navbar.html.twig", "/home/ubuntu/convoit/src/BackOfficeBundle/Resources/views/Default/navbar.html.twig");
    }
}
