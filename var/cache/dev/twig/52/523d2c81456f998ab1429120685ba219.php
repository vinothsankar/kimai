<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/head.html.twig */
class __TwigTemplate_5a596efc4635a05fecc3231206d35e90 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        // line 1
        yield "<meta charset=\"utf-8\">
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
<meta name=\"robots\" content=\"noindex,nofollow\">
<link id=\"favicon\" rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        yield "\" sizes=\"16x16\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        yield "\" sizes=\"32x32\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon-precomposed.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("touch-icon-180x180.png"), "html", null, true);
        yield "\">
<link rel=\"manifest\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        yield "\">
<meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("App\\Constants::SOFTWARE"), "html", null, true);
        yield "\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"application-name\" content=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("App\\Constants::SOFTWARE"), "html", null, true);
        yield "\">
<meta name=\"msapplication-config\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("browserconfig.xml"), "html", null, true);
        yield "\">
<meta name=\"theme-color\" content=\"#1d273b\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/head.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  95 => 16,  91 => 15,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"utf-8\">
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
<meta name=\"robots\" content=\"noindex,nofollow\">
<link id=\"favicon\" rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon-16x16.png') }}\" sizes=\"16x16\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon-32x32.png') }}\" sizes=\"32x32\">
<link rel=\"apple-touch-icon\" href=\"{{ asset('apple-touch-icon.png') }}\">
<link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('apple-touch-icon-precomposed.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('apple-touch-icon.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('touch-icon-180x180.png') }}\">
<link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\">
<meta name=\"apple-mobile-web-app-title\" content=\"{{ constant('App\\\\Constants::SOFTWARE') }}\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"application-name\" content=\"{{ constant('App\\\\Constants::SOFTWARE') }}\">
<meta name=\"msapplication-config\" content=\"{{ asset('browserconfig.xml') }}\">
<meta name=\"theme-color\" content=\"#1d273b\">
", "partials/head.html.twig", "C:\\wamp64\\www\\kimai\\templates\\partials\\head.html.twig");
    }
}
