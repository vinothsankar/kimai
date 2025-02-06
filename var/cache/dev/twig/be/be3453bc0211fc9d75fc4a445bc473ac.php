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

/* macros/webloader.html.twig */
class __TwigTemplate_0cf9cc46e2535442f8720bb9edd39232 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/webloader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/webloader.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_init_frontend_loader(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "init_frontend_loader"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "init_frontend_loader"));

            // line 2
            yield "    ";
            $context["fdow"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "firstDayOfWeek", [], "any", false, false, false, 2)) : ("monday"));
            // line 3
            yield "    ";
            $context["configurations"] = Twig\Extension\CoreExtension::merge($this->extensions['App\Twig\LocaleFormatExtensions']->getJavascriptConfiguration(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3)), ["login" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login"), "direction" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 5
(isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 5, $this->source); })()), "rightToLeft", [], "any", false, false, false, 5)) ? ("rtl") : ("ltr")), "first_dow_iso" => $this->extensions['App\Twig\Extensions']->getIsoDayByName(            // line 6
(isset($context["fdow"]) || array_key_exists("fdow", $context) ? $context["fdow"] : (function () { throw new RuntimeError('Variable "fdow" does not exist.', 6, $this->source); })()))]);
            // line 8
            yield "    <script type=\"text/javascript\">
        window.addEventListener('load', function() {
            const loader = new KimaiWebLoader(";
            // line 10
            yield json_encode((isset($context["configurations"]) || array_key_exists("configurations", $context) ? $context["configurations"] : (function () { throw new RuntimeError('Variable "configurations" does not exist.', 10, $this->source); })()));
            yield ",";
            yield json_encode($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->getJavascriptTranslations());
            yield ");
            window.kimai = loader.getKimai();
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/webloader.html.twig";
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
        return array (  86 => 10,  82 => 8,  80 => 6,  79 => 5,  77 => 3,  74 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro init_frontend_loader() %}
    {% set fdow = app.user is not null ? app.user.firstDayOfWeek : 'monday' %}
    {% set configurations = javascript_configurations(app.user, app.request.locale)|merge({
        login: path('login'),
        direction: tabler_bundle.rightToLeft ? 'rtl' : 'ltr',
        first_dow_iso: iso_day_by_name(fdow),
    }) %}
    <script type=\"text/javascript\">
        window.addEventListener('load', function() {
            const loader = new KimaiWebLoader({{ configurations|json_encode|raw }},{{ javascript_translations()|json_encode|raw }});
            window.kimai = loader.getKimai();
        });
    </script>
{% endmacro %}
", "macros/webloader.html.twig", "C:\\wamp64\\www\\kimai\\templates\\macros\\webloader.html.twig");
    }
}
