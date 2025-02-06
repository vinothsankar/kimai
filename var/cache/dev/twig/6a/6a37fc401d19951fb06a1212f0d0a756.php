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

/* form/blocks.html.twig */
class __TwigTemplate_48afc42b06c72a8893c6508fcf63870b extends Template
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
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            '_quick_entry_form_rows_entry_timesheets_entry_widget' => [$this, 'block__quick_entry_form_rows_entry_timesheets_entry_widget'],
            'quick_entry_week_row' => [$this, 'block_quick_entry_week_row'],
            '_team_edit_form_members_entry_user_widget' => [$this, 'block__team_edit_form_members_entry_user_widget'],
            '_team_edit_form_members_entry_teamlead_widget' => [$this, 'block__team_edit_form_members_entry_teamlead_widget'],
            '_team_edit_form_members_widget' => [$this, 'block__team_edit_form_members_widget'],
            'team_member_row' => [$this, 'block_team_member_row'],
            'team_member_widget' => [$this, 'block_team_member_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'daterange_widget' => [$this, 'block_daterange_widget'],
            'duration_widget' => [$this, 'block_duration_widget'],
            'date_time_widget' => [$this, 'block_date_time_widget'],
            'text_widget' => [$this, 'block_text_widget'],
            'mail_widget' => [$this, 'block_mail_widget'],
            'secret_widget' => [$this, 'block_secret_widget'],
            'yearpicker_widget' => [$this, 'block_yearpicker_widget'],
            'monthpicker_widget' => [$this, 'block_monthpicker_widget'],
            'weekpicker_widget' => [$this, 'block_weekpicker_widget'],
            'tags_widget' => [$this, 'block_tags_widget'],
            'report_sum_widget' => [$this, 'block_report_sum_widget'],
            'phone_widget' => [$this, 'block_phone_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'homepage_widget' => [$this, 'block_homepage_widget'],
            'form_errors' => [$this, 'block_form_errors'],
            'meta_fields_collection_row' => [$this, 'block_meta_fields_collection_row'],
            'meta_fields_collection_widget' => [$this, 'block_meta_fields_collection_widget'],
            'form_help_content' => [$this, 'block_form_help_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/blocks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/blocks.html.twig"));

        // line 2
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        yield from $this->unwrap()->yieldBlock('_quick_entry_form_rows_entry_timesheets_entry_widget', $context, $blocks);
        // line 37
        yield "
";
        // line 38
        yield from $this->unwrap()->yieldBlock('quick_entry_week_row', $context, $blocks);
        // line 54
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('_team_edit_form_members_entry_user_widget', $context, $blocks);
        // line 60
        yield "
";
        // line 61
        yield from $this->unwrap()->yieldBlock('_team_edit_form_members_entry_teamlead_widget', $context, $blocks);
        // line 65
        yield "
";
        // line 66
        yield from $this->unwrap()->yieldBlock('_team_edit_form_members_widget', $context, $blocks);
        // line 70
        yield "
";
        // line 71
        yield from $this->unwrap()->yieldBlock('team_member_row', $context, $blocks);
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('team_member_widget', $context, $blocks);
        // line 124
        yield "
";
        // line 125
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 143
        yield "
";
        // line 144
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 174
        yield "
";
        // line 175
        yield from $this->unwrap()->yieldBlock('daterange_widget', $context, $blocks);
        // line 194
        yield "
";
        // line 195
        yield from $this->unwrap()->yieldBlock('duration_widget', $context, $blocks);
        // line 239
        yield "
";
        // line 240
        yield from $this->unwrap()->yieldBlock('date_time_widget', $context, $blocks);
        // line 254
        yield "
";
        // line 255
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 267
        yield "
";
        // line 268
        yield from $this->unwrap()->yieldBlock('mail_widget', $context, $blocks);
        // line 276
        yield "
";
        // line 278
        yield from $this->unwrap()->yieldBlock('secret_widget', $context, $blocks);
        // line 286
        yield "
";
        // line 287
        yield from $this->unwrap()->yieldBlock('yearpicker_widget', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('monthpicker_widget', $context, $blocks);
        // line 335
        yield "
";
        // line 336
        yield from $this->unwrap()->yieldBlock('weekpicker_widget', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('tags_widget', $context, $blocks);
        // line 365
        yield "
";
        // line 366
        yield from $this->unwrap()->yieldBlock('report_sum_widget', $context, $blocks);
        // line 380
        yield "
";
        // line 382
        yield from $this->unwrap()->yieldBlock('phone_widget', $context, $blocks);
        // line 390
        yield "
";
        // line 391
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 408
        yield "
";
        // line 410
        yield from $this->unwrap()->yieldBlock('homepage_widget', $context, $blocks);
        // line 419
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 427
        yield from $this->unwrap()->yieldBlock('meta_fields_collection_row', $context, $blocks);
        // line 433
        yield from $this->unwrap()->yieldBlock('meta_fields_collection_widget', $context, $blocks);
        // line 438
        yield "
";
        // line 439
        yield from $this->unwrap()->yieldBlock('form_help_content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 3
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 3), "")) : ("")))) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 5
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 6
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")), "translation_domain" =>                 // line 7
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 7, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 11
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 12
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "choices", [], "any", false, false, false, 12)) != Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12)))) {
                // line 13
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "choices", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["name"] => $context["choices"]) {
                    // line 14
                    yield "                    <fieldset class=\"form-fieldset\">
                        <legend>";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "</legend>
                    ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["choices"]);
                    foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                        // line 17
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), $context["key"], [], "array", false, false, false, 17), 'widget');
                        // line 18
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), $context["key"], [], "array", false, false, false, 18), 'label');
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['choice'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    yield "                    </fieldset>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['name'], $context['choices'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                yield "            ";
            } else {
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 25
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")), "translation_domain" =>                     // line 26
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 26, $this->source); })())]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 30
            yield "        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__quick_entry_form_rows_entry_timesheets_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_quick_entry_form_rows_entry_timesheets_entry_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_quick_entry_form_rows_entry_timesheets_entry_widget"));

        // line 35
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "duration", [], "any", false, false, false, 35), 'row', ["row_attr" => ["class" => "p-0"]]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_quick_entry_week_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "quick_entry_week_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "quick_entry_week_row"));

        // line 39
        yield "    <tr";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 39, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-group qe-entry-week-row") . (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 39, $this->source); })())) ? (" is-invalid") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 39, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">
        <td>
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "project", [], "any", false, false, false, 41), 'row', ["row_attr" => ["class" => "p-0"]]);
        yield "
        </td>
        <td>
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "activity", [], "any", false, false, false, 44), 'row', ["row_attr" => ["class" => "p-0"]]);
        yield "
        </td>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "timesheets", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["timesheet"]) {
            // line 47
            yield "            <td class=\"text-center";
            if ($this->extensions['App\Twig\LocaleFormatExtensions']->isWeekend(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timesheet"], "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47), "begin", [], "any", false, false, false, 47))) {
                yield " weekend";
            }
            if ($this->env->getTest('today')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timesheet"], "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47), "begin", [], "any", false, false, false, 47))) {
                yield " today";
            }
            yield "\">
                ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["timesheet"], 'widget');
            yield "
            </td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timesheet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        <td class=\"text-nowrap text-center total qe-totals-row\"></td>
    </tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__team_edit_form_members_entry_user_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_entry_user_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_entry_user_widget"));

        // line 56
        yield "    ";
        // line 57
        $context["type"] = "hidden";
        // line 58
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__team_edit_form_members_entry_teamlead_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_entry_teamlead_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_entry_teamlead_widget"));

        // line 62
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), ["class" => "form-selectgroup-input "]);
        // line 63
        yield "    <input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 63, $this->source); })())) {
            yield " checked=\"checked\"";
        }
        yield " />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__team_edit_form_members_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_team_edit_form_members_widget"));

        // line 67
        yield "    <p>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("team.configure_teamlead.help"), "html", null, true);
        yield "</p>
    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'widget', ["row_attr" => ["class" => "mb-1"]]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_team_member_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team_member_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team_member_row"));

        // line 72
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'widget');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_team_member_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team_member_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team_member_widget"));

        // line 76
        yield "    ";
        $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "form/blocks.html.twig", 76)->unwrap();
        // line 77
        yield "    ";
        $context["data"] = [];
        // line 78
        yield "    ";
        $context["user"] = null;
        // line 79
        yield "    ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "data", [], "any", false, false, false, 79)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "data", [], "any", false, false, false, 79), "user", [], "any", false, false, false, 79)))) {
            // line 80
            yield "        ";
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "data", [], "any", false, false, false, 80), "user", [], "any", false, false, false, 80);
            // line 81
            yield "        ";
            $context["data"] = ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "color" => $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->colorize(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "color", [], "any", false, false, false, 81), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "displayName", [], "any", false, false, false, 81)), "title" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "title", [], "any", false, false, false, 81), "username" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "userIdentifier", [], "any", false, false, false, 81), "alias" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "alias", [], "any", false, false, false, 81), "initials" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "initials", [], "any", false, false, false, 81), "accountnumber" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "accountNumber", [], "any", false, false, false, 81), "display" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "displayName", [], "any", false, false, false, 81)];
            // line 82
            yield "    ";
        }
        // line 83
        yield "    <div class=\"row mb-1\"";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            yield " data-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
        <div class=\"col-xs-12\">
            <label class=\"form-selectgroup-item flex-fill\">
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "teamlead", [], "any", false, false, false, 86), 'widget');
        yield "
                <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                    <div class=\"me-3\">
                        <span class=\"form-selectgroup-check\"></span>
                    </div>
                    <div class=\"form-selectgroup-label-content d-flex align-items-center me-2\">
                        ";
        // line 92
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()))) {
            // line 93
            yield "                            ";
            yield $macros["widgets"]->getTemplateForMacro("macro_user_avatar", $context, 93, $this->getSourceContext())->macro_user_avatar(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "data", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93)]);
            yield "
                        ";
        } else {
            // line 95
            yield "                            ";
            yield $macros["widgets"]->getTemplateForMacro("macro_avatar", $context, 95, $this->getSourceContext())->macro_avatar(...["__INITIALS__", "__COLOR__", "__DISPLAY__"]);
            yield "
                        ";
        }
        // line 97
        yield "                    </div>
                    <div class=\"form-selectgroup-label-content d-flex align-items-center\">
                        <div class=\"text-start\">
                            <div class=\"font-weight-medium\">
                                ";
        // line 101
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()))) {
            // line 102
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "data", [], "any", false, false, false, 102), "user", [], "any", false, false, false, 102), "displayName", [], "any", false, false, false, 102), "html", null, true);
            yield "
                                ";
        } else {
            // line 104
            yield "                                    __DISPLAY__
                                ";
        }
        // line 106
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), 'widget');
        yield "
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), 'errors');
        yield "
                            </div>
                            ";
        // line 109
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()))) {
            // line 110
            yield "                                <div class=\"text-body-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "data", [], "any", false, false, false, 110), "user", [], "any", false, false, false, 110), "title", [], "any", false, false, false, 110), "html", null, true);
            yield "</div>
                            ";
        } else {
            // line 112
            yield "                                <div class=\"text-body-secondary\">__TITLE__</div>
                            ";
        }
        // line 114
        yield "                        </div>
                    </div>
                    <div class=\"ms-auto\">
                        <a href=\"#\" class=\"btn btn-icon remove-member\">";
        // line 117
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("trash", true);
        yield "</a>
                    </div>
                </div>
            </label>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 126
        $context["format"] = $this->extensions['App\Twig\LocaleFormatExtensions']->getLocaleFormat("date");
        // line 127
        yield "    ";
        $context["jsFormat"] = $this->extensions['App\Twig\LocaleFormatExtensions']->convertJavascriptFormat((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 127, $this->source); })()));
        // line 128
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 128, $this->source); })()), ["pattern" => $this->extensions['App\Twig\LocaleFormatExtensions']->convertHtmlPattern((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 128, $this->source); })())), "autocomplete" => "off", "data-datepicker" => "on", "data-format" => (isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 128, $this->source); })()), "placeholder" => (isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 128, $this->source); })())]);
        // line 129
        yield "<div class=\"input-group\">
        <div class=\"input-group-text\">
            <a href=\"#\" data-form-widget=\"date-now\" data-format=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "\" data-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("calendar");
        yield "</a>
        </div>";
        // line 133
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 134
        if ( !(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 134, $this->source); })())) {
            // line 135
            yield "        <span class=\"input-group-text\">
            <a href=\"javascript: void(0)\" class=\"link-secondary fs-5\" onclick=\"document.getElementById('";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 136, $this->source); })()), "html", null, true);
            yield "').value = ''\">
                ";
            // line 137
            yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("cancel");
            yield "
            </a>
        </span>
        ";
        }
        // line 141
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 145
        $context["user_format"] = (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 145, $this->source); })());
        // line 146
        $context["format"] = $this->extensions['App\Twig\LocaleFormatExtensions']->getLocaleFormat("time");
        // line 147
        $context["jsFormat"] = $this->extensions['App\Twig\LocaleFormatExtensions']->convertJavascriptFormat((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 147, $this->source); })()));
        // line 148
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 148, $this->source); })()), ["pattern" => $this->extensions['App\Twig\LocaleFormatExtensions']->convertHtmlPattern((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 148, $this->source); })())), "autocomplete" => "off", "data-timepicker" => "on", "data-format" => (isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 148, $this->source); })()), "placeholder" => (isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 148, $this->source); })())]);
        // line 149
        yield "<div class=\"input-group\">
        <div class=\"input-group-text\">
            <a href=\"#\" data-form-widget=\"date-now\" data-format=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsFormat"]) || array_key_exists("jsFormat", $context) ? $context["jsFormat"] : (function () { throw new RuntimeError('Variable "jsFormat" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "\" data-target=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("calendar");
        yield "</a>
        </div>
        ";
        // line 153
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
        ";
        // line 154
        $context["time_presets"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->getTimePresets(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "timezone", [], "any", false, false, false, 154));
        // line 155
        yield "        ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["time_presets"]) || array_key_exists("time_presets", $context) ? $context["time_presets"] : (function () { throw new RuntimeError('Variable "time_presets" does not exist.', 155, $this->source); })())) > 0) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "vars", [], "any", false, false, false, 155), "disabled", [], "any", false, false, false, 155) === false))) {
            // line 156
            yield "        <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
        <div class=\"dropdown-menu dropdown-menu-end pre-scrollable\">
            <div class=\"dropdown-menu-columns\">
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([0, 1, 2, 3]);
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 160
                yield "                    <div class=\"dropdown-menu-column\" style=\"min-width: 4rem\">
                        ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["time_presets"]) || array_key_exists("time_presets", $context) ? $context["time_presets"] : (function () { throw new RuntimeError('Variable "time_presets" does not exist.', 161, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 162
                    yield "                            ";
                    $context["value"] = $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat($context["value"], (isset($context["user_format"]) || array_key_exists("user_format", $context) ? $context["user_format"] : (function () { throw new RuntimeError('Variable "user_format" does not exist.', 162, $this->source); })()));
                    // line 163
                    yield "                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 163) % 4) == $context["index"])) {
                        // line 164
                        yield "                                <a class=\"dropdown-item justify-content-center\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vars", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164), "html", null, true);
                        yield "\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\" data-event=\"change\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 166
                    yield "                        ";
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
                unset($context['_seq'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "            </div>
        </div>
        ";
        }
        // line 172
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_daterange_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daterange_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "daterange_widget"));

        // line 176
        yield "    ";
        $context["format"] = $this->extensions['App\Twig\LocaleFormatExtensions']->convertJavascriptFormat($this->extensions['App\Twig\LocaleFormatExtensions']->getLocaleFormat("date"));
        // line 177
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 177, $this->source); })()), ["data-daterangepicker" => "on", "autocomplete" => "off", "data-format" => (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 177, $this->source); })()), "placeholder" => (((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 177, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 177, $this->source); })()), "data-separator", [], "array", false, false, false, 177)) . (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 177, $this->source); })()))]);
        // line 178
        yield "<div class=\"input-group\">
        ";
        // line 179
        if (array_key_exists("ranges", $context)) {
            // line 180
            yield "        <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
        <div class=\"dropdown-menu dropdown-menu-start pre-scrollable\">
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ranges"]) || array_key_exists("ranges", $context) ? $context["ranges"] : (function () { throw new RuntimeError('Variable "ranges" does not exist.', 182, $this->source); })()));
            foreach ($context['_seq'] as $context["title"] => $context["range"]) {
                // line 183
                yield "                ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["range"]) == 0)) {
                    // line 184
                    yield "                    <hr class=\"dropdown-divider\">
                ";
                } else {
                    // line 186
                    yield "                    <a class=\"dropdown-item\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
                    yield "\" data-value=\"";
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["range"], 0, [], "array", false, false, false, 186))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["range"], 0, [], "array", false, false, false, 186), "short", (isset($context["rangeFormat"]) || array_key_exists("rangeFormat", $context) ? $context["rangeFormat"] : (function () { throw new RuntimeError('Variable "rangeFormat" does not exist.', 186, $this->source); })())), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 186, $this->source); })()), "data-separator", [], "array", false, false, false, 186), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["range"], 1, [], "array", false, false, false, 186), "short", (isset($context["rangeFormat"]) || array_key_exists("rangeFormat", $context) ? $context["rangeFormat"] : (function () { throw new RuntimeError('Variable "rangeFormat" does not exist.', 186, $this->source); })())), "html", null, true);
                    }
                    yield "\" data-event=\"change keyup\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["title"], [], "daterangepicker"), "html", null, true);
                    yield "</a>
                ";
                }
                // line 188
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['title'], $context['range'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "        </div>
        ";
        }
        // line 191
        yield "        ";
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_duration_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "duration_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "duration_widget"));

        // line 196
        yield "    <div class=\"duration-widget\">
        ";
        // line 197
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 197), "duration_presets", [], "any", true, true, false, 197) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "vars", [], "any", false, false, false, 197), "duration_presets", [], "any", false, false, false, 197))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "vars", [], "any", false, false, false, 197), "disabled", [], "any", false, false, false, 197) === false))) {
            // line 198
            yield "            <div class=\"input-group\">
                ";
            // line 199
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 199), "icon", [], "any", true, true, false, 199) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "vars", [], "any", false, false, false, 199), "icon", [], "any", false, false, false, 199)))) {
                // line 200
                yield "                <div class=\"input-group-text\">
                    ";
                // line 201
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "vars", [], "any", false, false, false, 201), "icon", [], "any", false, false, false, 201));
                yield "
                </div>
                ";
            }
            // line 204
            yield "                ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
                ";
            // line 205
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 205), "toggle", [], "any", true, true, false, 205) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "vars", [], "any", false, false, false, 205), "toggle", [], "any", false, false, false, 205))) {
                // line 206
                yield "                    <div class=\"input-group-text\">
                        <a href=\"#\" id=\"";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "vars", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207), "html", null, true);
                yield "_toggle\" class=\"text-success\">";
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("link");
                yield "</a>
                    </div>
                ";
            }
            // line 210
            yield "                <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
                <div class=\"dropdown-menu dropdown-menu-end pre-scrollable\">
                    <div class=\"dropdown-menu-columns\">
                        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([0, 1, 2, 3]);
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 214
                yield "                            <div class=\"dropdown-menu-column\" style=\"min-width: 4rem\">
                                ";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "vars", [], "any", false, false, false, 215), "duration_presets", [], "any", false, false, false, 215));
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 216
                    yield "                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 216) % 4) == $context["index"])) {
                        // line 217
                        yield "                                        <a class=\"dropdown-item justify-content-center\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "vars", [], "any", false, false, false, 217), "id", [], "any", false, false, false, 217), "html", null, true);
                        yield "\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\" data-event=\"change\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "</a>
                                    ";
                    }
                    // line 219
                    yield "                                ";
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
                unset($context['_seq'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                yield "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 226
            yield "            ";
            if ((array_key_exists("icon", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 226, $this->source); })())))) {
                // line 227
                yield "                <div class=\"input-group\">
                    <div class=\"input-group-text\">
                        ";
                // line 229
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 229, $this->source); })()));
                yield "
                    </div>
                    ";
                // line 231
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                yield "
                </div>
            ";
            } else {
                // line 234
                yield "                ";
                yield from                 $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
                yield "
            ";
            }
            // line 236
            yield "        ";
        }
        // line 237
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_widget"));

        // line 241
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
        <div class=\"row\">
            <div class=\"col-sm-6\">";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "date", [], "any", false, false, false, 244), 'widget', ["datetime" => true]);
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "date", [], "any", false, false, false, 245), 'errors');
        // line 246
        yield "</div>
            <div class=\"col-sm-6\">";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "time", [], "any", false, false, false, 248), 'widget', ["datetime" => true]);
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "time", [], "any", false, false, false, 249), 'errors');
        // line 250
        yield "</div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 256
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 256, $this->source); })()))) {
            // line 257
            yield "        <div class=\"input-group\">
            <div class=\"input-group-text\">
                ";
            // line 259
            yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 259, $this->source); })()));
            yield "
            </div>
            ";
            // line 261
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
        </div>
    ";
        } else {
            // line 264
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 268
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mail_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mail_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mail_widget"));

        // line 269
        yield "<div class=\"input-group\">
        <div class=\"input-group-text\">
            ";
        // line 271
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("mail");
        yield "
        </div>
        ";
        // line 273
        yield from         $this->unwrap()->yieldBlock("email_widget", $context, $blocks);
        yield "
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 278
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_secret_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secret_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "secret_widget"));

        // line 279
        yield "<div class=\"input-group\">
        <div class=\"input-group-text\">
            ";
        // line 281
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("password");
        yield "
        </div>
        ";
        // line 283
        yield from         $this->unwrap()->yieldBlock("password_widget", $context, $blocks);
        yield "
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 287
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_yearpicker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "yearpicker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "yearpicker_widget"));

        // line 288
        $context["yearInt"] = $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 288, $this->source); })()), "Y");
        // line 289
        yield "    <div class=\"btn-group\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort((isset($context["previousYear"]) || array_key_exists("previousYear", $context) ? $context["previousYear"] : (function () { throw new RuntimeError('Variable "previousYear" does not exist.', 290, $this->source); })())), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "vars", [], "any", false, false, false, 291), "id", [], "any", false, false, false, 291), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["previousYear"]) || array_key_exists("previousYear", $context) ? $context["previousYear"] : (function () { throw new RuntimeError('Variable "previousYear" does not exist.', 291, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 292
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("left");
        yield "
        </a>
        ";
        // line 294
        if ((isset($context["show_range"]) || array_key_exists("show_range", $context) ? $context["show_range"] : (function () { throw new RuntimeError('Variable "show_range" does not exist.', 294, $this->source); })())) {
            // line 295
            yield "            <a class=\"btn\" href=\"#\" onclick=\"return false;\">
                <span id=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "vars", [], "any", false, false, false, 296), "id", [], "any", false, false, false, 296), "html", null, true);
            yield "_month_name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 296, $this->source); })())), "html", null, true);
            yield " &ndash; ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 296, $this->source); })())), "html", null, true);
            yield "</span>
            </a>
        ";
        } else {
            // line 299
            yield "            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["yearInt"]) || array_key_exists("yearInt", $context) ? $context["yearInt"] : (function () { throw new RuntimeError('Variable "yearInt" does not exist.', 300, $this->source); })()), "html", null, true);
            yield "
            </button>
            <ul class=\"dropdown-menu dropdown-menu-start pre-scrollable\">
                ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(((isset($context["yearInt"]) || array_key_exists("yearInt", $context) ? $context["yearInt"] : (function () { throw new RuntimeError('Variable "yearInt" does not exist.', 303, $this->source); })()) - 5), ((isset($context["yearInt"]) || array_key_exists("yearInt", $context) ? $context["yearInt"] : (function () { throw new RuntimeError('Variable "yearInt" does not exist.', 303, $this->source); })()) + 5)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 304
                yield "                    ";
                $context["tmpYear"] = $this->extensions['App\Twig\Extensions']->buildReportDate($context["i"]);
                // line 305
                yield "                    <li><a href=\"#\" data-form-widget=\"copy-data\" data-target=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "vars", [], "any", false, false, false, 305), "id", [], "any", false, false, false, 305), "html", null, true);
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["tmpYear"]) || array_key_exists("tmpYear", $context) ? $context["tmpYear"] : (function () { throw new RuntimeError('Variable "tmpYear" does not exist.', 305, $this->source); })())), "html", null, true);
                yield "\" data-event=\"change\" class=\"dropdown-item\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["tmpYear"]) || array_key_exists("tmpYear", $context) ? $context["tmpYear"] : (function () { throw new RuntimeError('Variable "tmpYear" does not exist.', 305, $this->source); })()), "Y"), "html", null, true);
                yield "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            yield "            </ul>
        ";
        }
        // line 309
        yield "        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateShort((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 309, $this->source); })())), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "vars", [], "any", false, false, false, 310), "id", [], "any", false, false, false, 310), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 310, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 311
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("right");
        yield "
        </a>
    </div>";
        // line 314
        $context["required"] = false;
        // line 315
        yield "<input type=\"hidden\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 315, $this->source); })()), "html", null, true);
        yield "\" />";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_monthpicker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monthpicker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monthpicker_widget"));

        // line 319
        yield "<div class=\"btn-group\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->monthName((isset($context["previousMonth"]) || array_key_exists("previousMonth", $context) ? $context["previousMonth"] : (function () { throw new RuntimeError('Variable "previousMonth" does not exist.', 320, $this->source); })()), true), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "vars", [], "any", false, false, false, 321), "id", [], "any", false, false, false, 321), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["previousMonth"]) || array_key_exists("previousMonth", $context) ? $context["previousMonth"] : (function () { throw new RuntimeError('Variable "previousMonth" does not exist.', 321, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 322
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("left");
        yield "
        </a>
        <a class=\"btn\" href=\"#\" onclick=\"return false;\">
            <span id=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "vars", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325), "html", null, true);
        yield "_month_name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->monthName((isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 325, $this->source); })()), true), "html", null, true);
        yield "</span>
        </a>
        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->monthName((isset($context["nextMonth"]) || array_key_exists("nextMonth", $context) ? $context["nextMonth"] : (function () { throw new RuntimeError('Variable "nextMonth" does not exist.', 327, $this->source); })()), true), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "vars", [], "any", false, false, false, 328), "id", [], "any", false, false, false, 328), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["nextMonth"]) || array_key_exists("nextMonth", $context) ? $context["nextMonth"] : (function () { throw new RuntimeError('Variable "nextMonth" does not exist.', 328, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 329
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("right");
        yield "
        </a>
    </div>";
        // line 332
        $context["required"] = false;
        // line 333
        yield "<input type=\"hidden\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 333, $this->source); })()), "html", null, true);
        yield "\" />";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 336
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_weekpicker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "weekpicker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "weekpicker_widget"));

        // line 337
        yield "<div class=\"btn-group week-picker-btn-group ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 337) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 337)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 337), "html", null, true)) : (""));
        yield "\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeek", ["%week%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["previousWeek"]) || array_key_exists("previousWeek", $context) ? $context["previousWeek"] : (function () { throw new RuntimeError('Variable "previousWeek" does not exist.', 338, $this->source); })()), "W")]), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["previousWeek"]) || array_key_exists("previousWeek", $context) ? $context["previousWeek"] : (function () { throw new RuntimeError('Variable "previousWeek" does not exist.', 339, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 340
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("left");
        yield "
        </a>
        <a class=\"btn btn-default\" href=\"#\" onclick=\"return false;\">
            <span id=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        yield "_week_number\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeek", ["%week%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["week"]) || array_key_exists("week", $context) ? $context["week"] : (function () { throw new RuntimeError('Variable "week" does not exist.', 343, $this->source); })()), "W")]), "html", null, true);
        yield "\">
                ";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->monthName((isset($context["week"]) || array_key_exists("week", $context) ? $context["week"] : (function () { throw new RuntimeError('Variable "week" does not exist.', 344, $this->source); })()), true), "html", null, true);
        yield "
                &ndash;
                ";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeekShort", ["%week%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["week"]) || array_key_exists("week", $context) ? $context["week"] : (function () { throw new RuntimeError('Variable "week" does not exist.', 346, $this->source); })()), "W")]), "html", null, true);
        yield "
            </span>
        </a>
        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.workingTimeWeek", ["%week%" => $this->extensions['App\Twig\LocaleFormatExtensions']->dateFormat((isset($context["nextWeek"]) || array_key_exists("nextWeek", $context) ? $context["nextWeek"] : (function () { throw new RuntimeError('Variable "nextWeek" does not exist.', 349, $this->source); })()), "W")]), "html", null, true);
        yield "\"
           data-form-widget=\"copy-data\" data-target=\"#";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "vars", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
        yield "\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->formatReportDate((isset($context["nextWeek"]) || array_key_exists("nextWeek", $context) ? $context["nextWeek"] : (function () { throw new RuntimeError('Variable "nextWeek" does not exist.', 350, $this->source); })())), "html", null, true);
        yield "\" data-event=\"change\">
            ";
        // line 351
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("right");
        yield "
        </a>
    </div>";
        // line 354
        $context["required"] = false;
        // line 355
        yield "<input type=\"hidden\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 355, $this->source); })()), "html", null, true);
        yield "\" />";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tags_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_widget"));

        // line 359
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 359), "choices", [], "any", true, true, false, 359)) {
            // line 360
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
            yield "
    ";
        } else {
            // line 362
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 366
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report_sum_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_sum_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_sum_widget"));

        // line 367
        yield "    <div class=\"dropdown\"";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "vars", [], "any", false, false, false, 367), "choices", [], "any", false, false, false, 367)) <= 1)) {
            yield " style=\"display: none\"";
        }
        yield ">
        <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            ";
        // line 369
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("display", true);
        yield "
        </button>
        <ul class=\"dropdown-menu checkbox-menu\">
            ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "children", [], "any", false, false, false, 372));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 373
            yield "                <li class=\"dropdown-item\">
                    ";
            // line 374
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'widget');
            yield "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_phone_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phone_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phone_widget"));

        // line 383
        yield "<div class=\"input-group\">
        <div class=\"input-group-text\">
            ";
        // line 385
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", true, true, false, 385) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 385)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 385)) : ("phone")));
        yield "
        </div>
        ";
        // line 387
        yield from         $this->unwrap()->yieldBlock("tel_widget", $context, $blocks);
        yield "
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 391
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 392
        $context["prepend"] =  !(is_string($_v2 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 392, $this->source); })())) && is_string($_v3 = "{{") && str_starts_with($_v2, $_v3));
        // line 393
        $context["append"] =  !(is_string($_v4 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 393, $this->source); })())) && is_string($_v5 = "}}") && str_ends_with($_v4, $_v5));
        // line 394
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 394, $this->source); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 394, $this->source); })()))) {
            // line 395
            yield "<div class=\"input-group\">";
            // line 396
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 396, $this->source); })())) {
                // line 397
                yield "<div class=\"input-group-text\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 397, $this->source); })()));
                yield "</div>";
            }
            // line 399
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 400
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 400, $this->source); })())) {
                // line 401
                yield "<div class=\"input-group-text\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 401, $this->source); })()));
                yield "</div>";
            }
            // line 403
            yield "</div>";
        } else {
            // line 405
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_homepage_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "homepage_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "homepage_widget"));

        // line 411
        yield "<div class=\"input-group\">
        ";
        // line 412
        if (!CoreExtension::inFilter("://", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 412, $this->source); })()))) {
            // line 413
            yield "            <div class=\"input-group-text\">https://</div>
        ";
        }
        // line 415
        yield "        ";
        yield from         $this->unwrap()->yieldBlock("url_widget", $context, $blocks);
        yield "
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 420
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 420, $this->source); })())) > 0)) {
            // line 421
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 421, $this->source); })()));
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
                // line 422
                yield "<div class=\"invalid-feedback d-block";
                if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 422))) {
                    yield " mb-3";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 422), "html", null, true);
                yield "</div>";
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
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 427
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_fields_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_fields_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_fields_collection_row"));

        // line 428
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 428, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 428)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 428), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "parent", [], "any", false, false, false, 428), "vars", [], "any", false, false, false, 428), "name", [], "any", false, false, false, 428) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "vars", [], "any", false, false, false, 428), "name", [], "any", false, false, false, 428)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "parent", [], "any", false, false, false, 428), "vars", [], "any", false, false, false, 428), "name", [], "any", false, false, false, 428) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "vars", [], "any", false, false, false, 428), "name", [], "any", false, false, false, 428)))))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 428, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 429
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 429, $this->source); })()), 'widget');
        // line 430
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 433
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_fields_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_fields_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_fields_collection_widget"));

        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 434, $this->source); })()), "vars", [], "any", false, false, false, 434), "data", [], "any", false, false, false, 434), "order", [], "any", false, false, false, 434) <=> CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 434, $this->source); })()), "vars", [], "any", false, false, false, 434), "data", [], "any", false, false, false, 434), "order", [], "any", false, false, false, 434)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 435
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "value", [], "any", false, false, false, 435), 'row', ["row_attr" => ["class" => ((((("mb-3 " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "parent", [], "any", false, false, false, 435), "vars", [], "any", false, false, false, 435), "name", [], "any", false, false, false, 435)) . "_row_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "vars", [], "any", false, false, false, 435), "name", [], "any", false, false, false, 435)) . "_") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "vars", [], "any", false, false, false, 435), "name", [], "any", false, false, false, 435))]]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['meta'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 439
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help_content"));

        // line 440
        if ((array_key_exists("help_translation_domain", $context) &&  !(null === (isset($context["help_translation_domain"]) || array_key_exists("help_translation_domain", $context) ? $context["help_translation_domain"] : (function () { throw new RuntimeError('Variable "help_translation_domain" does not exist.', 440, $this->source); })())))) {
            // line 441
            $context["translation_domain"] = (isset($context["help_translation_domain"]) || array_key_exists("help_translation_domain", $context) ? $context["help_translation_domain"] : (function () { throw new RuntimeError('Variable "help_translation_domain" does not exist.', 441, $this->source); })());
        }
        // line 444
        if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 444, $this->source); })()) === false)) {
            // line 445
            if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 445, $this->source); })()) === false)) {
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 446, $this->source); })()), "html", null, true);
            } else {
                // line 448
                yield (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 448, $this->source); })());
            }
        } else {
            // line 451
            if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 451, $this->source); })()) === false)) {
                // line 452
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 452, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 452, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 452, $this->source); })())), "html", null, true);
            } else {
                // line 454
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 454, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 454, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 454, $this->source); })()));
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form/blocks.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1904 => 454,  1901 => 452,  1899 => 451,  1895 => 448,  1892 => 446,  1890 => 445,  1888 => 444,  1885 => 441,  1883 => 440,  1870 => 439,  1852 => 435,  1848 => 434,  1835 => 433,  1824 => 430,  1822 => 429,  1810 => 428,  1797 => 427,  1767 => 422,  1750 => 421,  1748 => 420,  1735 => 419,  1721 => 415,  1717 => 413,  1715 => 412,  1712 => 411,  1699 => 410,  1687 => 405,  1684 => 403,  1679 => 401,  1677 => 400,  1675 => 399,  1670 => 397,  1668 => 396,  1666 => 395,  1664 => 394,  1662 => 393,  1660 => 392,  1647 => 391,  1634 => 387,  1629 => 385,  1625 => 383,  1612 => 382,  1599 => 377,  1590 => 374,  1587 => 373,  1583 => 372,  1577 => 369,  1569 => 367,  1556 => 366,  1541 => 362,  1535 => 360,  1532 => 359,  1519 => 358,  1504 => 355,  1502 => 354,  1497 => 351,  1491 => 350,  1487 => 349,  1481 => 346,  1476 => 344,  1470 => 343,  1464 => 340,  1458 => 339,  1454 => 338,  1449 => 337,  1436 => 336,  1421 => 333,  1419 => 332,  1414 => 329,  1408 => 328,  1404 => 327,  1397 => 325,  1391 => 322,  1385 => 321,  1381 => 320,  1378 => 319,  1365 => 318,  1350 => 315,  1348 => 314,  1343 => 311,  1337 => 310,  1332 => 309,  1328 => 307,  1315 => 305,  1312 => 304,  1308 => 303,  1302 => 300,  1299 => 299,  1289 => 296,  1286 => 295,  1284 => 294,  1279 => 292,  1273 => 291,  1269 => 290,  1266 => 289,  1264 => 288,  1251 => 287,  1238 => 283,  1233 => 281,  1229 => 279,  1216 => 278,  1203 => 273,  1198 => 271,  1194 => 269,  1181 => 268,  1166 => 264,  1160 => 261,  1155 => 259,  1151 => 257,  1149 => 256,  1136 => 255,  1123 => 250,  1121 => 249,  1119 => 248,  1116 => 246,  1114 => 245,  1112 => 244,  1106 => 241,  1093 => 240,  1081 => 237,  1078 => 236,  1072 => 234,  1066 => 231,  1061 => 229,  1057 => 227,  1054 => 226,  1048 => 222,  1041 => 220,  1027 => 219,  1017 => 217,  1014 => 216,  997 => 215,  994 => 214,  990 => 213,  985 => 210,  977 => 207,  974 => 206,  972 => 205,  967 => 204,  961 => 201,  958 => 200,  956 => 199,  953 => 198,  951 => 197,  948 => 196,  935 => 195,  920 => 191,  916 => 189,  910 => 188,  896 => 186,  892 => 184,  889 => 183,  885 => 182,  881 => 180,  879 => 179,  876 => 178,  873 => 177,  870 => 176,  857 => 175,  846 => 172,  841 => 169,  834 => 167,  820 => 166,  810 => 164,  807 => 163,  804 => 162,  787 => 161,  784 => 160,  780 => 159,  775 => 156,  772 => 155,  770 => 154,  766 => 153,  757 => 151,  753 => 149,  751 => 148,  749 => 147,  747 => 146,  745 => 145,  732 => 144,  721 => 141,  714 => 137,  710 => 136,  707 => 135,  705 => 134,  703 => 133,  695 => 131,  691 => 129,  688 => 128,  685 => 127,  683 => 126,  670 => 125,  652 => 117,  647 => 114,  643 => 112,  637 => 110,  635 => 109,  630 => 107,  625 => 106,  621 => 104,  615 => 102,  613 => 101,  607 => 97,  601 => 95,  595 => 93,  593 => 92,  584 => 86,  566 => 83,  563 => 82,  560 => 81,  557 => 80,  554 => 79,  551 => 78,  548 => 77,  545 => 76,  532 => 75,  518 => 72,  505 => 71,  492 => 68,  487 => 67,  474 => 66,  452 => 63,  449 => 62,  436 => 61,  423 => 58,  421 => 57,  419 => 56,  406 => 55,  393 => 51,  384 => 48,  374 => 47,  370 => 46,  365 => 44,  359 => 41,  345 => 39,  332 => 38,  320 => 35,  307 => 34,  295 => 30,  288 => 26,  287 => 25,  286 => 24,  282 => 23,  279 => 22,  272 => 20,  266 => 18,  264 => 17,  260 => 16,  256 => 15,  253 => 14,  248 => 13,  246 => 12,  241 => 11,  234 => 7,  233 => 6,  232 => 5,  228 => 4,  226 => 3,  213 => 2,  202 => 439,  199 => 438,  197 => 433,  195 => 427,  193 => 419,  191 => 410,  188 => 408,  186 => 391,  183 => 390,  181 => 382,  178 => 380,  176 => 366,  173 => 365,  171 => 358,  168 => 357,  166 => 336,  163 => 335,  161 => 318,  158 => 317,  156 => 287,  153 => 286,  151 => 278,  148 => 276,  146 => 268,  143 => 267,  141 => 255,  138 => 254,  136 => 240,  133 => 239,  131 => 195,  128 => 194,  126 => 175,  123 => 174,  121 => 144,  118 => 143,  116 => 125,  113 => 124,  111 => 75,  108 => 74,  106 => 71,  103 => 70,  101 => 66,  98 => 65,  96 => 61,  93 => 60,  91 => 55,  88 => 54,  86 => 38,  83 => 37,  81 => 34,  78 => 33,  76 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# added for the team project form, to show divider for the customer name between all projects #}
{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {% if form.vars.choices|length != form.children|length %}
                {% for name, choices in form.vars.choices %}
                    <fieldset class=\"form-fieldset\">
                        <legend>{{ name }}</legend>
                    {% for key, choice in choices %}
                        {{- form_widget(form[key]) -}}
                        {{- form_label(form[key]) -}}
                    {% endfor %}
                    </fieldset>
                {% endfor %}
            {% else %}
                {%- for child in form %}
                    {{- form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                        translation_domain: choice_translation_domain,
                    }) -}}
                {% endfor -%}
            {% endif %}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{% block _quick_entry_form_rows_entry_timesheets_entry_widget %}
    {{ form_row(form.duration, {row_attr: {class: 'p-0'}}) }}
{%- endblock %}

