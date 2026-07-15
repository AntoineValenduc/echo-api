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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_7c785ffce6e39f2a76bafebe7f0b542b extends Template
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
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
        #collector-content .sf-serializer .sf-serializer-compact-list {
            line-height: 80%;
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 36
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "handledCount", [], "any", false, false, false, 36) > 0)) {
            // line 37
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 38
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "handledCount", [], "any", false, false, false, 40), "html", null, true);
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            yield "
        ";
            // line 44
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 45
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "handledCount", [], "any", false, false, false, 47), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "totalTime", [], "any", false, false, false, 52) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, false, 60), "serialize", [], "any", false, false, false, 60)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64), "deserialize", [], "any", false, false, false, 64)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "encode", [], "any", false, false, false, 70)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "data", [], "any", false, false, false, 74), "decode", [], "any", false, false, false, 74)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "normalize", [], "any", false, false, false, 80)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "data", [], "any", false, false, false, 84), "denormalize", [], "any", false, false, false, 84)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "
        ";
            // line 90
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 90, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 95
        yield "    <span class=\"label ";
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "handledCount", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\" aria-hidden=\"true\">";
        // line 96
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 102
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 104
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "handledCount", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 109
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "handledCount", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "totalTime", [], "any", false, false, false, 116) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "serializerNames", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["serializer"]) {
                // line 123
                yield "                    ";
                yield $this->getTemplateForMacro("macro_render_serializer_tab", $context, 123, $this->getSourceContext())->macro_render_serializer_tab(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 123, $this->source); })()), $context["serializer"]]);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['serializer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "            </div>
        ";
        }
        // line 127
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
    public function macro_render_serializer_tab($collector = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            // line 131
            yield "    <div class=\"tab\">
        <h3 class=\"tab-title\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })()), "html", null, true);
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "handledCount", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })())], "method", false, false, false, 132), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                ";
            // line 135
            yield $this->getTemplateForMacro("macro_render_serialize_tab", $context, 135, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())], "method", false, false, false, 135), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())]);
            yield "
                ";
            // line 136
            yield $this->getTemplateForMacro("macro_render_serialize_tab", $context, 136, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 136, $this->source); })())], "method", false, false, false, 136), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 136, $this->source); })())]);
            yield "

                ";
            // line 138
            yield $this->getTemplateForMacro("macro_render_normalize_tab", $context, 138, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 138, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())], "method", false, false, false, 138), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())]);
            yield "
                ";
            // line 139
            yield $this->getTemplateForMacro("macro_render_normalize_tab", $context, 139, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 139, $this->source); })())], "method", false, false, false, 139), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 139, $this->source); })())]);
            yield "

                ";
            // line 141
            yield $this->getTemplateForMacro("macro_render_encode_tab", $context, 141, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 141, $this->source); })())], "method", false, false, false, 141), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 141, $this->source); })())]);
            yield "
                ";
            // line 142
            yield $this->getTemplateForMacro("macro_render_encode_tab", $context, 142, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 142, $this->source); })())], "method", false, false, false, 142), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 142, $this->source); })())]);
            yield "
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function macro_render_serialize_tab($collectorData = null, $serialize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "serialize" => $serialize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 149
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 149, $this->source); })()), "serialize", [], "any", false, false, false, 149)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 149, $this->source); })()), "deserialize", [], "any", false, false, false, 149)));
            // line 150
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 150, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            // line 151
            yield "
    <div class=\"tab ";
            // line 152
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 152, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 153
            yield (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 153, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 153, $this->source); })())), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
            ";
            // line 155
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 155, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 157
                yield (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 157, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialized") : ("deserialized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 160
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 172, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 173
                    yield "                            <tr>
                                <td>";
                    // line 174
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 174, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 174), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 174, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 174, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 175
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 175, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 175), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 175, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 175, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 176
                    yield $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 176, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 176), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 176, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 176, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 177
                    yield $this->getTemplateForMacro("macro_render_encoder_cell", $context, 177, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 177), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 177, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 177, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 178
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 178, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 179
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 179, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 179), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 179, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 179, $this->source); })())]);
                    yield "</td>
                            </tr>
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                yield "                    </tbody>
                </table>
            ";
            }
            // line 185
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 189
    public function macro_render_caller_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 190
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 190)) {
                // line 191
                yield "        ";
                $context["trace_id"] = ((((("sf-trace-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 191, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 191, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 191, $this->source); })()));
                // line 192
                yield "
        <span class=\"metadata\">
            ";
                // line 194
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 194, $this->source); })()), "caller", [], "any", false, false, false, 194);
                // line 195
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 195, $this->source); })()), "line", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 196
                    yield "                ";
                    $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "file", [], "any", false, false, false, 196), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "line", [], "any", false, false, false, 196));
                    // line 197
                    yield "                ";
                    if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 197, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 198
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 198, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 198, $this->source); })()), "file", [], "any", false, false, false, 198), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 198, $this->source); })()), "name", [], "any", false, false, false, 198), "html", null, true);
                        yield "</a>
                ";
                    } else {
                        // line 200
                        yield "                    <abbr title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 200, $this->source); })()), "file", [], "any", false, false, false, 200), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 200, $this->source); })()), "name", [], "any", false, false, false, 200), "html", null, true);
                        yield "</abbr>
                ";
                    }
                    // line 202
                    yield "            ";
                } else {
                    // line 203
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 203, $this->source); })()), "name", [], "any", false, false, false, 203), "html", null, true);
                    yield "
            ";
                }
                // line 205
                yield "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 205, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 205, $this->source); })()), "line", [], "any", false, false, false, 205), "html", null, true);
                yield "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 208, $this->source); })()), "html", null, true);
                yield "\">
            <div class=\"trace\">
                ";
                // line 210
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 210, $this->source); })()), "file", [], "any", false, false, false, 210), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 210, $this->source); })()), "line", [], "any", false, false, false, 210)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 215
                yield "
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 221
    public function macro_render_normalize_tab($collectorData = null, $normalize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "normalize" => $normalize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 222
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 222, $this->source); })()), "normalize", [], "any", false, false, false, 222)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 222, $this->source); })()), "denormalize", [], "any", false, false, false, 222)));
            // line 223
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 223, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            // line 224
            yield "
    <div class=\"tab ";
            // line 225
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 226
            yield (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 226, $this->source); })())), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
            ";
            // line 228
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 228, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 229
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 230
                yield (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 230, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalized") : ("denormalized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 233
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 244
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 244, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 245
                    yield "                            <tr>
                                <td>";
                    // line 246
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 246, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 246), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 246, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 246, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 247
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 247, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 247), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 247, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 247, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 248
                    yield $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 248, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 248), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 248, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 248, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 249
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 249, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 250
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 250, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 250), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 250, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 250, $this->source); })())]);
                    yield "</td>
                            </tr>
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                yield "                    </tbody>
                </table>
            ";
            }
            // line 256
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 260
    public function macro_render_encode_tab($collectorData = null, $encode = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "encode" => $encode,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 261
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 261, $this->source); })()), "encode", [], "any", false, false, false, 261)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 261, $this->source); })()), "decode", [], "any", false, false, false, 261)));
            // line 262
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 262, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            // line 263
            yield "
    <div class=\"tab ";
            // line 264
            yield (((($tmp =  !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 264, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 265
            yield (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 265, $this->source); })())), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
            ";
            // line 267
            if ((($tmp =  !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 267, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 268
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 269
                yield (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 269, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encoded") : ("decoded"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 272
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 283, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 284
                    yield "                            <tr>
                                <td>";
                    // line 285
                    yield $this->getTemplateForMacro("macro_render_data_cell", $context, 285, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 285, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 285, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 286
                    yield $this->getTemplateForMacro("macro_render_context_cell", $context, 286, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 286), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 286, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 286, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 287
                    yield $this->getTemplateForMacro("macro_render_encoder_cell", $context, 287, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 287, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 287, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 288
                    yield $this->getTemplateForMacro("macro_render_time_cell", $context, 288, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 289
                    yield $this->getTemplateForMacro("macro_render_caller_cell", $context, 289, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 289), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 289, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 289, $this->source); })())]);
                    yield "</td>
                            </tr>
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                yield "                    </tbody>
                </table>
            ";
            }
            // line 295
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 299
    public function macro_render_data_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 300
            yield "    ";
            $context["data_id"] = ((((("data-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 300, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 300, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 300, $this->source); })()));
            // line 301
            yield "
    <span class=\"nowrap\">";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 302, $this->source); })()), "dataType", [], "any", false, false, false, 302), "html", null, true);
            yield "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 305, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 306, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 307
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 307, $this->source); })()), "data", [], "any", false, false, false, 307));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 312
    public function macro_render_context_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 313
            yield "    ";
            $context["context_id"] = ((((("context-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 313, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 313, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 313, $this->source); })()));
            // line 314
            yield "
    ";
            // line 315
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "type", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 316
                yield "        <span class=\"nowrap\">Type: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 316, $this->source); })()), "type", [], "any", false, false, false, 316), "html", null, true);
                yield "</span>
        <div class=\"nowrap\">Format: ";
                // line 317
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 317, $this->source); })()), "format", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 317, $this->source); })()), "format", [], "any", false, false, false, 317), "html", null, true)) : ("none"));
                yield "</div>
    ";
            } else {
                // line 319
                yield "        <span class=\"nowrap\">Format: ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 319, $this->source); })()), "format", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 319, $this->source); })()), "format", [], "any", false, false, false, 319), "html", null, true)) : ("none"));
                yield "</span>
    ";
            }
            // line 321
            yield "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 323, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 324, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 325
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 325, $this->source); })()), "context", [], "any", false, false, false, 325));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 330
    public function macro_render_normalizer_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 331
            yield "    ";
            $context["nested_normalizers_id"] = ((((("nested-normalizers-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 331, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 331, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 331, $this->source); })()));
            // line 332
            yield "
    ";
            // line 333
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 333)) {
                // line 334
                yield "        <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 334, $this->source); })()), "normalizer", [], "any", false, false, false, 334), "file", [], "any", false, false, false, 334), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 334, $this->source); })()), "normalizer", [], "any", false, false, false, 334), "line", [], "any", false, false, false, 334)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 334, $this->source); })()), "normalizer", [], "any", false, false, false, 334), "file", [], "any", false, false, false, 334), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 334, $this->source); })()), "normalizer", [], "any", false, false, false, 334), "class", [], "any", false, false, false, 334), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 334, $this->source); })()), "normalizer", [], "any", false, false, false, 334), "time", [], "any", false, false, false, 334) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 336
            yield "
    ";
            // line 337
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 337, $this->source); })()), "normalization", [], "any", false, false, false, 337)) > 1)) {
                // line 338
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 339, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 340, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small sf-serializer-compact-list\">
                    ";
                // line 342
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 342, $this->source); })()), "normalization", [], "any", false, false, false, 342));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 343
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 343), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 343), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 343)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 343), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 343), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 343) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['normalizer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 345
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 351
    public function macro_render_encoder_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 352
            yield "    ";
            $context["nested_encoders_id"] = ((((("nested-encoders-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 352, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 352, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 352, $this->source); })()));
            // line 353
            yield "
    ";
            // line 354
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 354)) {
                // line 355
                yield "        <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 355, $this->source); })()), "encoder", [], "any", false, false, false, 355), "file", [], "any", false, false, false, 355), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 355, $this->source); })()), "encoder", [], "any", false, false, false, 355), "line", [], "any", false, false, false, 355)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 355, $this->source); })()), "encoder", [], "any", false, false, false, 355), "file", [], "any", false, false, false, 355), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 355, $this->source); })()), "encoder", [], "any", false, false, false, 355), "class", [], "any", false, false, false, 355), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 355, $this->source); })()), "encoder", [], "any", false, false, false, 355), "time", [], "any", false, false, false, 355) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 357
            yield "
    ";
            // line 358
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 358, $this->source); })()), "encoding", [], "any", false, false, false, 358)) > 1)) {
                // line 359
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 360, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 361, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small sf-serializer-compact-list\">
                    ";
                // line 363
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 363, $this->source); })()), "encoding", [], "any", false, false, false, 363));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 364
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 364), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 364), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 364)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 364), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 364), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 364) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['encoder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 372
    public function macro_render_time_cell($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 373
            yield "    <span class=\"nowrap\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 373, $this->source); })()), "time", [], "any", false, false, false, 373) * 1000)), "html", null, true);
            yield " ms</span>
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
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1275 => 373,  1257 => 372,  1241 => 366,  1224 => 364,  1220 => 363,  1215 => 361,  1211 => 360,  1208 => 359,  1206 => 358,  1203 => 357,  1191 => 355,  1189 => 354,  1186 => 353,  1183 => 352,  1162 => 351,  1146 => 345,  1129 => 343,  1125 => 342,  1120 => 340,  1116 => 339,  1113 => 338,  1111 => 337,  1108 => 336,  1096 => 334,  1094 => 333,  1091 => 332,  1088 => 331,  1067 => 330,  1051 => 325,  1047 => 324,  1043 => 323,  1039 => 321,  1033 => 319,  1028 => 317,  1023 => 316,  1021 => 315,  1018 => 314,  1015 => 313,  994 => 312,  978 => 307,  974 => 306,  970 => 305,  964 => 302,  961 => 301,  958 => 300,  937 => 299,  923 => 295,  918 => 292,  901 => 289,  897 => 288,  893 => 287,  889 => 286,  885 => 285,  882 => 284,  865 => 283,  852 => 272,  846 => 269,  843 => 268,  841 => 267,  834 => 265,  830 => 264,  827 => 263,  824 => 262,  821 => 261,  801 => 260,  787 => 256,  782 => 253,  765 => 250,  761 => 249,  757 => 248,  753 => 247,  749 => 246,  746 => 245,  729 => 244,  716 => 233,  710 => 230,  707 => 229,  705 => 228,  698 => 226,  694 => 225,  691 => 224,  688 => 223,  685 => 222,  665 => 221,  649 => 215,  647 => 210,  642 => 208,  633 => 205,  627 => 203,  624 => 202,  616 => 200,  606 => 198,  603 => 197,  600 => 196,  597 => 195,  595 => 194,  591 => 192,  588 => 191,  585 => 190,  564 => 189,  550 => 185,  545 => 182,  528 => 179,  524 => 178,  520 => 177,  516 => 176,  512 => 175,  508 => 174,  505 => 173,  488 => 172,  474 => 160,  468 => 157,  465 => 156,  463 => 155,  456 => 153,  452 => 152,  449 => 151,  446 => 150,  443 => 149,  423 => 148,  406 => 142,  402 => 141,  397 => 139,  393 => 138,  388 => 136,  384 => 135,  376 => 132,  373 => 131,  354 => 130,  342 => 127,  338 => 125,  329 => 123,  325 => 122,  316 => 116,  308 => 111,  304 => 109,  298 => 105,  296 => 104,  292 => 102,  279 => 101,  264 => 96,  259 => 95,  246 => 94,  232 => 90,  229 => 89,  220 => 84,  213 => 80,  204 => 74,  197 => 70,  188 => 64,  181 => 60,  170 => 52,  162 => 47,  158 => 45,  156 => 44,  153 => 43,  146 => 40,  140 => 38,  137 => 37,  134 => 36,  121 => 35,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
        #collector-content .sf-serializer .sf-serializer-compact-list {
            line-height: 80%;
            margin-top: 10px;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? \x27disabled\x27 }}\">
        <span class=\"icon\" aria-hidden=\"true\">{{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {% for serializer in collector.serializerNames %}
                    {{ _self.render_serializer_tab(collector, serializer) }}
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serializer_tab(collector, serializer) %}
    <div class=\"tab\">
        <h3 class=\"tab-title\">{{ serializer }} <span class=\"badge\">{{ collector.handledCount(serializer) }}</span></h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                {{ _self.render_serialize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_serialize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_normalize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_normalize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_encode_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_encode_tab(collector.data(serializer), false, serializer) }}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro render_serialize_tab(collectorData, serialize, serializer) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? \x27serialize\x27 : \x27deserialize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ serialize ? \x27serialize\x27 : \x27deserialize\x27 }} <span class=\"badge\">{{ data|length }}</span></h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? \x27serialized\x27 : \x27deserialized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method, serializer) %}
    {% if item.caller is defined %}
        {% set trace_id = \x27sf-trace-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\">{{ caller.line }}</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"{{ trace_id }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    \x27#DD0000\x27: \x27var(--highlight-string)\x27,
                    \x27#007700\x27: \x27var(--highlight-keyword)\x27,
                    \x27#0000BB\x27: \x27var(--highlight-default)\x27,
                    \x27#FF8000\x27: \x27var(--highlight-comment)\x27,
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize, serializer) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? \x27normalize\x27 : \x27denormalize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ normalize ? \x27normalize\x27 : \x27denormalize\x27 }} <span class=\"badge\">{{ data|length }}</span></h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? \x27normalized\x27 : \x27denormalized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode, serializer) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? \x27encode\x27 : \x27decode\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ encode ? \x27encode\x27 : \x27decode\x27 }} <span class=\"badge\">{{ data|length }}</span></h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? \x27encoded\x27 : \x27decoded\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method, serializer) %}
    {% set data_id = \x27data-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method, serializer) %}
    {% set context_id = \x27context-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</span>
    {% endif %}

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method, serializer) %}
    {% set nested_normalizers_id = \x27nested-normalizers-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ \x27%.2f\x27|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small sf-serializer-compact-list\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ \x27%.2f\x27|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method, serializer) %}
    {% set nested_encoders_id = \x27nested-encoders-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ \x27%.2f\x27|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small sf-serializer-compact-list\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ \x27%.2f\x27|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ \x27%.2f\x27|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "/home/antoine/projects/echo/echo-api/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
