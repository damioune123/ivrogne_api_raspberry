<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ae7742cae15bb0fdc86cae7923ca92da8b0ef087e5dac0cb5203c878277d0e60 extends Twig_Template
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
        $__internal_ddd57f960554868e3362e8ab9685c9269d85afe09b1b8f19b6e4a740ee264f85 = $this->env->getExtension("native_profiler");
        $__internal_ddd57f960554868e3362e8ab9685c9269d85afe09b1b8f19b6e4a740ee264f85->enter($__internal_ddd57f960554868e3362e8ab9685c9269d85afe09b1b8f19b6e4a740ee264f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ddd57f960554868e3362e8ab9685c9269d85afe09b1b8f19b6e4a740ee264f85->leave($__internal_ddd57f960554868e3362e8ab9685c9269d85afe09b1b8f19b6e4a740ee264f85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