{% block quick_entry_week_row %}
    <tr{% with {attr: row_attr|merge({class: (row_attr.class|default('') ~ ' form-group qe-entry-week-row' ~ (not valid ? ' is-invalid'))|trim})} %}{{ block('attributes') }}{% endwith %}>
        <td>
            {{ form_row(form.project, {row_attr: {class: 'p-0'}}) }}
        </td>
        <td>
            {{ form_row(form.activity, {row_attr: {class: 'p-0'}}) }}
        </td>
        {% for timesheet in form.timesheets %}
            <td class=\"text-center{% if timesheet.vars.data.begin is weekend %} weekend{% endif %}{% if timesheet.vars.data.begin is today %} today{% endif %}\">
                {{ form_widget(timesheet) }}
            </td>
        {% endfor %}
        <td class=\"text-nowrap text-center total qe-totals-row\"></td>
    </tr>
{% endblock %}

{% block _team_edit_form_members_entry_user_widget %}
    {#  this will convert the select box into a hidden field, which are exchangeable from an HTML perspective #}
    {%- set type = 'hidden' -%}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block _team_edit_form_members_entry_teamlead_widget %}
    {% set attr = attr|merge({'class' : 'form-selectgroup-input '}) %}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock %}

{% block _team_edit_form_members_widget %}
    <p>{{ 'team.configure_teamlead.help'|trans }}</p>
    {{ form_widget(form, {row_attr: {class: 'mb-1'}}) }}
{% endblock %}

