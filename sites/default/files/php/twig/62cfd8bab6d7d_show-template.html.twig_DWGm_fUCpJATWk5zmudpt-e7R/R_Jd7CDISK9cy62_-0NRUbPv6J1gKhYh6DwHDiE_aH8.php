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

/* modules/custom/post_module/templates/show-template.html.twig */
class __TwigTemplate_8caf023267b1b5f246333c071d4187f09952a50ac4ee7466c31377a46892de29 extends \Twig\Template
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
  <div class=\"col-md-8 col-md-offset-2 col-xs-12\">
    <div class=\"mainheading\">

      <!-- Begin Top Meta -->
      <div class=\"row post-top-meta\">
        <div class=\"col-md-2\">
          <a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
        </div>
        <div class=\"col-md-10\">
          <a class=\"link-dark\" href=\"author.html\">Sal</a><a href=\"#\" class=\"btn follow\">Follow</a>
          <span class=\"author-description\">Founder of WowThemes.net and creator of <b>\"Mediumish\"</b> theme that you're currently previewing. Developing professional premium themes, templates, plugins, scripts since 2012.</span>
          <span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
        </div>
      </div>
      <!-- End Top Menta -->

      <h1 class=\"posttitle\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h1>

    </div>

    <!-- Begin Featured Image -->
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "images", [], "any", false, false, true, 23));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 24
            echo "    <img class=\"featured-image img-fluid\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "uri", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
            echo "\" alt=\"\">
    <!-- End Featured Image -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <!-- Begin Post Content -->
    <div class=\"article-post\">
      ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "body", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source));
        echo "
    </div>
    <!-- End Post Content -->

    <!-- Begin Tags -->
    <div class=\"after-post-tags\">


      <ul class=\"tags\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "tags", [], "any", false, false, true, 39));
        foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
            // line 40
            echo "
          <li class=\"list-group-item\">
            <a href=\"#\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

      </ul>
    </div>
    <!-- End Tags -->

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/post_module/templates/show-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  105 => 42,  101 => 40,  97 => 39,  85 => 30,  80 => 27,  70 => 24,  66 => 23,  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/post_module/templates/show-template.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\modules\\custom\\post_module\\templates\\show-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23);
        static $filters = array("escape" => 18, "raw" => 30);
        static $functions = array("file_url" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw'],
                ['file_url']
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
