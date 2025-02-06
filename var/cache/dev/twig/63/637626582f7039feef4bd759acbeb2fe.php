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

/* dashboard/grid.html.twig */
class __TwigTemplate_4626cce29d0614e487ce0e7abdb40287 extends Template
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
            'page_class' => [$this, 'block_page_class'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/grid.html.twig"));

        // line 2
        $macros["_v0"] = $this->macros["_v0"] = $this->loadTemplate("macros/widgets.html.twig", "dashboard/grid.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/grid.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        yield "dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 8
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chart");
        yield "
    ";
        // line 9
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dashboard");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    ";
        // line 14
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chart");
        yield "
    ";
        // line 15
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dashboard");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "
    ";
        // line 20
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "        ";
            yield $macros["_v0"]->getTemplateForMacro("macro_nothing_found", $context, 21, $this->getSourceContext())->macro_nothing_found(...[]);
            yield "
    ";
        } else {
            // line 23
            yield "        ";
            if (array_key_exists("form", $context)) {
                // line 24
                yield "            ";
                yield $macros["_v0"]->getTemplateForMacro("macro_alert", $context, 24, $this->getSourceContext())->macro_alert(...["warning", "dashboard.edit_mode"]);
                yield "

            ";
                // line 26
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["style" => "display: none", "id" => "dashboard-widgets"]]);
                yield "
            ";
                // line 27
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
                yield "
        ";
            }
            // line 29
            yield "
        <div class=\"grid-stack\" id=\"dashboard-grid-container\" style=\"visibility: hidden\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 32
                yield "                ";
                $context["gridWidth"] = CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 32);
                // line 33
                yield "                ";
                $context["gridHeight"] = CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 33);
                // line 34
                yield "                ";
                $context["widgetWidth"] = ((isset($context["gridWidth"]) || array_key_exists("gridWidth", $context) ? $context["gridWidth"] : (function () { throw new RuntimeError('Variable "gridWidth" does not exist.', 34, $this->source); })()) * 100);
                // line 35
                yield "                ";
                $context["widgetHeight"] = ((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 35, $this->source); })()) * 72);
                // line 36
                yield "                ";
                if (((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 36, $this->source); })()) == 1)) {
                    // line 37
                    yield "                    ";
                    $context["widgetHeight"] = ((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 37, $this->source); })()) - 67);
                    // line 38
                    yield "                ";
                } elseif (((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 38, $this->source); })()) == 3)) {
                    // line 39
                    yield "                    ";
                    $context["widgetHeight"] = (isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 39, $this->source); })());
                    // line 40
                    yield "                ";
                } elseif (((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 40, $this->source); })()) == 5)) {
                    // line 41
                    yield "                    ";
                    $context["widgetHeight"] = ((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 41, $this->source); })()) - 10);
                    // line 42
                    yield "                ";
                } elseif (((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 42, $this->source); })()) == 7)) {
                    // line 43
                    yield "                    ";
                    $context["widgetHeight"] = ((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 43, $this->source); })()) - 10);
                    // line 44
                    yield "                ";
                }
                // line 45
                yield "                <div class=\"grid-stack-item\" data-widget=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\" gs-w=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridWidth"]) || array_key_exists("gridWidth", $context) ? $context["gridWidth"] : (function () { throw new RuntimeError('Variable "gridWidth" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "\" gs-min-w=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridWidth"]) || array_key_exists("gridWidth", $context) ? $context["gridWidth"] : (function () { throw new RuntimeError('Variable "gridWidth" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "\" gs-h=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridHeight"]) || array_key_exists("gridHeight", $context) ? $context["gridHeight"] : (function () { throw new RuntimeError('Variable "gridHeight" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "\" gs-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
                    <div class=\"grid-stack-item-content\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 49), [], CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "translationDomain", [], "any", false, false, false, 49)), "html", null, true);
                yield "</h3>
                                <div class=\"card-actions\">
                                    ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "hasForm", [], "method", false, false, false, 51)) {
                    // line 52
                    yield "                                        ";
                    yield $macros["_v0"]->getTemplateForMacro("macro_card_tool_button", $context, 52, $this->getSourceContext())->macro_card_tool_button(...["configuration", ["title" => "settings", "class" => "modal-ajax-form", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_create")]]);
                    yield "
                                    ";
                }
                // line 54
                yield "                                    ";
                yield $macros["_v0"]->getTemplateForMacro("macro_card_tool_button", $context, 54, $this->getSourceContext())->macro_card_tool_button(...["delete", ["title" => "widget_remove", "url" => "#", "onclick" => (("removeWidget(this, '" . CoreExtension::getAttribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 54)) . "'); return false;")]]);
                yield "
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-100\" preserveAspectRatio=\"none\" width=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetWidth"]) || array_key_exists("widgetWidth", $context) ? $context["widgetWidth"] : (function () { throw new RuntimeError('Variable "widgetWidth" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "\" viewBox=\"0 0 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetWidth"]) || array_key_exists("widgetWidth", $context) ? $context["widgetWidth"] : (function () { throw new RuntimeError('Variable "widgetWidth" does not exist.', 58, $this->source); })()), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "\" stroke=\"var(--tblr-border-color, #b8cef1)\">
                                    <line x1=\"0\" y1=\"0\" x2=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetWidth"]) || array_key_exists("widgetWidth", $context) ? $context["widgetWidth"] : (function () { throw new RuntimeError('Variable "widgetWidth" does not exist.', 59, $this->source); })()), "html", null, true);
                yield "\" y2=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 59, $this->source); })()), "html", null, true);
                yield "\"></line>
                                    <line x1=\"0\" y1=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetHeight"]) || array_key_exists("widgetHeight", $context) ? $context["widgetHeight"] : (function () { throw new RuntimeError('Variable "widgetHeight" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "\" x2=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetWidth"]) || array_key_exists("widgetWidth", $context) ? $context["widgetWidth"] : (function () { throw new RuntimeError('Variable "widgetWidth" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "\" y2=\"0\"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['widget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "        </div>
    ";
        }
        // line 69
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"text/javascript\">
        let grid = null;

        function resizeGrid() {
            let width = document.body.clientWidth;
            if (width < 576) {
                grid.column(1);
            } else if (width < 992) {
                grid.column(2);
            } else if (width) {
                grid.column(4);
            }
        }

        window.addEventListener('resize', function() {
            resizeGrid();
        });

        ";
        // line 92
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 92, $this->source); })())) > 0)) {
            // line 93
            yield "        document.addEventListener('kimai.initialized', function() {
            grid = GridStack.init({
                'float': false,
                'cellHeight': 84,
                'disableResize': true,
                'column': 4,
                'marginTop': 0,
                'marginBottom': 0,
                'marginLeft': 5,
                'marginRight': 5,
                'disableOneColumnMode': true,
                ";
            // line 104
            if ( !array_key_exists("form", $context)) {
                // line 105
                yield "                'staticGrid': true,
                ";
            }
            // line 107
            yield "            });

            resizeGrid();

            document.dispatchEvent(new Event('dashboard.initialized'));
            document.getElementById('dashboard-grid-container').style.visibility = 'visible';
        });
        ";
        }
        // line 115
        yield "
        ";
        // line 116
        if (array_key_exists("form", $context)) {
            // line 117
            yield "        function removeWidget(button, widgetId)
        {
            ";
            // line 120
            yield "            const id = button.attributes['aria-describedBy'].value;
            const tooltip = document.getElementById(id);
            if (tooltip !== null) {
                tooltip.remove();
            }

            const widget = document.querySelector('div[data-widget=' + widgetId + ']');
            if (widget !== null) {
                grid.removeWidget(widget);
            }
        }

        function saveDashboard()
        {
            let serializedData = grid.save();
            const choice = document.getElementById('form_widgets');
            const values = [];
            const newChoices = [];

            for (let item of serializedData) {
                values.push(item.id);
                for (let i = 0; i < choice.options.length; i++) {
                    if (choice.options[i].value === item.id) {
                        choice.options[i].selected = true;
                        newChoices.push(choice.options[i]);
                        break;
                    }
                }
            }

            choice.options.length = 0;
            newChoices.forEach(child => choice.appendChild(child));
            choice.dispatchEvent(new Event('change'));

            document.getElementById('dashboard-widgets').submit();
        }
        ";
        }
        // line 157
        yield "    </script>
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
        return "dashboard/grid.html.twig";
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
        return array (  453 => 157,  414 => 120,  410 => 117,  408 => 116,  405 => 115,  395 => 107,  391 => 105,  389 => 104,  376 => 93,  374 => 92,  351 => 73,  338 => 72,  326 => 69,  322 => 67,  307 => 60,  301 => 59,  291 => 58,  283 => 54,  277 => 52,  275 => 51,  270 => 49,  252 => 45,  249 => 44,  246 => 43,  243 => 42,  240 => 41,  237 => 40,  234 => 39,  231 => 38,  228 => 37,  225 => 36,  222 => 35,  219 => 34,  216 => 33,  213 => 32,  209 => 31,  205 => 29,  200 => 27,  196 => 26,  190 => 24,  187 => 23,  181 => 21,  179 => 20,  176 => 19,  163 => 18,  150 => 15,  146 => 14,  141 => 13,  128 => 12,  115 => 9,  111 => 8,  106 => 7,  93 => 6,  70 => 4,  59 => 1,  57 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% from \"macros/widgets.html.twig\" import nothing_found, alert, page_actions, card_tool_button %}

{% block page_class %}dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('chart') }}
    {{ encore_entry_link_tags('dashboard') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    {{ encore_entry_script_tags('chart') }}
    {{ encore_entry_script_tags('dashboard') }}
{% endblock %}

{% block main %}

    {% if widgets is empty %}
        {{ nothing_found() }}
    {% else %}
        {% if form is defined %}
            {{ alert('warning', 'dashboard.edit_mode') }}

            {{ form_start(form, {'attr': {'style': 'display: none', 'id': 'dashboard-widgets'}}) }}
            {{ form_end(form) }}
        {% endif %}

        <div class=\"grid-stack\" id=\"dashboard-grid-container\" style=\"visibility: hidden\">
            {% for widget in widgets %}
                {% set gridWidth = widget.width %}
                {% set gridHeight = widget.height %}
                {% set widgetWidth = gridWidth * 100 %}
                {% set widgetHeight = (gridHeight * 72) %}
                {% if gridHeight == 1 %}
                    {% set widgetHeight = widgetHeight - 67 %}
                {% elseif gridHeight == 3 %}
                    {% set widgetHeight = widgetHeight %}
                {% elseif gridHeight == 5 %}
                    {% set widgetHeight = widgetHeight - 10 %}
                {% elseif gridHeight == 7 %}
                    {% set widgetHeight = widgetHeight - 10 %}
                {% endif %}
                <div class=\"grid-stack-item\" data-widget=\"{{ widget.id }}\" gs-w=\"{{ gridWidth }}\" gs-min-w=\"{{ gridWidth }}\" gs-h=\"{{ gridHeight }}\" gs-id=\"{{ widget.id }}\" id=\"{{ widget.id }}\">
                    <div class=\"grid-stack-item-content\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">{{ widget.title|trans({}, widget.translationDomain) }}</h3>
                                <div class=\"card-actions\">
                                    {% if widget.hasForm() %}
                                        {{ card_tool_button('configuration', {'title': 'settings', 'class': 'modal-ajax-form', 'url': path('tasks_create')}) }}
                                    {% endif %}
                                    {{ card_tool_button('delete', {'title': 'widget_remove', 'url': '#', 'onclick': \"removeWidget(this, '\" ~ widget.id ~ \"'); return false;\"}) }}
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-100\" preserveAspectRatio=\"none\" width=\"{{ widgetWidth }}\" height=\"{{ widgetHeight }}\" viewBox=\"0 0 {{ widgetWidth }} {{ widgetHeight }}\" stroke=\"var(--tblr-border-color, #b8cef1)\">
                                    <line x1=\"0\" y1=\"0\" x2=\"{{ widgetWidth }}\" y2=\"{{ widgetHeight }}\"></line>
                                    <line x1=\"0\" y1=\"{{ widgetHeight }}\" x2=\"{{ widgetWidth }}\" y2=\"0\"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        let grid = null;

        function resizeGrid() {
            let width = document.body.clientWidth;
            if (width < 576) {
                grid.column(1);
            } else if (width < 992) {
                grid.column(2);
            } else if (width) {
                grid.column(4);
            }
        }

        window.addEventListener('resize', function() {
            resizeGrid();
        });

        {% if widgets|length > 0 %}
        document.addEventListener('kimai.initialized', function() {
            grid = GridStack.init({
                'float': false,
                'cellHeight': 84,
                'disableResize': true,
                'column': 4,
                'marginTop': 0,
                'marginBottom': 0,
                'marginLeft': 5,
                'marginRight': 5,
                'disableOneColumnMode': true,
                {% if form is not defined %}
                'staticGrid': true,
                {% endif %}
            });

            resizeGrid();

            document.dispatchEvent(new Event('dashboard.initialized'));
            document.getElementById('dashboard-grid-container').style.visibility = 'visible';
        });
        {% endif %}

        {% if form is defined %}
        function removeWidget(button, widgetId)
        {
            {# hackish way to remove tooltip, as we do not have a reference in the frontend to the bootstrap tooltip classes #}
            const id = button.attributes['aria-describedBy'].value;
            const tooltip = document.getElementById(id);
            if (tooltip !== null) {
                tooltip.remove();
            }

            const widget = document.querySelector('div[data-widget=' + widgetId + ']');
            if (widget !== null) {
                grid.removeWidget(widget);
            }
        }

        function saveDashboard()
        {
            let serializedData = grid.save();
            const choice = document.getElementById('form_widgets');
            const values = [];
            const newChoices = [];

            for (let item of serializedData) {
                values.push(item.id);
                for (let i = 0; i < choice.options.length; i++) {
                    if (choice.options[i].value === item.id) {
                        choice.options[i].selected = true;
                        newChoices.push(choice.options[i]);
                        break;
                    }
                }
            }

            choice.options.length = 0;
            newChoices.forEach(child => choice.appendChild(child));
            choice.dispatchEvent(new Event('change'));

            document.getElementById('dashboard-widgets').submit();
        }
        {% endif %}
    </script>
{% endblock %}
", "dashboard/grid.html.twig", "C:\\wamp64\\www\\kimai\\templates\\dashboard\\grid.html.twig");
    }
}
