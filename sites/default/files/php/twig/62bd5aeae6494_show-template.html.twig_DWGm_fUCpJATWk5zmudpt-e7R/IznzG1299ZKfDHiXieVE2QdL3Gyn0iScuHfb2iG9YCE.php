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

      <h1 class=\"posttitle\">18 Things You Should Learn Before Moving Into a New Home</h1>

    </div>

    <!-- Begin Featured Image -->
    <img class=\"featured-image img-fluid\" src=\"assets/img/demopic/10.jpg\" alt=\"\">
    <!-- End Featured Image -->

    <!-- Begin Post Content -->
    <div class=\"article-post\">
      <p>
        Holy grail funding non-disclosure agreement advisor ramen bootstrapping ecosystem. Beta crowdfunding iteration assets business plan paradigm shift stealth mass market seed money rockstar niche market marketing buzz market.
      </p>
      <p>
        Burn rate release facebook termsheet equity technology. Interaction design rockstar network effects handshake creative startup direct mailing. Technology influencer direct mailing deployment return on investment seed round.
      </p>
      <p>
        Termsheet business model canvas user experience churn rate low hanging fruit backing iteration buyer seed money. Virality release launch party channels validation learning curve paradigm shift hypotheses conversion. Stealth leverage freemium venture startup business-to-business accelerator market.
      </p>
      <blockquote>
        Gen-z strategy long tail churn rate seed money channels user experience incubator startup partner network low hanging fruit direct mailing. Client backing success startup assets responsive web design burn rate A/B testing metrics first mover advantage conversion.
      </blockquote>
      <p>
        Freemium non-disclosure agreement lean startup bootstrapping holy grail ramen MVP iteration accelerator. Strategy market ramen leverage paradigm shift seed round entrepreneur crowdfunding social proof angel investor partner network virality.
      </p>
    </div>
    <!-- End Post Content -->

    <!-- Begin Tags -->
    <div class=\"after-post-tags\">
      <ul class=\"tags\">
        <li><a href=\"#\">Design</a></li>
        <li><a href=\"#\">Growth Mindset</a></li>
        <li><a href=\"#\">Productivity</a></li>
        <li><a href=\"#\">Personal Growth</a></li>
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

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/post_module/templates/show-template.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\modules\\custom\\post_module\\templates\\show-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
