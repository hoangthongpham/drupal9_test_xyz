<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/water_theme/templates/page.html.twig */
class __TwigTemplate_770f817ddd49e09f45ec09694d9c1e6b344f85bbce7fdce86be4ea7a6b18672d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <!-- Begin Nav
================================================== -->
  <div id=\"topbar\">
    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Topbar", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
  </div>
  <!-- End Nav
  ================================================== -->

  <!-- Begin Site Title
  ================================================== -->
  <div class=\"container\">
    <div class=\"description-outner\">
      ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"content-main\">
      ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    </div>
    <!-- End Site Title
    ================================================== -->
    <aside>
      <div class=\"row\">
        <div class=\"col-md-6 ml-auto\">
          ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Aside", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
        </div>
      </div>

    </aside>
    <!-- Begin Featured
    ================================================== -->
    <section class=\"featured-posts\">
      ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Featured", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
    </section>
    <!-- End Featured
    ================================================== -->

    <!-- Begin List Posts
    ================================================== -->
    <section class=\"recent-posts\">
      ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Post", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
    </section>
    <!-- End List Posts
    ================================================== -->

    <!-- Begin Footer
    ================================================== -->
    <div class=\"footer-outner\">
      ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "Footer", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
    </div>

    <!-- End Footer
    ================================================== -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript
      ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/water_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  96 => 41,  85 => 33,  74 => 25,  64 => 18,  57 => 14,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/water_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\themes\\custom\\water_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
