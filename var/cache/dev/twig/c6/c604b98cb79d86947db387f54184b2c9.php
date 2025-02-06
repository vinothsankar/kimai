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

/* @Tabler/includes/menu.html.twig */
class __TwigTemplate_c1a9355657d94cc23865987972e0a077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/menu.html.twig"));

        // line 1
        if ( !array_key_exists("menu", $context)) {
            // line 2
            yield "    ";
            $context["menu"] = $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getMenu(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2));
        }
        // line 4
        yield "
";
        // line 5
        if ((array_key_exists("menu", $context) &&  !(null === (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 5, $this->source); })())))) {
            // line 6
            yield "    ";
            if ( !array_key_exists("layout_type", $context)) {
                // line 7
                yield "        ";
                $context["layout_type"] = "horizontal";
                // line 8
                yield "    ";
            }
            // line 9
            yield "    <ul class=\"navbar-nav ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("navbar_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["navbar_class"]) || array_key_exists("navbar_class", $context) ? $context["navbar_class"] : (function () { throw new RuntimeError('Variable "navbar_class" does not exist.', 9, $this->source); })()), "")) : ("")), "html", null, true);
            yield "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                yield "            <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "identifier", [], "any", false, false, false, 11), "html", null, true);
                yield "\" class=\"nav-item";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 11)) ? (" active") : (""));
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 11)) ? (" dropdown") : (""));
                yield "\">
                <a ";
                // line 12
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 12)) {
                    // line 13
                    yield "                        class=\"nav-link dropdown-toggle navbar-menu-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "identifier", [], "any", false, false, false, 13), "html", null, true);
                    yield "\" role=\"button\"
                        data-bs-toggle=\"dropdown\" data-bs-auto-close=\"";
                    // line 14
                    yield ((((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 14, $this->source); })()) === "vertical")) ? ("false") : ("outside"));
                    yield "\"
                        aria-expanded=\"";
                    // line 15
                    yield ((((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 15, $this->source); })()) === "vertical")) ? ("true") : ("false"));
                    yield "\"
                    ";
                } else {
                    // line 17
                    yield "                        class=\"nav-link\" href=\"";
                    yield ((CoreExtension::inFilter("/", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 17))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 17), "html", null, true)) : ((((null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 17))) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getRouteByAlias(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 17)), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "routeArgs", [], "any", false, false, false, 17)), "html", null, true)))));
                    yield "\"
                    ";
                }
                // line 18
                yield ">
                    ";
                // line 19
                yield $this->getTemplateForMacro("macro_item_icon", $context, 19, $this->getSourceContext())->macro_item_icon(...[$context["item"]]);
                yield "
                    <span class=\"nav-link-title\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 20), [], CoreExtension::getAttribute($this->env, $this->source, $context["item"], "translationDomain", [], "any", false, false, false, 20)), "html", null, true);
                yield "</span>
                    ";
                // line 21
                if (((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 21, $this->source); })()) === "horizontal")) {
                    // line 22
                    yield "                        ";
                    yield $this->getTemplateForMacro("macro_item_badge", $context, 22, $this->getSourceContext())->macro_item_badge(...[$context["item"]]);
                    yield "
                    ";
                }
                // line 24
                yield "                </a>
                ";
                // line 25
                yield $this->getTemplateForMacro("macro_item_childs", $context, 25, $this->getSourceContext())->macro_item_childs(...[$context["item"], (isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 25, $this->source); })())]);
                yield "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    </ul>
";
        }
        // line 30
        yield "
";
        // line 57
        yield "
";
        // line 72
        yield "
