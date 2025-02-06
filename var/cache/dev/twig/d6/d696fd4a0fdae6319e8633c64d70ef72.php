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

/* macros/widgets.html.twig */
class __TwigTemplate_b17d50b89c825c5366cd8a74b340848f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/widgets.html.twig"));

        // line 86
        yield "
";
        // line 94
        yield "
";
        // line 98
        yield "
";
        // line 112
        yield "
";
        // line 116
        yield "
";
        // line 120
        yield "
";
        // line 124
        yield "
";
        // line 144
        yield "
";
        // line 150
        yield "
";
        // line 158
        yield "
";
        // line 180
        yield "
";
        // line 199
        yield "
";
        // line 207
        yield "
";
        // line 212
        yield "
";
        // line 217
        yield "
";
        // line 227
        yield "
";
        // line 235
        yield "
";
        // line 243
        yield "
";
        // line 247
        yield "
";
        // line 251
        yield "
";
        // line 255
        yield "
";
        // line 260
        yield "
";
        // line 275
        yield "
";
        // line 280
        yield "
";
        // line 285
        yield "
";
        // line 292
        yield "
";
        // line 296
        yield "
";
        // line 302
        yield "
";
        // line 306
        yield "
";
        // line 312
        yield "
";
        // line 323
        yield "
";
        // line 331
        yield "
";
        // line 384
        yield "
";
        // line 422
        yield "
";
        // line 433
        yield "
";
        // line 441
        yield "
";
        // line 449
        yield "
";
        // line 463
        yield "
";
        // line 471
        yield "
";
        // line 485
        yield "
";
        // line 493
        yield "
";
        // line 507
        yield "
";
        // line 515
        yield "
";
        // line 529
        yield "
";
        // line 544
        yield "
