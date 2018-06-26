<?php

/* BackOfficeBundle:Default:navbar.html.twig */
class __TwigTemplate_83b3ae2f888df2f8569a1abd47d21392ac827e8e34911e355025912b5b596650 extends Twig_Template
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
        $__internal_f8dce8e8449c3b5e2c3145a11950771c6ed99b64a9d732cc6b3ef9dd517224f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dce8e8449c3b5e2c3145a11950771c6ed99b64a9d732cc6b3ef9dd517224f2->enter($__internal_f8dce8e8449c3b5e2c3145a11950771c6ed99b64a9d732cc6b3ef9dd517224f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:navbar.html.twig"));

        // line 1
        echo "<div class=\"ui five item menu\">
  <a class=\"item\" href=\"/adminbo\">Accueil Admin</a>
  <a class=\"item\" href=\"/adminbo/voiture\">Voiture</a>
  <a class=\"item\" href=\"/adminbo/ville\">Ville</a>
  <a class=\"item\" href=\"/adminbo/internaute\">Internaute</a>
  <a class=\"item\" href=\"/adminbo/stats\">Statistiques</a>
</div>
";
        
        $__internal_f8dce8e8449c3b5e2c3145a11950771c6ed99b64a9d732cc6b3ef9dd517224f2->leave($__internal_f8dce8e8449c3b5e2c3145a11950771c6ed99b64a9d732cc6b3ef9dd517224f2_prof);

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
  <a class=\"item\" href=\"/adminbo/voiture\">Voiture</a>
  <a class=\"item\" href=\"/adminbo/ville\">Ville</a>
  <a class=\"item\" href=\"/adminbo/internaute\">Internaute</a>
  <a class=\"item\" href=\"/adminbo/stats\">Statistiques</a>
</div>
", "BackOfficeBundle:Default:navbar.html.twig", "/home/ubuntu/convoit/src/BackOfficeBundle/Resources/views/Default/navbar.html.twig");
    }
}
