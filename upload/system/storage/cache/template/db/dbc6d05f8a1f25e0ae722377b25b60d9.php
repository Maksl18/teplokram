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

/* upgrade/upgrade.twig */
class __TwigTemplate_ea7d5f85baeaac78916a39c6885d4f3b extends Template
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
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">1<small>/2</small></h1>
        <h3>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "<br/>
          <small>";
        // line 8
        yield ($context["text_upgrade"] ?? null);
        yield "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  <div class=\"row\">
    <div class=\"col-sm-9\">
      <h3>";
        // line 17
        yield ($context["text_server"] ?? null);
        yield "</h3>
      <fieldset>
        <ol>
          <li>";
        // line 20
        yield ($context["text_error"] ?? null);
        yield "</li>
          <li>";
        // line 21
        yield ($context["text_clear"] ?? null);
        yield "</li>
          <li>";
        // line 22
        yield ($context["text_admin"] ?? null);
        yield "</li>
          <li>";
        // line 23
        yield ($context["text_user"] ?? null);
        yield "</li>
          <li>";
        // line 24
        yield ($context["text_setting"] ?? null);
        yield "</li>
          <li>";
        // line 25
        yield ($context["text_store"] ?? null);
        yield "</li>
        </ol>
      </fieldset>
      <h3>";
        // line 28
        yield ($context["text_steps"] ?? null);
        yield "</h3>
      <fieldset>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 31
        yield ($context["entry_progress"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <div class=\"progress\">
              <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
            </div>
            <div id=\"progress-text\"></div>
          </div>
        </div>
      </fieldset>
      <div class=\"buttons\">
        <div class=\"text-right\">
          <input type=\"submit\" value=\"";
        // line 42
        yield ($context["button_continue"] ?? null);
        yield "\" id=\"button-continue\" class=\"btn btn-primary\" />
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">";
        // line 46
        yield ($context["column_left"] ?? null);
        yield "</div>
  </div>
  <script type=\"text/javascript\"><!--
var step = 0;

\$('#button-continue').on('click', function() {
\t\$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
\t\$('#progress-text').html('');
\t\$('#button-continue').prop('disabled', true).before('<i class=\"fa fa-spinner fa-spin\"></i> ');

\tstart('index.php?route=upgrade/upgrade/next');
});

function start(url) {
\tsetTimeout(function(){
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\t\$('#button-continue').prop('disabled', false);
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\t\$('#progress-bar').css('width', ((step / ";
        // line 76
        yield ($context["total"] ?? null);
        yield ") * 100) + '%');
\t\t\t\t}

\t\t\t\tif (json['next']) {
\t\t\t\t\tstart(json['next']);
\t\t\t\t} else if (!json['error']) {
\t\t\t\t\t\$('#button-continue').replaceWith('<a href=\"";
        // line 82
        yield ($context["store"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a>');
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t}

\t\t\t\tstep++;
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + (thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText) + '</div>');
\t\t\t\t\$('#button-continue').prop('disabled', false);
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t}
\t\t});
\t}, 1000);
}
//--></script></div>
";
        // line 98
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "upgrade/upgrade.twig";
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
        return array (  189 => 98,  168 => 82,  159 => 76,  126 => 46,  119 => 42,  105 => 31,  99 => 28,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  67 => 17,  55 => 8,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "upgrade/upgrade.twig", "");
    }
}