{% block team_member_row %}
    {{ form_widget(form) }}
{% endblock %}

{% block team_member_widget %}
    {% import 'macros/widgets.html.twig' as widgets%}
    {% set data = {} %}
    {% set user = null %}
    {% if form.vars.data is not null and form.vars.data.user is not null %}
        {% set user = form.vars.data.user %}
        {% set data = {id: user.id, color: user.color|colorize(user.displayName), title: user.title, username: user.userIdentifier, alias: user.alias, initials: user.initials, accountnumber: user.accountNumber, display: user.displayName} %}
    {% endif %}
    <div class=\"row mb-1\"{% for key, value in data %} data-{{ key }}=\"{{ value }}\"{% endfor %}>
        <div class=\"col-xs-12\">
            <label class=\"form-selectgroup-item flex-fill\">
                {{ form_widget(form.teamlead) }}
                <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                    <div class=\"me-3\">
                        <span class=\"form-selectgroup-check\"></span>
                    </div>
                    <div class=\"form-selectgroup-label-content d-flex align-items-center me-2\">
                        {% if user is not null %}
                            {{ widgets.user_avatar(form.vars.data.user) }}
                        {% else %}
                            {{ widgets.avatar('__INITIALS__', '__COLOR__', '__DISPLAY__') }}
                        {% endif %}
                    </div>
                    <div class=\"form-selectgroup-label-content d-flex align-items-center\">
                        <div class=\"text-start\">
                            <div class=\"font-weight-medium\">
                                {% if user is not null %}
                                    {{ form.vars.data.user.displayName }}
                                {% else %}
                                    __DISPLAY__
                                {% endif %}
                                {{ form_widget(form.user) }}
                                {{ form_errors(form.user) }}
                            </div>
                            {% if user is not null %}
                                <div class=\"text-body-secondary\">{{- form.vars.data.user.title -}}</div>
                            {% else %}
                                <div class=\"text-body-secondary\">__TITLE__</div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"ms-auto\">
                        <a href=\"#\" class=\"btn btn-icon remove-member\">{{ icon('trash', true) }}</a>
                    </div>
                </div>
            </label>
        </div>
    </div>
{% endblock team_member_widget %}