";
        // line 78
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    public function macro_item_childs($item = null, $layout_type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "layout_type" => $layout_type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_childs"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_childs"));

            // line 32
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "hasChildren", [], "any", false, false, false, 32)) {
                // line 33
                yield "        <div class=\"dropdown-menu ";
                yield (((((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 33, $this->source); })()) === "vertical") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "isActive", [], "any", false, false, false, 33) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "isExpanded", [], "any", false, false, false, 33)))) ? ("show") : (""));
                yield "\" data-bs-popper=\"none\">
            <div class=\"dropdown-menu-columns\">
                <div class=\"dropdown-menu-column\">
                    ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "children", [], "any", false, false, false, 36));
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
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 37
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "hasChildren", [], "any", false, false, false, 37)) {
                        // line 38
                        yield "                            <div class=\"dropend\">
                                <a class=\"dropdown-item dropdown-toggle ";
                        // line 39
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 39)) ? ("active") : (""));
                        yield " navbar-menu-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "identifier", [], "any", false, false, false, 39), "html", null, true);
                        yield "\" role=\"button\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"";
                        // line 40
                        yield ((((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 40, $this->source); })()) === "vertical")) ? ("false") : ("outside"));
                        yield "\"
                                   aria-expanded=\"";
                        // line 41
                        yield ((((isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 41, $this->source); })()) === "vertical")) ? ("true") : ("false"));
                        yield "\">
                                    ";
                        // line 42
                        yield $this->getTemplateForMacro("macro_item_icon", $context, 42, $this->getSourceContext())->macro_item_icon(...[$context["child"]]);
                        yield "
                                    ";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 43), [], CoreExtension::getAttribute($this->env, $this->source, $context["child"], "translationDomain", [], "any", false, false, false, 43)), "html", null, true);
                        yield "
                                    ";
                        // line 44
                        yield $this->getTemplateForMacro("macro_item_badge", $context, 44, $this->getSourceContext())->macro_item_badge(...[$context["child"]]);
                        yield "
                                </a>
                                ";
                        // line 46
                        yield $this->getTemplateForMacro("macro_item_childs", $context, 46, $this->getSourceContext())->macro_item_childs(...[$context["child"], (isset($context["layout_type"]) || array_key_exists("layout_type", $context) ? $context["layout_type"] : (function () { throw new RuntimeError('Variable "layout_type" does not exist.', 46, $this->source); })())]);
                        yield "
                            </div>
                        ";
                    } else {
                        // line 49
                        yield "                            ";
                        yield $this->getTemplateForMacro("macro_child_item", $context, 49, $this->getSourceContext())->macro_child_item(...[$context["child"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49)]);
                        yield "
                        ";
                    }
                    // line 51
                    yield "                    ";
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
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                </div>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function macro_child_item($child = null, $isLast = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "child" => $child,
            "isLast" => $isLast,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "child_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "child_item"));

            // line 59
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 59, $this->source); })()), "divider", [], "any", false, false, false, 59)) {
                // line 60
                yield "        ";
                if ( !(isset($context["isLast"]) || array_key_exists("isLast", $context) ? $context["isLast"] : (function () { throw new RuntimeError('Variable "isLast" does not exist.', 60, $this->source); })())) {
                    // line 61
                    yield "<hr class=\"dropdown-divider\">";
                }
                // line 63
                yield "    ";
            } else {
                // line 64
                yield "        <a class=\"dropdown-item ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 64, $this->source); })()), "isActive", [], "any", false, false, false, 64)) ? ("active") : (""));
                yield " navbar-menu-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 64, $this->source); })()), "identifier", [], "any", false, false, false, 64), "html", null, true);
                yield "\"";
                // line 65
                if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "hasChildren", [], "any", false, false, false, 65)) {
                    yield " href=\"";
                    yield ((CoreExtension::inFilter("/", CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "route", [], "any", false, false, false, 65))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "route", [], "any", false, false, false, 65), "html", null, true)) : ((((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "route", [], "any", false, false, false, 65))) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getRouteByAlias(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "route", [], "any", false, false, false, 65)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 65, $this->source); })()), "routeArgs", [], "any", false, false, false, 65)), "html", null, true)))));
                    yield "\"";
                }
                yield ">
            ";
                // line 66
                yield $this->getTemplateForMacro("macro_item_icon", $context, 66, $this->getSourceContext())->macro_item_icon(...[(isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 66, $this->source); })())]);
                yield "
            ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 67, $this->source); })()), "label", [], "any", false, false, false, 67), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 67, $this->source); })()), "translationDomain", [], "any", false, false, false, 67)), "html", null, true);
                yield "
            ";
                // line 68
                yield $this->getTemplateForMacro("macro_item_badge", $context, 68, $this->getSourceContext())->macro_item_badge(...[(isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 68, $this->source); })())]);
                yield "
        </a>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function macro_item_icon($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_icon"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_icon"));

            // line 74
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "icon", [], "any", false, false, false, 74)) {
                // line 75
                yield "        <span class=\"nav-link-icon d-md-none d-lg-inline-block text-center\">";
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "icon", [], "any", false, false, false, 75), false, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "icon", [], "any", false, false, false, 75));
                yield "</span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function macro_item_badge($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "item_badge"));

            // line 80
            yield "    ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "badge", [], "any", false, false, false, 80)) ||  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "badgeColor", [], "any", false, false, false, 80)))) {
                // line 81
                yield "        <span class=\"badge badge-sm bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badgeColor", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "badgeColor", [], "any", false, false, false, 81), "blue")) : ("blue")), "html", null, true);
                yield " text-uppercase ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })()), "badge", [], "any", false, false, false, 81), "html", null, true);
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
        return "@Tabler/includes/menu.html.twig";
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
        return array (  411 => 81,  408 => 80,  390 => 79,  374 => 75,  371 => 74,  353 => 73,  337 => 68,  333 => 67,  329 => 66,  321 => 65,  315 => 64,  312 => 63,  309 => 61,  306 => 60,  303 => 59,  284 => 58,  268 => 52,  254 => 51,  248 => 49,  242 => 46,  237 => 44,  233 => 43,  229 => 42,  225 => 41,  221 => 40,  215 => 39,  212 => 38,  209 => 37,  192 => 36,  185 => 33,  182 => 32,  163 => 31,  151 => 78,  148 => 72,  145 => 57,  142 => 30,  138 => 28,  129 => 25,  126 => 24,  120 => 22,  118 => 21,  114 => 20,  110 => 19,  107 => 18,  101 => 17,  96 => 15,  92 => 14,  87 => 13,  85 => 12,  77 => 11,  73 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  57 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if menu is not defined %}
    {% set menu = tabler_menu(app.request) %}
{% endif %}

