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

/* modules/custom/article_module/templates/index-template.html.twig */
class __TwigTemplate_63c28e46c2ec21ca6a8d82f841a3b13821bf62bc3af5c212046c0e076f9c0117 extends \Twig\Template
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
        echo "<a class=\"btn btn-sm btn-primary my-2\" href=\"create\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new"));
        echo "</a>
";
        // line 3
        echo "<div class=\"box-filter row mb-3\" >
  <div class=\"col-md-3\">
    <label for=\"filter-title\" class=\"form-label\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Title"));
        echo "</label>
    <input type=\"text\" class=\"form-control\" id=\"filter-title\">
  </div>
  <div class=\"col-md-2\">
    <label for=\"filter-language\" class=\"form-label\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        echo "</label>
    <select id=\"filter-language\" class=\"form-control\">
      <option value=\"All\">Any</option>
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langcodesList"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["lang"]) {
            // line 13
            echo "        <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["lang"], 13, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["lang"], 13, $this->source), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </select>
  </div>
  <div class=\"col-md-2\">
    <label for=\"filter-status\" class=\"form-label\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status"));
        echo "</label>
    <select id=\"filter-status\" class=\"form-control\">
      <option value=\"All\">Any</option>
      <option value=\"1\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Published"));
        echo "</option>
      <option value=\"2\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Unpublished"));
        echo "</option>
    </select>

  </div>
  <div class=\"col-md-1\">
    <label for=\"filter-language\" class=\"form-label invisible \">Ngôn</label>
    <button onClick=\"goFilter()\" class=\"btn btn-secondary\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Filter"));
        echo "</button>
  </div>
  <div class=\"col-md-1\">
    <label for=\"filter-language\" class=\"form-label invisible \">Ngôn</label>
    <button onClick=\"resetFilter()\" class=\"btn btn-secondary\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reset"));
        echo "</button>
  </div>
</div>
<table id=\"datatable1\" class=\"table table-bordered\">
  <thead>
  <th>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Title"));
        echo "</th>
  <th>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Author"));
        echo "</th>
  <th>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        echo "</th>
  <th>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Updated"));
        echo "</th>
  <th>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status"));
        echo "</th>
  <th>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Operations"));
        echo "</th>
  </thead>
  <tbody>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/article_module/templates/index-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  107 => 32,  100 => 28,  91 => 22,  87 => 21,  81 => 18,  76 => 15,  65 => 13,  61 => 12,  55 => 9,  48 => 5,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/article_module/templates/index-template.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\modules\\custom\\article_module\\templates\\index-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12);
        static $filters = array("t" => 1, "escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
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