{% block date_widget -%}
    {% set format = locale_format('date') %}
    {% set jsFormat = format|js_format %}
    {% set attr = attr|merge({'pattern': format|pattern, 'autocomplete': 'off', 'data-datepicker': 'on', 'data-format': jsFormat, 'placeholder': jsFormat}) -%}
    <div class=\"input-group\">
        <div class=\"input-group-text\">
            <a href=\"#\" data-form-widget=\"date-now\" data-format=\"{{ jsFormat }}\" data-target=\"{{ id }}\">{{ icon('calendar') }}</a>
        </div>
        {{- block('form_widget_simple') -}}
        {% if not required %}
        <span class=\"input-group-text\">
            <a href=\"javascript: void(0)\" class=\"link-secondary fs-5\" onclick=\"document.getElementById('{{ id }}').value = ''\">
                {{ icon('cancel') }}
            </a>
        </span>
        {% endif %}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    {%- set user_format = format -%}
    {%- set format = locale_format('time') -%}
    {%- set jsFormat = format|js_format -%}
    {%- set attr = attr|merge({'pattern': format|pattern, 'autocomplete': 'off', 'data-timepicker': 'on', 'data-format': jsFormat, 'placeholder': jsFormat}) -%}
    <div class=\"input-group\">
        <div class=\"input-group-text\">
            <a href=\"#\" data-form-widget=\"date-now\" data-format=\"{{ jsFormat }}\" data-target=\"{{ id }}\">{{ icon('calendar') }}</a>
        </div>
        {{ block('form_widget_simple') }}
        {% set time_presets = form_time_presets(app.user.timezone) %}
        {% if time_presets|length > 0 and form.vars.disabled is same as (false) %}
        <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
        <div class=\"dropdown-menu dropdown-menu-end pre-scrollable\">
            <div class=\"dropdown-menu-columns\">
                {% for index in [0, 1, 2, 3] %}
                    <div class=\"dropdown-menu-column\" style=\"min-width: 4rem\">
                        {% for value in time_presets %}
                            {% set value = value|date_format(user_format) %}
                            {% if loop.index0 % 4 == index %}
                                <a class=\"dropdown-item justify-content-center\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ value }}\" data-event=\"change\">{{ value }}</a>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{%- endblock time_widget %}

