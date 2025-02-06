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

/* calendar/user.html.twig */
class __TwigTemplate_43c4368e292d21255293bde63a468db7 extends Template
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

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "calendar/user.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calendar/user.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "    <div class=\"row\">
        ";
        // line 6
        $context["hasTwoColumns"] = ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "dragDropAmount", [], "any", false, false, false, 6) > 0) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["dragAndDrop"]) || array_key_exists("dragAndDrop", $context) ? $context["dragAndDrop"] : (function () { throw new RuntimeError('Variable "dragAndDrop" does not exist.', 6, $this->source); })()))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["dragAndDrop"]) || array_key_exists("dragAndDrop", $context) ? $context["dragAndDrop"] : (function () { throw new RuntimeError('Variable "dragAndDrop" does not exist.', 6, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 6, $this->source); })()), "entries", [], "any", false, false, false, 6)) > 0); })) > 0)) ||  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })())));
        // line 7
        yield "        ";
        if ((isset($context["hasTwoColumns"]) || array_key_exists("hasTwoColumns", $context) ? $context["hasTwoColumns"] : (function () { throw new RuntimeError('Variable "hasTwoColumns" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "        <div class=\"col-md-4 col-lg-3 d-none d-md-block order-last\">
            ";
            // line 9
            if ( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()))) {
                // line 10
                yield "                ";
                yield from $this->loadTemplate("calendar/user.html.twig", "calendar/user.html.twig", 10, "202914872")->unwrap()->yield($context);
                // line 20
                yield "            ";
            }
            // line 21
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["dragAndDrop"]) || array_key_exists("dragAndDrop", $context) ? $context["dragAndDrop"] : (function () { throw new RuntimeError('Variable "dragAndDrop" does not exist.', 21, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 21, $this->source); })()), "entries", [], "any", false, false, false, 21)) > 0); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 22
                yield "                ";
                yield from $this->loadTemplate("calendar/user.html.twig", "calendar/user.html.twig", 22, "1965738934")->unwrap()->yield($context);
                // line 43
                yield "            ";
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
            unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        </div>
        ";
        }
        // line 46
        yield "
        <div class=\"col-xs-12 ";
        // line 47
        if ((isset($context["hasTwoColumns"]) || array_key_exists("hasTwoColumns", $context) ? $context["hasTwoColumns"] : (function () { throw new RuntimeError('Variable "hasTwoColumns" does not exist.', 47, $this->source); })())) {
            yield "col-md-8 col-lg-9 col-print-12";
        }
        yield "\">
            ";
        // line 48
        yield from $this->loadTemplate("calendar/user.html.twig", "calendar/user.html.twig", 48, "430155345")->unwrap()->yield($context);
        // line 54
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 60
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("calendar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 64
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    ";
        // line 65
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("calendar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        yield "    ";
        $context["calendarSelector"] = "timesheet_calendar";
        // line 70
        yield "    ";
        $context["createParams"] = "";
        // line 71
        yield "    ";
        $context["createRoute"] = "timesheet_create";
        // line 72
        yield "    ";
        $context["editRoute"] = "timesheet_edit";
        // line 73
        yield "    ";
        $context["canCreate"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet");
        // line 74
        yield "    ";
        $context["canEdit"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit_own_timesheet");
        // line 75
        yield "    ";
        $context["canEditExported"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit_exported_timesheet");
        // line 76
        yield "    ";
        $context["isForeignEdit"] = false;
        // line 77
        yield "    ";
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77))) {
            // line 78
            yield "        ";
            $context["isForeignEdit"] = true;
            // line 79
            yield "        ";
            $context["createParams"] = (("user=" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)) . "&");
            // line 80
            yield "        ";
            $context["createRoute"] = "admin_timesheet_create";
            // line 81
            yield "        ";
            $context["editRoute"] = "admin_timesheet_edit";
            // line 82
            yield "        ";
            $context["canCreate"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_other_timesheet");
            // line 83
            yield "        ";
            $context["canEdit"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit_other_timesheet");
            // line 84
            yield "    ";
        }
        // line 85
        yield "
    ";
        // line 86
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        ";
        // line 89
        yield "        var calendar = null;

        const reloader = function() { calendar.reloadEvents(); };
        document.addEventListener('kimai.timesheetUpdate', reloader);
        document.addEventListener('kimai.timesheetDelete', reloader);

        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;

            let calendarOptions = {
                dragdrop: {
                    container: '.external-events',
                    items: '.external-event',
                },
                initialView: '";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getPreferenceValue", ["calendar_initial_view"], "method", false, false, false, 103), "html", null, true);
        yield "',
                translations: {
                    customer: '";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer"), "html", null, true);
        yield "',
                    project: '";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project"), "html", null, true);
        yield "',
                    activity: '";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activity"), "html", null, true);
        yield "',
                },
                permissions: {
                    edit: ";
        // line 110
        if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 110, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    edit_exported: ";
        // line 111
        if ((isset($context["canEditExported"]) || array_key_exists("canEditExported", $context) ? $context["canEditExported"] : (function () { throw new RuntimeError('Variable "canEditExported" does not exist.', 111, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    create: ";
        // line 112
        if ((isset($context["canCreate"]) || array_key_exists("canCreate", $context) ? $context["canCreate"] : (function () { throw new RuntimeError('Variable "canCreate" does not exist.', 112, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    edit_begin: ";
        // line 113
        if ((isset($context["can_edit_begin"]) || array_key_exists("can_edit_begin", $context) ? $context["can_edit_begin"] : (function () { throw new RuntimeError('Variable "can_edit_begin" does not exist.', 113, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    edit_end: ";
        // line 114
        if ((isset($context["can_edit_end"]) || array_key_exists("can_edit_end", $context) ? $context["can_edit_end"] : (function () { throw new RuntimeError('Variable "can_edit_end" does not exist.', 114, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    edit_duration: ";
        // line 115
        if ((isset($context["can_edit_duration"]) || array_key_exists("can_edit_duration", $context) ? $context["can_edit_duration"] : (function () { throw new RuntimeError('Variable "can_edit_duration" does not exist.', 115, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                    punch: ";
        // line 116
        if ((isset($context["is_punch_mode"]) || array_key_exists("is_punch_mode", $context) ? $context["is_punch_mode"] : (function () { throw new RuntimeError('Variable "is_punch_mode" does not exist.', 116, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ",
                },
                icons: {
                    next: '";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("right", true), "html", null, true);
        yield "',
                    previous: '";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("left", true), "html", null, true);
        yield "',
                    nextYear: '";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("right2", true), "html", null, true);
        yield "',
                    previousYear: '";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("left2", true), "html", null, true);
        yield "',
                },
                ";
        // line 124
        if ( !(null === (isset($context["google"]) || array_key_exists("google", $context) ? $context["google"] : (function () { throw new RuntimeError('Variable "google" does not exist.', 124, $this->source); })()))) {
            // line 125
            yield "                googleCalendarApiKey: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["google"]) || array_key_exists("google", $context) ? $context["google"] : (function () { throw new RuntimeError('Variable "google" does not exist.', 125, $this->source); })()), "apiKey", [], "any", false, false, false, 125), "html", null, true);
            yield "',
                ";
        }
        // line 127
        yield "                patterns: {
                    title: '";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 128, $this->source); })()), "entryTitlePattern", [], "any", false, false, false, 128), "html", null, true);
        yield "',
                },
                defaultStartTime: ";
        // line 130
        if ((null === (isset($context["defaultStartTime"]) || array_key_exists("defaultStartTime", $context) ? $context["defaultStartTime"] : (function () { throw new RuntimeError('Variable "defaultStartTime" does not exist.', 130, $this->source); })()))) {
            yield "null";
        } else {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultStartTime"]) || array_key_exists("defaultStartTime", $context) ? $context["defaultStartTime"] : (function () { throw new RuntimeError('Variable "defaultStartTime" does not exist.', 130, $this->source); })()), "html", null, true);
            yield "'";
        }
        yield ",
                now: '";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 131, $this->source); })()), "c"), "html", null, true);
        yield "',
                ";
        // line 133
        yield "                timezone: '";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "timezone", [], "any", false, false, false, 133) == "UTC")) ? ("GMT") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "timezone", [], "any", false, false, false, 133), "html", null, true)));
        yield "',
                eventSources: [
                    {
                        id: 'kimaiUserTimeSource',
                        type: 'timesheet',
                        url: '";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_timesheets", ["user" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "size" => 1000, "full" => "true", "begin" => "__FROM__", "end" => "__TO__"]);
        yield "',
                        options: {
                            color: '";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Configuration']->get("theme.calendar.background_color"), "html", null, true);
        yield "',
                        },
                    }
                    ";
        // line 143
        if ( !(null === (isset($context["google"]) || array_key_exists("google", $context) ? $context["google"] : (function () { throw new RuntimeError('Variable "google" does not exist.', 143, $this->source); })()))) {
            // line 144
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["google"]) || array_key_exists("google", $context) ? $context["google"] : (function () { throw new RuntimeError('Variable "google" does not exist.', 144, $this->source); })()), "sources", [], "any", false, false, false, 144));
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
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 145
                yield "                    ,
                    {
                        id: 'googleCompanyCalendar";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 147), "html", null, true);
                yield "',
                        type: '";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "typeName", [], "any", false, false, false, 148), "html", null, true);
                yield "',
                        options: {
                            googleCalendarId: '";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "uri", [], "any", false, false, false, 150), "html", null, true);
                yield "',
                            name: '";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "id", [], "any", false, false, false, 151), "html", null, true);
                yield "',
                            color: '";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "color", [], "any", false, false, false, 152), "html", null, true);
                yield "',
                            textColor: '";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "color", [], "any", false, false, false, 153)), "html", null, true);
                yield "',
                        }
                    }
                    ";
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
            unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                    ";
        }
        // line 158
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 158, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 159
            yield "                    ,
                    {
                        id: '";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "id", [], "any", false, false, false, 161), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 161), "html", null, true);
            yield "',
                        type: '";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "typeName", [], "any", false, false, false, 162), "html", null, true);
            yield "',
                        url: '";
            // line 163
            yield CoreExtension::getAttribute($this->env, $this->source, $context["source"], "uri", [], "any", false, false, false, 163);
            yield "',
                        options: {...";
            // line 164
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "options", [], "any", false, false, false, 164));
            yield ", ...{
                            color: '";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "color", [], "any", false, false, false, 165), "html", null, true);
            yield "',
                            textColor: '";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->calculateFontContrastColor(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "color", [], "any", false, false, false, 166)), "html", null, true);
            yield "',
                        }}
                    }
                    ";
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
        unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                ],
                url: {
                    update: (timesheetId) => {
                        return '";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patch_timesheet", ["id" => 1]);
        yield "'.replace('1', timesheetId);
                    },
                    create: (start, end) => {
                        let createUrl = '";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["createRoute"]) || array_key_exists("createRoute", $context) ? $context["createRoute"] : (function () { throw new RuntimeError('Variable "createRoute" does not exist.', 176, $this->source); })()));
        yield "' + '?";
        yield (isset($context["createParams"]) || array_key_exists("createParams", $context) ? $context["createParams"] : (function () { throw new RuntimeError('Variable "createParams" does not exist.', 176, $this->source); })());
        yield "';
                        if (end !== undefined) {
                            createUrl += 'from=' + start + '&to=' + end;
                        } else {
                            createUrl += 'begin=' + start;
                        }
                        return createUrl;
                    },
                    edit: (timesheetId) => {
                        return '";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["editRoute"]) || array_key_exists("editRoute", $context) ? $context["editRoute"] : (function () { throw new RuntimeError('Variable "editRoute" does not exist.', 185, $this->source); })()), ["id" => "-XX-"]);
        yield "'.replace('-XX-', timesheetId);
                    },
                    actions: (timesheetId) => {
                        return '";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_timesheet_actions", ["id" => 1, "view" => "calendar", "locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "request", [], "any", false, false, false, 188), "locale", [], "any", false, false, false, 188)]), "html", null, true);
        yield "'.replace('1', timesheetId);
                    },
                },
                preparePayloadForUpdate: (data) => {
                    ";
        // line 192
        if ((isset($context["isForeignEdit"]) || array_key_exists("isForeignEdit", $context) ? $context["isForeignEdit"] : (function () { throw new RuntimeError('Variable "isForeignEdit" does not exist.', 192, $this->source); })())) {
            // line 193
            yield "                    data.user = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193), "html", null, true);
            yield ";
                    ";
        }
        // line 195
        yield "
                    return data;
                },
            };

            calendar = new KimaiCalendar(
                kimai,
                document.getElementById('";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["calendarSelector"]) || array_key_exists("calendarSelector", $context) ? $context["calendarSelector"] : (function () { throw new RuntimeError('Variable "calendarSelector" does not exist.', 202, $this->source); })()), "html", null, true);
        yield "'),
                Object.assign({}, calendarOptions, ";
        // line 203
        yield json_encode((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 203, $this->source); })()));
        yield ")
            );
            calendar.render();

            document.querySelector('.fc-today-button').classList.remove('btn-icon');
            document.querySelector('.fc-header-toolbar').classList.toggle('row');
            document.querySelector('.fc-header-toolbar').classList.add('p-3');
            const toolbar = document.querySelectorAll('.fc-header-toolbar .fc-toolbar-chunk');
            toolbar[0].parentElement.classList.add('p-3');
            toolbar[0].classList.add('col-md-4', 'col-6', 'mb-1', 'text-start', 'order-xs-1');
            toolbar[1].classList.add('col-md-4', 'col-12', 'mb-1', 'text-center', 'order-3');
            toolbar[2].classList.add('col-md-4', 'col-6', 'mb-1', 'text-end', 'order-md-4', 'order-xs-2');

            KimaiReloadPageWidget.create('kimai.systemConfigUpdate', true);
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "calendar/user.html.twig";
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
        return array (  641 => 203,  637 => 202,  628 => 195,  622 => 193,  620 => 192,  613 => 188,  607 => 185,  593 => 176,  587 => 173,  582 => 170,  564 => 166,  560 => 165,  556 => 164,  552 => 163,  548 => 162,  543 => 161,  539 => 159,  521 => 158,  518 => 157,  500 => 153,  496 => 152,  492 => 151,  488 => 150,  483 => 148,  479 => 147,  475 => 145,  457 => 144,  455 => 143,  449 => 140,  444 => 138,  435 => 133,  431 => 131,  421 => 130,  416 => 128,  413 => 127,  407 => 125,  405 => 124,  400 => 122,  396 => 121,  392 => 120,  388 => 119,  378 => 116,  370 => 115,  362 => 114,  354 => 113,  346 => 112,  338 => 111,  330 => 110,  324 => 107,  320 => 106,  316 => 105,  311 => 103,  295 => 89,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  226 => 68,  213 => 65,  208 => 64,  195 => 63,  182 => 60,  177 => 59,  164 => 58,  151 => 54,  149 => 48,  143 => 47,  140 => 46,  136 => 44,  122 => 43,  119 => 22,  101 => 21,  98 => 20,  95 => 10,  93 => 9,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block main %}
    <div class=\"row\">
        {% set hasTwoColumns = (config.dragDropAmount > 0 and dragAndDrop is not empty and (dragAndDrop|filter(s => s.entries|length > 0)|length > 0)) or form is not null %}
        {% if hasTwoColumns %}
        <div class=\"col-md-4 col-lg-3 d-none d-md-block order-last\">
            {% if form is not null %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_body %}
                        {{ form_start(form) }}
                        {% if form.user is defined %}
                            {{ form_row(form.user) }}
                        {% endif %}
                        {{ form_rest(form) }}
                        {{ form_end(form) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
            {% for source in dragAndDrop|filter(s => s.entries|length > 0) %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_title %}{{ source.title|trans({}, source.translationDomain) }}{% endblock %}
                    {% block box_body_class %}drag-and-drop-source p-0{% endblock %}
                    {% block box_body %}
                        <div class=\"list-group list-group-flush external-events\" data-method=\"{{ source.method }}\" data-route=\"{{ path(source.route, source.routeParams) }}\" data-route-replacer=\"{{ source.routeReplacer|json_encode|e('html_attr') }}\">
                            {% for entry in source.entries|slice(0, config.dragDropAmount) %}
                                <div class=\"p-1 ps-2 list-group-item external-event draggable\" data-entry=\"{{ entry.data|json_encode|e('html_attr') }}\"{% if entry.project is not null %} data-toggle=\"tooltip\" title=\"{{ entry.project.customer.name }}\"{% endif %}>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col text-truncate\">
                                            {% if source.blockInclude is not null and entry.blockName is not null and block(entry.blockName, source.blockInclude) is defined %}
                                                {{ block(entry.blockName, source.blockInclude) }}
                                            {% else %}
                                                <span class=\"d-block text-body-secondary text-truncate mt-n1\">{{ entry.title }}</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
        {% endif %}

        <div class=\"col-xs-12 {% if hasTwoColumns %}col-md-8 col-lg-9 col-print-12{% endif %}\">
            {% embed '@theme/embeds/card.html.twig' %}
                {% block box_body_class %}p-0{% endblock %}
                {% block box_body %}
                    <div id=\"timesheet_calendar\"></div>
                {% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('calendar') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    {{ encore_entry_script_tags('calendar') }}
{% endblock %}

{% block javascripts %}
    {% set calendarSelector = 'timesheet_calendar' %}
    {% set createParams = '' %}
    {% set createRoute = 'timesheet_create' %}
    {% set editRoute = 'timesheet_edit' %}
    {% set canCreate = is_granted('create_own_timesheet') %}
    {% set canEdit = is_granted('edit_own_timesheet') %}
    {% set canEditExported = is_granted('edit_exported_timesheet') %}
    {% set isForeignEdit = false %}
    {% if user != app.user %}
        {% set isForeignEdit = true %}
        {% set createParams = 'user=' ~ user.id ~ '&' %}
        {% set createRoute = 'admin_timesheet_create' %}
        {% set editRoute = 'admin_timesheet_edit' %}
        {% set canCreate = is_granted('create_other_timesheet') %}
        {% set canEdit = is_granted('edit_other_timesheet') %}
    {% endif %}

    {{ parent() }}
    <script>
        {# using var, so it can be re-used in the different scopes #}
        var calendar = null;

        const reloader = function() { calendar.reloadEvents(); };
        document.addEventListener('kimai.timesheetUpdate', reloader);
        document.addEventListener('kimai.timesheetDelete', reloader);

        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;

            let calendarOptions = {
                dragdrop: {
                    container: '.external-events',
                    items: '.external-event',
                },
                initialView: '{{ app.user.getPreferenceValue('calendar_initial_view') }}',
                translations: {
                    customer: '{{ 'customer'|trans }}',
                    project: '{{ 'project'|trans }}',
                    activity: '{{ 'activity'|trans }}',
                },
                permissions: {
                    edit: {% if canEdit %}true{% else %}false{% endif %},
                    edit_exported: {% if canEditExported %}true{% else %}false{% endif %},
                    create: {% if canCreate %}true{% else %}false{% endif %},
                    edit_begin: {% if can_edit_begin %}true{% else %}false{% endif %},
                    edit_end: {% if can_edit_end %}true{% else %}false{% endif %},
                    edit_duration: {% if can_edit_duration %}true{% else %}false{% endif %},
                    punch: {% if is_punch_mode %}true{% else %}false{% endif %},
                },
                icons: {
                    next: '{{ 'right'|icon(true) }}',
                    previous: '{{ 'left'|icon(true) }}',
                    nextYear: '{{ 'right2'|icon(true) }}',
                    previousYear: '{{ 'left2'|icon(true) }}',
                },
                {% if google is not null %}
                googleCalendarApiKey: '{{ google.apiKey }}',
                {% endif %}
                patterns: {
                    title: '{{ config.entryTitlePattern }}',
                },
                defaultStartTime: {% if defaultStartTime is null %}null{% else %}'{{ defaultStartTime }}'{% endif %},
                now: '{{ now|date_format('c') }}',
                {# see https://github.com/kimai/kimai/issues/2155 #}
                timezone: '{{ app.user.timezone == 'UTC' ? 'GMT' : app.user.timezone }}',
                eventSources: [
                    {
                        id: 'kimaiUserTimeSource',
                        type: 'timesheet',
                        url: '{{ path('get_timesheets', {'user': user.id, 'size': 1000, 'full': 'true', 'begin': '__FROM__', 'end': '__TO__'})|raw }}',
                        options: {
                            color: '{{ config('theme.calendar.background_color') }}',
                        },
                    }
                    {% if google is not null %}
                    {% for source in google.sources %}
                    ,
                    {
                        id: 'googleCompanyCalendar{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        options: {
                            googleCalendarId: '{{ source.uri }}',
                            name: '{{ source.id }}',
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }
                    }
                    {% endfor %}
                    {% endif %}
                    {% for source in sources %}
                    ,
                    {
                        id: '{{ source.id }}{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        url: '{{ source.uri|raw }}',
                        options: {...{{ source.options|json_encode|raw }}, ...{
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }}
                    }
                    {% endfor %}
                ],
                url: {
                    update: (timesheetId) => {
                        return '{{ path('patch_timesheet', {id: 1}) }}'.replace('1', timesheetId);
                    },
                    create: (start, end) => {
                        let createUrl = '{{ path(createRoute) }}' + '?{{ createParams|raw }}';
                        if (end !== undefined) {
                            createUrl += 'from=' + start + '&to=' + end;
                        } else {
                            createUrl += 'begin=' + start;
                        }
                        return createUrl;
                    },
                    edit: (timesheetId) => {
                        return '{{ path(editRoute, {id: '-XX-'}) }}'.replace('-XX-', timesheetId);
                    },
                    actions: (timesheetId) => {
                        return '{{ path('get_timesheet_actions', {id: 1, 'view': 'calendar', 'locale': (app.request.locale)}) }}'.replace('1', timesheetId);
                    },
                },
                preparePayloadForUpdate: (data) => {
                    {% if isForeignEdit %}
                    data.user = {{ user.id }};
                    {% endif %}

                    return data;
                },
            };

            calendar = new KimaiCalendar(
                kimai,
                document.getElementById('{{ calendarSelector }}'),
                Object.assign({}, calendarOptions, {{ config|json_encode|raw }})
            );
            calendar.render();

            document.querySelector('.fc-today-button').classList.remove('btn-icon');
            document.querySelector('.fc-header-toolbar').classList.toggle('row');
            document.querySelector('.fc-header-toolbar').classList.add('p-3');
            const toolbar = document.querySelectorAll('.fc-header-toolbar .fc-toolbar-chunk');
            toolbar[0].parentElement.classList.add('p-3');
            toolbar[0].classList.add('col-md-4', 'col-6', 'mb-1', 'text-start', 'order-xs-1');
            toolbar[1].classList.add('col-md-4', 'col-12', 'mb-1', 'text-center', 'order-3');
            toolbar[2].classList.add('col-md-4', 'col-6', 'mb-1', 'text-end', 'order-md-4', 'order-xs-2');

            KimaiReloadPageWidget.create('kimai.systemConfigUpdate', true);
        });
    </script>
{% endblock %}", "calendar/user.html.twig", "C:\\wamp64\\www\\kimai\\templates\\calendar\\user.html.twig");
    }
}


/* calendar/user.html.twig */
class __TwigTemplate_43c4368e292d21255293bde63a468db7___202914872 extends Template
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

        $this->blocks = [
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 10
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "calendar/user.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        // line 12
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 13)) {
            // line 14
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), 'row');
            yield "
                        ";
        }
        // line 16
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'rest');
        yield "
                        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "calendar/user.html.twig";
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
        return array (  994 => 17,  989 => 16,  983 => 14,  981 => 13,  976 => 12,  963 => 11,  940 => 10,  641 => 203,  637 => 202,  628 => 195,  622 => 193,  620 => 192,  613 => 188,  607 => 185,  593 => 176,  587 => 173,  582 => 170,  564 => 166,  560 => 165,  556 => 164,  552 => 163,  548 => 162,  543 => 161,  539 => 159,  521 => 158,  518 => 157,  500 => 153,  496 => 152,  492 => 151,  488 => 150,  483 => 148,  479 => 147,  475 => 145,  457 => 144,  455 => 143,  449 => 140,  444 => 138,  435 => 133,  431 => 131,  421 => 130,  416 => 128,  413 => 127,  407 => 125,  405 => 124,  400 => 122,  396 => 121,  392 => 120,  388 => 119,  378 => 116,  370 => 115,  362 => 114,  354 => 113,  346 => 112,  338 => 111,  330 => 110,  324 => 107,  320 => 106,  316 => 105,  311 => 103,  295 => 89,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  226 => 68,  213 => 65,  208 => 64,  195 => 63,  182 => 60,  177 => 59,  164 => 58,  151 => 54,  149 => 48,  143 => 47,  140 => 46,  136 => 44,  122 => 43,  119 => 22,  101 => 21,  98 => 20,  95 => 10,  93 => 9,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block main %}
    <div class=\"row\">
        {% set hasTwoColumns = (config.dragDropAmount > 0 and dragAndDrop is not empty and (dragAndDrop|filter(s => s.entries|length > 0)|length > 0)) or form is not null %}
        {% if hasTwoColumns %}
        <div class=\"col-md-4 col-lg-3 d-none d-md-block order-last\">
            {% if form is not null %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_body %}
                        {{ form_start(form) }}
                        {% if form.user is defined %}
                            {{ form_row(form.user) }}
                        {% endif %}
                        {{ form_rest(form) }}
                        {{ form_end(form) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
            {% for source in dragAndDrop|filter(s => s.entries|length > 0) %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_title %}{{ source.title|trans({}, source.translationDomain) }}{% endblock %}
                    {% block box_body_class %}drag-and-drop-source p-0{% endblock %}
                    {% block box_body %}
                        <div class=\"list-group list-group-flush external-events\" data-method=\"{{ source.method }}\" data-route=\"{{ path(source.route, source.routeParams) }}\" data-route-replacer=\"{{ source.routeReplacer|json_encode|e('html_attr') }}\">
                            {% for entry in source.entries|slice(0, config.dragDropAmount) %}
                                <div class=\"p-1 ps-2 list-group-item external-event draggable\" data-entry=\"{{ entry.data|json_encode|e('html_attr') }}\"{% if entry.project is not null %} data-toggle=\"tooltip\" title=\"{{ entry.project.customer.name }}\"{% endif %}>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col text-truncate\">
                                            {% if source.blockInclude is not null and entry.blockName is not null and block(entry.blockName, source.blockInclude) is defined %}
                                                {{ block(entry.blockName, source.blockInclude) }}
                                            {% else %}
                                                <span class=\"d-block text-body-secondary text-truncate mt-n1\">{{ entry.title }}</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
        {% endif %}

        <div class=\"col-xs-12 {% if hasTwoColumns %}col-md-8 col-lg-9 col-print-12{% endif %}\">
            {% embed '@theme/embeds/card.html.twig' %}
                {% block box_body_class %}p-0{% endblock %}
                {% block box_body %}
                    <div id=\"timesheet_calendar\"></div>
                {% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('calendar') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    {{ encore_entry_script_tags('calendar') }}
{% endblock %}

{% block javascripts %}
    {% set calendarSelector = 'timesheet_calendar' %}
    {% set createParams = '' %}
    {% set createRoute = 'timesheet_create' %}
    {% set editRoute = 'timesheet_edit' %}
    {% set canCreate = is_granted('create_own_timesheet') %}
    {% set canEdit = is_granted('edit_own_timesheet') %}
    {% set canEditExported = is_granted('edit_exported_timesheet') %}
    {% set isForeignEdit = false %}
    {% if user != app.user %}
        {% set isForeignEdit = true %}
        {% set createParams = 'user=' ~ user.id ~ '&' %}
        {% set createRoute = 'admin_timesheet_create' %}
        {% set editRoute = 'admin_timesheet_edit' %}
        {% set canCreate = is_granted('create_other_timesheet') %}
        {% set canEdit = is_granted('edit_other_timesheet') %}
    {% endif %}

    {{ parent() }}
    <script>
        {# using var, so it can be re-used in the different scopes #}
        var calendar = null;

        const reloader = function() { calendar.reloadEvents(); };
        document.addEventListener('kimai.timesheetUpdate', reloader);
        document.addEventListener('kimai.timesheetDelete', reloader);

        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;

            let calendarOptions = {
                dragdrop: {
                    container: '.external-events',
                    items: '.external-event',
                },
                initialView: '{{ app.user.getPreferenceValue('calendar_initial_view') }}',
                translations: {
                    customer: '{{ 'customer'|trans }}',
                    project: '{{ 'project'|trans }}',
                    activity: '{{ 'activity'|trans }}',
                },
                permissions: {
                    edit: {% if canEdit %}true{% else %}false{% endif %},
                    edit_exported: {% if canEditExported %}true{% else %}false{% endif %},
                    create: {% if canCreate %}true{% else %}false{% endif %},
                    edit_begin: {% if can_edit_begin %}true{% else %}false{% endif %},
                    edit_end: {% if can_edit_end %}true{% else %}false{% endif %},
                    edit_duration: {% if can_edit_duration %}true{% else %}false{% endif %},
                    punch: {% if is_punch_mode %}true{% else %}false{% endif %},
                },
                icons: {
                    next: '{{ 'right'|icon(true) }}',
                    previous: '{{ 'left'|icon(true) }}',
                    nextYear: '{{ 'right2'|icon(true) }}',
                    previousYear: '{{ 'left2'|icon(true) }}',
                },
                {% if google is not null %}
                googleCalendarApiKey: '{{ google.apiKey }}',
                {% endif %}
                patterns: {
                    title: '{{ config.entryTitlePattern }}',
                },
                defaultStartTime: {% if defaultStartTime is null %}null{% else %}'{{ defaultStartTime }}'{% endif %},
                now: '{{ now|date_format('c') }}',
                {# see https://github.com/kimai/kimai/issues/2155 #}
                timezone: '{{ app.user.timezone == 'UTC' ? 'GMT' : app.user.timezone }}',
                eventSources: [
                    {
                        id: 'kimaiUserTimeSource',
                        type: 'timesheet',
                        url: '{{ path('get_timesheets', {'user': user.id, 'size': 1000, 'full': 'true', 'begin': '__FROM__', 'end': '__TO__'})|raw }}',
                        options: {
                            color: '{{ config('theme.calendar.background_color') }}',
                        },
                    }
                    {% if google is not null %}
                    {% for source in google.sources %}
                    ,
                    {
                        id: 'googleCompanyCalendar{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        options: {
                            googleCalendarId: '{{ source.uri }}',
                            name: '{{ source.id }}',
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }
                    }
                    {% endfor %}
                    {% endif %}
                    {% for source in sources %}
                    ,
                    {
                        id: '{{ source.id }}{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        url: '{{ source.uri|raw }}',
                        options: {...{{ source.options|json_encode|raw }}, ...{
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }}
                    }
                    {% endfor %}
                ],
                url: {
                    update: (timesheetId) => {
                        return '{{ path('patch_timesheet', {id: 1}) }}'.replace('1', timesheetId);
                    },
                    create: (start, end) => {
                        let createUrl = '{{ path(createRoute) }}' + '?{{ createParams|raw }}';
                        if (end !== undefined) {
                            createUrl += 'from=' + start + '&to=' + end;
                        } else {
                            createUrl += 'begin=' + start;
                        }
                        return createUrl;
                    },
                    edit: (timesheetId) => {
                        return '{{ path(editRoute, {id: '-XX-'}) }}'.replace('-XX-', timesheetId);
                    },
                    actions: (timesheetId) => {
                        return '{{ path('get_timesheet_actions', {id: 1, 'view': 'calendar', 'locale': (app.request.locale)}) }}'.replace('1', timesheetId);
                    },
                },
                preparePayloadForUpdate: (data) => {
                    {% if isForeignEdit %}
                    data.user = {{ user.id }};
                    {% endif %}

                    return data;
                },
            };

            calendar = new KimaiCalendar(
                kimai,
                document.getElementById('{{ calendarSelector }}'),
                Object.assign({}, calendarOptions, {{ config|json_encode|raw }})
            );
            calendar.render();

            document.querySelector('.fc-today-button').classList.remove('btn-icon');
            document.querySelector('.fc-header-toolbar').classList.toggle('row');
            document.querySelector('.fc-header-toolbar').classList.add('p-3');
            const toolbar = document.querySelectorAll('.fc-header-toolbar .fc-toolbar-chunk');
            toolbar[0].parentElement.classList.add('p-3');
            toolbar[0].classList.add('col-md-4', 'col-6', 'mb-1', 'text-start', 'order-xs-1');
            toolbar[1].classList.add('col-md-4', 'col-12', 'mb-1', 'text-center', 'order-3');
            toolbar[2].classList.add('col-md-4', 'col-6', 'mb-1', 'text-end', 'order-md-4', 'order-xs-2');

            KimaiReloadPageWidget.create('kimai.systemConfigUpdate', true);
        });
    </script>
{% endblock %}", "calendar/user.html.twig", "C:\\wamp64\\www\\kimai\\templates\\calendar\\user.html.twig");
    }
}


/* calendar/user.html.twig */
class __TwigTemplate_43c4368e292d21255293bde63a468db7___1965738934 extends Template
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

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 22
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "calendar/user.html.twig", 22);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 23, $this->source); })()), "translationDomain", [], "any", false, false, false, 23)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        yield "drag-and-drop-source p-0";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        // line 26
        yield "                        <div class=\"list-group list-group-flush external-events\" data-method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 26, $this->source); })()), "method", [], "any", false, false, false, 26), "html", null, true);
        yield "\" data-route=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 26, $this->source); })()), "route", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 26, $this->source); })()), "routeParams", [], "any", false, false, false, 26)), "html", null, true);
        yield "\" data-route-replacer=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 26, $this->source); })()), "routeReplacer", [], "any", false, false, false, 26)), "html_attr");
        yield "\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 27, $this->source); })()), "entries", [], "any", false, false, false, 27), 0, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "dragDropAmount", [], "any", false, false, false, 27)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 28
            yield "                                <div class=\"p-1 ps-2 list-group-item external-event draggable\" data-entry=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "data", [], "any", false, false, false, 28)), "html_attr");
            yield "\"";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 28))) {
                yield " data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 28), "customer", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                yield "\"";
            }
            yield ">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col text-truncate\">
                                            ";
            // line 31
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 31, $this->source); })()), "blockInclude", [], "any", false, false, false, 31)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "blockName", [], "any", false, false, false, 31))) &&             $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 31, $this->source); })()), "blockInclude", [], "any", false, false, false, 31), "calendar/user.html.twig", 31)->unwrap()->hasBlock(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "blockName", [], "any", false, false, false, 31), $context))) {
                // line 32
                yield "                                                ";
                yield from                 $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 32, $this->source); })()), "blockInclude", [], "any", false, false, false, 32), "calendar/user.html.twig", 32)->unwrap()->yieldBlock(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "blockName", [], "any", false, false, false, 32), $context);
                yield "
                                            ";
            } else {
                // line 34
                yield "                                                <span class=\"d-block text-body-secondary text-truncate mt-n1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 34), "html", null, true);
                yield "</span>
                                            ";
            }
            // line 36
            yield "                                        </div>
                                    </div>
                                </div>
                            ";
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
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "calendar/user.html.twig";
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
        return array (  1432 => 40,  1415 => 36,  1409 => 34,  1403 => 32,  1401 => 31,  1388 => 28,  1371 => 27,  1362 => 26,  1349 => 25,  1326 => 24,  1303 => 23,  1280 => 22,  994 => 17,  989 => 16,  983 => 14,  981 => 13,  976 => 12,  963 => 11,  940 => 10,  641 => 203,  637 => 202,  628 => 195,  622 => 193,  620 => 192,  613 => 188,  607 => 185,  593 => 176,  587 => 173,  582 => 170,  564 => 166,  560 => 165,  556 => 164,  552 => 163,  548 => 162,  543 => 161,  539 => 159,  521 => 158,  518 => 157,  500 => 153,  496 => 152,  492 => 151,  488 => 150,  483 => 148,  479 => 147,  475 => 145,  457 => 144,  455 => 143,  449 => 140,  444 => 138,  435 => 133,  431 => 131,  421 => 130,  416 => 128,  413 => 127,  407 => 125,  405 => 124,  400 => 122,  396 => 121,  392 => 120,  388 => 119,  378 => 116,  370 => 115,  362 => 114,  354 => 113,  346 => 112,  338 => 111,  330 => 110,  324 => 107,  320 => 106,  316 => 105,  311 => 103,  295 => 89,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  226 => 68,  213 => 65,  208 => 64,  195 => 63,  182 => 60,  177 => 59,  164 => 58,  151 => 54,  149 => 48,  143 => 47,  140 => 46,  136 => 44,  122 => 43,  119 => 22,  101 => 21,  98 => 20,  95 => 10,  93 => 9,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block main %}
    <div class=\"row\">
        {% set hasTwoColumns = (config.dragDropAmount > 0 and dragAndDrop is not empty and (dragAndDrop|filter(s => s.entries|length > 0)|length > 0)) or form is not null %}
        {% if hasTwoColumns %}
        <div class=\"col-md-4 col-lg-3 d-none d-md-block order-last\">
            {% if form is not null %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_body %}
                        {{ form_start(form) }}
                        {% if form.user is defined %}
                            {{ form_row(form.user) }}
                        {% endif %}
                        {{ form_rest(form) }}
                        {{ form_end(form) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
            {% for source in dragAndDrop|filter(s => s.entries|length > 0) %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_title %}{{ source.title|trans({}, source.translationDomain) }}{% endblock %}
                    {% block box_body_class %}drag-and-drop-source p-0{% endblock %}
                    {% block box_body %}
                        <div class=\"list-group list-group-flush external-events\" data-method=\"{{ source.method }}\" data-route=\"{{ path(source.route, source.routeParams) }}\" data-route-replacer=\"{{ source.routeReplacer|json_encode|e('html_attr') }}\">
                            {% for entry in source.entries|slice(0, config.dragDropAmount) %}
                                <div class=\"p-1 ps-2 list-group-item external-event draggable\" data-entry=\"{{ entry.data|json_encode|e('html_attr') }}\"{% if entry.project is not null %} data-toggle=\"tooltip\" title=\"{{ entry.project.customer.name }}\"{% endif %}>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col text-truncate\">
                                            {% if source.blockInclude is not null and entry.blockName is not null and block(entry.blockName, source.blockInclude) is defined %}
                                                {{ block(entry.blockName, source.blockInclude) }}
                                            {% else %}
                                                <span class=\"d-block text-body-secondary text-truncate mt-n1\">{{ entry.title }}</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
        {% endif %}

        <div class=\"col-xs-12 {% if hasTwoColumns %}col-md-8 col-lg-9 col-print-12{% endif %}\">
            {% embed '@theme/embeds/card.html.twig' %}
                {% block box_body_class %}p-0{% endblock %}
                {% block box_body %}
                    <div id=\"timesheet_calendar\"></div>
                {% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('calendar') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    {{ encore_entry_script_tags('calendar') }}
{% endblock %}

{% block javascripts %}
    {% set calendarSelector = 'timesheet_calendar' %}
    {% set createParams = '' %}
    {% set createRoute = 'timesheet_create' %}
    {% set editRoute = 'timesheet_edit' %}
    {% set canCreate = is_granted('create_own_timesheet') %}
    {% set canEdit = is_granted('edit_own_timesheet') %}
    {% set canEditExported = is_granted('edit_exported_timesheet') %}
    {% set isForeignEdit = false %}
    {% if user != app.user %}
        {% set isForeignEdit = true %}
        {% set createParams = 'user=' ~ user.id ~ '&' %}
        {% set createRoute = 'admin_timesheet_create' %}
        {% set editRoute = 'admin_timesheet_edit' %}
        {% set canCreate = is_granted('create_other_timesheet') %}
        {% set canEdit = is_granted('edit_other_timesheet') %}
    {% endif %}

    {{ parent() }}
    <script>
        {# using var, so it can be re-used in the different scopes #}
        var calendar = null;

        const reloader = function() { calendar.reloadEvents(); };
        document.addEventListener('kimai.timesheetUpdate', reloader);
        document.addEventListener('kimai.timesheetDelete', reloader);

        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;

            let calendarOptions = {
                dragdrop: {
                    container: '.external-events',
                    items: '.external-event',
                },
                initialView: '{{ app.user.getPreferenceValue('calendar_initial_view') }}',
                translations: {
                    customer: '{{ 'customer'|trans }}',
                    project: '{{ 'project'|trans }}',
                    activity: '{{ 'activity'|trans }}',
                },
                permissions: {
                    edit: {% if canEdit %}true{% else %}false{% endif %},
                    edit_exported: {% if canEditExported %}true{% else %}false{% endif %},
                    create: {% if canCreate %}true{% else %}false{% endif %},
                    edit_begin: {% if can_edit_begin %}true{% else %}false{% endif %},
                    edit_end: {% if can_edit_end %}true{% else %}false{% endif %},
                    edit_duration: {% if can_edit_duration %}true{% else %}false{% endif %},
                    punch: {% if is_punch_mode %}true{% else %}false{% endif %},
                },
                icons: {
                    next: '{{ 'right'|icon(true) }}',
                    previous: '{{ 'left'|icon(true) }}',
                    nextYear: '{{ 'right2'|icon(true) }}',
                    previousYear: '{{ 'left2'|icon(true) }}',
                },
                {% if google is not null %}
                googleCalendarApiKey: '{{ google.apiKey }}',
                {% endif %}
                patterns: {
                    title: '{{ config.entryTitlePattern }}',
                },
                defaultStartTime: {% if defaultStartTime is null %}null{% else %}'{{ defaultStartTime }}'{% endif %},
                now: '{{ now|date_format('c') }}',
                {# see https://github.com/kimai/kimai/issues/2155 #}
                timezone: '{{ app.user.timezone == 'UTC' ? 'GMT' : app.user.timezone }}',
                eventSources: [
                    {
                        id: 'kimaiUserTimeSource',
                        type: 'timesheet',
                        url: '{{ path('get_timesheets', {'user': user.id, 'size': 1000, 'full': 'true', 'begin': '__FROM__', 'end': '__TO__'})|raw }}',
                        options: {
                            color: '{{ config('theme.calendar.background_color') }}',
                        },
                    }
                    {% if google is not null %}
                    {% for source in google.sources %}
                    ,
                    {
                        id: 'googleCompanyCalendar{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        options: {
                            googleCalendarId: '{{ source.uri }}',
                            name: '{{ source.id }}',
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }
                    }
                    {% endfor %}
                    {% endif %}
                    {% for source in sources %}
                    ,
                    {
                        id: '{{ source.id }}{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        url: '{{ source.uri|raw }}',
                        options: {...{{ source.options|json_encode|raw }}, ...{
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }}
                    }
                    {% endfor %}
                ],
                url: {
                    update: (timesheetId) => {
                        return '{{ path('patch_timesheet', {id: 1}) }}'.replace('1', timesheetId);
                    },
                    create: (start, end) => {
                        let createUrl = '{{ path(createRoute) }}' + '?{{ createParams|raw }}';
                        if (end !== undefined) {
                            createUrl += 'from=' + start + '&to=' + end;
                        } else {
                            createUrl += 'begin=' + start;
                        }
                        return createUrl;
                    },
                    edit: (timesheetId) => {
                        return '{{ path(editRoute, {id: '-XX-'}) }}'.replace('-XX-', timesheetId);
                    },
                    actions: (timesheetId) => {
                        return '{{ path('get_timesheet_actions', {id: 1, 'view': 'calendar', 'locale': (app.request.locale)}) }}'.replace('1', timesheetId);
                    },
                },
                preparePayloadForUpdate: (data) => {
                    {% if isForeignEdit %}
                    data.user = {{ user.id }};
                    {% endif %}

                    return data;
                },
            };

            calendar = new KimaiCalendar(
                kimai,
                document.getElementById('{{ calendarSelector }}'),
                Object.assign({}, calendarOptions, {{ config|json_encode|raw }})
            );
            calendar.render();

            document.querySelector('.fc-today-button').classList.remove('btn-icon');
            document.querySelector('.fc-header-toolbar').classList.toggle('row');
            document.querySelector('.fc-header-toolbar').classList.add('p-3');
            const toolbar = document.querySelectorAll('.fc-header-toolbar .fc-toolbar-chunk');
            toolbar[0].parentElement.classList.add('p-3');
            toolbar[0].classList.add('col-md-4', 'col-6', 'mb-1', 'text-start', 'order-xs-1');
            toolbar[1].classList.add('col-md-4', 'col-12', 'mb-1', 'text-center', 'order-3');
            toolbar[2].classList.add('col-md-4', 'col-6', 'mb-1', 'text-end', 'order-md-4', 'order-xs-2');

            KimaiReloadPageWidget.create('kimai.systemConfigUpdate', true);
        });
    </script>
{% endblock %}", "calendar/user.html.twig", "C:\\wamp64\\www\\kimai\\templates\\calendar\\user.html.twig");
    }
}


