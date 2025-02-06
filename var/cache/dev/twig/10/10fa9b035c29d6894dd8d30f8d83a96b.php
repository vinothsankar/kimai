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

/* macros/progressbar.html.twig */
class __TwigTemplate_3f8a210b6672cf98a530ce5dcf013228 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/progressbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/progressbar.html.twig"));

        // line 56
        yield "
";
        // line 87
        yield "
";
        // line 110
        yield "
";
        // line 133
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_progressbar_full($options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_full"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_full"));

            // line 2
            yield "    ";
            $context["max"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "array", true, true, false, 2) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "array", false, false, false, 2)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "array", false, false, false, 2)) : (0));
            // line 3
            yield "    ";
            $context["current"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "current", [], "array", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "current", [], "array", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "current", [], "array", false, false, false, 3)) : (0));
            // line 4
            yield "    ";
            $context["open"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "open", [], "array", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "open", [], "array", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "open", [], "array", false, false, false, 4)) : (null));
            // line 5
            yield "    ";
            $context["reverseColors"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reverseColors", [], "array", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reverseColors", [], "array", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reverseColors", [], "array", false, false, false, 5)) : (false));
            // line 6
            yield "    ";
            $context["formatter"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "array", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "array", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "array", false, false, false, 6)) : (null));
            // line 7
            yield "    ";
            $context["currency"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "currency", [], "array", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "currency", [], "array", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "currency", [], "array", false, false, false, 7)) : (null));
            // line 8
            yield "    ";
            $context["percentDecimals"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "array", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "array", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "array", false, false, false, 8)) : (1));
            // line 9
            yield "    ";
            $context["transPercentOpen"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_open", [], "array", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_open", [], "array", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_open", [], "array", false, false, false, 9)) : ("stats.percentUsedLeft"));
            // line 10
            yield "    ";
            $context["transPercentSpent"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_spent", [], "array", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_spent", [], "array", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "trans_percent_spent", [], "array", false, false, false, 10)) : ("stats.percentUsed"));
            // line 11
            yield "    ";
            $context["outerClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "array", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "array", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "array", false, false, false, 11)) : (""));
            // line 12
            yield "    ";
            if (((isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 12, $this->source); })()) == "duration")) {
                // line 13
                yield "        ";
                $context["currentFormatted"] = $this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 13, $this->source); })()));
                // line 14
                yield "        ";
                $context["maxFormatted"] = $this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 14, $this->source); })()));
                // line 15
                yield "        ";
                $context["openFormatted"] = (( !(null === (isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 15, $this->source); })()))) ? ($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 15, $this->source); })()))) : (null));
                // line 16
                yield "    ";
            } elseif ((((isset($context["formatter"]) || array_key_exists("formatter", $context) ? $context["formatter"] : (function () { throw new RuntimeError('Variable "formatter" does not exist.', 16, $this->source); })()) == "money") &&  !(null === (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 16, $this->source); })())))) {
                // line 17
                yield "        ";
                $context["currentFormatted"] = $this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 17, $this->source); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 17, $this->source); })()));
                // line 18
                yield "        ";
                $context["maxFormatted"] = $this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 18, $this->source); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 18, $this->source); })()));
                // line 19
                yield "        ";
                $context["openFormatted"] = (( !(null === (isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 19, $this->source); })()))) ? ($this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 19, $this->source); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 19, $this->source); })()))) : (null));
                // line 20
                yield "    ";
            } else {
                // line 21
                yield "        ";
                $context["currentFormatted"] = (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 21, $this->source); })());
                // line 22
                yield "        ";
                $context["maxFormatted"] = (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 22, $this->source); })());
                // line 23
                yield "        ";
                $context["openFormatted"] = (( !(null === (isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 23, $this->source); })()))) ? ((isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 23, $this->source); })())) : (null));
                // line 24
                yield "    ";
            }
            // line 25
            yield "    ";
            $context["percentReached"] = 0;
            // line 26
            yield "    ";
            if (((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 26, $this->source); })()) > 0)) {
                // line 27
                yield "        ";
                $context["percentReached"] = ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 27, $this->source); })()) / ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 27, $this->source); })()) / 100));
                // line 28
                yield "    ";
            }
            // line 29
            yield "    ";
            $context["width"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 29, $this->source); })()), 1, ".", "");
            // line 30
            yield "
    ";
            // line 31
            if (((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 31, $this->source); })()) > 100)) {
                // line 32
                yield "        ";
                $context["width"] = 100;
                // line 33
                yield "    ";
            }
            // line 34
            yield "
    <div class=\"progress-group ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["outerClass"]) || array_key_exists("outerClass", $context) ? $context["outerClass"] : (function () { throw new RuntimeError('Variable "outerClass" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\">
        <div class=\"progress-title\">
            <span class=\"progress-text\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentFormatted"]) || array_key_exists("currentFormatted", $context) ? $context["currentFormatted"] : (function () { throw new RuntimeError('Variable "currentFormatted" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "
            </span>
            <span class=\"progress-number text-end\">
                <strong>
                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxFormatted"]) || array_key_exists("maxFormatted", $context) ? $context["maxFormatted"] : (function () { throw new RuntimeError('Variable "maxFormatted" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "
                </strong>
            </span>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->getProgressbarClass((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 47, $this->source); })()), (isset($context["reverseColors"]) || array_key_exists("reverseColors", $context) ? $context["reverseColors"] : (function () { throw new RuntimeError('Variable "reverseColors" does not exist.', 47, $this->source); })())), "html", null, true);
            yield "\" role=\"progressbar\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "%\"></div>
        </div>
        ";
            // line 49
            if (( !(null === (isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 49, $this->source); })())) && ((isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 49, $this->source); })()) > 0))) {
                // line 50
                yield "            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["transPercentOpen"]) || array_key_exists("transPercentOpen", $context) ? $context["transPercentOpen"] : (function () { throw new RuntimeError('Variable "transPercentOpen" does not exist.', 50, $this->source); })()), ["%percent%" => $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 50, $this->source); })()), (isset($context["percentDecimals"]) || array_key_exists("percentDecimals", $context) ? $context["percentDecimals"] : (function () { throw new RuntimeError('Variable "percentDecimals" does not exist.', 50, $this->source); })())), "%left%" => (isset($context["openFormatted"]) || array_key_exists("openFormatted", $context) ? $context["openFormatted"] : (function () { throw new RuntimeError('Variable "openFormatted" does not exist.', 50, $this->source); })())]), "html", null, true);
                yield "</small>
        ";
            } else {
                // line 52
                yield "            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["transPercentSpent"]) || array_key_exists("transPercentSpent", $context) ? $context["transPercentSpent"] : (function () { throw new RuntimeError('Variable "transPercentSpent" does not exist.', 52, $this->source); })()), ["%percent%" => $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 52, $this->source); })()), (isset($context["percentDecimals"]) || array_key_exists("percentDecimals", $context) ? $context["percentDecimals"] : (function () { throw new RuntimeError('Variable "percentDecimals" does not exist.', 52, $this->source); })()))]), "html", null, true);
                yield "</small>
        ";
            }
            // line 54
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function macro_progressbar($max = null, $current = null, $title = null, $subTitle = null, $reverseColors = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "max" => $max,
            "current" => $current,
            "title" => $title,
            "subTitle" => $subTitle,
            "reverseColors" => $reverseColors,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar"));

            // line 58
            yield "    ";
            $context["percentReached"] = 0;
            // line 59
            yield "    ";
            if (((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 59, $this->source); })()) > 0)) {
                // line 60
                yield "        ";
                $context["percentReached"] = ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })()) / ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 60, $this->source); })()) / 100));
                // line 61
                yield "    ";
            }
            // line 62
            yield "    ";
            $context["width"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 62, $this->source); })()), 1, ".", "");
            // line 63
            yield "
    ";
            // line 64
            if (((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 64, $this->source); })()) > 100)) {
                // line 65
                yield "        ";
                $context["width"] = 100;
                // line 66
                yield "    ";
            }
            // line 67
            yield "
    <div class=\"progress-group\">
        <div class=\"progress-title\">
            <span class=\"progress-text\">
                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "
                ";
            // line 72
            if ((((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 72, $this->source); })()) >= 0) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["subTitle"]) || array_key_exists("subTitle", $context) ? $context["subTitle"] : (function () { throw new RuntimeError('Variable "subTitle" does not exist.', 72, $this->source); })())))) {
                yield " &ndash; ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 72, $this->source); })()), 2), "html", null, true);
                yield "%";
            }
            // line 73
            yield "            </span>
            <span class=\"progress-number text-end\">
                ";
            // line 75
            if ((((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 75, $this->source); })()) >= 0) && Twig\Extension\CoreExtension::testEmpty((isset($context["subTitle"]) || array_key_exists("subTitle", $context) ? $context["subTitle"] : (function () { throw new RuntimeError('Variable "subTitle" does not exist.', 75, $this->source); })())))) {
                // line 76
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 76, $this->source); })()), 2), "html", null, true);
                yield "%
                ";
            } elseif ( !Twig\Extension\CoreExtension::testEmpty(            // line 77
(isset($context["subTitle"]) || array_key_exists("subTitle", $context) ? $context["subTitle"] : (function () { throw new RuntimeError('Variable "subTitle" does not exist.', 77, $this->source); })()))) {
                // line 78
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subTitle"]) || array_key_exists("subTitle", $context) ? $context["subTitle"] : (function () { throw new RuntimeError('Variable "subTitle" does not exist.', 78, $this->source); })()), "html", null, true);
                yield "
                ";
            }
            // line 80
            yield "            </span>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->getProgressbarClass((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 83, $this->source); })()), (isset($context["reverseColors"]) || array_key_exists("reverseColors", $context) ? $context["reverseColors"] : (function () { throw new RuntimeError('Variable "reverseColors" does not exist.', 83, $this->source); })())), "html", null, true);
            yield "\" role=\"progressbar\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "%\"></div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function macro_progressbar_small($max = null, $current = null, $leftValue = null, $leftFormatted = null, $reverseColors = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "max" => $max,
            "current" => $current,
            "leftValue" => $leftValue,
            "leftFormatted" => $leftFormatted,
            "reverseColors" => $reverseColors,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_small"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_small"));

            // line 89
            yield "    ";
            $context["percentReached"] = 0;
            // line 90
            yield "    ";
            if (((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 90, $this->source); })()) > 0)) {
                // line 91
                yield "        ";
                $context["percentReached"] = ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 91, $this->source); })()) / ((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 91, $this->source); })()) / 100));
                // line 92
                yield "    ";
            }
            // line 93
            yield "    ";
            $context["width"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 93, $this->source); })()), 1, ".", "");
            // line 94
            yield "
    ";
            // line 95
            if (((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 95, $this->source); })()) > 100)) {
                // line 96
                yield "        ";
                $context["width"] = 100;
                // line 97
                yield "    ";
            }
            // line 98
            yield "
    <div class=\"progress-group\">
        <div class=\"progress progress-sm\">
            <div class=\"progress-bar ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->getProgressbarClass((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 101, $this->source); })()), (isset($context["reverseColors"]) || array_key_exists("reverseColors", $context) ? $context["reverseColors"] : (function () { throw new RuntimeError('Variable "reverseColors" does not exist.', 101, $this->source); })())), "html", null, true);
            yield "\" role=\"progressbar\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "%\"></div>
        </div>
        ";
            // line 103
            if (( !(null === (isset($context["leftValue"]) || array_key_exists("leftValue", $context) ? $context["leftValue"] : (function () { throw new RuntimeError('Variable "leftValue" does not exist.', 103, $this->source); })())) && ((isset($context["leftValue"]) || array_key_exists("leftValue", $context) ? $context["leftValue"] : (function () { throw new RuntimeError('Variable "leftValue" does not exist.', 103, $this->source); })()) > 0))) {
                // line 104
                yield "            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.percentUsedLeft", ["%percent%" => $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 104, $this->source); })()), 0), "%left%" => (isset($context["leftFormatted"]) || array_key_exists("leftFormatted", $context) ? $context["leftFormatted"] : (function () { throw new RuntimeError('Variable "leftFormatted" does not exist.', 104, $this->source); })())]), "html", null, true);
                yield "</small>
        ";
            } else {
                // line 106
                yield "            <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.percentUsed", ["%percent%" => $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percentReached"]) || array_key_exists("percentReached", $context) ? $context["percentReached"] : (function () { throw new RuntimeError('Variable "percentReached" does not exist.', 106, $this->source); })()), 0)]), "html", null, true);
                yield "</small>
        ";
            }
            // line 108
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function macro_progressbar_budget($budgetStatisticModel = null, $currency = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "budgetStatisticModel" => $budgetStatisticModel,
            "currency" => $currency,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_budget"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_budget"));

            // line 116
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 116, $this->source); })()), "hasBudget", [], "method", false, false, false, 116)) {
                // line 117
                yield "        ";
                $context["options"] = ["max" => CoreExtension::getAttribute($this->env, $this->source,                 // line 118
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 118, $this->source); })()), "getBudget", [], "method", false, false, false, 118), "current" => CoreExtension::getAttribute($this->env, $this->source,                 // line 119
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 119, $this->source); })()), "getBudgetSpent", [], "method", false, false, false, 119), "open" => CoreExtension::getAttribute($this->env, $this->source,                 // line 120
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 120, $this->source); })()), "getBudgetOpen", [], "method", false, false, false, 120), "format" => "money", "currency" =>                 // line 122
(isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 122, $this->source); })())];
                // line 124
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 124, $this->source); })()), "isMonthlyBudget", [], "method", false, false, false, 124)) {
                    // line 125
                    yield "            ";
                    $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 125, $this->source); })()), ["trans_percent_open" => "stats.percentUsedLeft_month", "trans_percent_spent" => "stats.percentUsed_month"]);
                    // line 129
                    yield "        ";
                }
                // line 130
                yield "        ";
                yield $this->getTemplateForMacro("macro_progressbar_full", $context, 130, $this->getSourceContext())->macro_progressbar_full(...[(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 130, $this->source); })())]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 137
    public function macro_progressbar_timebudget($budgetStatisticModel = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "budgetStatisticModel" => $budgetStatisticModel,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_timebudget"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progressbar_timebudget"));

            // line 138
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 138, $this->source); })()), "hasTimeBudget", [], "method", false, false, false, 138)) {
                // line 139
                yield "        ";
                $context["options"] = ["max" => CoreExtension::getAttribute($this->env, $this->source,                 // line 140
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 140, $this->source); })()), "getTimeBudget", [], "method", false, false, false, 140), "current" => CoreExtension::getAttribute($this->env, $this->source,                 // line 141
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 141, $this->source); })()), "getTimeBudgetSpent", [], "method", false, false, false, 141), "open" => CoreExtension::getAttribute($this->env, $this->source,                 // line 142
(isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 142, $this->source); })()), "getTimeBudgetOpen", [], "method", false, false, false, 142), "format" => "duration"];
                // line 145
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetStatisticModel"]) || array_key_exists("budgetStatisticModel", $context) ? $context["budgetStatisticModel"] : (function () { throw new RuntimeError('Variable "budgetStatisticModel" does not exist.', 145, $this->source); })()), "isMonthlyBudget", [], "method", false, false, false, 145)) {
                    // line 146
                    yield "            ";
                    $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 146, $this->source); })()), ["trans_percent_open" => "stats.percentUsedLeft_month", "trans_percent_spent" => "stats.percentUsed_month"]);
                    // line 150
                    yield "        ";
                }
                // line 151
                yield "        ";
                yield $this->getTemplateForMacro("macro_progressbar_full", $context, 151, $this->getSourceContext())->macro_progressbar_full(...[(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 151, $this->source); })())]);
                yield "
    ";
            }
            
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
        return "macros/progressbar.html.twig";
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
        return array (  529 => 151,  526 => 150,  523 => 146,  520 => 145,  518 => 142,  517 => 141,  516 => 140,  514 => 139,  511 => 138,  493 => 137,  477 => 130,  474 => 129,  471 => 125,  468 => 124,  466 => 122,  465 => 120,  464 => 119,  463 => 118,  461 => 117,  458 => 116,  439 => 115,  426 => 108,  420 => 106,  414 => 104,  412 => 103,  403 => 101,  398 => 98,  395 => 97,  392 => 96,  390 => 95,  387 => 94,  384 => 93,  381 => 92,  378 => 91,  375 => 90,  372 => 89,  350 => 88,  330 => 83,  325 => 80,  319 => 78,  317 => 77,  312 => 76,  310 => 75,  306 => 73,  300 => 72,  296 => 71,  290 => 67,  287 => 66,  284 => 65,  282 => 64,  279 => 63,  276 => 62,  273 => 61,  270 => 60,  267 => 59,  264 => 58,  242 => 57,  229 => 54,  223 => 52,  217 => 50,  215 => 49,  206 => 47,  198 => 42,  191 => 38,  185 => 35,  182 => 34,  179 => 33,  176 => 32,  174 => 31,  171 => 30,  168 => 29,  165 => 28,  162 => 27,  159 => 26,  156 => 25,  153 => 24,  150 => 23,  147 => 22,  144 => 21,  141 => 20,  138 => 19,  135 => 18,  132 => 17,  129 => 16,  126 => 15,  123 => 14,  120 => 13,  117 => 12,  114 => 11,  111 => 10,  108 => 9,  105 => 8,  102 => 7,  99 => 6,  96 => 5,  93 => 4,  90 => 3,  87 => 2,  69 => 1,  57 => 133,  54 => 110,  51 => 87,  48 => 56,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro progressbar_full(options) %}
    {% set max = options['max'] ?? 0 %}
    {% set current = options['current'] ?? 0 %}
    {% set open = options['open'] ?? null %}
    {% set reverseColors = options['reverseColors'] ?? false %}
    {% set formatter = options['format'] ?? null %}
    {% set currency = options['currency'] ?? null %}
    {% set percentDecimals = options['decimals'] ?? 1 %}
    {% set transPercentOpen = options['trans_percent_open'] ?? 'stats.percentUsedLeft' %}
    {% set transPercentSpent = options['trans_percent_spent'] ?? 'stats.percentUsed' %}
    {% set outerClass = options['class'] ?? '' %}
    {% if formatter == 'duration' %}
        {% set currentFormatted = current|duration %}
        {% set maxFormatted = max|duration %}
        {% set openFormatted = open is not null ? open|duration : null %}
    {% elseif formatter == 'money' and currency is not null %}
        {% set currentFormatted = current|money(currency) %}
        {% set maxFormatted = max|money(currency) %}
        {% set openFormatted = open is not null ? open|money(currency) : null %}
    {% else %}
        {% set currentFormatted = current %}
        {% set maxFormatted = max %}
        {% set openFormatted = open is not null ? open : null %}
    {% endif %}
    {% set percentReached = 0 %}
    {% if max > 0 %}
        {% set percentReached = (current / (max / 100)) %}
    {% endif %}
    {% set width = percentReached|number_format(1, '.', '') %}

    {% if width > 100 %}
        {% set width = 100 %}
    {% endif %}

    <div class=\"progress-group {{ outerClass }}\">
        <div class=\"progress-title\">
            <span class=\"progress-text\">
                {{ currentFormatted }}
            </span>
            <span class=\"progress-number text-end\">
                <strong>
                    {{ maxFormatted }}
                </strong>
            </span>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar {{ progressbar_color(percentReached, reverseColors) }}\" role=\"progressbar\" aria-valuenow=\"{{ width }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ width }}%\"></div>
        </div>
        {% if open is not null and open > 0 %}
            <small>{{ transPercentOpen|trans({'%percent%': percentReached|number_format(percentDecimals), '%left%': openFormatted}) }}</small>
        {% else %}
            <small>{{ transPercentSpent|trans({'%percent%': percentReached|number_format(percentDecimals)}) }}</small>
        {% endif %}
    </div>
{% endmacro %}