{% block daterange_widget %}
    {% set format = locale_format('date')|js_format %}
    {% set attr = attr|merge({'data-daterangepicker': 'on', 'autocomplete': 'off', 'data-format': format, 'placeholder': format ~ attr['data-separator'] ~  format}) -%}
    <div class=\"input-group\">
        {% if ranges is defined %}
        <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
        <div class=\"dropdown-menu dropdown-menu-start pre-scrollable\">
            {% for title, range in ranges %}
                {% if range|length == 0 %}
                    <hr class=\"dropdown-divider\">
                {% else %}
                    <a class=\"dropdown-item\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{% if range[0] is not null %}{{ range[0]|format_date('short', rangeFormat) }}{{ attr['data-separator'] }}{{ range[1]|format_date('short', rangeFormat) }}{% endif %}\" data-event=\"change keyup\">{{ title|trans({}, 'daterangepicker') }}</a>
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
        {{ block('form_widget_simple') }}
    </div>
{% endblock daterange_widget %}

{% block duration_widget %}
    <div class=\"duration-widget\">
        {% if (form.vars.duration_presets is defined and form.vars.duration_presets is not empty) and (form.vars.disabled is same as (false)) %}
            <div class=\"input-group\">
                {% if form.vars.icon is defined and form.vars.icon is not null %}
                <div class=\"input-group-text\">
                    {{ icon(form.vars.icon) }}
                </div>
                {% endif %}
                {{ block('form_widget_simple') }}
                {% if form.vars.toggle is defined and form.vars.toggle %}
                    <div class=\"input-group-text\">
                        <a href=\"#\" id=\"{{ form.vars.id }}_toggle\" class=\"text-success\">{{ icon('link') }}</a>
                    </div>
                {% endif %}
                <button type=\"button\" class=\"input-group-text dropdown-toggle btn-duration-preset\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
                <div class=\"dropdown-menu dropdown-menu-end pre-scrollable\">
                    <div class=\"dropdown-menu-columns\">
                        {% for index in [0, 1, 2, 3] %}
                            <div class=\"dropdown-menu-column\" style=\"min-width: 4rem\">
                                {% for value in form.vars.duration_presets %}
                                    {% if loop.index0 % 4 == index %}
                                        <a class=\"dropdown-item justify-content-center\" href=\"#\" data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ value }}\" data-event=\"change\">{{ value }}</a>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {% if icon is defined and icon is not empty %}
                <div class=\"input-group\">
                    <div class=\"input-group-text\">
                        {{ icon(icon) }}
                    </div>
                    {{ block('form_widget_simple') }}
                </div>
            {% else %}
                {{ block('form_widget_simple') }}
            {% endif %}
        {% endif %}
    </div>
{% endblock duration_widget %}