/* calendar/user.html.twig */
class __TwigTemplate_43c4368e292d21255293bde63a468db7___430155345 extends Template
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

        $this->blocks = [
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 48
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/user.html.twig"));

        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "calendar/user.html.twig", 48);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        yield "p-0";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        // line 51
        yield "                    <div id=\"timesheet_calendar\"></div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "calendar/user.html.twig";
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
        return array (  1775 => 51,  1762 => 50,  1739 => 49,  1716 => 48,  1432 => 40,  1415 => 36,  1409 => 34,  1403 => 32,  1401 => 31,  1388 => 28,  1371 => 27,  1362 => 26,  1349 => 25,  1326 => 24,  1303 => 23,  1280 => 22,  994 => 17,  989 => 16,  983 => 14,  981 => 13,  976 => 12,  963 => 11,  940 => 10,  641 => 203,  637 => 202,  628 => 195,  622 => 193,  620 => 192,  613 => 188,  607 => 185,  593 => 176,  587 => 173,  582 => 170,  564 => 166,  560 => 165,  556 => 164,  552 => 163,  548 => 162,  543 => 161,  539 => 159,  521 => 158,  518 => 157,  500 => 153,  496 => 152,  492 => 151,  488 => 150,  483 => 148,  479 => 147,  475 => 145,  457 => 144,  455 => 143,  449 => 140,  444 => 138,  435 => 133,  431 => 131,  421 => 130,  416 => 128,  413 => 127,  407 => 125,  405 => 124,  400 => 122,  396 => 121,  392 => 120,  388 => 119,  378 => 116,  370 => 115,  362 => 114,  354 => 113,  346 => 112,  338 => 111,  330 => 110,  324 => 107,  320 => 106,  316 => 105,  311 => 103,  295 => 89,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  263 => 77,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  226 => 68,  213 => 65,  208 => 64,  195 => 63,  182 => 60,  177 => 59,  164 => 58,  151 => 54,  149 => 48,  143 => 47,  140 => 46,  136 => 44,  122 => 43,  119 => 22,  101 => 21,  98 => 20,  95 => 10,  93 => 9,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block main %}
    <div class=\"row\">
        {% set hasTwoColumns = (config.dragDropAmount > 0 and dragAndDrop is not empty and (dragAndDrop|filter(s => s.entries|length > 0)|length > 0)) or form is not null %}
        {% if hasTwoColumns %}
        <div class=\"col-md-4 col-lg-3 d-none d-md-block order-last\">
            {% if form is not null %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_body %}
                        {{ form_start(form) }}
                        {% if form.user is defined %}
                            {{ form_row(form.user) }}
                        {% endif %}
                        {{ form_rest(form) }}
                        {{ form_end(form) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
            {% for source in dragAndDrop|filter(s => s.entries|length > 0) %}
                {% embed '@theme/embeds/card.html.twig' %}
                    {% block box_title %}{{ source.title|trans({}, source.translationDomain) }}{% endblock %}
                    {% block box_body_class %}drag-and-drop-source p-0{% endblock %}
                    {% block box_body %}
                        <div class=\"list-group list-group-flush external-events\" data-method=\"{{ source.method }}\" data-route=\"{{ path(source.route, source.routeParams) }}\" data-route-replacer=\"{{ source.routeReplacer|json_encode|e('html_attr') }}\">
                            {% for entry in source.entries|slice(0, config.dragDropAmount) %}
                                <div class=\"p-1 ps-2 list-group-item external-event draggable\" data-entry=\"{{ entry.data|json_encode|e('html_attr') }}\"{% if entry.project is not null %} data-toggle=\"tooltip\" title=\"{{ entry.project.customer.name }}\"{% endif %}>
                                    <div class=\"row align-items-center\">
                                        <div class=\"col text-truncate\">
                                            {% if source.blockInclude is not null and entry.blockName is not null and block(entry.blockName, source.blockInclude) is defined %}
                                                {{ block(entry.blockName, source.blockInclude) }}
                                            {% else %}
                                                <span class=\"d-block text-body-secondary text-truncate mt-n1\">{{ entry.title }}</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
        {% endif %}

        <div class=\"col-xs-12 {% if hasTwoColumns %}col-md-8 col-lg-9 col-print-12{% endif %}\">
            {% embed '@theme/embeds/card.html.twig' %}
                {% block box_body_class %}p-0{% endblock %}
                {% block box_body %}
                    <div id=\"timesheet_calendar\"></div>
                {% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('calendar') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    {{ encore_entry_script_tags('calendar') }}
{% endblock %}

{% block javascripts %}
    {% set calendarSelector = 'timesheet_calendar' %}
    {% set createParams = '' %}
    {% set createRoute = 'timesheet_create' %}
    {% set editRoute = 'timesheet_edit' %}
    {% set canCreate = is_granted('create_own_timesheet') %}
    {% set canEdit = is_granted('edit_own_timesheet') %}
    {% set canEditExported = is_granted('edit_exported_timesheet') %}
    {% set isForeignEdit = false %}
    {% if user != app.user %}
        {% set isForeignEdit = true %}
        {% set createParams = 'user=' ~ user.id ~ '&' %}
        {% set createRoute = 'admin_timesheet_create' %}
        {% set editRoute = 'admin_timesheet_edit' %}
        {% set canCreate = is_granted('create_other_timesheet') %}
        {% set canEdit = is_granted('edit_other_timesheet') %}
    {% endif %}

    {{ parent() }}
    <script>
        {# using var, so it can be re-used in the different scopes #}
        var calendar = null;

        const reloader = function() { calendar.reloadEvents(); };
        document.addEventListener('kimai.timesheetUpdate', reloader);
        document.addEventListener('kimai.timesheetDelete', reloader);

        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;

            let calendarOptions = {
                dragdrop: {
                    container: '.external-events',
                    items: '.external-event',
                },
                initialView: '{{ app.user.getPreferenceValue('calendar_initial_view') }}',
                translations: {
                    customer: '{{ 'customer'|trans }}',
                    project: '{{ 'project'|trans }}',
                    activity: '{{ 'activity'|trans }}',
                },
                permissions: {
                    edit: {% if canEdit %}true{% else %}false{% endif %},
                    edit_exported: {% if canEditExported %}true{% else %}false{% endif %},
                    create: {% if canCreate %}true{% else %}false{% endif %},
                    edit_begin: {% if can_edit_begin %}true{% else %}false{% endif %},
                    edit_end: {% if can_edit_end %}true{% else %}false{% endif %},
                    edit_duration: {% if can_edit_duration %}true{% else %}false{% endif %},
                    punch: {% if is_punch_mode %}true{% else %}false{% endif %},
                },
                icons: {
                    next: '{{ 'right'|icon(true) }}',
                    previous: '{{ 'left'|icon(true) }}',
                    nextYear: '{{ 'right2'|icon(true) }}',
                    previousYear: '{{ 'left2'|icon(true) }}',
                },
                {% if google is not null %}
                googleCalendarApiKey: '{{ google.apiKey }}',
                {% endif %}
                patterns: {
                    title: '{{ config.entryTitlePattern }}',
                },
                defaultStartTime: {% if defaultStartTime is null %}null{% else %}'{{ defaultStartTime }}'{% endif %},
                now: '{{ now|date_format('c') }}',
                {# see https://github.com/kimai/kimai/issues/2155 #}
                timezone: '{{ app.user.timezone == 'UTC' ? 'GMT' : app.user.timezone }}',
                eventSources: [
                    {
                        id: 'kimaiUserTimeSource',
                        type: 'timesheet',
                        url: '{{ path('get_timesheets', {'user': user.id, 'size': 1000, 'full': 'true', 'begin': '__FROM__', 'end': '__TO__'})|raw }}',
                        options: {
                            color: '{{ config('theme.calendar.background_color') }}',
                        },
                    }
                    {% if google is not null %}
                    {% for source in google.sources %}
                    ,
                    {
                        id: 'googleCompanyCalendar{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        options: {
                            googleCalendarId: '{{ source.uri }}',
                            name: '{{ source.id }}',
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }
                    }
                    {% endfor %}
                    {% endif %}
                    {% for source in sources %}
                    ,
                    {
                        id: '{{ source.id }}{{ loop.index }}',
                        type: '{{ source.typeName }}',
                        url: '{{ source.uri|raw }}',
                        options: {...{{ source.options|json_encode|raw }}, ...{
                            color: '{{ source.color }}',
                            textColor: '{{ source.color|font_contrast }}',
                        }}
                    }
                    {% endfor %}
                ],
                url: {
                    update: (timesheetId) => {
                        return '{{ path('patch_timesheet', {id: 1}) }}'.replace('1', timesheetId);
                    },
                    create: (start, end) => {
                        let createUrl = '{{ path(createRoute) }}' + '?{{ createParams|raw }}';
                        if (end !== undefined) {
                            createUrl += 'from=' + start + '&to=' + end;
                        } else {
                            createUrl += 'begin=' + start;
                        }
                        return createUrl;
                    },
                    edit: (timesheetId) => {
                        return '{{ path(editRoute, {id: '-XX-'}) }}'.replace('-XX-', timesheetId);
                    },
                    actions: (timesheetId) => {
                        return '{{ path('get_timesheet_actions', {id: 1, 'view': 'calendar', 'locale': (app.request.locale)}) }}'.replace('1', timesheetId);
                    },
                },
                preparePayloadForUpdate: (data) => {
                    {% if isForeignEdit %}
                    data.user = {{ user.id }};
                    {% endif %}

                    return data;
                },
            };

            calendar = new KimaiCalendar(
                kimai,
                document.getElementById('{{ calendarSelector }}'),
                Object.assign({}, calendarOptions, {{ config|json_encode|raw }})
            );
            calendar.render();

            document.querySelector('.fc-today-button').classList.remove('btn-icon');
            document.querySelector('.fc-header-toolbar').classList.toggle('row');
            document.querySelector('.fc-header-toolbar').classList.add('p-3');
            const toolbar = document.querySelectorAll('.fc-header-toolbar .fc-toolbar-chunk');
            toolbar[0].parentElement.classList.add('p-3');
            toolbar[0].classList.add('col-md-4', 'col-6', 'mb-1', 'text-start', 'order-xs-1');
            toolbar[1].classList.add('col-md-4', 'col-12', 'mb-1', 'text-center', 'order-3');
            toolbar[2].classList.add('col-md-4', 'col-6', 'mb-1', 'text-end', 'order-md-4', 'order-xs-2');

            KimaiReloadPageWidget.create('kimai.systemConfigUpdate', true);
        });
    </script>
{% endblock %}", "calendar/user.html.twig", "C:\\wamp64\\www\\kimai\\templates\\calendar\\user.html.twig");
    }
}