{% macro progressbar(max, current, title, subTitle, reverseColors) %}
    {% set percentReached = 0 %}
    {% if max > 0 %}
        {% set percentReached = (current / (max / 100)) %}
    {% endif %}
    {% set width = percentReached|number_format(1, '.', '') %}

    {% if width > 100 %}
        {% set width = 100 %}
    {% endif %}

    <div class=\"progress-group\">
        <div class=\"progress-title\">
            <span class=\"progress-text\">
                {{ title }}
                {% if percentReached >= 0 and subTitle is not empty %} &ndash; {{ percentReached|number_format(2) }}%{% endif %}
            </span>
            <span class=\"progress-number text-end\">
                {% if percentReached >= 0 and subTitle is empty %}
                    {{ percentReached|number_format(2) }}%
                {% elseif subTitle is not empty %}
                    {{ subTitle }}
                {% endif %}
            </span>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar {{ progressbar_color(percentReached, reverseColors) }}\" role=\"progressbar\" aria-valuenow=\"{{ width }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ width }}%\"></div>
        </div>
    </div>
{% endmacro %}

{% macro progressbar_small(max, current, leftValue, leftFormatted, reverseColors) %}
    {% set percentReached = 0 %}
    {% if max > 0 %}
        {% set percentReached = (current / (max / 100)) %}
    {% endif %}
    {% set width = percentReached|number_format(1, '.', '') %}

    {% if width > 100 %}
        {% set width = 100 %}
    {% endif %}

    <div class=\"progress-group\">
        <div class=\"progress progress-sm\">
            <div class=\"progress-bar {{ progressbar_color(percentReached, reverseColors) }}\" role=\"progressbar\" aria-valuenow=\"{{ width }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ width }}%\"></div>
        </div>
        {% if leftValue is not null and leftValue > 0 %}
            <small>{{ 'stats.percentUsedLeft'|trans({'%percent%': percentReached|number_format(0), '%left%': leftFormatted}) }}</small>
        {% else %}
            <small>{{ 'stats.percentUsed'|trans({'%percent%': percentReached|number_format(0)}) }}</small>
        {% endif %}
    </div>
{% endmacro %}

