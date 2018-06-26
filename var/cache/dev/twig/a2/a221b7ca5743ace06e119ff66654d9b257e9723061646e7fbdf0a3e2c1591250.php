<?php

/* FrontOfficeBundle:Default:layout.html.twig */
class __TwigTemplate_ecc9c4fee5351d73802fd9e7cd4726764f40d856ebb4257665f448736f101484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d0326f86f9b698e9437252bab0d2ce8ed061c3f66d0ec74aba1c2813d3842d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0326f86f9b698e9437252bab0d2ce8ed061c3f66d0ec74aba1c2813d3842d2->enter($__internal_5d0326f86f9b698e9437252bab0d2ce8ed061c3f66d0ec74aba1c2813d3842d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Ride sharing</title>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Concert+One\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/covoit.css"), "html", null, true);
        echo "\">
  </head>
  <body>
    <a href=\"/\">
      <h2 id=\"titre\" class=\"ui header\">
        <img class=\"ui image\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ride_sharing.png"), "html", null, true);
        echo "\">
          <div class=\"content\">
            RIDE SHARING
          </div>
      </h2>
    </a>
    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "  </body>
</html>
";
        
        $__internal_5d0326f86f9b698e9437252bab0d2ce8ed061c3f66d0ec74aba1c2813d3842d2->leave($__internal_5d0326f86f9b698e9437252bab0d2ce8ed061c3f66d0ec74aba1c2813d3842d2_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_63dc88f269194387697c81d9a1e3cb626b1d898088de811029f497359717b479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dc88f269194387697c81d9a1e3cb626b1d898088de811029f497359717b479->enter($__internal_63dc88f269194387697c81d9a1e3cb626b1d898088de811029f497359717b479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_63dc88f269194387697c81d9a1e3cb626b1d898088de811029f497359717b479->leave($__internal_63dc88f269194387697c81d9a1e3cb626b1d898088de811029f497359717b479_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  53 => 22,  51 => 21,  42 => 15,  34 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Ride sharing</title>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Concert+One\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/covoit.css') }}\">
  </head>
  <body>
    <a href=\"/\">
      <h2 id=\"titre\" class=\"ui header\">
        <img class=\"ui image\" src=\"{{ asset('images/ride_sharing.png')}}\">
          <div class=\"content\">
            RIDE SHARING
          </div>
      </h2>
    </a>
    {% block content %}{% endblock %}
  </body>
</html>
", "FrontOfficeBundle:Default:layout.html.twig", "/home/ubuntu/convoit/src/FrontOfficeBundle/Resources/views/Default/layout.html.twig");
    }
}
