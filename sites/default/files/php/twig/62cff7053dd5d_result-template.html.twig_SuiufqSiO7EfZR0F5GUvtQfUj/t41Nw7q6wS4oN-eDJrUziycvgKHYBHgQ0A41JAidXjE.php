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

/* modules/custom/post_module/templates/result-template.html.twig */
class __TwigTemplate_b175b18b385e887d7db9becfb2eb0f09860897368e2fd9afa4409d06e0f96068 extends \Twig\Template
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
  <div class=\"row\">
";
        // line 13
        echo "
";
        // line 15
        echo "    <div class=\"col-md-12\">
      <h3>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("List article search"));
        echo "</h3>
      <ul class=\"list-group list-group-flush\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 19
            echo "          <li class=\"list-group-item\">
            <a title=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "node_field_data_title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\"
               link=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("post_module.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 21)]), "html", null, true);
            echo "\"
               href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "urlLink", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">
              ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </ul>
      <div class=\"ty\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 27, $this->source), "html", null, true);
        echo "</div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/post_module/templates/result-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  82 => 26,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  58 => 19,  54 => 18,  49 => 16,  46 => 15,  43 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/post_module/templates/result-template.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\modules\\custom\\post_module\\templates\\result-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18);
        static $filters = array("t" => 16, "escape" => 20);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
                ['path']
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