{% block date_time_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                {{- form_widget(form.date, { datetime: true } ) -}}
                {{- form_errors(form.date) -}}
            </div>
            <div class=\"col-sm-6\">
            {{- form_widget(form.time, { datetime: true } ) -}}
            {{- form_errors(form.time) -}}
            </div>
        </div>
    </div>
{%- endblock date_time_widget %}

{% block text_widget -%}
    {% if icon is not empty %}
        <div class=\"input-group\">
            <div class=\"input-group-text\">
                {{ icon(icon) }}
            </div>
            {{ block('form_widget_simple') }}
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{%- endblock text_widget %}

{% block mail_widget -%}
    <div class=\"input-group\">
        <div class=\"input-group-text\">
            {{ icon('mail') }}
        </div>
        {{ block('email_widget') }}
    </div>
{%- endblock mail_widget %}

{# user password fields, search for \"secret\" block_prefix #}
{% block secret_widget -%}
    <div class=\"input-group\">
        <div class=\"input-group-text\">
            {{ icon('password') }}
        </div>
        {{ block('password_widget') }}
    </div>
{%- endblock secret_widget %}

{% block yearpicker_widget -%}
    {% set yearInt = year|date_format('Y') %}
    <div class=\"btn-group\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ previousYear|date_short }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ previousYear|report_date }}\" data-event=\"change\">
            {{ icon('left') }}
        </a>
        {% if show_range %}
            <a class=\"btn\" href=\"#\" onclick=\"return false;\">
                <span id=\"{{ form.vars.id }}_month_name\">{{ year|date_short }} &ndash; {{ nextYear|date_short }}</span>
            </a>
        {% else %}
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                {{ yearInt }}
            </button>
            <ul class=\"dropdown-menu dropdown-menu-start pre-scrollable\">
                {% for i in (yearInt - 5)..(yearInt + 5) %}
                    {% set tmpYear = report_date(i) %}
                    <li><a href=\"#\" data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ tmpYear|report_date }}\" data-event=\"change\" class=\"dropdown-item\">{{ tmpYear|date_format('Y') }}</a></li>
                {% endfor %}
            </ul>
        {% endif %}
        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ nextYear|date_short }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ nextYear|report_date }}\" data-event=\"change\">
            {{ icon('right') }}
        </a>
    </div>
    {%- set required = false -%}
    <input type=\"hidden\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
{%- endblock yearpicker_widget %}

