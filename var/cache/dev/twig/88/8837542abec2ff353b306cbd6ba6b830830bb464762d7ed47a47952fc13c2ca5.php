<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3da520a58d12d0551e27ccb96b487f0b72fc4ad199fe92ffe95cd0252b79546c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a5419f5a54258a63fbf9300f7ee92744f886d51272e3c2b4f0284fd88d9874b = $this->env->getExtension("native_profiler");
        $__internal_5a5419f5a54258a63fbf9300f7ee92744f886d51272e3c2b4f0284fd88d9874b->enter($__internal_5a5419f5a54258a63fbf9300f7ee92744f886d51272e3c2b4f0284fd88d9874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5a5419f5a54258a63fbf9300f7ee92744f886d51272e3c2b4f0284fd88d9874b->leave($__internal_5a5419f5a54258a63fbf9300f7ee92744f886d51272e3c2b4f0284fd88d9874b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
