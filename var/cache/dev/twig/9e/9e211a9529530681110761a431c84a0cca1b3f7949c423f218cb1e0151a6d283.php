<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c7f49fc6556dc6dcfc162f491f4337f9d0213c227b4515181b789754276c93d4 extends Twig_Template
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
        $__internal_7755b196ae429f9b19a8e8f946d53dd35a8ff3d02800ad661eae94f37e67ba24 = $this->env->getExtension("native_profiler");
        $__internal_7755b196ae429f9b19a8e8f946d53dd35a8ff3d02800ad661eae94f37e67ba24->enter($__internal_7755b196ae429f9b19a8e8f946d53dd35a8ff3d02800ad661eae94f37e67ba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7755b196ae429f9b19a8e8f946d53dd35a8ff3d02800ad661eae94f37e67ba24->leave($__internal_7755b196ae429f9b19a8e8f946d53dd35a8ff3d02800ad661eae94f37e67ba24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