";
        // line 552
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_search_filter($route = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "route" => $route,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "search_filter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "search_filter"));

            // line 2
            $context["opts"] = ["performSearch" => 1];
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "begin", [], "any", true, true, false, 3) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "end", [], "any", true, true, false, 3))) {
                // line 4
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 4, $this->source); })()), ["daterange" => (($this->extensions['App\Twig\Extensions']->formatReportDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "begin", [], "any", false, false, false, 4)) . " - ") . $this->extensions['App\Twig\Extensions']->formatReportDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 4, $this->source); })()), "end", [], "any", false, false, false, 4)))]);
                // line 5
                yield "    ";
            }
            // line 6
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "customer", [], "any", true, true, false, 6)) {
                // line 7
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 7, $this->source); })()), ["customers[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), "customer", [], "any", false, false, false, 7)]);
                // line 8
                yield "    ";
            }
            // line 9
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "project", [], "any", true, true, false, 9)) {
                // line 10
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 10, $this->source); })()), ["projects[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()), "project", [], "any", false, false, false, 10)]);
                // line 11
                yield "    ";
            }
            // line 12
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "activity", [], "any", true, true, false, 12)) {
                // line 13
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 13, $this->source); })()), ["activities[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "activity", [], "any", false, false, false, 13)]);
                // line 14
                yield "    ";
            }
            // line 15
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "user", [], "any", true, true, false, 15)) {
                // line 16
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 16, $this->source); })()), ["users[]" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)]);
                // line 17
                yield "    ";
            }
            // line 18
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "preview", [], "any", true, true, false, 18)) {
                // line 19
                yield "        ";
                $context["opts"] = Twig\Extension\CoreExtension::merge((isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 19, $this->source); })()), ["preview" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()), "preview", [], "any", false, false, false, 19)]);
                // line 20
                yield "    ";
            }
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()), (isset($context["opts"]) || array_key_exists("opts", $context) ? $context["opts"] : (function () { throw new RuntimeError('Variable "opts" does not exist.', 21, $this->source); })())), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_page_actions($actions = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "actions" => $actions,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_actions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_actions"));

            // line 25
            $context["btnClasses"] = "btn-primary";
            // line 26
            yield "    ";
            $context["helpClasses"] = "";
            // line 27
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 27, $this->source); })()), "isNavbarOverlapping", [], "method", false, false, false, 27)) {
                // line 28
                yield "        ";
                $context["helpClasses"] = "btn-dark";
                // line 29
                yield "    ";
            } elseif ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 29, $this->source); })()), "isDarkMode", [], "method", false, false, false, 29)) {
                // line 30
                yield "        ";
                $context["btnClasses"] = "btn-white";
                // line 31
                yield "    ";
            }
            // line 32
            yield "    ";
            $context["later"] = [];
            // line 33
            yield "    ";
            $context["help"] = null;
            // line 34
            yield "    <div class=\"page-actions\">
        <div class=\"pa-desktop d-none d-sm-inline-flex btn-list\">
        ";
            // line 36
            yield $this->getTemplateForMacro("macro_actions", $context, 36, $this->getSourceContext())->macro_actions(...[(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 36, $this->source); })()), ["large" => true, "button_class" => (isset($context["btnClasses"]) || array_key_exists("btnClasses", $context) ? $context["btnClasses"] : (function () { throw new RuntimeError('Variable "btnClasses" does not exist.', 36, $this->source); })())]]);
            yield "
        ";
            // line 37
            if ( !(null === (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 37, $this->source); })()))) {
                // line 38
                yield "            ";
                $context["help"] = Twig\Extension\CoreExtension::merge((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 38, $this->source); })()), ["class" => (((isset($context["helpClasses"]) || array_key_exists("helpClasses", $context) ? $context["helpClasses"] : (function () { throw new RuntimeError('Variable "helpClasses" does not exist.', 38, $this->source); })()) . " action-help ") . ((CoreExtension::getAttribute($this->env, $this->source, ($context["help"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help"] ?? null), "class", [], "any", false, false, false, 38), "")) : ("")))]);
                // line 39
                yield "            ";
                yield $this->getTemplateForMacro("macro_action_button", $context, 39, $this->getSourceContext())->macro_action_button(...["help", (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 39, $this->source); })())]);
                yield "
        ";
            }
            // line 41
            yield "        </div>
        <div class=\"pa-mobile d-inline-flex d-sm-none btn-list\">
            ";
            // line 43
            $context["btnClass"] = "btn btn-icon ";
            // line 44
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 44, $this->source); })()), "isNavbarOverlapping", [], "method", false, false, false, 44)) {
                // line 45
                yield "                ";
                $context["btnClass"] = "btn btn-icon btn-dark";
                // line 46
                yield "            ";
            } elseif ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 46, $this->source); })()), "isDarkMode", [], "method", false, false, false, 46)) {
                // line 47
                yield "                ";
                $context["btnClass"] = "btn btn-icon btn-white";
                // line 48
                yield "            ";
            }
            // line 49
            yield "            ";
            yield $this->getTemplateForMacro("macro_table_actions", $context, 49, $this->getSourceContext())->macro_table_actions(...[(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 49, $this->source); })()), (isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 49, $this->source); })())]);
            yield "
        </div>
    </div>";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function macro_actions($actions = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "actions" => $actions,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            // line 55
            $context["large"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "large", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "large", [], "any", false, false, false, 55)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "large", [], "any", false, false, false, 55)) : (true));
            // line 56
            yield "    ";
            $context["btnClasses"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "button_class", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "button_class", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "button_class", [], "any", false, false, false, 56)) : ("btn-primary"));
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["icon"] => $context["values"]) {
                // line 58
                yield "        ";
                if (CoreExtension::inFilter("help", $context["icon"])) {
                    // line 59
                    yield "            ";
                    $context["help"] = $context["values"];
                    // line 60
                    yield "        ";
                } elseif ((CoreExtension::inFilter("divider", $context["icon"]) && (null === $context["values"]))) {
                    // line 61
                    yield "            ";
                    // line 62
                    yield "        ";
                } else {
                    // line 63
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", true, true, false, 63) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", false, false, false, 63)) > 0))) {
                        // line 64
                        yield "                <div class=\"dropdown\">
                    <button type=\"button\" class=\"btn ";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnClasses"]) || array_key_exists("btnClasses", $context) ? $context["btnClasses"] : (function () { throw new RuntimeError('Variable "btnClasses" does not exist.', 65, $this->source); })()), "html", null, true);
                        yield " dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
                        // line 66
                        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon($context["icon"], true);
                        if ((isset($context["large"]) || array_key_exists("large", $context) ? $context["large"] : (function () { throw new RuntimeError('Variable "large" does not exist.', 66, $this->source); })())) {
                            yield " ";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "any", true, true, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "any", false, false, false, 66)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["icon"]), "html", null, true)));
                        }
                        // line 67
                        yield "                    </button>
                    <div class=\"dropdown-menu\">";
                        // line 69
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", false, false, false, 69));
                        foreach ($context['_seq'] as $context["icon"] => $context["values"]) {
                            // line 70
                            yield "                            ";
                            $context["values"] = Twig\Extension\CoreExtension::merge($context["values"], ["class" => ((("dropdown-item action-" . $context["icon"]) . " ") . ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", false, false, false, 70), "")) : ("")))]);
                            // line 71
                            yield "                            ";
                            yield $this->getTemplateForMacro("macro_action_button", $context, 71, $this->getSourceContext())->macro_action_button(...[false, $context["values"], false]);
                            yield "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['icon'], $context['values'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        yield "                    </div>
                </div>
            ";
                    } else {
                        // line 76
                        yield "                ";
                        $context["values"] = Twig\Extension\CoreExtension::merge($context["values"], ["combined" => (isset($context["large"]) || array_key_exists("large", $context) ? $context["large"] : (function () { throw new RuntimeError('Variable "large" does not exist.', 76, $this->source); })()), "class" => (((((isset($context["btnClasses"]) || array_key_exists("btnClasses", $context) ? $context["btnClasses"] : (function () { throw new RuntimeError('Variable "btnClasses" does not exist.', 76, $this->source); })()) . " action-") . $context["icon"]) . " ") . ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", false, false, false, 76), "")) : ("")))]);
                        // line 77
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_action_button", $context, 77, $this->getSourceContext())->macro_action_button(...[$context["icon"], $context["values"]]);
                        yield "
            ";
                    }
                    // line 79
                    yield "        ";
                }
                // line 80
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['icon'], $context['values'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function macro_page_header($title = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_header"));

            // line 84
            yield "    <h2 class=\"page-header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 84, $this->source); })())), "html", null, true);
            yield "</h2>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function macro_label_boolean($visible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "visible" => $visible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_boolean"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_boolean"));

            // line 88
            yield "    ";
            if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new RuntimeError('Variable "visible" does not exist.', 88, $this->source); })())) {
                // line 89
                yield "        ";
                yield $this->getTemplateForMacro("macro_label", $context, 89, $this->getSourceContext())->macro_label(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes"), "success"]);
                yield "
    ";
            } else {
                // line 91
                yield "        ";
                yield $this->getTemplateForMacro("macro_label", $context, 91, $this->getSourceContext())->macro_label(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no"), "default"]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function macro_label_visible($visible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "visible" => $visible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_visible"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_visible"));

            // line 96
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_boolean", $context, 96, $this->getSourceContext())->macro_label_boolean(...[(isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new RuntimeError('Variable "visible" does not exist.', 96, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function macro_label_role($role = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "role" => $role,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_role"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_role"));

            // line 100
            yield "    ";
            $context["color"] = "primary";
            // line 101
            yield "    ";
            if (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 101, $this->source); })()) == "ROLE_SUPER_ADMIN")) {
                // line 102
                yield "        ";
                $context["color"] = "danger";
                // line 103
                yield "    ";
            } elseif (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 103, $this->source); })()) == "ROLE_ADMIN")) {
                // line 104
                yield "        ";
                $context["color"] = "warning";
                // line 105
                yield "    ";
            } elseif (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 105, $this->source); })()) == "ROLE_TEAMLEAD")) {
                // line 106
                yield "        ";
                $context["color"] = "success";
                // line 107
                yield "    ";
            } elseif (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 107, $this->source); })()) == "ROLE_USER")) {
                // line 108
                yield "        ";
                $context["color"] = "gray";
                // line 109
                yield "    ";
            }
            // line 110
            yield "    ";
            yield $this->getTemplateForMacro("macro_label", $context, 110, $this->getSourceContext())->macro_label(...[$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 110, $this->source); })())), (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 110, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 113
    public function macro_username($user = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "user" => $user,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "username"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "username"));

            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "displayName", [], "any", false, false, false, 114), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function macro_label_user($user = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "user" => $user,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_user"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_user"));

            // line 118
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color", $context, 118, $this->getSourceContext())->macro_label_color(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "displayName", [], "any", false, false, false, 118), $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "color", [], "any", false, false, false, 118), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "displayName", [], "any", false, false, false, 118))]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function macro_label_team($team = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "team" => $team,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_team"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_team"));

            // line 122
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color", $context, 122, $this->getSourceContext())->macro_label_color(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "color", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122))]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 125
    public function macro_user_avatar($user = null, $tooltip = null, $class = null, $badge = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "user" => $user,
            "tooltip" => $tooltip,
            "class" => $class,
            "badge" => $badge,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar"));

            // line 126
            yield "    ";
            $context["avatar"] = null;
            // line 127
            yield "    ";
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "avatar", [], "any", false, false, false, 127)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["kimai_config"]) || array_key_exists("kimai_config", $context) ? $context["kimai_config"] : (function () { throw new RuntimeError('Variable "kimai_config" does not exist.', 127, $this->source); })()), "themeAllowAvatarUrls", [], "any", false, false, false, 127))) {
                // line 128
                yield "        ";
                $context["avatar"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "avatar", [], "any", false, false, false, 128), "avatars");
                // line 129
                yield "    ";
            }
            // line 130
            yield "    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "enabled", [], "any", false, false, false, 130)) {
                // line 131
                yield "        ";
                $context["badge"] = "danger";
                // line 132
                yield "    ";
            }
            // line 133
            yield "    ";
            $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "color", [], "any", false, false, false, 133), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "displayName", [], "any", false, false, false, 133));
            // line 134
            yield "    <span class=\"avatar ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 134, $this->source); })()), "html", null, true);
            yield "\"";
            // line 135
            if ( !((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 135, $this->source); })()) === false)) {
                yield " data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("tooltip", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 135, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "displayName", [], "any", false, false, false, 135))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "displayName", [], "any", false, false, false, 135))), "html", null, true);
                yield "\"";
            }
            // line 136
            if ( !(null === (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 136, $this->source); })()))) {
                // line 137
                yield "            style=\"background-image: url(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 137, $this->source); })()), "html", null, true);
                yield ")\">&nbsp;
        ";
            } else {
                // line 139
                yield "            style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 139, $this->source); })()), "html", null, true);
                yield "; color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 139, $this->source); })())), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "initials", [], "any", false, false, false, 139), "html", null, true);
                yield "
        ";
            }
            // line 141
            if ( !(null === (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 141, $this->source); })()))) {
                yield "<span class=\"badge bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 141, $this->source); })()), "html", null, true);
                yield "\"></span>";
            }
            // line 142
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 145
    public function macro_avatar($initials = null, $color = null, $tooltip = null, $class = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "initials" => $initials,
            "color" => $color,
            "tooltip" => $tooltip,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar"));

            // line 146
            yield "    ";
            $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 146, $this->source); })()), (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 146, $this->source); })()));
            // line 147
            yield "    <span class=\"avatar ";
            yield ($context["class"] ?? "");
            yield "\" style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 147, $this->source); })())), "html", null, true);
            yield "\"";
            // line 148
            if ( !((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 148, $this->source); })()) === null)) {
                yield " data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 148, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_avatar_deleted($tooltip = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "tooltip" => $tooltip,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar_deleted"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar_deleted"));

            // line 152
            yield "    ";
            $context["initials"] = ($context["tooltip"] ?? "??");
            // line 153
            yield "    ";
            $context["tooltip"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deleted");
            // line 154
            yield "    ";
            $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(null, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 154, $this->source); })()));
            // line 155
            yield "    <span class=\"avatar ";
            yield ($context["class"] ?? "");
            yield "\" style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 155, $this->source); })()), "html", null, true);
            yield "; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 155, $this->source); })())), "html", null, true);
            yield "\"";
            // line 156
            if ( !((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 156, $this->source); })()) === null)) {
                yield " data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 156, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 156, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 162
    public function macro_label_activity($activity = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "activity" => $activity,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_activity"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_activity"));

            // line 163
            yield "    ";
            $context["inherit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", true, true, false, 163) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", false, false, false, 163)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", false, false, false, 163)) : (true));
            // line 164
            yield "    ";
            $context["isVisible"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 164, $this->source); })()), "visible", [], "any", false, false, false, 164);
            // line 165
            yield "    ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 165, $this->source); })()), "color", [], "any", false, false, false, 165);
            // line 166
            yield "    ";
            if (((Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 166, $this->source); })())) && (isset($context["inherit"]) || array_key_exists("inherit", $context) ? $context["inherit"] : (function () { throw new RuntimeError('Variable "inherit" does not exist.', 166, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 166, $this->source); })()), "project", [], "any", false, false, false, 166)))) {
                // line 167
                yield "        ";
                $context["color"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 167), "color", [], "any", true, true, false, 167) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 167), "color", [], "any", false, false, false, 167)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 167), "color", [], "any", false, false, false, 167)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 167, $this->source); })()), "project", [], "any", false, false, false, 167), "customer", [], "any", false, false, false, 167), "color", [], "any", false, false, false, 167)));
                // line 168
                yield "    ";
            }
            // line 169
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 169, $this->source); })()))) {
                // line 170
                yield "        ";
                $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 170, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 170, $this->source); })()), "name", [], "any", false, false, false, 170));
                // line 171
                yield "    ";
            }
            // line 172
            yield "    ";
            if (((isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 172, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 172, $this->source); })()), "project", [], "any", false, false, false, 172)))) {
                // line 173
                yield "        ";
                $context["isVisible"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 173, $this->source); })()), "project", [], "any", false, false, false, 173), "visible", [], "any", false, false, false, 173);
                // line 174
                yield "        ";
                if (((isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 174, $this->source); })()) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 174, $this->source); })()), "project", [], "any", false, false, false, 174), "customer", [], "any", false, false, false, 174)))) {
                    // line 175
                    yield "            ";
                    $context["isVisible"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 175, $this->source); })()), "project", [], "any", false, false, false, 175), "customer", [], "any", false, false, false, 175), "visible", [], "any", false, false, false, 175);
                    // line 176
                    yield "        ";
                }
                // line 177
                yield "    ";
            }
            // line 178
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color_dot", $context, 178, $this->getSourceContext())->macro_label_color_dot(...["activity", (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 178, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 178, $this->source); })()), "name", [], "any", false, false, false, 178), null, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 178, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 184
    public function macro_label_project($project = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "project" => $project,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_project"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_project"));

            // line 185
            yield "    ";
            $context["inherit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", false, false, false, 185)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inherit", [], "any", false, false, false, 185)) : (true));
            // line 186
            yield "    ";
            $context["isVisible"] = false;
            // line 187
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 187, $this->source); })()), "visible", [], "any", false, false, false, 187) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 187, $this->source); })()), "customer", [], "any", false, false, false, 187), "visible", [], "any", false, false, false, 187))) {
                // line 188
                yield "        ";
                $context["isVisible"] = true;
                // line 189
                yield "    ";
            }
            // line 190
            yield "    ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 190, $this->source); })()), "color", [], "any", false, false, false, 190);
            // line 191
            yield "    ";
            if ((Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 191, $this->source); })())) && (isset($context["inherit"]) || array_key_exists("inherit", $context) ? $context["inherit"] : (function () { throw new RuntimeError('Variable "inherit" does not exist.', 191, $this->source); })()))) {
                // line 192
                yield "        ";
                $context["color"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 192, $this->source); })()), "customer", [], "any", false, false, false, 192), "color", [], "any", false, false, false, 192);
                // line 193
                yield "    ";
            }
            // line 194
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 194, $this->source); })()))) {
                // line 195
                yield "        ";
                $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 195, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 195, $this->source); })()), "name", [], "any", false, false, false, 195));
                // line 196
                yield "    ";
            }
            // line 197
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color_dot", $context, 197, $this->getSourceContext())->macro_label_color_dot(...["project", (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 197, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 197, $this->source); })()), "name", [], "any", false, false, false, 197), null, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 197, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function macro_label_customer($customer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "customer" => $customer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_customer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_customer"));

            // line 201
            yield "    ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 201, $this->source); })()), "color", [], "any", false, false, false, 201);
            // line 202
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 202, $this->source); })()))) {
                // line 203
                yield "        ";
                $context["color"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 203, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 203, $this->source); })()), "name", [], "any", false, false, false, 203));
                // line 204
                yield "    ";
            }
            // line 205
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color_dot", $context, 205, $this->getSourceContext())->macro_label_color_dot(...["customer", CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 205, $this->source); })()), "visible", [], "any", false, false, false, 205), CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 205, $this->source); })()), "name", [], "any", false, false, false, 205), null, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 205, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 209
    public function macro_label_name($label = null, $color = null, $isVisible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "color" => $color,
            "isVisible" => $isVisible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_name"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_name"));

            // line 210
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color_dot", $context, 210, $this->getSourceContext())->macro_label_color_dot(...["color", (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 210, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 210, $this->source); })()), null, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 210, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 214
    public function macro_label_dot($label = null, $color = null, $isVisible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "color" => $color,
            "isVisible" => $isVisible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_dot"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_dot"));

            // line 215
            yield "    ";
            yield $this->getTemplateForMacro("macro_label_color_dot", $context, 215, $this->getSourceContext())->macro_label_color_dot(...["color", (isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 215, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 215, $this->source); })()), null, $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 215, $this->source); })()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 215, $this->source); })()))]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 219
    public function macro_label_color_dot($type = null, $isVisible = null, $name = null, $url = null, $color = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "isVisible" => $isVisible,
            "name" => $name,
            "url" => $url,
            "color" => $color,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_color_dot"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_color_dot"));

            // line 220
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 220, $this->source); })()))) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 220, $this->source); })()), "html", null, true);
                yield "\">";
            }
            // line 221
            yield "    <span class=\"pe-1 label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 221, $this->source); })()), "html", null, true);
            yield ((((isset($context["isVisible"]) || array_key_exists("isVisible", $context) ? $context["isVisible"] : (function () { throw new RuntimeError('Variable "isVisible" does not exist.', 221, $this->source); })()) === false)) ? (" label-invisible") : (""));
            yield "\">
        <span class=\"badge me-1\" ";
            // line 222
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 222, $this->source); })()))) {
                yield " style=\"background-color:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 222, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield "></span>";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 223, $this->source); })()), "html", null, true);
            // line 224
            yield "</span>";
            // line 225
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 225, $this->source); })()))) {
                yield "</a>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 228
    public function macro_badge_team_access($teams = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "teams" => $teams,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_team_access"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_team_access"));

            // line 229
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 229, $this->source); })())) > 0)) {
                // line 230
                yield "        ";
                yield $this->getTemplateForMacro("macro_badge_counter", $context, 230, $this->getSourceContext())->macro_badge_counter(...[Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 230, $this->source); })()))]);
                yield "
    ";
            } else {
                // line 232
                yield "        ";
                yield $this->getTemplateForMacro("macro_badge_counter", $context, 232, $this->getSourceContext())->macro_badge_counter(...[0, null, "gray"]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 236
    public function macro_badge_counter($count = null, $url = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "count" => $count,
            "url" => $url,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_counter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_counter"));

            // line 237
            yield "    ";
            if ( !(null === (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 237, $this->source); })()))) {
                // line 238
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 238, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->getTemplateForMacro("macro_badge_type", $context, 238, $this->getSourceContext())->macro_badge_type(...[(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 238, $this->source); })()), ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 238, $this->source); })()), "blue")) : ("blue"))]);
                yield "</a>
    ";
            } else {
                // line 240
                yield "        ";
                yield $this->getTemplateForMacro("macro_badge_type", $context, 240, $this->getSourceContext())->macro_badge_type(...[(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 240, $this->source); })()), ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 240, $this->source); })()), "blue")) : ("blue"))]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 244
    public function macro_label($title = null, $type = null, $tooltip = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "type" => $type,
            "tooltip" => $tooltip,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            // line 245
            yield "    <span ";
            if ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 245, $this->source); })())) {
                yield "data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 245, $this->source); })()), "html", null, true);
                yield "\" ";
            }
            yield "class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 245, $this->source); })()), "success")) : ("success")), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 245, $this->source); })()), "success")) : ("success")), "html", null, true);
            yield "-fg\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 245, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 248
    public function macro_label_color($title = null, $color = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "color" => $color,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_color"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_color"));

            // line 249
            yield "    <span class=\"badge\" style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->defaultColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 249, $this->source); })())), "html", null, true);
            yield ";color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor($this->extensions['App\Twig\Extensions']->defaultColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 249, $this->source); })()))), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 249, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 252
    public function macro_badge($title = null, $color = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "color" => $color,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            // line 253
            yield "    <span class=\"badge\"";
            if ( !(null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 253, $this->source); })()))) {
                yield " style=\"background-color:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 253, $this->source); })()), "html", null, true);
                yield "; color:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 253, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 253, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 256
    public function macro_badge_type($title = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_type"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_type"));

            // line 257
            yield "    ";
            $context["class"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 257, $this->source); })()))) ? ((((("bg-" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 257, $this->source); })())) . " text-") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 257, $this->source); })())) . "-fg")) : (""));
            // line 258
            yield "    <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 258, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 258, $this->source); })()), "html", null, true);
            yield "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 261
    public function macro_form_errors($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_errors"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_errors"));

            // line 262
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "vars", [], "any", false, false, false, 262), "errors", [], "any", false, false, false, 262)) > 0)) {
                // line 263
                yield "        ";
                $context["message"] = "";
                // line 264
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "vars", [], "any", false, false, false, 264), "errors", [], "any", false, false, false, 264));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 265
                    yield "            ";
                    $context["message"] = ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 265, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 265));
                    // line 266
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 266)) {
                        // line 267
                        yield "                ";
                        $context["message"] = ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 267, $this->source); })()) . "<br>");
                        // line 268
                        yield "            ";
                    }
                    // line 269
                    yield "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                yield "        ";
                if (((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 270, $this->source); })()) != "")) {
                    // line 271
                    yield "            ";
                    yield $this->getTemplateForMacro("macro_alert", $context, 271, $this->getSourceContext())->macro_alert(...["danger", (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 271, $this->source); })())]);
                    yield "
        ";
                }
                // line 273
                yield "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 276
    public function macro_alert($type = null, $description = null, $title = null, $icon = null, $dismissible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "description" => $description,
            "title" => $title,
            "icon" => $icon,
            "dismissible" => $dismissible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 277
            yield "    ";
            $macros["_v0"] = $this->loadTemplate("@theme/components/alert.html.twig", "macros/widgets.html.twig", 277)->unwrap();
            // line 278
            yield "    ";
            yield $macros["_v0"]->getTemplateForMacro("macro_alert", $context, 278, $this->getSourceContext())->macro_alert(...[["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 278, $this->source); })()), "description" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 278, $this->source); })())), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 278, $this->source); })())), "icon" => (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 278, $this->source); })()), "dismissible" => (isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 278, $this->source); })()), "important" => true]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function macro_callout($type = null, $description = null, $title = null, $icon = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "description" => $description,
            "title" => $title,
            "icon" => $icon,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "callout"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "callout"));

            // line 282
            yield "    ";
            $macros["_v1"] = $this->loadTemplate("@theme/components/alert.html.twig", "macros/widgets.html.twig", 282)->unwrap();
            // line 283
            yield "    ";
            yield $macros["_v1"]->getTemplateForMacro("macro_alert", $context, 283, $this->getSourceContext())->macro_alert(...[["type" => ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 283, $this->source); })()), "danger")) : ("danger")), "description" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 283, $this->source); })())), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 283, $this->source); })())), "icon" => (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 283, $this->source); })()), "dismissible" => false, "important" => true]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 286
    public function macro_table_actions($actions = null, $class = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "actions" => $actions,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_actions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_actions"));

            // line 287
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 287, $this->source); })())) >= 1)) {
                // line 288
                yield "        ";
                $macros["macro"] = $this->loadTemplate("@theme/components/actions.html.twig", "macros/widgets.html.twig", 288)->unwrap();
                // line 289
                yield "        ";
                yield $macros["macro"]->getTemplateForMacro("macro_actions", $context, 289, $this->getSourceContext())->macro_actions(...[(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 289, $this->source); })()), ["class" => ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 289, $this->source); })()), "btn-sm")) : ("btn-sm")), "translationDomain" => "actions"]]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 293
    public function macro_card_tool_visibility($tableName = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "tableName" => $tableName,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_visibility"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_visibility"));

            // line 294
            yield "    ";
            yield $this->getTemplateForMacro("macro_card_tool_button", $context, 294, $this->getSourceContext())->macro_card_tool_button(...["visibility", ["modal" => ("#modal_" . (isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 294, $this->source); })()))]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 297
    public function macro_card_tool_button($icon = null, $values = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon" => $icon,
            "values" => $values,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_button"));

            // line 298
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@theme/components/buttons.html.twig", "macros/widgets.html.twig", 298)->unwrap();
            // line 299
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 299, $this->source); })()), ["tooltip_attr" => "data-toggle"]);
            // line 300
            yield "    ";
            yield $macros["macro"]->getTemplateForMacro("macro_action_cardtoolbutton", $context, 300, $this->getSourceContext())->macro_action_cardtoolbutton(...[(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 300, $this->source); })()), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 300, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function macro_card_tool_create($create_url = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "create_url" => $create_url,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_create"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "card_tool_create"));

            // line 304
            yield "    ";
            yield $this->getTemplateForMacro("macro_card_tool_button", $context, 304, $this->getSourceContext())->macro_card_tool_button(...["create", ["url" => (isset($context["create_url"]) || array_key_exists("create_url", $context) ? $context["create_url"] : (function () { throw new RuntimeError('Variable "create_url" does not exist.', 304, $this->source); })()), "class" => "modal-ajax-form open-edit", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create")]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function macro_action_button($icon = null, $values = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon" => $icon,
            "values" => $values,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_button"));

            // line 308
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@theme/components/button.html.twig", "macros/widgets.html.twig", 308)->unwrap();
            // line 309
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge(($context["values"] ?? []), ["tooltip_attr" => "data-toggle"]);
            // line 310
            yield "    ";
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 310, $this->getSourceContext())->macro_button(...[(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 310, $this->source); })()), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 310, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 310, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 313
    public function macro_tag_list($taglist = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "taglist" => $taglist,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tag_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tag_list"));

            // line 314
            yield "    <div class=\"tags-list\">
    ";
            // line 315
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taglist"]) || array_key_exists("taglist", $context) ? $context["taglist"] : (function () { throw new RuntimeError('Variable "taglist" does not exist.', 315, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 316
                yield "        <span class=\"tag\">
            <span class=\"legend\" style=\"background-color: ";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "color", [], "any", false, false, false, 317), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 317)), "html", null, true);
                yield "\"></span>
            ";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 318), "html", null, true);
                yield "
        </span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 324
    public function macro_meta_field_value($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "meta_field_value"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "meta_field_value"));

            // line 325
            yield "    ";
            $context["metaField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 325, $this->source); })()), "metaField", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 325, $this->source); })()), "name", [], "any", false, false, false, 325)], "method", false, false, false, 325);
            // line 326
            yield "    ";
            if ( !(null === (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 326, $this->source); })()))) {
                // line 327
                yield "        ";
                $context["metaField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 327, $this->source); })()), "merge", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 327, $this->source); })())], "method", false, false, false, 327);
                // line 328
                yield "        ";
                yield $this->getTemplateForMacro("macro_form_type_value", $context, 328, $this->getSourceContext())->macro_form_type_value(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 328, $this->source); })()), "type", [], "any", false, false, false, 328), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metaField"]) || array_key_exists("metaField", $context) ? $context["metaField"] : (function () { throw new RuntimeError('Variable "metaField" does not exist.', 328, $this->source); })()), "value", [], "any", false, false, false, 328), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 328, $this->source); })())]);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 332
    public function macro_form_type_value($type = null, $value = null, $entity = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "value" => $value,
            "entity" => $entity,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_type_value"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_type_value"));

            // line 333
            yield "    ";
            if ((CoreExtension::inFilter("ColorPickerType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 333, $this->source); })())) || CoreExtension::inFilter("ColorChoiceType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 333, $this->source); })())))) {
                // line 334
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 334, $this->source); })()))) {
                    // line 335
                    yield "            <span class=\"label-color\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 335, $this->source); })()), "html", null, true);
                    yield "\">
                <i class=\"dot ";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("dot", true), "html", null, true);
                    yield " fa-fw\" style=\"color:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 336, $this->source); })()), "html", null, true);
                    yield "\"></i>
            </span>
        ";
                }
                // line 339
                yield "    ";
            } elseif (CoreExtension::inFilter("DurationType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 339, $this->source); })()))) {
                // line 340
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 340, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif ((CoreExtension::inFilter("YesNoType",             // line 341
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 341, $this->source); })())) || CoreExtension::inFilter("CheckBoxType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 341, $this->source); })())))) {
                // line 342
                yield "        ";
                yield $this->getTemplateForMacro("macro_label_boolean", $context, 342, $this->getSourceContext())->macro_label_boolean(...[(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 342, $this->source); })())]);
                yield "
    ";
            } elseif (CoreExtension::inFilter("DatePickerType",             // line 343
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 343, $this->source); })()))) {
                // line 344
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 344, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif (CoreExtension::inFilter("DateTimePickerType",             // line 345
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 345, $this->source); })()))) {
                // line 346
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateTime((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 346, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif (CoreExtension::inFilter("CountryType",             // line 347
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 347, $this->source); })()))) {
                // line 348
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 348, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif (CoreExtension::inFilter("CurrencyType",             // line 349
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 349, $this->source); })()))) {
                // line 350
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCurrencyName((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 350, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif (CoreExtension::inFilter("LanguageType",             // line 351
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 351, $this->source); })()))) {
                // line 352
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 352, $this->source); })())), "html", null, true);
                yield "
    ";
            } elseif (CoreExtension::inFilter("TagsType",             // line 353
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 353, $this->source); })()))) {
                // line 354
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 354, $this->source); })()), ","));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 355
                    yield "            ";
                    if ( !Twig\Extension\CoreExtension::testEmpty($context["tag"])) {
                        // line 356
                        yield "                ";
                        yield $this->getTemplateForMacro("macro_badge", $context, 356, $this->getSourceContext())->macro_badge(...[$context["tag"], $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(null, $context["tag"])]);
                        yield "
            ";
                    }
                    // line 358
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 359
                yield "    ";
            } elseif (CoreExtension::inFilter("MoneyType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 359, $this->source); })()))) {
                // line 360
                yield "        ";
                $context["classname"] = $this->extensions['App\Twig\Extensions']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 360, $this->source); })()));
                // line 361
                yield "        ";
                if ((null === (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 361, $this->source); })()))) {
                    // line 362
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 362, $this->source); })()), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 363
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 363, $this->source); })()) == "App\\Entity\\Timesheet")) {
                    // line 364
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 364, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 364, $this->source); })()), "project", [], "any", false, false, false, 364), "customer", [], "any", false, false, false, 364), "currency", [], "any", false, false, false, 364)), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 365
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 365, $this->source); })()) == "App\\Entity\\Customer")) {
                    // line 366
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 366, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 366, $this->source); })()), "currency", [], "any", false, false, false, 366)), "html", null, true);
                    yield "
        ";
                } elseif ((                // line 367
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 367, $this->source); })()) == "App\\Entity\\Project")) {
                    // line 368
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 368, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 368, $this->source); })()), "customer", [], "any", false, false, false, 368), "currency", [], "any", false, false, false, 368)), "html", null, true);
                    yield "
        ";
                } elseif (((                // line 369
(isset($context["classname"]) || array_key_exists("classname", $context) ? $context["classname"] : (function () { throw new RuntimeError('Variable "classname" does not exist.', 369, $this->source); })()) == "App\\Entity\\Activity") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 369, $this->source); })()), "project", [], "any", false, false, false, 369)))) {
                    // line 370
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->money((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 370, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 370, $this->source); })()), "project", [], "any", false, false, false, 370), "customer", [], "any", false, false, false, 370), "currency", [], "any", false, false, false, 370)), "html", null, true);
                    yield "
        ";
                } else {
                    // line 372
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 372, $this->source); })()), "html", null, true);
                    yield "
        ";
                }
                // line 374
                yield "    ";
            } elseif (CoreExtension::inFilter("TextareaType", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 374, $this->source); })()))) {
                // line 375
                yield "        ";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 375, $this->source); })()), "html", null, true));
                yield "
    ";
            } elseif (CoreExtension::inFilter("EmailType",             // line 376
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 376, $this->source); })()))) {
                // line 377
                yield "        <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 377, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 377, $this->source); })()), "html", null, true);
                yield "</a>
    ";
            } elseif (CoreExtension::inFilter("UrlType",             // line 378
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 378, $this->source); })()))) {
                // line 379
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 379, $this->source); })()), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 379, $this->source); })()), "html", null, true);
                yield "</a>
    ";
            } else {
                // line 381
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 381, $this->source); })()), "html", null, true);
                yield "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 385
    public function macro_team_list($teams = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "teams" => $teams,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "team_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "team_list"));

            // line 386
            yield "    ";
            $context["showTitle"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "array", true, true, false, 386) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "array", false, false, false, 386)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "array", false, false, false, 386)) : (true));
            // line 387
            yield "    ";
            $context["collapseAt"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collapse", [], "array", true, true, false, 387) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collapse", [], "array", false, false, false, 387)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "collapse", [], "array", false, false, false, 387)) : (12));
            // line 388
            yield "    ";
            $context["nameClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name_class", [], "array", true, true, false, 388) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name_class", [], "array", false, false, false, 388)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name_class", [], "array", false, false, false, 388)) : (""));
            // line 389
            yield "    ";
            $context["viewTeam"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_team");
            // line 390
            yield "    <table class=\"table table-hover dataTable\" role=\"grid\">
        ";
            // line 391
            if ((isset($context["showTitle"]) || array_key_exists("showTitle", $context) ? $context["showTitle"] : (function () { throw new RuntimeError('Variable "showTitle" does not exist.', 391, $this->source); })())) {
                // line 392
                yield "        <thead>
            <tr>
                <th class=\"hw-min\">";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("team"), "html", null, true);
                yield "</th>
                <th class=\"d-none d-sm-table-cell\">";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("team.member", [], "teams"), "html", null, true);
                yield "</th>
            </tr>
        </thead>
        ";
            }
            // line 399
            yield "        <tbody>
        ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 400, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 400, $this->source); })()), "name", [], "any", false, false, false, 400) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 400, $this->source); })()), "name", [], "any", false, false, false, 400)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 401
                yield "            ";
                $context["members"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 401), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "enabled", [], "any", false, false, false, 401); });
                // line 402
                yield "            ";
                $context["class"] = "avatar-rounded";
                // line 403
                yield "            <tr";
                if (((isset($context["viewTeam"]) || array_key_exists("viewTeam", $context) ? $context["viewTeam"] : (function () { throw new RuntimeError('Variable "viewTeam" does not exist.', 403, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["team"]))) {
                    yield " class=\"modal-ajax-form open-edit\" data-href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_team_member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 403)]), "html", null, true);
                    yield "\"";
                }
                yield ">
                <td class=\"";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nameClass"]) || array_key_exists("nameClass", $context) ? $context["nameClass"] : (function () { throw new RuntimeError('Variable "nameClass" does not exist.', 404, $this->source); })()), "html", null, true);
                yield "\">
                    ";
                // line 405
                yield $this->getTemplateForMacro("macro_label_color_dot", $context, 405, $this->getSourceContext())->macro_label_color_dot(...["color", true, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 405), null, $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "color", [], "any", false, false, false, 405), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 405))]);
                yield "
                </td>
                <td class=\"d-none d-sm-table-cell avatars avatar-list avatar-list-stacked\">
                    ";
                // line 408
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 408, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 408, $this->source); })()), "teamlead", [], "any", false, false, false, 408) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 408, $this->source); })()), "teamlead", [], "any", false, false, false, 408)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 409
                    yield "                        ";
                    $context["user"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "user", [], "any", false, false, false, 409);
                    // line 410
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "teamlead", [], "any", false, false, false, 410)) {
                        // line 411
                        yield "                            ";
                        yield $this->getTemplateForMacro("macro_user_avatar", $context, 411, $this->getSourceContext())->macro_user_avatar(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 411, $this->source); })()), (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("teamlead") . ": ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 411, $this->source); })()), "displayName", [], "any", false, false, false, 411)), ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 411, $this->source); })()) . " teamlead"), "info"]);
                        yield "
                        ";
                    } else {
                        // line 413
                        yield "                            ";
                        yield $this->getTemplateForMacro("macro_user_avatar", $context, 413, $this->getSourceContext())->macro_user_avatar(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 413, $this->source); })()), null, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 413, $this->source); })())]);
                        yield "
                        ";
                    }
                    // line 415
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 416
                yield "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            yield "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 423
    public function macro_nothing_found($events = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "events" => $events,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nothing_found"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nothing_found"));

            // line 424
            yield "    ";
            yield $this->getTemplateForMacro("macro_callout", $context, 424, $this->getSourceContext())->macro_callout(...["warning", "error.no_entries_found"]);
            yield "
    ";
            // line 425
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 425, $this->source); })()))) {
                // line 426
                yield "    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 428, $this->source); })()), "html", null, true);
                yield "');
        });
    </script>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 438
    public function macro_class_customer_row($customer = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "customer" => $customer,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_customer_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_customer_row"));

            // line 439
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 439, $this->source); })()), "visible", [], "any", false, false, false, 439)) {
                yield "bg-orange-lt";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 446
    public function macro_class_tag_row($tag = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "tag" => $tag,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_tag_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_tag_row"));

            // line 447
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 447, $this->source); })()), "visible", [], "any", false, false, false, 447)) {
                yield "bg-orange-lt";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 454
    public function macro_customer_row_attr($customer = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "customer" => $customer,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "customer_row_attr"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "customer_row_attr"));

            // line 455
            $context["class"] = $this->getTemplateForMacro("macro_class_customer_row", $context, 455, $this->getSourceContext())->macro_class_customer_row(...[(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 455, $this->source); })()), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 455, $this->source); })())]);
            // line 456
            yield "    ";
            $context["dataHref"] = "";
            // line 457
            yield "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 457, $this->source); })()))) {
                // line 458
                yield "        ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 458, $this->source); })()) . " alternative-link open-edit");
                // line 459
                yield "        ";
                $context["dataHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 459, $this->source); })()), "id", [], "any", false, false, false, 459)]);
                // line 460
                yield "    ";
            }
            // line 461
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 461, $this->source); })()), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataHref"]) || array_key_exists("dataHref", $context) ? $context["dataHref"] : (function () { throw new RuntimeError('Variable "dataHref" does not exist.', 461, $this->source); })()), "html", null, true);
            yield "\"
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 468
    public function macro_class_project_row($project = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "project" => $project,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_project_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_project_row"));

            // line 469
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 469, $this->source); })()), "visible", [], "any", false, false, false, 469) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 469, $this->source); })()), "end", [], "any", false, false, false, 469)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 469, $this->source); })()), "end", [], "any", false, false, false, 469) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 469, $this->source); })()))))) {
                yield "bg-orange-lt";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 476
    public function macro_project_row_attr($project = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "project" => $project,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "project_row_attr"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "project_row_attr"));

            // line 477
            $context["class"] = $this->getTemplateForMacro("macro_class_project_row", $context, 477, $this->getSourceContext())->macro_class_project_row(...[(isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 477, $this->source); })()), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 477, $this->source); })())]);
            // line 478
            yield "    ";
            $context["dataHref"] = "";
            // line 479
            yield "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 479, $this->source); })()))) {
                // line 480
                yield "        ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 480, $this->source); })()) . " alternative-link open-edit");
                // line 481
                yield "        ";
                $context["dataHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 481, $this->source); })()), "id", [], "any", false, false, false, 481)]);
                // line 482
                yield "    ";
            }
            // line 483
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 483, $this->source); })()), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataHref"]) || array_key_exists("dataHref", $context) ? $context["dataHref"] : (function () { throw new RuntimeError('Variable "dataHref" does not exist.', 483, $this->source); })()), "html", null, true);
            yield "\"
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 490
    public function macro_class_activity_row($activity = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "activity" => $activity,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_activity_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_activity_row"));

            // line 491
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 491, $this->source); })()), "visible", [], "any", false, false, false, 491)) {
                yield "bg-orange-lt";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 498
    public function macro_activity_row_attr($activity = null, $now = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "activity" => $activity,
            "now" => $now,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_row_attr"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_row_attr"));

            // line 499
            $context["class"] = $this->getTemplateForMacro("macro_class_activity_row", $context, 499, $this->getSourceContext())->macro_class_activity_row(...[(isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 499, $this->source); })()), (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 499, $this->source); })())]);
            // line 500
            yield "    ";
            $context["dataHref"] = "";
            // line 501
            yield "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 501, $this->source); })()))) {
                // line 502
                yield "        ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 502, $this->source); })()) . " alternative-link open-edit");
                // line 503
                yield "        ";
                $context["dataHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 503, $this->source); })()), "id", [], "any", false, false, false, 503)]);
                // line 504
                yield "    ";
            }
            // line 505
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 505, $this->source); })()), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataHref"]) || array_key_exists("dataHref", $context) ? $context["dataHref"] : (function () { throw new RuntimeError('Variable "dataHref" does not exist.', 505, $this->source); })()), "html", null, true);
            yield "\"
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 512
    public function macro_class_user_row($user = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "user" => $user,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_user_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class_user_row"));

            // line 513
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 513, $this->source); })()), "enabled", [], "any", false, false, false, 513)) {
                yield "bg-orange-lt";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 520
    public function macro_user_row_attr($user = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "user" => $user,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_row_attr"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_row_attr"));

            // line 521
            $context["class"] = $this->getTemplateForMacro("macro_class_user_row", $context, 521, $this->getSourceContext())->macro_class_user_row(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 521, $this->source); })())]);
            // line 522
            yield "    ";
            $context["dataHref"] = "";
            // line 523
            yield "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 523, $this->source); })()))) {
                // line 524
                yield "        ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 524, $this->source); })()) . " alternative-link open-edit");
                // line 525
                yield "        ";
                $context["dataHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["username" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 525, $this->source); })()), "username", [], "any", false, false, false, 525)]);
                // line 526
                yield "    ";
            }
            // line 527
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 527, $this->source); })()), "html", null, true);
            yield "\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataHref"]) || array_key_exists("dataHref", $context) ? $context["dataHref"] : (function () { throw new RuntimeError('Variable "dataHref" does not exist.', 527, $this->source); })()), "html", null, true);
            yield "\"
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 531
    public function macro_short_stats_row($stats = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "stats" => $stats,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "short_stats_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "short_stats_row"));

            // line 532
            yield "    <div class=\"row\">
        ";
            // line 533
            $context["colLength"] = (12 / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 533, $this->source); })())));
            // line 534
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 534, $this->source); })()));
            foreach ($context['_seq'] as $context["title"] => $context["value"]) {
                // line 535
                yield "        <div class=\"col-sm-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colLength"]) || array_key_exists("colLength", $context) ? $context["colLength"] : (function () { throw new RuntimeError('Variable "colLength" does not exist.', 535, $this->source); })()), "html", null, true);
                yield " border-right\">
            <div class=\"description-block\">
                <h5 class=\"description-header\">";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</h5>
                <span class=\"description-text\">";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                yield "</span>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['title'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 542
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 545
    public function macro_page_reloader($events = null, $full_reload = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "events" => $events,
            "full_reload" => $full_reload,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_reloader"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_reloader"));

            // line 546
            yield "    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('";
            // line 548
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 548, $this->source); })()), "html", null, true);
            yield "', ";
            if (((isset($context["full_reload"]) || array_key_exists("full_reload", $context) ? $context["full_reload"] : (function () { throw new RuntimeError('Variable "full_reload" does not exist.', 548, $this->source); })()) === true)) {
                yield "true";
            } else {
                yield "false";
            }
            yield ");
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 553
    public function macro_work_times_result($should = null, $actual = null, $decimal = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "should" => $should,
            "actual" => $actual,
            "decimal" => $decimal,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "work_times_result"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "work_times_result"));

            // line 554
            yield "    ";
            $context["result"] = ((isset($context["actual"]) || array_key_exists("actual", $context) ? $context["actual"] : (function () { throw new RuntimeError('Variable "actual" does not exist.', 554, $this->source); })()) - (isset($context["should"]) || array_key_exists("should", $context) ? $context["should"] : (function () { throw new RuntimeError('Variable "should" does not exist.', 554, $this->source); })()));
            // line 555
            yield "    ";
            if (((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 555, $this->source); })()) == 0)) {
                // line 556
                yield "        <span class=\"work_time_exact\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 556, $this->source); })()), (isset($context["decimal"]) || array_key_exists("decimal", $context) ? $context["decimal"] : (function () { throw new RuntimeError('Variable "decimal" does not exist.', 556, $this->source); })())), "html", null, true);
                yield "</span>
    ";
            } elseif (((            // line 557
(isset($context["should"]) || array_key_exists("should", $context) ? $context["should"] : (function () { throw new RuntimeError('Variable "should" does not exist.', 557, $this->source); })()) == 0) && ((isset($context["actual"]) || array_key_exists("actual", $context) ? $context["actual"] : (function () { throw new RuntimeError('Variable "actual" does not exist.', 557, $this->source); })()) > 0))) {
                // line 558
                yield "        <span class=\"work_time_positive text-green\">+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["actual"]) || array_key_exists("actual", $context) ? $context["actual"] : (function () { throw new RuntimeError('Variable "actual" does not exist.', 558, $this->source); })()), (isset($context["decimal"]) || array_key_exists("decimal", $context) ? $context["decimal"] : (function () { throw new RuntimeError('Variable "decimal" does not exist.', 558, $this->source); })())), "html", null, true);
                yield "</span>
    ";
            } elseif ((            // line 559
(isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 559, $this->source); })()) < 0)) {
                // line 560
                yield "        <span class=\"work_time_negative text-red\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 560, $this->source); })()), (isset($context["decimal"]) || array_key_exists("decimal", $context) ? $context["decimal"] : (function () { throw new RuntimeError('Variable "decimal" does not exist.', 560, $this->source); })())), "html", null, true);
                yield "</span>
    ";
            } else {
                // line 562
                yield "        <span class=\"work_time_positive text-green\">+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->duration((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 562, $this->source); })()), (isset($context["decimal"]) || array_key_exists("decimal", $context) ? $context["decimal"] : (function () { throw new RuntimeError('Variable "decimal" does not exist.', 562, $this->source); })())), "html", null, true);
                yield "</span>
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
        return "macros/widgets.html.twig";
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
        return array (  2899 => 562,  2893 => 560,  2891 => 559,  2886 => 558,  2884 => 557,  2879 => 556,  2876 => 555,  2873 => 554,  2853 => 553,  2831 => 548,  2827 => 546,  2808 => 545,  2795 => 542,  2785 => 538,  2781 => 537,  2775 => 535,  2770 => 534,  2768 => 533,  2765 => 532,  2747 => 531,  2730 => 527,  2727 => 526,  2724 => 525,  2721 => 524,  2718 => 523,  2715 => 522,  2713 => 521,  2695 => 520,  2681 => 513,  2663 => 512,  2646 => 505,  2643 => 504,  2640 => 503,  2637 => 502,  2634 => 501,  2631 => 500,  2629 => 499,  2610 => 498,  2596 => 491,  2577 => 490,  2560 => 483,  2557 => 482,  2554 => 481,  2551 => 480,  2548 => 479,  2545 => 478,  2543 => 477,  2524 => 476,  2510 => 469,  2491 => 468,  2474 => 461,  2471 => 460,  2468 => 459,  2465 => 458,  2462 => 457,  2459 => 456,  2457 => 455,  2438 => 454,  2424 => 447,  2406 => 446,  2392 => 439,  2373 => 438,  2356 => 428,  2352 => 426,  2350 => 425,  2345 => 424,  2327 => 423,  2313 => 419,  2305 => 416,  2299 => 415,  2293 => 413,  2287 => 411,  2284 => 410,  2281 => 409,  2277 => 408,  2271 => 405,  2267 => 404,  2258 => 403,  2255 => 402,  2252 => 401,  2248 => 400,  2245 => 399,  2238 => 395,  2234 => 394,  2230 => 392,  2228 => 391,  2225 => 390,  2222 => 389,  2219 => 388,  2216 => 387,  2213 => 386,  2194 => 385,  2178 => 381,  2170 => 379,  2168 => 378,  2161 => 377,  2159 => 376,  2154 => 375,  2151 => 374,  2145 => 372,  2139 => 370,  2137 => 369,  2132 => 368,  2130 => 367,  2125 => 366,  2123 => 365,  2118 => 364,  2116 => 363,  2111 => 362,  2108 => 361,  2105 => 360,  2102 => 359,  2096 => 358,  2090 => 356,  2087 => 355,  2082 => 354,  2080 => 353,  2075 => 352,  2073 => 351,  2068 => 350,  2066 => 349,  2061 => 348,  2059 => 347,  2054 => 346,  2052 => 345,  2047 => 344,  2045 => 343,  2040 => 342,  2038 => 341,  2033 => 340,  2030 => 339,  2022 => 336,  2017 => 335,  2014 => 334,  2011 => 333,  1991 => 332,  1975 => 328,  1972 => 327,  1969 => 326,  1966 => 325,  1947 => 324,  1934 => 321,  1925 => 318,  1921 => 317,  1918 => 316,  1914 => 315,  1911 => 314,  1893 => 313,  1878 => 310,  1875 => 309,  1872 => 308,  1852 => 307,  1837 => 304,  1819 => 303,  1804 => 300,  1801 => 299,  1798 => 298,  1779 => 297,  1764 => 294,  1746 => 293,  1730 => 289,  1727 => 288,  1724 => 287,  1705 => 286,  1690 => 283,  1687 => 282,  1666 => 281,  1651 => 278,  1648 => 277,  1626 => 276,  1613 => 273,  1607 => 271,  1604 => 270,  1590 => 269,  1587 => 268,  1584 => 267,  1581 => 266,  1578 => 265,  1560 => 264,  1557 => 263,  1554 => 262,  1536 => 261,  1519 => 258,  1516 => 257,  1497 => 256,  1474 => 253,  1455 => 252,  1436 => 249,  1417 => 248,  1392 => 245,  1372 => 244,  1356 => 240,  1348 => 238,  1345 => 237,  1325 => 236,  1309 => 232,  1303 => 230,  1300 => 229,  1282 => 228,  1268 => 225,  1266 => 224,  1264 => 223,  1257 => 222,  1251 => 221,  1245 => 220,  1223 => 219,  1208 => 215,  1188 => 214,  1173 => 210,  1153 => 209,  1138 => 205,  1135 => 204,  1132 => 203,  1129 => 202,  1126 => 201,  1108 => 200,  1093 => 197,  1090 => 196,  1087 => 195,  1084 => 194,  1081 => 193,  1078 => 192,  1075 => 191,  1072 => 190,  1069 => 189,  1066 => 188,  1063 => 187,  1060 => 186,  1057 => 185,  1038 => 184,  1023 => 178,  1020 => 177,  1017 => 176,  1014 => 175,  1011 => 174,  1008 => 173,  1005 => 172,  1002 => 171,  999 => 170,  996 => 169,  993 => 168,  990 => 167,  987 => 166,  984 => 165,  981 => 164,  978 => 163,  959 => 162,  939 => 156,  931 => 155,  928 => 154,  925 => 153,  922 => 152,  904 => 151,  884 => 148,  876 => 147,  873 => 146,  852 => 145,  839 => 142,  833 => 141,  823 => 139,  817 => 137,  815 => 136,  809 => 135,  805 => 134,  802 => 133,  799 => 132,  796 => 131,  793 => 130,  790 => 129,  787 => 128,  784 => 127,  781 => 126,  760 => 125,  745 => 122,  727 => 121,  712 => 118,  694 => 117,  682 => 114,  664 => 113,  649 => 110,  646 => 109,  643 => 108,  640 => 107,  637 => 106,  634 => 105,  631 => 104,  628 => 103,  625 => 102,  622 => 101,  619 => 100,  601 => 99,  586 => 96,  568 => 95,  552 => 91,  546 => 89,  543 => 88,  525 => 87,  510 => 84,  492 => 83,  476 => 80,  473 => 79,  467 => 77,  464 => 76,  459 => 73,  450 => 71,  447 => 70,  443 => 69,  440 => 67,  434 => 66,  430 => 65,  427 => 64,  424 => 63,  421 => 62,  419 => 61,  416 => 60,  413 => 59,  410 => 58,  406 => 57,  403 => 56,  401 => 55,  382 => 54,  366 => 49,  363 => 48,  360 => 47,  357 => 46,  354 => 45,  351 => 44,  349 => 43,  345 => 41,  339 => 39,  336 => 38,  334 => 37,  330 => 36,  326 => 34,  323 => 33,  320 => 32,  317 => 31,  314 => 30,  311 => 29,  308 => 28,  305 => 27,  302 => 26,  300 => 25,  282 => 24,  270 => 21,  267 => 20,  264 => 19,  261 => 18,  258 => 17,  255 => 16,  252 => 15,  249 => 14,  246 => 13,  243 => 12,  240 => 11,  237 => 10,  234 => 9,  231 => 8,  228 => 7,  225 => 6,  222 => 5,  219 => 4,  216 => 3,  214 => 2,  195 => 1,  183 => 552,  180 => 544,  177 => 529,  174 => 515,  171 => 507,  168 => 493,  165 => 485,  162 => 471,  159 => 463,  156 => 449,  153 => 441,  150 => 433,  147 => 422,  144 => 384,  141 => 331,  138 => 323,  135 => 312,  132 => 306,  129 => 302,  126 => 296,  123 => 292,  120 => 285,  117 => 280,  114 => 275,  111 => 260,  108 => 255,  105 => 251,  102 => 247,  99 => 243,  96 => 235,  93 => 227,  90 => 217,  87 => 212,  84 => 207,  81 => 199,  78 => 180,  75 => 158,  72 => 150,  69 => 144,  66 => 124,  63 => 120,  60 => 116,  57 => 112,  54 => 98,  51 => 94,  48 => 86,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%- macro search_filter(route, options) -%}
    {% set opts = {'performSearch': 1} %}
    {% if options.begin is defined and options.end is defined %}
        {% set opts = opts|merge({'daterange': (options.begin|report_date ~ ' - ' ~ options.end|report_date)}) %}
    {% endif %}
    {% if options.customer is defined %}
        {% set opts = opts|merge({'customers[]': options.customer}) %}
    {% endif %}
    {% if options.project is defined %}
        {% set opts = opts|merge({'projects[]': options.project}) %}
    {% endif %}
    {% if options.activity is defined %}
        {% set opts = opts|merge({'activities[]': options.activity}) %}
    {% endif %}
    {% if options.user is defined %}
        {% set opts = opts|merge({'users[]': options.user}) %}
    {% endif %}
    {% if options.preview is defined %}
        {% set opts = opts|merge({'preview': options.preview}) %}
    {% endif %}
    {{- path(route, opts) -}}
{% endmacro %}

{%- macro page_actions(actions) -%}
    {% set btnClasses = 'btn-primary' %}
    {% set helpClasses = '' %}
    {% if tabler_bundle.isNavbarOverlapping() %}
        {% set helpClasses = 'btn-dark' %}
    {% elseif not tabler_bundle.isDarkMode() %}
        {% set btnClasses = 'btn-white' %}
    {% endif %}
    {% set later = {} %}
    {% set help = null %}
    <div class=\"page-actions\">
        <div class=\"pa-desktop d-none d-sm-inline-flex btn-list\">
        {{ _self.actions(actions, {large: true, button_class: btnClasses}) }}
        {% if help is not null %}
            {% set help = help|merge({class: helpClasses ~ ' action-help ' ~ (help.class|default(''))}) %}
            {{ _self.action_button('help', help) }}
        {% endif %}
        </div>
        <div class=\"pa-mobile d-inline-flex d-sm-none btn-list\">
            {% set btnClass = 'btn btn-icon ' %}
            {% if tabler_bundle.isNavbarOverlapping() %}
                {% set btnClass = 'btn btn-icon btn-dark' %}
            {% elseif not tabler_bundle.isDarkMode() %}
                {% set btnClass = 'btn btn-icon btn-white' %}
            {% endif %}
            {{ _self.table_actions(actions, btnClass) }}
        </div>
    </div>
{%- endmacro -%}

{%- macro actions(actions, options) -%}
    {% set large = options.large ?? true %}
    {% set btnClasses = options.button_class ?? 'btn-primary' %}
    {%- for icon, values in actions  %}
        {% if 'help' in icon %}
            {% set help = values %}
        {% elseif 'divider' in icon and values is null %}
            {# what to do here ? #}
        {% else %}
            {% if values.children is defined and values.children|length > 0 %}
                <div class=\"dropdown\">
                    <button type=\"button\" class=\"btn {{ btnClasses }} dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ icon(icon, true) }}{% if large %} {{ values.title is defined ? values.title|trans : icon|trans }}{% endif %}
                    </button>
                    <div class=\"dropdown-menu\">
                        {%- for icon, values in values.children %}
                            {% set values = values|merge({class: 'dropdown-item action-' ~ icon ~ ' ' ~ (values.class|default(''))}) %}
                            {{ _self.action_button(false, values, false) }}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% set values = values|merge({combined: large, class: btnClasses ~ ' action-' ~ icon ~ ' ' ~ (values.class|default(''))}) %}
                {{ _self.action_button(icon, values) }}
            {% endif %}
        {% endif %}
    {% endfor -%}
{%- endmacro -%}

{% macro page_header(title) %}
    <h2 class=\"page-header\">{{ title|trans }}</h2>
{% endmacro %}

{% macro label_boolean(visible) %}
    {% if visible %}
        {{ _self.label('yes'|trans, 'success') }}
    {% else %}
        {{ _self.label('no'|trans, 'default') }}
    {% endif %}
{% endmacro %}

{% macro label_visible(visible) %}
    {{ _self.label_boolean(visible) }}
{% endmacro %}

{% macro label_role(role) %}
    {% set color = 'primary' %}
    {% if role == 'ROLE_SUPER_ADMIN' %}
        {% set color = 'danger' %}
    {% elseif role == 'ROLE_ADMIN' %}
        {% set color = 'warning' %}
    {% elseif role == 'ROLE_TEAMLEAD' %}
        {% set color = 'success' %}
    {% elseif role == 'ROLE_USER' %}
        {% set color = 'gray' %}
    {% endif %}
    {{ _self.label(role|trans, color) }}
{% endmacro %}

{% macro username(user) %}
    {{- user.displayName -}}
{% endmacro %}

{% macro label_user(user) %}
    {{ _self.label_color(user.displayName, user.color|colorize(user.displayName)) }}
{% endmacro %}

{% macro label_team(team) %}
    {{ _self.label_color(team.name, team.color|colorize(team.name)) }}
{% endmacro %}

{% macro user_avatar(user, tooltip, class, badge) %}
    {% set avatar = null %}
    {% if user.avatar is not empty and kimai_config.themeAllowAvatarUrls %}
        {% set avatar = asset(user.avatar, 'avatars') %}
    {% endif %}
    {% if not user.enabled %}
        {% set badge = 'danger' %}
    {% endif %}
    {% set color = user.color|colorize(user.displayName) %}
    <span class=\"avatar {{ class }}\"
        {%- if tooltip is not same as (false) %} data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ tooltip|default(user.displayName) }}\"{% endif -%}
        {% if avatar is not null %}
            style=\"background-image: url({{ avatar }})\">&nbsp;
        {% else %}
            style=\"background-color: {{ color }}; color: {{ color|font_contrast }}\">{{ user.initials }}
        {% endif %}
        {%- if badge is not null -%}<span class=\"badge bg-{{ badge }}\"></span>{%-endif -%}
    </span>
{% endmacro %}