{% block monthpicker_widget -%}
    <div class=\"btn-group\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ previousMonth|month_name(true) }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ previousMonth|report_date }}\" data-event=\"change\">
            {{ icon('left') }}
        </a>
        <a class=\"btn\" href=\"#\" onclick=\"return false;\">
            <span id=\"{{ form.vars.id }}_month_name\">{{ month|month_name(true) }}</span>
        </a>
        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ nextMonth|month_name(true) }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ nextMonth|report_date }}\" data-event=\"change\">
            {{ icon('right') }}
        </a>
    </div>
    {%- set required = false -%}
    <input type=\"hidden\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
{%- endblock monthpicker_widget %}

{% block weekpicker_widget -%}
    <div class=\"btn-group week-picker-btn-group {{ attr.class ?? '' }}\">
        <a class=\"btn btn-left btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'stats.workingTimeWeek'|trans({'%week%': previousWeek|date_format('W')}) }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ previousWeek|report_date }}\" data-event=\"change\">
            {{ icon('left') }}
        </a>
        <a class=\"btn btn-default\" href=\"#\" onclick=\"return false;\">
            <span id=\"{{ form.vars.id }}_week_number\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'stats.workingTimeWeek'|trans({'%week%': week|date_format('W')}) }}\">
                {{ week|month_name(true) }}
                &ndash;
                {{ 'stats.workingTimeWeekShort'|trans({'%week%': week|date_format('W')}) }}
            </span>
        </a>
        <a class=\"btn btn-right btn-icon\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'stats.workingTimeWeek'|trans({'%week%': nextWeek|date_format('W')}) }}\"
           data-form-widget=\"copy-data\" data-target=\"#{{ form.vars.id }}\" data-value=\"{{ nextWeek|report_date }}\" data-event=\"change\">
            {{ icon('right') }}
        </a>
    </div>
    {%- set required = false -%}
    <input type=\"hidden\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
{%- endblock weekpicker_widget %}