{#
    @param \\App\\Model\\BudgetStatisticModelInterface budgetStatisticModel
    @param string currency
#}
{% macro progressbar_budget(budgetStatisticModel, currency) %}
    {% if budgetStatisticModel.hasBudget() %}
        {% set options = {
            'max': budgetStatisticModel.getBudget(),
            'current': budgetStatisticModel.getBudgetSpent(),
            'open': (budgetStatisticModel.getBudgetOpen()),
            'format': 'money',
            'currency': currency,
        } %}
        {% if budgetStatisticModel.isMonthlyBudget() %}
            {% set options = options|merge({
                'trans_percent_open': 'stats.percentUsedLeft_month',
                'trans_percent_spent': 'stats.percentUsed_month',
            }) %}
        {% endif %}
        {{ _self.progressbar_full(options) }}
    {% endif %}
{% endmacro %}

{#
    @param \\App\\Model\\BudgetStatisticModelInterface budgetStatisticModel
#}
{% macro progressbar_timebudget(budgetStatisticModel) %}
    {% if budgetStatisticModel.hasTimeBudget() %}
        {% set options = {
            'max': budgetStatisticModel.getTimeBudget(),
            'current': budgetStatisticModel.getTimeBudgetSpent(),
            'open': (budgetStatisticModel.getTimeBudgetOpen()),
            'format': 'duration',
        } %}
        {% if budgetStatisticModel.isMonthlyBudget() %}
            {% set options = options|merge({
                'trans_percent_open': 'stats.percentUsedLeft_month',
                'trans_percent_spent': 'stats.percentUsed_month',
            }) %}
        {% endif %}
        {{ _self.progressbar_full(options) }}
    {% endif %}
{% endmacro %}
", "macros/progressbar.html.twig", "C:\\wamp64\\www\\kimai\\templates\\macros\\progressbar.html.twig");
    }
}