{% macro avatar(initials, color, tooltip, class) %}
    {% set color = color|colorize(initials) %}
    <span class=\"avatar {{ class ?? '' }}\" style=\"background-color: {{ color }}; color: {{ color|font_contrast }}\"
    {%- if tooltip is not same as null %} data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ tooltip }}\"{% endif -%}>{{ initials }}</span>
{% endmacro %}

{% macro avatar_deleted(tooltip) %}
    {% set initials = tooltip ?? '??' %}
    {% set tooltip = 'deleted'|trans %}
    {% set color = null|colorize(initials) %}
    <span class=\"avatar {{ class ?? '' }}\" style=\"background-color: {{ color }}; color: {{ color|font_contrast }}\"
    {%- if tooltip is not same as null %} data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ tooltip }}\"{% endif -%}>{{ initials }}</span>
{% endmacro %}

{#
    options = {'inherit': true}
#}
{% macro label_activity(activity, options) %}
    {% set inherit = options.inherit ?? true %}
    {% set isVisible = activity.visible %}
    {% set color = activity.color %}
    {% if color is empty and inherit and activity.project is not null %}
        {% set color = activity.project.color ?? activity.project.customer.color %}
    {% endif %}
    {% if color is empty %}
        {% set color = color|colorize(activity.name) %}
    {% endif %}
    {% if isVisible and not activity.project is null %}
        {% set isVisible = activity.project.visible %}
        {% if isVisible and not activity.project.customer is null %}
            {% set isVisible = activity.project.customer.visible %}
        {% endif %}
    {% endif %}
    {{ _self.label_color_dot('activity', isVisible, activity.name, null, color) }}
{% endmacro %}

{#
    options = {'inherit': true}
#}
{% macro label_project(project, options) %}
    {% set inherit = options.inherit ?? true %}
    {% set isVisible = false %}
    {% if project.visible and project.customer.visible %}
        {% set isVisible = true %}
    {% endif %}
    {% set color = project.color %}
    {% if color is empty and inherit %}
        {% set color = project.customer.color %}
    {% endif %}
    {% if color is empty %}
        {% set color = color|colorize(project.name) %}
    {% endif %}
    {{ _self.label_color_dot('project', isVisible, project.name, null, color) }}
{% endmacro %}

{% macro label_customer(customer) %}
    {% set color = customer.color %}
    {% if color is empty %}
        {% set color = color|colorize(customer.name) %}
    {% endif %}
    {{ _self.label_color_dot('customer', customer.visible, customer.name, null, color) }}
{% endmacro %}

{# Use for list views and the main column (if the entity has something like a name) #}
{% macro label_name(label, color, isVisible) %}
    {{ _self.label_color_dot('color', isVisible, label, null, color) }}
{% endmacro %}

{# Use in datatables to show linked entity names #}
{% macro label_dot(label, color, isVisible) %}
    {{ _self.label_color_dot('color', isVisible, label, null, color|colorize(label)) }}
{% endmacro %}

{# for @internal use only #}
{% macro label_color_dot(type, isVisible, name, url, color) %}
    {%- if url is not empty -%}<a href=\"{{ url }}\">{% endif %}
    <span class=\"pe-1 label-{{ type }}{{ isVisible is same as (false) ? ' label-invisible' : '' }}\">
        <span class=\"badge me-1\" {% if color is not empty %} style=\"background-color:{{ color }}\"{% endif %}></span>
        {{- name -}}
    </span>
    {%- if url is not empty -%}</a>{% endif %}
{% endmacro %}

{% macro badge_team_access(teams) %}
    {% if teams|length > 0 %}
        {{ _self.badge_counter(teams|length) }}
    {% else %}
        {{ _self.badge_counter(0, null, 'gray') }}
    {% endif %}
{% endmacro %}

{% macro badge_counter(count, url, type) %}
    {% if url is not null %}
        <a href=\"{{ url }}\">{{ _self.badge_type(count, type|default('blue')) }}</a>
    {% else %}
        {{ _self.badge_type(count, type|default('blue')) }}
    {% endif %}
{% endmacro %}

{% macro label(title, type, tooltip) %}
    <span {% if tooltip %}data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ tooltip }}\" {% endif %}class=\"badge bg-{{ type|default('success') }} text-{{ type|default('success') }}-fg\">{{ title }}</span>
{% endmacro %}

{% macro label_color(title, color) %}
    <span class=\"badge\" style=\"background-color: {{ color|default_color }};color: {{ color|default_color|font_contrast }}\">{{ title }}</span>
{% endmacro %}

{% macro badge(title, color) %}
    <span class=\"badge\"{% if color is not null %} style=\"background-color:{{ color }}; color:{{ color|font_contrast }}\"{% endif %}>{{ title }}</span>
{% endmacro %}

{% macro badge_type(title, type) %}
    {% set class = (type is not empty ? 'bg-' ~ type ~ ' text-' ~ type ~ '-fg' : '') %}
    <span class=\"badge {{ class }}\">{{ title }}</span>
{% endmacro %}

{% macro form_errors(form) %}
    {% if form.vars.errors|length > 0 %}
        {% set message = '' %}
        {% for error in form.vars.errors %}
            {% set message = message ~ error.message %}
            {% if not loop.last %}
                {% set message = message ~ '<br>'  %}
            {% endif %}
        {% endfor %}
        {% if message != '' %}
            {{ _self.alert('danger', message) }}
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro alert(type, description, title, icon, dismissible) %}
    {% from '@theme/components/alert.html.twig' import alert %}
    {{ alert({type: type, description: description|trans, title: title|trans, icon: icon, dismissible: dismissible, important: true}) }}
{% endmacro %}

{% macro callout(type, description, title, icon) %}
    {% from '@theme/components/alert.html.twig' import alert %}
    {{ alert({type: type|default('danger'), description: description|trans, title: title|trans, icon: icon, dismissible: false, important: true}) }}
{% endmacro %}

{% macro table_actions(actions, class) %}
    {% if actions|length >= 1 %}
        {% import '@theme/components/actions.html.twig' as macro %}
        {{ macro.actions(actions, {'class': class|default('btn-sm'), translationDomain: 'actions'}) }}
    {% endif %}
{% endmacro %}

{% macro card_tool_visibility(tableName) %}
    {{ _self.card_tool_button('visibility', {'modal': ('#modal_' ~ tableName)}) }}
{% endmacro %}

{% macro card_tool_button(icon, values) %}
    {% import '@theme/components/buttons.html.twig' as macro %}
    {% set values = values|merge({'tooltip_attr': 'data-toggle'}) %}
    {{ macro.action_cardtoolbutton(icon, values) }}
{% endmacro %}

{% macro card_tool_create(create_url) %}
    {{ _self.card_tool_button('create', {'url': create_url, 'class': 'modal-ajax-form open-edit', 'title': 'create'|trans}) }}
{% endmacro %}

{% macro action_button(icon, values, type) %}
    {% import '@theme/components/button.html.twig' as macro %}
    {% set values = (values ?? {})|merge({'tooltip_attr': 'data-toggle'}) %}
    {{ macro.button(icon, values, type) }}
{% endmacro %}

{% macro tag_list(taglist) %}
    <div class=\"tags-list\">
    {% for tag in taglist %}
        <span class=\"tag\">
            <span class=\"legend\" style=\"background-color: {{ tag.color|colorize(tag.name) }}\"></span>
            {{ tag.name }}
        </span>
    {% endfor %}
    </div>
{% endmacro %}

{% macro meta_field_value(entity, field) %}
    {% set metaField = entity.metaField(field.name) %}
    {% if not metaField is null %}
        {% set metaField = metaField.merge(field) %}
        {{ _self.form_type_value(metaField.type, metaField.value, entity) }}
    {% endif %}
{% endmacro %}

{% macro form_type_value(type, value, entity) %}
    {% if 'ColorPickerType' in type or 'ColorChoiceType' in type %}
        {% if value is not empty %}
            <span class=\"label-color\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ value }}\">
                <i class=\"dot {{ 'dot'|icon(true) }} fa-fw\" style=\"color:{{ value }}\"></i>
            </span>
        {% endif %}
    {% elseif 'DurationType' in type %}
        {{ value|duration }}
    {% elseif 'YesNoType' in type or 'CheckBoxType' in type %}
        {{ _self.label_boolean(value) }}
    {% elseif 'DatePickerType' in type %}
        {{ value|date_short }}
    {% elseif 'DateTimePickerType' in type %}
        {{ value|date_time }}
    {% elseif 'CountryType' in type %}
        {{ value|country_name }}
    {% elseif 'CurrencyType' in type %}
        {{ value|currency_name }}
    {% elseif 'LanguageType' in type %}
        {{ value|locale_name }}
    {% elseif 'TagsType' in type %}
        {% for tag in value|split(',') %}
            {% if tag is not empty %}
                {{ _self.badge(tag, null|colorize(tag)) }}
            {% endif %}
        {% endfor %}
    {% elseif 'MoneyType' in type %}
        {% set classname = class_name(entity) %}
        {% if entity is null %}
            {{ value }}
        {% elseif classname == 'App\\\\Entity\\\\Timesheet' %}
            {{ value|money(entity.project.customer.currency) }}
        {% elseif classname == 'App\\\\Entity\\\\Customer' %}
            {{ value|money(entity.currency) }}
        {% elseif classname == 'App\\\\Entity\\\\Project' %}
            {{ value|money(entity.customer.currency) }}
        {% elseif classname == 'App\\\\Entity\\\\Activity' and entity.project is not null %}
            {{ value|money(entity.project.customer.currency) }}
        {% else %}
            {{ value }}
        {% endif %}
    {% elseif 'TextareaType' in type %}
        {{ value|nl2br }}
    {% elseif 'EmailType' in type %}
        <a href=\"mailto:{{ value }}\">{{ value }}</a>
    {% elseif 'UrlType' in type %}
        <a href=\"{{ value }}\" target=\"_blank\">{{ value }}</a>
    {% else %}
        {{ value }}
    {% endif %}
{% endmacro %}

{% macro team_list(teams, options) %}
    {% set showTitle = options['title'] ?? true %}
    {% set collapseAt = options['collapse'] ?? 12 %}
    {% set nameClass = options['name_class'] ?? '' %}
    {% set viewTeam = is_granted('view_team') %}
    <table class=\"table table-hover dataTable\" role=\"grid\">
        {% if showTitle %}
        <thead>
            <tr>
                <th class=\"hw-min\">{{ 'team'|trans }}</th>
                <th class=\"d-none d-sm-table-cell\">{{ 'team.member'|trans({}, 'teams') }}</th>
            </tr>
        </thead>
        {% endif %}
        <tbody>
        {% for team in teams|sort((a, b) => a.name <=> b.name) %}
            {% set members = team.members|filter(m => m.user.enabled) %}
            {% set class = 'avatar-rounded' %}
            <tr{% if viewTeam and is_granted('edit', team) %} class=\"modal-ajax-form open-edit\" data-href=\"{{ path('admin_team_member', {'id': team.id}) }}\"{% endif %}>
                <td class=\"{{ nameClass }}\">
                    {{ _self.label_color_dot('color', true, team.name, null, team.color|colorize(team.name)) }}
                </td>
                <td class=\"d-none d-sm-table-cell avatars avatar-list avatar-list-stacked\">
                    {% for member in members|sort((a, b) => b.teamlead <=> a.teamlead) %}
                        {% set user = member.user %}
                        {% if member.teamlead %}
                            {{ _self.user_avatar(user, ('teamlead'|trans ~ ': ' ~ user.displayName), (class ~ ' teamlead'), 'info') }}
                        {% else %}
                            {{ _self.user_avatar(user, null, class) }}
                        {% endif %}
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro nothing_found(events) %}
    {{ _self.callout('warning', 'error.no_entries_found') }}
    {% if events is not empty %}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('{{ events }}');
        });
    </script>
    {% endif %}
{% endmacro %}