{% if menu is defined and menu is not null %}
    {% if layout_type is not defined %}
        {% set layout_type = 'horizontal' %}
    {% endif %}
    <ul class=\"navbar-nav {{ navbar_class | default('') }}\">
        {% for item in menu %}
            <li id=\"{{ item.identifier }}\" class=\"nav-item{{ item.isActive ? ' active' : '' }}{{ item.hasChildren ? ' dropdown' : '' }}\">
                <a {% if item.hasChildren %}
                        class=\"nav-link dropdown-toggle navbar-menu-{{ item.identifier }}\" role=\"button\"
                        data-bs-toggle=\"dropdown\" data-bs-auto-close=\"{{ layout_type is same as \"vertical\" ? 'false' : 'outside' }}\"
                        aria-expanded=\"{{ layout_type is same as 'vertical' ? 'true' : 'false' }}\"
                    {% else %}
                        class=\"nav-link\" href=\"{{ '/' in item.route ? item.route : (item.route is null ? '#' : path(item.route|tabler_route, item.routeArgs)) }}\"
                    {% endif %}>
                    {{ _self.item_icon(item) }}
                    <span class=\"nav-link-title\">{{ item.label|trans({}, item.translationDomain) }}</span>
                    {% if layout_type is same as 'horizontal' %}
                        {{ _self.item_badge(item) }}
                    {% endif %}
                </a>
                {{ _self.item_childs(item, layout_type) }}
            </li>
        {% endfor %}
    </ul>
{% endif %}

{% macro item_childs(item, layout_type) %}
    {% if item.hasChildren %}
        <div class=\"dropdown-menu {{ layout_type is same as \"vertical\" and (item.isActive or item.isExpanded) ? 'show':'' }}\" data-bs-popper=\"none\">
            <div class=\"dropdown-menu-columns\">
                <div class=\"dropdown-menu-column\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                            <div class=\"dropend\">
                                <a class=\"dropdown-item dropdown-toggle {{ child.isActive ? 'active' : '' }} navbar-menu-{{ child.identifier }}\" role=\"button\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"{{ layout_type is same as \"vertical\" ? 'false' : 'outside' }}\"
                                   aria-expanded=\"{{ layout_type is same as 'vertical' ? 'true' : 'false' }}\">
                                    {{ _self.item_icon(child) }}
                                    {{ child.label|trans({}, child.translationDomain) }}
                                    {{ _self.item_badge(child) }}
                                </a>
                                {{ _self.item_childs(child, layout_type) }}
                            </div>
                        {% else %}
                            {{ _self.child_item(child, loop.last) }}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro child_item(child, isLast) %}
    {% if child.divider %}
        {% if not isLast -%}
            <hr class=\"dropdown-divider\">
        {%- endif %}
    {% else %}
        <a class=\"dropdown-item {{ child.isActive ? 'active':'' }} navbar-menu-{{ child.identifier }}\"
            {%- if not child.hasChildren %} href=\"{{ '/' in child.route ? child.route : (child.route is null ? '#' : path(child.route|tabler_route, child.routeArgs)) }}\"{% endif %}>
            {{ _self.item_icon(child) }}
            {{ child.label|trans({}, child.translationDomain) }}
            {{ _self.item_badge(child) }}
        </a>
    {% endif %}
{% endmacro %}

{% macro item_icon(item) %}
    {% if item.icon %}
        <span class=\"nav-link-icon d-md-none d-lg-inline-block text-center\">{{ tabler_icon(item.icon, false, item.icon) }}</span>
    {% endif %}
{% endmacro %}

{% macro item_badge(item) %}
    {% if item.badge is not null or item.badgeColor is not null %}
        <span class=\"badge badge-sm bg-{{ item.badgeColor|default('blue') }} text-uppercase ms-2\">{{ item.badge }}</span>
    {% endif %}
{% endmacro %}
", "@Tabler/includes/menu.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\includes\\menu.html.twig");
    }
}