{% block tags_widget %}
    {% if form.vars.choices is defined %}
        {{ block('choice_widget_collapsed') }}
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% endblock tags_widget %}

{% block report_sum_widget %}
    <div class=\"dropdown\"{% if form.vars.choices|length <= 1 %} style=\"display: none\"{% endif %}>
        <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            {{ icon('display', true) }}
        </button>
        <ul class=\"dropdown-menu checkbox-menu\">
            {% for option in form.children %}
                <li class=\"dropdown-item\">
                    {{ form_widget(option) }}
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock report_sum_widget %}

{# customer phone/fax, search for \"phone\" block_prefix #}
{% block phone_widget -%}
    <div class=\"input-group\">
        <div class=\"input-group-text\">
            {{ icon(attr.icon ?? 'phone') }}
        </div>
        {{ block('tel_widget') }}
    </div>
{%- endblock phone_widget %}

{% block money_widget -%}
    {%- set prepend = not (money_pattern starts with '{{') -%}
    {%- set append = not (money_pattern ends with '}}') -%}
    {%- if prepend or append -%}
        <div class=\"input-group\">
            {%- if prepend -%}
                <div class=\"input-group-text\">{{ money_pattern|form_encode_currency }}</div>
            {%- endif -%}
            {{- block('form_widget_simple') -}}
            {%- if append -%}
                <div class=\"input-group-text\">{{ money_pattern|form_encode_currency }}</div>
            {%- endif -%}
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock money_widget %}

{# customer homepage, search for \"homepage\" block_prefix #}
{% block homepage_widget -%}
    <div class=\"input-group\">
        {% if '://' not in value  %}
            <div class=\"input-group-text\">https://</div>
        {% endif %}
        {{ block('url_widget') }}
    </div>
{%- endblock homepage_widget %}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div class=\"invalid-feedback d-block{% if form is rootform and loop.last %} mb-3{% endif %}\">{{ error.message }}</div>
        {%- endfor -%}
    {%- endif %}
{%- endblock form_errors %}

{%- block meta_fields_collection_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default(form.parent.vars.name ~ '_row_' ~ form.vars.name))|trim})} %}{{ block('attributes') }}{% endwith %}>
        {{- form_widget(form) -}}
    </div>
{%- endblock meta_fields_collection_row %}

{%- block meta_fields_collection_widget -%}
    {% for meta in form|sort((a, b) => a.vars.data.order <=> b.vars.data.order) %}
        {{ form_row(meta.value, {'row_attr': {'class': 'mb-3 ' ~  form.parent.vars.name ~ '_row_' ~ form.vars.name ~ '_' ~ meta.vars.name}}) }}
    {% endfor %}
{%- endblock meta_fields_collection_widget %}

{% block form_help_content -%}
    {%- if help_translation_domain is defined and help_translation_domain is not null -%}
        {%- set translation_domain = help_translation_domain -%}
    {%- endif -%}
    {# following copied from form_div_layout.html.twig #}
    {%- if translation_domain is same as(false) -%}
        {%- if help_html is same as(false) -%}
            {{- help -}}
        {%- else -%}
            {{- help|raw -}}
        {%- endif -%}
    {%- else -%}
        {%- if help_html is same as(false) -%}
            {{- help|trans(help_translation_parameters, translation_domain) -}}
        {%- else -%}
            {{- help|trans(help_translation_parameters, translation_domain)|raw -}}
        {%- endif -%}
    {%- endif -%}
{%- endblock form_help_content %}
", "form/blocks.html.twig", "C:\\wamp64\\www\\kimai\\templates\\form\\blocks.html.twig");
    }
}