{#
    To be used like this:
    <tr class=\"{{ class_customer_row(customer, now) }}\">
#}
{% macro class_customer_row(customer, now) %}
    {%- if not customer.visible %}bg-orange-lt{% endif -%}
{% endmacro %}

{#
    To be used like this:
    <tr class=\"{{ class_tag_row(tag) }}\">
#}
{% macro class_tag_row(tag) %}
    {%- if not tag.visible %}bg-orange-lt{% endif -%}
{% endmacro %}

{#
    To be used like this:
    <tr {{ customer_row_attr(customer, now) }}>
#}
{% macro customer_row_attr(customer, now) %}
    {%- set class = _self.class_customer_row(customer, now) %}
    {% set dataHref = '' %}
    {% if is_granted('view', customer) %}
        {% set class = class ~ ' alternative-link open-edit' %}
        {% set dataHref = path('customer_details', {'id': customer.id}) %}
    {% endif -%}
    class=\"{{ class }}\" data-href=\"{{ dataHref }}\"
{% endmacro %}

{#
    To be used like this:
    <tr class=\"{{ class_project_row(project, now) }}\">
#}
{% macro class_project_row(project, now) %}
    {%- if not project.visible or (project.end is not null and project.end < now) %}bg-orange-lt{% endif -%}
{% endmacro %}

{#
    To be used like this:
    <tr {{ project_row_attr(project, now) }}>
#}
{% macro project_row_attr(project, now) %}
    {%- set class = _self.class_project_row(project, now) %}
    {% set dataHref = '' %}
    {% if is_granted('view', project) %}
        {% set class = class ~ ' alternative-link open-edit' %}
        {% set dataHref = path('project_details', {'id': project.id}) %}
    {% endif -%}
    class=\"{{ class }}\" data-href=\"{{ dataHref }}\"
{% endmacro %}

{#
    To be used like this:
    <tr {{ class_activity_row(activity, now) }}>
#}
{% macro class_activity_row(activity, now) %}
    {%- if not activity.visible %}bg-orange-lt{% endif -%}
{% endmacro %}

{#
    To be used like this:
    <tr {{ activity_row_attr(activity, now) }}>
#}
{% macro activity_row_attr(activity, now) %}
    {%- set class = _self.class_activity_row(activity, now) %}
    {% set dataHref = '' %}
    {% if is_granted('view', activity) %}
        {% set class = class ~ ' alternative-link open-edit' %}
        {% set dataHref = path('activity_details', {'id': activity.id}) %}
    {% endif -%}
    class=\"{{ class }}\" data-href=\"{{ dataHref }}\"
{% endmacro %}

{#
    To be used like this:
    <tr class=\"{{ class_user_row(user, now) }}\">
#}
{% macro class_user_row(user) %}
    {%- if not user.enabled %}bg-orange-lt{% endif -%}
{% endmacro %}

{#
    To be used like this:
    <tr {{ user_row_attr(user) }}>
#}
{% macro user_row_attr(user) %}
    {%- set class = _self.class_user_row(user) %}
    {% set dataHref = '' %}
    {% if is_granted('view', user) %}
        {% set class = class ~ ' alternative-link open-edit' %}
        {% set dataHref = path('user_profile', {'username': user.username}) %}
    {% endif -%}
    class=\"{{ class }}\" data-href=\"{{ dataHref }}\"
{% endmacro %}

{# To be used mainly in <tr class=\"{{ class_user_row(user, now) }}\"> #}
{% macro short_stats_row(stats) %}
    <div class=\"row\">
        {% set colLength = 12 / stats|length %}
        {% for title, value in stats %}
        <div class=\"col-sm-{{ colLength }} border-right\">
            <div class=\"description-block\">
                <h5 class=\"description-header\">{{ value }}</h5>
                <span class=\"description-text\">{{ title }}</span>
            </div>
        </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro page_reloader(events, full_reload) %}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function() {
            KimaiReloadPageWidget.create('{{ events }}', {% if full_reload is same as true %}true{% else %}false{% endif %});
        });
    </script>
{% endmacro %}

{% macro work_times_result(should, actual, decimal) %}
    {% set result = actual - should %}
    {% if result == 0 %}
        <span class=\"work_time_exact\">{{ result|duration(decimal) }}</span>
    {% elseif should == 0 and actual > 0 %}
        <span class=\"work_time_positive text-green\">+{{ actual|duration(decimal) }}</span>
    {% elseif result < 0 %}
        <span class=\"work_time_negative text-red\">{{ result|duration(decimal) }}</span>
    {% else %}
        <span class=\"work_time_positive text-green\">+{{ result|duration(decimal) }}</span>
    {% endif %}
{% endmacro %}
", "macros/widgets.html.twig", "C:\\wamp64\\www\\kimai\\templates\\macros\\widgets.html.twig");
    }
}
